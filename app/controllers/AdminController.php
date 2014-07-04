<?php

class AdminController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Dates Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{

        
		return View::make('admin.admin', array(
			
		));
	}
	
	public function getGalleries()
	{
        $galleries = ImageGallery::all();
		
		$data = Input::all();

		if($data && isset($data['id'])){
			$selectedGallery = ImageGallery::find($data['id']);
			
			$imageGalleriesImages = ImageGalleryImage::where('image_gallery_id', '=', $data['id'])->get();
		
		}
		else{
			$selectedGallery = false;
			$imageGalleriesImages = false;
		}
		
		return View::make('admin.galleries', array(
				'galleries' => $galleries,
				'selectedGallery' => $selectedGallery,
				'images' => $imageGalleriesImages,
		));
	}
	
	public function getImages()
	{
        $images = Image::all();
		
		return View::make('admin.images', array(
				'images' => $images,
		));
	}
	
	public function getUploadImage(){
		$data = Input::all();

		$rules = array(
			'image' => 'required|image',
		);
		
		$validator = Validator::make($data, $rules);
		
		if($validator->passes()){
			$file = Input::file('image');
			$originalFilename = $file->getClientOriginalName();
			$applicationFilename = time() . "_" . $originalFilename;
			
			$publicFolder = public_path();
			
			$imagesFolder = Config::get('app.imagesFolder');
			
			$destinationFolder = $publicFolder . $imagesFolder;
			
			$uploadSuccess = $file->move($destinationFolder, $applicationFilename);

			if($uploadSuccess){
				//$image = new Image();
				//$image->filename = $applicationFilename;
				
				$this->createThumbnailImage($applicationFilename, $destinationFolder);
				
				return Redirect::to('/admin/images')->with('uploadMessage', 'File uploaded OK');
			}
			else{
				return Redirect::to('/admin/images')->with('uploadMessage', 'Could not upload file');
			}
		}
		
		else{
			$errors = $validator->messages();
			return Redirect::to('/admin/images')->withErrors($validator);
		}
	}
	
	protected function createThumbnailImage($applicationFilename, $originalFolder){
		$publicFolder = public_path();
		$thumbsFolder = Config::get('app.thumbnailsFolder');	
		$destinationFolder = $publicFolder . $thumbsFolder;
		
		$fullImagePath = $originalFolder . $applicationFilename;
		$thumbnailPath = $destinationFolder . "thumb_ " . $applicationFilename;
		
		$size = getimagesize($fullImagePath);
		$width = $size[0];
		$height = $size[1];
		
		$ratio = $height / $width;
		
		$thumbnailWidth = Config::get('app.thumbnailWidth');
		$thumbnailHeight = $thumbnailWidth * $ratio;
		
		$thumbnail = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);
		$original = imagecreatefromjpeg($fullImagePath);
		
		imagecopyresized($thumbnail, $original, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $width, $height);
		
		//imagepng($thumbnail, $thumbnailPath, 9);
		imagejpeg($thumbnail, $thumbnailPath, 60);
						
		imagedestroy($thumbnail);
	}
}
