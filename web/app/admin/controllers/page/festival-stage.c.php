<?php

	$this->renderAdminForm(
		'FestivalStageModel',
		[
			[
				'name' => 'festival_stage_name',
				'label' => 'Název',
				'type' => 'text'
			],
			[
				'name' => 'festival_stage_active',
				'label' => 'Active',
				'type' => 'bool',
				'value' => 1
			],
            [
                'name' => 'festival_stage_sorting_weight',
                'label' => 'Řazení',
                'type' => 'integer',
                'value' => 0
            ],
		],
		null, //before update
		null, //after update
		null, //before delete
		null //after delete
	);
