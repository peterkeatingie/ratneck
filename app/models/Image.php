<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Image extends Eloquent{
    
    protected $thumbnail;
    
    public function __construct(){
        $this->thumbnail = new Thumbnail();
    }
    
    public function setThumbnail($thumbnail){
        $this->thumbnail = $thumbnail;
    }
    
    public function getThumbnail(){
        return $this->thumbnail->find($this->thumbnail_id);        
    }
}