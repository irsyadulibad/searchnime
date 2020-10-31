<?php
load_model('api');

function get_anime(){
	$name = input_post('name', true);

	if(strlen($name) < 2){
		echo json_encode([
			'status' => 'error',
			'msg' => 'Mohon masukkan nama anime dengan benar'
		]);
	}else{
		$res = search_anime($name);
		
		if(!$res['status']){
			echo json_encode([
				'status' => 'error',
				'msg' => $res['msg']
			]);
		}else{
			echo json_encode([
				'status' => 'success',
				'animes' => $res['animes']
			]);
		}

	}
}
