<?php

class SiteItem extends Eloquent
{
	public static function getFeaturedItem(){
	
            $callingClass = get_called_class();

            $item = $callingClass::where('featured', '=', 1);
            $item->orderBy('created_at', 'desc');
            $item->take(1);

            return $item->get()->first();
	}
	
	public static function getHomePageItems($limit = false){

            $callingClass = get_called_class();

            $item = $callingClass::where('home_page', 1);
            $item->orderBy('created_at', 'desc');

            if($limit){
                $item->take($limit);
            }

            return $item->get();
	}
        
        public static function allByDateDesc(){
            $callingClass = get_called_class();

            $item = $callingClass::orderBy('created_at', 'desc');
            
            return $item->get();
        }
        
        public static function getBySlug($slug){
            $callingClass = get_called_class();
            
            $item = $callingClass::where('slug', $slug);
            $item->orderBy('created_at', 'desc');
            
            $item->take(1);

            return $item->get()->first();
        }
}

?>