<?php

	$this->renderAdminForm(
		'FestivalSponsorModel',
		[
			[
				'name' => 'festival_sponsor_name',
				'label' => 'Název',
				'type' => 'text'
			],
			[
				'name' => 'festival_sponsor_active',
				'label' => 'Active',
				'type' => 'bool',
				'value' => 1
			],
            [
                'name' => 'festival_sponsor_sorting_weight',
                'label' => 'Řazení',
                'type' => 'integer',
                'value' => 0
            ],
            [
                'name' => 'festival_sponsor_image',
                'label' => 'Image',
                'type' => 'image'
            ],
			[
				'name' => 'festival_sponsor_link',
				'label' => 'URL',
				'type' => 'text'
			],
		],
		null, //before update
		null, //after update
		null, //before delete
		null //after delete
	);
