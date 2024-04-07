<?php

	require_once __DIR__ . '/../models/festival-stage.m.php';
    require_once __DIR__ . '/../models/festival-artist.m.php';
    require_once __DIR__ . '/../models/festival-sponsor.m.php';

	class festivalModule extends zModule {

		public function loadPricelist() {
			return $this->groupCosmeticServices(
				$pricelist = CosmeticServiceModel::select(
					$this->z->db,
					'viewCosmeticServices',
					'cosmetic_service_category_is_in_pricelist = 1 and cosmetic_service_is_in_pricelist = 1',
					'cosmetic_service_category_sorting_weight, cosmetic_service_category_name, cosmetic_service_sorting_weight, cosmetic_service_name'
				)
			);
		}

	}
