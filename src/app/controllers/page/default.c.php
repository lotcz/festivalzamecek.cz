<?php

    $this->setData('sponsors', $this->z->festival->loadActiveSponsors());
	$this->setData('stages', $this->z->festival->loadActiveStages());

    $all_artists = $this->z->festival->loadActiveArtists();

    $artists_program = array_filter($all_artists, function($a) { return $a->val('festival_artist_show_in_program');});
    $this->setData('artists_program', $artists_program);

    $artists_details = array_filter($all_artists, function($a) { return $a->val('festival_artist_show_in_details');});
    usort(
        $artists_details,
            function($a, $b) { return $a->val('festival_artist_sorting_weight') < $b->val('festival_artist_sorting_weight') ? -1 : 1;}
    );
    $this->setData('artists_details', $artists_details);

	$sponsors = $this->z->festival->loadActiveSponsors();
