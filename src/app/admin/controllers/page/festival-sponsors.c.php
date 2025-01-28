<?php

	$this->setPageTitle('Sponzoři');
	$this->renderAdminTable(
		'festival_sponsor',
		[
			[
				'name' => 'festival_sponsor_id',
				'label' => 'ID'
			],
            [
                'name' => 'festival_sponsor_sorting_weight',
                'label' => 'Weight'
            ],
            [
                'name' => 'festival_sponsor_name',
                'label' => 'Name'
            ]
		],
		'festival_sponsor',
		['festival_sponsor_id', 'festival_sponsor_sorting_weight', 'festival_sponsor_name'],
		'festival_sponsor_sorting_weight asc',
		['festival_sponsor_name']
	);
