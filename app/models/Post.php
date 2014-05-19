<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Post extends SiteItem{
    
    protected $image;
    protected $postCategory;
    
    public function __construct(){
        $this->image = new Image();
        $this->postCategory = new PostCategory();
    }
    
    public function setImage($image){
        $this->image = $image;
    }
    
    public function getImage(){
        return $this->image->find($this->image_id);
    }
    
    public function getPostCategory(){
        return $this->postCategory->find($this->post_category_id);
    }
}