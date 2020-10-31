<?php
load_model('home');
function index(){
	$data = [
		'title' => 'Cari Anime'
	];

	load_view('templates/header', $data);
	load_view('home/index', $data);
	load_view('templates/footer', $data);
}
