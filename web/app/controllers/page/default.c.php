<?php

    $this->setData('sponsors', $this->z->festival->loadActiveSponsors());
	$this->setData('stages', $this->z->festival->loadActiveStages());

    $all_artists = $this->z->festival->loadActiveArtists();
    $artists_program = array_filter($all_artists, fn($a) => $a->val('festival_artist_show_in_program'));
    $artists_details = zModel::sort(
        array_filter($all_artists, fn($a) => $a->val('festival_artist_show_in_details')),
        'festival_artist_sorting_weight'
    );

    $this->setData('artists_program', $artists_program);
    $this->setData('artists_details', $artists_details);
