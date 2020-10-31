<?php
$title = $anime['attributes']['canonicalTitle'];
$poster = $anime['attributes']['posterImage']['original'];
$titleJP = $anime['attributes']['titles']['ja_jp'];
$episode = $anime['attributes']['episodeCount'];
$length = $anime['attributes']['episodeLength'];
$tipe = $anime['attributes']['subtype'];
$status = $anime['attributes']['status'];
?>

<div class="container pt-4 base-container">
	<div class="row justify-content-center">
		<div class="col-md-10 text-center">
			<h1 class="mt-4" id="anime-title"><?= $title ?></h1>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-4 text-center mt-3">
					<img src="<?= $poster ?>" alt="Gambar" width="100%">
				</div>
				<div class="col-md-8 mt-3">
					<table cellspacing="0" cellpadding="0">
						<tr>
							<td>
								<p class="anime-detail">Jepang</p>
							</td>
							<td>
								<p class="anime-detail pl-3"><?= $titleJP ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="anime-detail">Tipe</p>
							</td>
							<td>
								<p class="anime-detail pl-3"><?= $anime['type'] ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="anime-detail">Sub Tipe</p>
							</td>
							<td>
								<p class="anime-detail pl-3"><?= $tipe ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="anime-detail">Status</p>
							</td>
							<td>
								<p class="anime-detail pl-3"><?= $status ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="anime-detail">Genre</p>
							</td>
							<td>
								<p class="anime-detail pl-3"><?= $genre ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="anime-detail">Total Episode</p>
							</td>
							<td>
								<p class="anime-detail pl-3"><?= $episode ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="anime-detail">Durasi</p>
							</td>
							<td>
								<p class="anime-detail pl-3"><?= $length ?> Menit</p>
							</td>
						</tr>
					</table>
					<p class="anime-synopsis mt-4">
						<?= nl2br($anime['attributes']['synopsis']) ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
