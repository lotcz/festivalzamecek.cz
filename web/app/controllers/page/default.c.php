<?php

    $this->setData('sponsors', $this->z->festival->loadActiveSponsors());
	$this->setData('stages', $this->z->festival->loadActiveStages());

    $artists = $this->z->festival->loadActiveArtists();
    $artists_program = zModel::sort(
        array_filter($artists, fn($a) => $a->val('festival_artist_show_in_program')),
        'festival_artist_program_sorting_weight'
    );

    $this->setData('artists', $artists);
    $this->setData('artists_program', $artists_program);
