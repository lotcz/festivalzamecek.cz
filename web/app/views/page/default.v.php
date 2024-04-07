<div id="wrapper">
	<div class="inner">
		<header>
			<div class="pretext white-text">
				Pod záštitou města Roztoky a Letiště Praha a.s. pořádá RR z.s. a Středočeské muzeum
			</div>

			<div class="announce white-text">
				14. ročník festivalu
			</div>

			<div class="title-image">
				<h1 class="invisible"><?=$this->getFullPageTitle()?></h1>
				<img src="img/title.png"/>
			</div>

			<div class="announce-date white-text">
				18.5.2024 od 13 hodin
			</div>

			<div class="announce-location white-text">
				ve Středočeském muzeu v Roztokách u Prahy
			</div>
		</header>

		<h2 class="section-header">Program</h2>

		<section id="program">

			<?php
				foreach ($stages as $stage) {
					?>
						<h3><?=$stage->val('festival_stage_name')?></h3>

						<ul>
                            <?php
								foreach ($artists_program as $artist) {
									if (!($artist->ival('festival_artist_stage_id') == $stage->ival('festival_stage_id'))) {
										continue;
                                    }

									?>
										<li>
											<time><?=$artist->val('festival_artist_program_time')?></time>
											<span class="band-name"><?=$artist->val('festival_artist_name')?></span>

											<?php
												if (!empty($artist->val('festival_artist_secondary_name'))) {
													?>
														<span class="band-genre"><?=$artist->val('festival_artist_secondary_name')?></span>
													<?php
												}
											?>
										</li>
									<?php
								}
							?>
						</ul>
					<?php
				}
			?>

		</section>

		<h2 class="section-header">Účinkující</h2>

		<section id="artists" class="bands">

			<?php
				foreach ($artists as $artist) {
					?>
						<div class="band">
							<div class="band-name"><?=$artist->val('festival_artist_name')?></div>
							<div class="band-img">
								<?php
									$this->z->images->renderImage($artist->val('festival_artist_image'), 'thumb');
								?>
								<div class="social">
                                    <?php
										if (!empty($artist->val('festival_artist_link_youtube'))) {
											?>
												<a class="yt" href="<?=$artist->val('festival_artist_link_youtube')?>" target="_blank" title="YouTube">&nbsp;</a>
											<?php
										}
										if (!empty($artist->val('festival_artist_link_instagram'))) {
											?>
												<a class="ig" href="<?=$artist->val('festival_artist_link_instagram')?>" target="_blank" title="Instagram">&nbsp;</a>
											<?php
										}
										if (!empty($artist->val('festival_artist_link_facebook'))) {
											?>
												<a class="fb" href="<?=$artist->val('festival_artist_link_facebook')?>" target="_blank" title="Facebook">&nbsp;</a>
											<?php
										}
										if (!empty($artist->val('festival_artist_link_web'))) {
											?>
												<a class="web" href="<?=$artist->val('festival_artist_link_web')?>" target="_blank" title="Web">&nbsp;</a>
											<?php
										}
                                    ?>

								</div>
							</div>
							<div class="band-section">
								<div class="band-name"><?=$artist->val('festival_artist_name')?></div>
								<div class="band-description">
									<?=$artist->val('festival_artist_description')?>
								</div>
							</div>
						</div>
					<?php
				}
			?>

		</section>

		<h2 class="section-header">Plakát</h2>
		<section>
			<div
				class="image align-center image-preview"
				data-src="https://galerie.festivalzamecek.cz/upload/2024/04/02/20240402224906-b1010c65.jpg">
				<div>
					<img src="https://galerie.festivalzamecek.cz/i.php?/upload/2024/04/02/20240402224906-b1010c65-sm.jpg" />
				</div>
				<div class="primary-text">Plakát festivalu pro letošní rok</div>
			</div>
		</section>

		<h2 class="section-header">Kontakt</h2>
		<section>
			<p>
				Napište nám na <a href="mailto:info@festivalzamecek.cz">info@festivalzamecek.cz</a>.
			</p>

			<p>
				Pokud chcete být v obraze o tom, co zrovna připravujeme, sledujte naši <a href="https://www.facebook.com/FestivalZamecek/" target="_blank">stránku na Facebooku</a>.
			</p>

			<p>Dramaturgie, booking kapel a stánkový prodej:</p>

			<div class="contact place-2-cols">
				<div class="col">
					<div class="name">Karel kropáček</div>
					<div class="primary-text">
						603 425 428
					</div>
					<div>
						<a href="mailto:k.kropacek@seznam.cz" target="_blank">k.kropacek@seznam.cz</a>
					</div>
				</div>
				<div class="col">
					<div class="name">Veronika Valdová</div>
					<div class="primary-text">
						608 923 960
					</div>
					<div>
						<a href="mailto:veve.badji@seznam.cz" target="_blank">veve.badji@seznam.cz</a>
					</div>
				</div>
			</div>

			<div class="contact">
				<p>Naše dvorní fotografka:</p>
				<div class="name">Adéla Vosičková</div>
				<div>
					<a href="https://adelavosickova.cz" target="_blank">www.adelavosickova.cz</a>
				</div>
			</div>

		</section>

		<h2 class="section-header">Historie festivalu</h2>
		<section id="about-us" class="about-us">
			<p>
				Festival Zámeček je multižánrový hudební festival, který se koná v areálu
				zámeckého parku Středočeského muzea v Roztokách již od roku 2011.
			</p>
			<p>
				Na fotky z minulých ročníků se můžete podívat v naší
				<a href="http://galerie.festivalzamecek.cz">fotogalerii</a>.
			</p>
		</section>

		<section id="bottom">
			<a href="mailto:info@festivalzamecek.cz">info@festivalzamecek.cz</a>
		</section>

	</div>
</div>

<footer>
	<div class="inner">
		<p>
			Pod záštitou města Roztoky a Letiště Praha a.s. pořádá RR z.s. a Středočeské muzeum v Roztokách u Prahy
		</p>
		<img class="sponsors" src="img/sponsors_2024.jpg" alt="sponzoři" />
		<div>
			<a
				href="https://www.kudyznudy.cz/?utm_source=kzn&utm_medium=partneri_kzn&utm_campaign=banner"
				title="Kudyznudy.cz - tipy na výlet"
				target="_blank"
			>
				<img
					src="https://s3.amazonaws.com/pro.brandkit.io/accounts/visitczechrepublic/asset_files/904402/prev_preview."
					style="width:125px;height:30px;margin:15px"
					alt="Kudyznudy.cz - tipy na výlet"
				/>
			</a>
			<a
				href="https://festivaly.eu"
				title="FESTIVALY.EU"
				target="_blank"
			>
				<img
					src="https://fstvls.s3.amazonaws.com/static/festivaly.png"
					alt="FESTIVALY.EU"
					style="width:76px;height:51px;margin:9px"
				/>
			</a>
			<a
				href="https://www.informuji.cz"
				title="Informuji.cz = Akce, Kultura a Výlety v ČR"
				target="_blank"
			>
				<img
					src="https://www.informuji.cz/img/logo1_small.png"
					alt="Informuji.cz = Akce, Kultura a Výlety v ČR"
					style="width:150px;height:42px;margin:9px"
				/>
			</a>
		</div>
	</div>
</footer>