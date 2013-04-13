<?php

class Fb_ypbox_groups extends Fb_ypbox
{
	
	function getUserGroups($criteria=array()) {
		$id = $criteria['id'];
		$token = $criteria['token'];
		
		$data = parent::get_fb_api_results(array('object'=>$id, 'connection'=>'groups', 'token'=>$token));
		return $data;
	}

}

?>