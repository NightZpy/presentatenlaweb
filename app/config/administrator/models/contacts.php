<?php

/**
 * Contact model config
 */
return [
	'title'  => 'Contactos',
	'single' => 'Contacto',
	'model'  => 'Contact',

	'columns' => [
		'id',
		'name',
		'email',
		'message',
	],

	'edit_fields' => [
		'id',
		'name' => [
			'title' => 'Nombre',
			'type'  => 'text'
		],
		'email' => [
			'title' => 'E-mail',
			'type'  => 'text'
		],
		'message' => [
			'title' => 'Mensaje',
			'type'  => 'wysiwyg'
		]
	],
];
