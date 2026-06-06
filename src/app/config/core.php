<?php

	return [

		// this is application version represented as real number in format: MAJOR.MINOR
		// MAJOR should be identical with GIT branch name, or like v1, v2, v3, etc.
		// MINOR versions are bugfixes and small improvements
		'app_version' => 6,

		// this is minimum required zEngine version
		'minimum_z_version' => 26,

		// modules that are enabled by default
		// available modules in zEngine/src/app/modules or current app/modules folders
		'default_modules' => ['resources', 'cookies', 'messages', 'analytics', 'i18n', 'alias', 'auth', 'admin', 'images', 'tinymce', 'festival'],

		// modules that are not enabled by default, but need to be installed
		'also_install_modules' => ['forms', 'tinymce', 'emails'],

		'site_title' => 'Zámeček 2026',
		'site_description' => 'Pohodový multižánrový festival konaný každoročně ve Středočeském muzeu v Roztokách u Prahy.',
		'site_author' => 'Karel Zavadil',
		'site_keywords' => 'festival,Zámeček,hudba,multižánrový,hudební,Středočeské muzeum,Roztoky u Prahy,Roztoky',

		// will be used to create all link urls, no trailing slash
		'base_url' => 'http://festivalzamecek.loc',

		// if turned on, display message of unrecoverable error
		// turn this off in production!
		'debug_mode' => true,

		// additional js, css etc.
		// EXAMPLE: [file_path, is_absolute, type, placement]
		// file_path - path to file
		// type - link_css/print_css/link_less/link_js/inline_js/favicon
		// placement - head/default/bottom
		'includes' => [
			['style.css', 'link_css', 'head'],
			['style-small.css', 'link_css', 'head'],
			['script.js', 'link_js', 'head']
		]

	];
