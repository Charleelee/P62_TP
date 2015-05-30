<?php
//Array pour la page index.php
$index_gamesArticles =array(
	'The witcher' => array(
		'rpg' => array(
			'20$' => array(
				'index_vg_01' => array(
					'assets/img/witcher_big.jpg' => array(
						'?game=witcher' => 'big'
					),
				),
			),
		),
	),
	'Invisible' => array(
		'fps' => array(
			'10$' => array(
				'index_vg_02' => array(
					'assets/img/invisible_small.jpg' => array(
						'?game=invisible' => 'medium'
					),
				),
			),
		),
	),
	'Metro redux' => array(
		'fps' => array(
			'40$' => array(
				'index_vg_03' => array(
					'assets/img/metro_small.jpg' => array(
						'?game=metro' => 'small'
					),
				),
			),
		),
	),
);

//Array pour la page games
$games_gamesArticles = array(
	'The witcher' => array(
		'rpg' => array(
			'20$' => array(
				'vg_01' => array(
					'assets/img/witcher_small.jpg' => '?game=witcher'
				),
			),
		),
	),
	'Invisible' => array(
		'fps' => array(
			'10$' => array(
				'vg_02' => array(
					'assets/img/invisible_small.jpg' => '?game=invisble'
				),
			),
		),
	),
);