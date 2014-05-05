<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ImageGallery extends Eloquent{
    
    protected $table = 'image_galleries';

    public function getImages(){
        $imageGalleriesImages = ImageGalleryImage::where('image_gallery_id', '=', $this->id)->get();
        
        $images = array();
        
        foreach($imageGalleriesImages as $imageGalleryImage){
            $images[] = $imageGalleryImage->getImage();
        }
        
        return $images;
    }
    
    public function hasImages(){
        
    }
}