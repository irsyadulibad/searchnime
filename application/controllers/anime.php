<?php
load_model('api');

function detail($id = null){
	if(is_null($id)) redirect('');
	$anime = get_detail_anime($id);
	if(!$anime['status']) redirect('');

	$data = [
		'title' => 'Detail',
		'anime' => $anime['data'],
		'genre' => get_genre_anime($id)
	];

	load_view('templates/header', $data);
	load_view('anime/index', $data);
	load_view('templates/footer', $data);
}
