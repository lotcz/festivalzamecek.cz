<?php

	$this->setPageTitle('Vystupující');
	$this->renderAdminTable(
		'festival_artist',
		[
            [
                'name' => 'festival_artist_id',
                'label' => 'ID'
            ],
			[
				'name' => 'festival_artist_sorting_weight',
				'label' => 'Řazení'
			],
			[
				'name' => 'festival_artist_name',
				'label' => 'Name'
			],
			[
				'name' => 'festival_artist_active',
				'label' => 'Active',
				'type' => 'bool'
			]
		],
		'view_festival_artists',
		[],
		'festival_artist_sorting_weight asc',
		['cosmetic_service_category_name']
	);
