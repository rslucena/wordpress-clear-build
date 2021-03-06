<?php

//PARENT
$pages = array('SEO','Logo','Banner','Erro 404','Rodapé','Ad Manager');

if (function_exists('acf_add_options_page'))
	foreach ($pages as $page)
		acf_add_options_sub_page(array(
			'page_title' => $page,
			'menu_title' => $page,
			'parent_slug' => 'themes.php',
		));

if( function_exists('acf_add_local_field_group') ) :

	//LOGO
	acf_add_local_field_group(array(
		'key' => 'group_5e481f4982222',
		'title' => 'layout',
		'fields' => array(
			array(
				'key' => 'field_5e4820a4e55c4',
				'label' => 'PNG',
				'name' => 'default_png_logo',
				'type' => 'image',
				'instructions' => 'Colorido',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => 'png',
			),
			array(
				'key' => 'field_5e4820c2e55c5',
				'label' => 'PNG',
				'name' => 'default_png_invert_logo',
				'type' => 'image',
				'instructions' => 'Branco',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => 'png',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-logo',
				),
			),
		),
		'menu_order' => 1,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'left',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'permalink',
			1 => 'the_content',
			2 => 'excerpt',
			3 => 'discussion',
			4 => 'comments',
			5 => 'revisions',
			6 => 'slug',
			7 => 'author',
			8 => 'format',
			9 => 'page_attributes',
			10 => 'featured_image',
			11 => 'categories',
			12 => 'tags',
			13 => 'send-trackbacks',
		),
		'active' => true,
		'description' => 'Default > LOGO',
	));

	//BANNER
	acf_add_local_field_group(array(
		'key' => 'group_5e482139c76be',
		'title' => 'Layout',
		'fields' => array(
			array(
				'key' => 'field_5e48214195721',
				'label' => 'Repetidor',
				'name' => 'default_repetidor_banner',
				'type' => 'repeater',
				'instructions' => 'Repetidor para os itens apresentados nos Banners.',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => 'field_5e48219d6aa57',
				'min' => 1,
				'max' => 0,
				'layout' => 'block',
				'button_label' => 'Adicionar outro banner',
				'sub_fields' => array(
					array(
						'key' => 'field_5e48219d6aa57',
						'label' => 'Título',
						'name' => 'default_repetidor_banner_titulo',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '70',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5e482266b937c',
						'label' => 'Botão',
						'name' => 'default_repetidor_banner_botao',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '30',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5e4821de6aa59',
						'label' => 'Imagem',
						'name' => 'default_repetidor_banner_imagem',
						'type' => 'image',
						'instructions' => 'Imagem somente em JPG',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '30',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'url',
						'preview_size' => 'full',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
					),
					array(
						'key' => 'field_5e4821c56aa58',
						'label' => 'Descrição',
						'name' => 'default_repetidor_banner_descricao',
						'type' => 'textarea',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '70',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => 5,
						'new_lines' => 'br',
					),
					array(
						'key' => 'field_5e482295b937d',
						'label' => 'Link',
						'name' => 'default_repetidor_banner_link',
						'type' => 'url',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => array(
							array(
								array(
									'field' => 'field_5e482266b937c',
									'operator' => '!=empty',
								),
							),
						),
						'wrapper' => array(
							'width' => '70',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
					),
					array(
						'key' => 'field_5e4822d2b937f',
						'label' => 'Externo',
						'name' => 'default_repetidor_banner_externo',
						'type' => 'true_false',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => array(
							array(
								array(
									'field' => 'field_5e482266b937c',
									'operator' => '!=empty',
								),
							),
						),
						'wrapper' => array(
							'width' => '30',
							'class' => '',
							'id' => '',
						),
						'message' => '',
						'default_value' => 0,
						'ui' => 0,
						'ui_on_text' => '',
						'ui_off_text' => '',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-banner',
				),
			),
		),
		'menu_order' => 1,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'permalink',
			1 => 'the_content',
			2 => 'excerpt',
			3 => 'discussion',
			4 => 'comments',
			5 => 'revisions',
			6 => 'slug',
			7 => 'author',
			8 => 'format',
			9 => 'page_attributes',
			10 => 'featured_image',
			11 => 'categories',
			12 => 'tags',
			13 => 'send-trackbacks',
		),
		'active' => true,
		'description' => 'Default > BANNER',
	));

	//SEO
	acf_add_local_field_group(array(
		'key' => 'group_5e4823dbae7f4',
		'title' => 'Layout',
		'fields' => array(
			array(
				'key' => 'field_5e4824231823a',
				'label' => 'Descrição',
				'name' => 'default_seo_descricao',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => 120,
				'rows' => 5,
				'new_lines' => '',
			),
			array(
				'key' => 'field_5e48246c1823b',
				'label' => 'Keywords',
				'name' => 'default_seo_keywords',
				'type' => 'textarea',
				'instructions' => 'Separated by \',\'',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 3,
				'new_lines' => '',
			),
			array(
				'key' => 'field_5e4825491823d',
				'label' => 'Facebook ID',
				'name' => 'default_seo_facebook_id',
				'type' => 'text',
				'instructions' => 'Facebook numeric ID',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5e4825741823e',
				'label' => 'Twitter User',
				'name' => 'default_seo_twitter_user',
				'type' => 'text',
				'instructions' => '@xxxx',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5e48249c1823c',
				'label' => 'Imagem de Destaque',
				'name' => 'default_seo_imagem',
				'type' => 'image',
				'instructions' => 'Máximo: 2000px1600 e Tamanho 2mb. Formato: PNG',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => 2000,
				'max_height' => 1600,
				'max_size' => 2,
				'mime_types' => 'png',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-seo',
				),
			),
		),
		'menu_order' => 1,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'permalink',
			1 => 'the_content',
			2 => 'excerpt',
			3 => 'discussion',
			4 => 'comments',
			5 => 'revisions',
			6 => 'slug',
			7 => 'author',
			8 => 'format',
			9 => 'page_attributes',
			10 => 'featured_image',
			11 => 'categories',
			12 => 'tags',
			13 => 'send-trackbacks',
		),
		'active' => true,
		'description' => 'Default > SEO',
	));


	//ICONS > SEO
	acf_add_local_field_group(array(
		'key' => 'group_5e482da30cbad',
		'title' => 'Ícones',
		'fields' => array(
			array(
				'key' => 'field_5e482dab559cc',
				'label' => 'Ico',
				'name' => 'default_seo_icon',
				'type' => 'image',
				'instructions' => 'Formato: PNG',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => 'png',
			),
			array(
				'key' => 'field_5e482dec559cd',
				'label' => 'Apple touch',
				'name' => 'default_seo_apple_touch',
				'type' => 'image',
				'instructions' => 'Formato: PNG',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => 'png',
			),
			array(
				'key' => 'field_5e482e10559ce',
				'label' => 'Mask Ico',
				'name' => 'default_seo_mask_ico',
				'type' => 'image',
				'instructions' => 'Formato: PNG',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => 'png',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-seo',
				),
			),
		),
		'menu_order' => 2,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'permalink',
			1 => 'the_content',
			2 => 'excerpt',
			3 => 'discussion',
			4 => 'comments',
			5 => 'revisions',
			6 => 'slug',
			7 => 'author',
			8 => 'format',
			9 => 'page_attributes',
			10 => 'featured_image',
			11 => 'categories',
			12 => 'tags',
			13 => 'send-trackbacks',
		),
		'active' => true,
		'description' => 'Default > SEO',
	));


	//ERRO 404
	acf_add_local_field_group(array(
		'key' => 'group_5e4825cb0f3df',
		'title' => 'Layout',
		'fields' => array(
			array(
				'key' => 'field_5e4825d93d24a',
				'label' => 'Título',
				'name' => 'default_error404_titulo',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Erro 404',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5e4825fa3d24b',
				'label' => 'Descrição',
				'name' => 'default_error404_descricao',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'A página que você estava tentando ver não existe.',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 5,
				'new_lines' => 'br',
			),
			array(
				'key' => 'field_5e48260e3d24c',
				'label' => 'JPG',
				'name' => 'default_error404_jpg',
				'type' => 'image',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => 'jpg',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-erro-404',
				),
			),
		),
		'menu_order' => 1,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'permalink',
			1 => 'the_content',
			2 => 'excerpt',
			3 => 'discussion',
			4 => 'comments',
			5 => 'revisions',
			6 => 'slug',
			7 => 'author',
			8 => 'format',
			9 => 'page_attributes',
			10 => 'featured_image',
			11 => 'categories',
			12 => 'tags',
			13 => 'send-trackbacks',
		),
		'active' => true,
		'description' => 'Default > ERRO 404',
	));

	//RODAPE
	acf_add_local_field_group(array(
		'key' => 'group_5e482753bf930',
		'title' => 'Layout',
		'fields' => array(
			array(
				'key' => 'field_5e48275dbc8bc',
				'label' => 'Copyright',
				'name' => 'default_rodape_copyright',
				'type' => 'text',
				'instructions' => '© xxx',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '©' . date('Y') . ' ' . strtoupper(get_bloginfo('name')) . ' - TODOS OS DIREITOS RESERVADOS.',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-rodape',
				),
			),
		),
		'menu_order' => 1,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'permalink',
			1 => 'the_content',
			2 => 'excerpt',
			3 => 'discussion',
			4 => 'comments',
			5 => 'revisions',
			6 => 'slug',
			7 => 'author',
			8 => 'format',
			9 => 'page_attributes',
			10 => 'featured_image',
			11 => 'categories',
			12 => 'tags',
			13 => 'send-trackbacks',
		),
		'active' => true,
		'description' => 'Default > RODAPE',
	));

	//AD MANAGER
	acf_add_local_field_group(array(
		'key' => 'group_5e482669340bd',
		'title' => 'Scripts',
		'fields' => array(
			array(
				'key' => 'field_5e482670fdaa4',
				'label' => 'Repetidor',
				'name' => 'default_admanager_repetidor',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'collapsed' => 'field_5e4826e3fdaa6',
				'min' => 0,
				'max' => 0,
				'layout' => 'block',
				'button_label' => '',
				'sub_fields' => array(
					array(
						'key' => 'field_5e4826e3fdaa6',
						'label' => 'Título',
						'name' => 'default_admanager_repetidor_titulo',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '30',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5e48269dfdaa5',
						'label' => 'Código',
						'name' => 'default_admanager_repetidor_codigo',
						'type' => 'textarea',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '70',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => '',
						'new_lines' => '',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-ad-manager',
				),
			),
		),
		'menu_order' => 1,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'permalink',
			1 => 'the_content',
			2 => 'excerpt',
			3 => 'discussion',
			4 => 'comments',
			5 => 'revisions',
			6 => 'slug',
			7 => 'author',
			8 => 'format',
			9 => 'page_attributes',
			10 => 'featured_image',
			11 => 'categories',
			12 => 'tags',
			13 => 'send-trackbacks',
		),
		'active' => true,
		'description' => 'Default > AD MANAGER',
	));

endif;
