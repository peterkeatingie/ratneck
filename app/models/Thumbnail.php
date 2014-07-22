<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Thumbnail extends Eloquent{
    
	public static function createNew($imageFilename){
	
		// Get the folders for images and thumbs
		$imagesFolder = public_path() . Config::get('app.imagesFolder');
		$thumbsFolder = public_path() . Config::get('app.thumbnailsFolder');	
		
		// Path to original image
		$imagePath = $imagesFolder . $imageFilename;
		
		// Get the filename and extension
		$fileBasename = pathinfo($imageFilename, PATHINFO_FILENAME);
		$fileExtension = pathinfo($imageFilename, PATHINFO_EXTENSION);		
		
		// Do size calculation for thumbnail
		// We get the aspect ratio, get the width from config and calc the height
		$size = getimagesize($imagePath);
		$width = $size[0];
		$height = $size[1];
		$ratio = $height / $width;
		$thumbnailWidth = Config::get('app.thumbnailWidth');
		$thumbnailHeight = $thumbnailWidth * $ratio;
				
		// Use PHP GD library to create thumbnail and copy the original image
		if($fileExtension == "gif" || $fileExtension == "png"){
			$functionName = "imagecreatefrom$fileExtension";
			$image = $functionName($imagePath);
			$thumbnail = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);
			$background = imagecolorallocate($thumbnail, 0, 0, 0);
			imagecolortransparent($thumbnail, $background);
			imagealphablending($thumbnail, false);
			imagesavealpha($thumbnail, true);
			imagecopyresampled($thumbnail, $image, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $width, $height);
			$thumbnailFilename = $fileBasename . "_thumb.png";
			$thumbnailPath = $thumbsFolder . $thumbnailFilename;
			imagepng($thumbnail, $thumbnailPath, 9, PNG_ALL_FILTERS);
		}
		else{
			$image = imagecreatefromjpeg($imagePath);
			$thumbnail = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);
			imagecopyresampled($thumbnail, $image, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $width, $height);
			$thumbnailFilename = $fileBasename . "_thumb.jpg";
			$thumbnailPath = $thumbsFolder . $thumbnailFilename;
			imagejpeg($thumbnail, $thumbnailPath, 60);
		}
						
		imagedestroy($thumbnail);

		$thumbnailRecord = new self();
		
		$thumbnailRecord->filename = $thumbnailFilename;
		$thumbnailRecord->created_by = Auth::user()->id;
		$thumbnailRecord->save();
		
		return $thumbnailRecord->id;
	}
	
}