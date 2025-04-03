<?php

	/*
		MODE

		fit (default value) - image will preserve aspect and always be the same or smaller than given size
		crop - image will be cropped to be exactly the given size
		scale - scale to new format without preserving aspect
	*/

	return [
		// available formats for image resizing
		'formats' => [
			'mini' => ['width' => 75, 'height' => 50 ],
			'thumb' => ['width' => 150, 'height' => 100, 'mode' => 'crop'],
			'view' => ['width' => 1200, 'height' => 800 ]
		],

		// absolute path to disk where all images are stored, include trailing slash
		'images_disk_path' => 'C:\\develop\\z\\festivalzamecek.cz\\src\\public\\uploaded_images\\',

		// base url for images src, no trailing slash
		'images_url' => 'http://festivalzamecek.loc/uploaded_images',

		'no_image' => 'no-image.jpg',

		'image_not_found' => 'image-not-found.jpg',
	];
