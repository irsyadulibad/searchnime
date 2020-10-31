const inputAnime = $('#input-anime-name');
const btnSearchAnime = $('#cari-anime-btn');
const searchListContainer = $('#search-list-content');

function insertCardList(el, animes){
	let html = `<p class="search-result-title">Hasil Pencarian <strong>"${inputAnime.val()}"</strong></p>`;
	$.each(animes, function(i, anime){
		html += `
			<a href="${baseUrl}anime/detail/${anime.id}" class="card card-list-anime mt-3">
				<div class="card-body p-0 row no-gutters">
					<div class="col-4">
						<div class="list-anime-img" style="background-image: url(${anime.poster});"></div>
					</div>
					<div class="col-8">
						<p class="list-anime-title">${anime.name}</p>
					</div>
				</div>
			</a>
		`;
	});

	el.html(html);
}

btnSearchAnime.on('click', function(){
	searchListContainer.html(`<p class="loader-text">Loading...</p>`);

	$.ajax({
		url: baseUrl + 'api/get_anime',
		method: 'post',
		data: {name: inputAnime.val()},
		dataType: 'json',
		success: function(data){
			if(data.status == 'error'){
				searchListContainer.html(`<div class="alert alert-danger">${data.msg}</div>`);
			}else{
				insertCardList(searchListContainer, data.animes);
			}
		},
		error: function(data){
			console.warn(data.responseText);
		}
	});
});
