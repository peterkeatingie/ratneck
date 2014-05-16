<?php

class SiteItem extends Eloquent
{
	public static function getFeaturedItem(){
	
		$callingClass = get_called_class();
		
		$item = $callingClass::where('featured', '=', 1);
		$item->orderBy('created_on', 'desc');
		$item->take(1);
		
		return $item->get()->first();
	}
	
	public static function getHomePageItems($limit = false){

		$callingClass = get_called_class();
		
		$item = new $callingClass();
		
		$item = $callingClass::where('home_page', 1);
		$item->orderBy('created_on', 'desc');
		
		if($limit){
			$item->take($limit);
		}
			
		return $item->get();
	}
}

?>