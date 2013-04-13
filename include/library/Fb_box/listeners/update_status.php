<?php
$user_id = $_POST['user_id'];
$token = $_POST['token'];
$message = $_POST['message'];
$link = $_POST['link'];
$image = $_POST['image'];

if($user_id!='' && $token!='') {
	$f1 = new Fb_ypbox();
	$result = $f1->updateFacebookStatus(array('fb_id'=>$user_id, 'message'=>$message, 'link'=>$link, 'picture'=>$image), $token);
	$result = json_decode($result, true);
	if($result['id']!='') {
		$data['success'] = '1';
		$data['id'] = $result['id'];
	}
	else {
		$data['success'] = '0';
		$data['message'] = $result['error']['message'];
	}
	
	$data = json_encode($data);
	echo $data;
}

?>