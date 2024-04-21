<?php

    $this->z->enableModule('tinymce');

    $onAfterUpdate = function($z, $form, $data, $oldData) {
        if ($oldData->val('festival_artist_image') !== $data->val('festival_artist_image')) {
            $this->z->images->deleteImage($oldData->val('festival_artist_image'));
        }
    };

    $onBeforeDelete = function($z, $form, $id) {
        $artist = new FestivalArtistModel($z->db, $id);
        $form->image_path = $artist->val('festival_artist_image');
    };

    $onAfterDelete = function($z, $form, $id) {
        $this->z->images->deleteImage($form->image_path);
    };

	$this->renderAdminForm(
		'FestivalArtistModel',
		[
			[
				'name' => 'festival_artist_name',
				'label' => 'Název',
				'type' => 'text'
			],
            [
                'name' => 'festival_artist_active',
                'label' => 'Active',
                'type' => 'bool',
                'value' => 1
            ],
            [
                'name' => 'festival_artist_secondary_name',
                'label' => 'Žánr nebo název představení',
                'type' => 'text'
            ],
            [
                'name' => 'festival_artist_stage_id',
                'label' => 'Scéna',
                'type' => 'select',
                'select_table' => 'festival_stage',
                'select_data' => FestivalStageModel::all($this->z->db),
                'select_id_field' => 'festival_stage_id',
                'select_label_field' => 'festival_stage_name'
            ],
			[
				'name' => 'festival_artist_sorting_weight',
				'label' => 'Řazení',
				'type' => 'integer',
				'value' => 0
			],
            [
                'name' => 'festival_artist_image',
                'label' => 'Image',
                'type' => 'image'
            ],
            [
                'name' => 'festival_artist_description',
                'label' => 'Description',
                'type' => 'tinymce'
            ],
            [
                'name' => 'festival_artist_link_youtube',
                'label' => 'YouTube',
                'type' => 'text'
            ],
            [
                'name' => 'festival_artist_link_instagram',
                'label' => 'Instagram',
                'type' => 'text'
            ],
            [
                'name' => 'festival_artist_link_facebook',
                'label' => 'Facebook',
                'type' => 'text'
            ],
            [
                'name' => 'festival_artist_link_web',
                'label' => 'Web',
                'type' => 'text'
            ],
			[
				'name' => 'festival_artist_show_in_program',
				'label' => 'Zobrazit v programu',
				'type' => 'bool',
				'value' => 1
			],
            [
                'name' => 'festival_artist_program_time',
                'label' => 'Čas v programu',
                'type' => 'text'
            ],
            [
                'name' => 'festival_artist_program_sorting_weight',
                'label' => 'Řazení v programu',
                'type' => 'integer',
                'value' => 0
            ],
            [
                'name' => 'festival_artist_sorting_weight',
                'label' => 'Řazení',
                'type' => 'integer',
                'value' => 0
            ],
			[
				'name' => 'festival_artist_show_in_details',
				'label' => 'Zobrazit v popisech',
				'type' => 'bool',
				'value' => 1
			],
			[
				'name' => 'festival_artist_show_in_other',
				'label' => 'Zobrazit v další',
				'type' => 'bool',
				'value' => 0
			]
		],
		null,
		$onAfterUpdate,
		$onBeforeDelete,
		$onAfterDelete
	);
