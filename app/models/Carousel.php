<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Carousel extends Eloquent{
    
    protected $table = 'carousel';
    
    public static function getRandom(){
        $count = self::count();
        $id = mt_rand(1, $count);
        $carousel = self::find($id);
        
        return Image::find($carousel->image_id);
    }
}