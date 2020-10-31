<?php

function search_anime($name, $limit = 5, $offset = 0){
	$name = urlencode($name);
	$url = "https://kitsu.io/api/edge/anime?filter[text]=$name&page[limit]=$limit&page[offset]=$offset";
	$data = [];
	$result = @file_get_contents($url);

	if(!$result){
		return [
			'status' => false,
			'msg' => 'Tidak dapat menemukan konten'
		];
	}

	$animes = json_decode($result, true)['data'];
	foreach($animes as $anime){
		$data[] = [
			'id' => $anime['id'],
			'name' => $anime['attributes']['canonicalTitle'],
			'poster' => $anime['attributes']['posterImage']['small']
		];
	}

	return [
		'status' => true,
		'animes' => $data
	];
}

function get_detail_anime($id){
	$url = "https://kitsu.io/api/edge/anime/$id";
	$result = @file_get_contents($url);

	if(!$result){
		return [
			'status' => false,
			'msg' => 'Tidak dapat menemukan konten'
		];
	}

	return [
		'status' => true,
		'data' => json_decode($result, true)['data']
	];
}

function get_genre_anime($id){
	$url = "https://kitsu.io/api/edge/anime/$id/genres";
	$result = @file_get_contents($url);
	$word = '';

	if(!$result) return 'Unknown';

	$genres = json_decode($result, true)['data'];
	foreach($genres as $genre){
		$word .= $genre['attributes']['name'] . ', ';
	}

	return $word;
}
