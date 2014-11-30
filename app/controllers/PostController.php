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
	
	public function getIndex() {
		
	}
	
	public function getEdit() {
		$input = Input::all();
		
		$categories = PostCategory::all();
		
		$categoryFormOptions = array();
		
		foreach($categories as $category){
			$categoryFormOptions[$category->id] = $category->name;
		}
		
		if (isset($input['id'])) {
			$post = Post::find($input['id']);
			$imagesFolder = Config::get('app.imagesFolder');
			$thumbsFolder = Config::get('app.thumbnailsFolder');
			
			return View::make('post.edit', array(
				'post' => $post,
				'imagesFolder' => $imagesFolder,
				'thumbsFolder' => $thumbsFolder,
				'categoryFormOptions' => $categoryFormOptions,
			));
		
		} else {
			$posts = Post::all();
		
			return View::make('post.edit', array(
				'posts' => $posts,
			));
		}
	}

	public function getNew()
	{
		echo "hi";
	
	
		return View::make('post.new', array(
			
			));
	}
	
	public function save(){
		$data = Input::all();

		$postId = isset($data['id']) ? $data['id'] : false;

		$rules = array(
			'image' => 'image' . ($postId ? null : '|required'),
			'title' => 'required',
			'description' => 'required',
			'category' => 'required',
			'content' => 'required|max:400',
		);
		
		$validator = Validator::make($data, $rules);
		
		if($validator->passes()){
		
			if ($postId) {
				$post = Post::find($postId);
			} else {
				$post = new Post();
			}
			
			if ($file = Input::file('image')) {

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
					
					$post->image_id = $image->id;
				}
			}
	
			$post->title = $data['title'];
			$post->content = $data['content'];
			$post->created_by = Auth::user()->id;
			$post->post_category_id = empty($data['category']) ? 1 : $data['category'];
			$post->home_page = isset($data['homepage']) ? 1 : 0;
			$post->featured = isset($data['featured']) ? 1 : 0;
			$post->slug = Str::slug($post->title);
			$post->save();
				
			return Redirect::to("/post/edit?id=$post->id")->with('saveMessage', "Post saved OK. Post ID: $post->id");
		}
		
		else{
			$errors = $validator->messages();
			
			if ($postId) {
				return Redirect::to("/post/edit?id=$postId")->withErrors($validator);
			} else {
				return Redirect::to("/post/new")->withErrors($validator);
			}
		}
	}

}
