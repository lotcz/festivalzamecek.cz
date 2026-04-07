<div id="wrapper">
	<div class="inner">
		<header>
			<p class="secondary-text pretext">
				<small>Pod záštitou města Roztoky a Středočeského kraje pořádá spolek RR a Středočeské muzeum</small>
			</p>

			<p class="primary-text">
				16. ročník festivalu
			</p>

			<div class="title-image">
				<h1 class="invisible"><?= $this->getFullPageTitle() ?></h1>
				<img src="img/title.png" />
			</div>

			<div class="announce">
				16.5.2026
				<small class="secondary-text">
					začátek ve 12:30
				</small>
			</div>

			<div class="primary-text">
				ve Středočeském muzeu v Roztokách u Prahy
			</div>

			<div class="promo-video">
				<div class="video-container">
					<iframe
						width="240"
						height="426"
						src="https://www.youtube.com/embed/yoxt8W5xczc"
						title="Přípravy na festival Zámeček 2026"
						frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
						referrerpolicy="strict-origin-when-cross-origin"
						allowfullscreen
					></iframe>
				</div>
			</div>

		</header>

		<h2 class="section-header">Program</h2>

		<section id="program">
			<?php
			if (empty($artists_program)) {
				?>
				<p>Program letošního ročníku uveřejníme již brzy.</p>
				<?php
			} else {
				foreach ($stages as $stage) {
					?>
					<h3>
						<?php
						echo $stage->val('festival_stage_name');
						if (strlen($stage->val('festival_stage_place')) > 0) {
							echo " - ";
							echo $stage->val('festival_stage_place');
						}
						?>
					</h3>

					<ul>
						<?php
						foreach ($artists_program as $artist) {
							if (!($artist->ival('festival_artist_stage_id') == $stage->ival('festival_stage_id'))) {
								continue;
							}

							?>
							<li>
								<div class="program-item"
									 id="<?= z::slugify($artist->val('festival_artist_name')) ?>-program">
									<div class="program-time"><?= $artist->val('festival_artist_program_time') ?></div>
									<div class="program-name">
										<div class="band-name">
											<?php
											if ($artist->val('festival_artist_show_in_details')) {
												?>
												<a href="#<?= z::slugify($artist->val('festival_artist_name')) ?>-detail">
													<?= $artist->val('festival_artist_name') ?>
												</a>
												<?php
											} else {
												echo $artist->val('festival_artist_name');
											}
											?>
										</div>

										<?php
										if (!empty($artist->val('festival_artist_secondary_name'))) {
											?>
											<div
												class="band-genre"><?= $artist->val('festival_artist_secondary_name') ?></div>
											<?php
										}
										?>
									</div
								</div>
							</li>
							<?php
						}
						?>
					</ul>
					<?php
				}
			}
			?>
		</section>

		<h2 class="section-header">Vstupné</h2>

		<section id="program">
			<p>
				Vstupné na festival je dobrovolné.
			</p>
			<p>
				Budeme rádi, když nás podpoříte koupí památeční placky.
			</p>
		</section>

		<?php

		if (!empty($artists_details)) {
			?>
			<h2 class="section-header">Účinkující</h2>
			<section id="artists" class="bands">
				<?php
				foreach ($artists_details as $artist) {
					?>
					<div class="band" id="<?= z::slugify($artist->val('festival_artist_name')) ?>-detail">
						<div class="band-name">
							<?= $artist->val('festival_artist_name') ?>
							<?php
							if ($artist->val('festival_artist_secondary_name')) {
								?>
								<div class="secondary-text"><?= $artist->val('festival_artist_secondary_name') ?></div>
								<?php
							}
							?>
						</div>
						<?php
						if ($artist->val('festival_artist_show_in_program')) {
							?>
							<div class="band-program-link">
								<a href="#<?= z::slugify($artist->val('festival_artist_name')) ?>-program">
									<?= $artist->val('festival_artist_program_time') ?>
									<?= $artist->val('festival_stage_place') ?>
								</a>
							</div>
							<?php
						}
						?>
						<div class="band-img">
							<?php
							$this->z->images->renderImage($artist->val('festival_artist_image'), 'thumb');
							?>
							<div class="social">
								<?php
								if (!empty($artist->val('festival_artist_link_youtube'))) {
									?>
									<a class="yt" href="<?= $artist->val('festival_artist_link_youtube') ?>"
									   target="_blank" title="YouTube">&nbsp;</a>
									<?php
								}
								if (!empty($artist->val('festival_artist_link_instagram'))) {
									?>
									<a class="ig" href="<?= $artist->val('festival_artist_link_instagram') ?>"
									   target="_blank" title="Instagram">&nbsp;</a>
									<?php
								}
								if (!empty($artist->val('festival_artist_link_facebook'))) {
									?>
									<a class="fb" href="<?= $artist->val('festival_artist_link_facebook') ?>"
									   target="_blank" title="Facebook">&nbsp;</a>
									<?php
								}
								if (!empty($artist->val('festival_artist_link_web'))) {
									?>
									<a class="web" href="<?= $artist->val('festival_artist_link_web') ?>"
									   target="_blank" title="Web">&nbsp;</a>
									<?php
								}
								?>

							</div>
						</div>
						<div class="band-section">
							<div class="band-name">
								<?= $artist->val('festival_artist_name') ?>
								<?php
								if ($artist->val('festival_artist_secondary_name')) {
									?>
									<div
										class="secondary-text"><?= $artist->val('festival_artist_secondary_name') ?></div>
									<?php
								}
								?>
							</div>
							<?php
							if ($artist->val('festival_artist_show_in_program')) {
								?>
								<div class="band-program-link">
									<p>
										<a href="#<?= z::slugify($artist->val('festival_artist_name')) ?>-program">
											<?= $artist->val('festival_artist_program_time') ?>
											<?= $artist->val('festival_stage_place') ?>
										</a>
									</p>
								</div>
								<?php
							}
							?>
							<div class="band-description">
								<?= $artist->val('festival_artist_description') ?>
							</div>
						</div>
					</div>
					<?php
				}
				?>
			</section>
			<?php
		}

		?>

		<h2 class="section-header">Kontakt</h2>
		<section>
			<p>
				Napište nám na <a href="mailto:info@festivalzamecek.cz">info@festivalzamecek.cz</a>.
			</p>

			<p>
				Pokud chcete být v obraze o tom, co zrovna připravujeme, sledujte naši <a
					href="https://www.facebook.com/FestivalZamecek/" target="_blank">stránku na Facebooku</a>.
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

		<h2 class="section-header">O festivalu</h2>
		<section id="about-us" class="about-us">
			<p>
				Festival Zámeček je multižánrový hudební festival, který se koná v areálu
				zámeckého parku Středočeského muzea v Roztokách již od roku 2011.
			</p>
			<p>
				Na fotky z minulých ročníků se můžete podívat v naší
				<a href="http://galerie.festivalzamecek.cz">fotogalerii</a>.
			</p>
			<p>
				Pod záštitou města Roztoky a Středočeského kraje pořádá RR z.s. a Středočeské muzeum v Roztokách u Prahy.
			</p>
		</section>

		<section id="bottom">
			<div class="text-center">
				<p>
					<a href="https://www.kudyznudy.cz/?utm_source=kzn&utm_medium=partneri_kzn&utm_campaign=banner" title="Kudyznudy.cz – tipy na výlet"> <img src="https://www.kudyznudy.cz/App_Themes/KzN/CSS/Images/svg/new-logo.svg" width="150"  height="33" border="0" alt="Kudyznudy.cz – tipy na výlet"> </a>
				</p>
			</div>
			<a href="mailto:info@festivalzamecek.cz">info@festivalzamecek.cz</a>

		</section>
	</div>
</div>

<footer></footer>
<div class="bottom-overlay"></div>
