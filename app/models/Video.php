<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Video extends SiteItem{

	public function getYoutubeVideoId(){
		$videoId = end((explode('/', $this->location)));

		return $videoId;
	}
}