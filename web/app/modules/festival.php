<?php

	require_once __DIR__ . '/../models/festival-stage.m.php';
    require_once __DIR__ . '/../models/festival-artist.m.php';
    require_once __DIR__ . '/../models/festival-sponsor.m.php';

	class festivalModule extends zModule {

		public function loadActiveStages() {
			return FestivalStageModel::select(
                $this->z->db,
                'festival_stage',
                'festival_stage_active = 1',
                'festival_stage_sorting_weight asc'
            );
		}

        public function loadActiveArtists() {
            return FestivalArtistModel::select(
                $this->z->db,
                'viewFestivalArtists',
                'festival_artist_active = 1',
                'festival_artist_program_sorting_weight asc, festival_artist_program_time asc'
            );
        }

        public function loadActiveSponsors() {
            return FestivalSponsorModel::select(
                $this->z->db,
                'festival_sponsor',
                'festival_sponsor_active = 1',
                'festival_sponsor_sorting_weight asc'
            );
        }

	}
