<?php

class PostController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Post Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getNew()
	{
		echo "hi";
	
	
		return View::make('post.new', array(
			
			));
	}
	
	public function getUploadNew(){
		$data = Input::all();
	
		$rules = array(
			'image' => 'required|image',
			'title' => 'required',
			'content' => 'required|max:255',
		);
		
		$validator = Validator::make($data, $rules);
		
		if($validator->passes()){
			$file = Input::file('image');
			$originalFilename = $file->getClientOriginalName();

			$fileBasename = pathinfo($originalFilename, PATHINFO_FILENAME);
			$fileExtension = pathinfo($originalFilename, PATHINFO_EXTENSION);
			
			$applicationFilename = $fileBasename . "_" . time() . "." . $fileExtension;

			$publicFolder = public_path();
			
			$imagesFolder = Config::get('app.imagesFolder');
			
			$destinationFolder = $publicFolder . $imagesFolder;
			
			$uploadSuccess = $file->move($destinationFolder, $applicationFilename);
			
			if($uploadSuccess){
				
				$thumbnailId = Thumbnail::createNew($applicationFilename);
				
				$image = new Image();
				$image->filename = $applicationFilename;
				$image->thumbnail_id = $thumbnailId;
				$image->created_by = Auth::user()->id;
				$image->description = $data['description'];
				$image->save();

				$post = new Post();
				$post->title = $data['title'];
				$post->content = $data['content'];
				$post->image_id = $image->id;
				$post->created_by = Auth::user()->id;
				$post->post_category_id = 1;
				$post->home_page = 0;
				$post->featured = 0;
				$post->slug = 'abc';
				$post->save();
				
				return Redirect::to('/admin/posts')->with('uploadMessage', 'Post added OK');
			}
			else{
				return Redirect::to('/admin/posts')->with('uploadMessage', 'Could not add post');
			}
		}
		
		else{
			$errors = $validator->messages();
			return Redirect::to('/admin/posts')->withErrors($validator);
		}
	}

}
