<?php

	$this->setPageTitle('Scény');
	$this->renderAdminTable(
		'festival_stage',
		[
			[
				'name' => 'festival_stage_id',
				'label' => 'ID'
			],
            [
                'name' => 'festival_stage_sorting_weight',
                'label' => 'Weight'
            ],
            [
                'name' => 'festival_stage_name',
                'label' => 'Name'
            ],
            [
                'name' => 'festival_stage_active',
                'label' => 'Active',
                'type' => 'bool'
            ]
		],
		'festival_stage',
		['festival_stage_id', 'festival_stage_active', 'festival_stage_name', 'festival_stage_sorting_weight'],
		'festival_stage_sorting_weight asc',
		['festival_stage_name']
	);
