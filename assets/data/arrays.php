<?php
#Array pour la page index.php
#Items vedette
$index_gamesArticles =array(
	'vg_01' => array(
			'title' => 'The Witcher',
			'genre' => 'rpg',
			'price' => '20$',
			'img' => 'assets/img/witcher_big.jpg',
			'url' => '?game=witcher',
			'size' => 'big',
		),
	'vg_33' => array(
			'title' => 'Invisible',
			'genre' => 'fps',
			'price' => '10$',
			'img' => 'assets/img/invisible_small.jpg',
			'url' => '?game=invisible',
			'size' => 'medium',
		),
	'vg_34' => array(
			'title' => 'Metro redux',
			'genre' => 'fps',
			'price' => '40$',
			'img' => 'assets/img/metro_small.jpg',
			'url' => '?game=metro',
			'size' => 'small',
		),
	'vg_35' => array(
			'title' => 'Games of Thrones',
			'genre' => 'adventure',
			'price' => '40$',
			'img' => 'assets/img/got_small.jpg',
			'url' => '?game=got',
			'size' => 'small',
		),
	'vg_36' => array(
			'title' => 'Rebuild3',
			'genre' => 'adventure',
			'price' => '30$',
			'img' => 'assets/img/rebuild_small.jpg',
			'url' => '?game=rebuild',
			'size' => 'small',
		),
	'vg_37' => array(
			'title' => 'Dragon Age',
			'genre' => 'rpg',
			'price' => '60$',
			'img' => 'assets/img/dragon_small.jpg',
			'url' => '?game=dragon',
			'size' => 'small',
		),
	'vg_30' => array(
			'title' => 'Borderlands : Pre Sequel',
			'genre' => 'fps',
			'price' => '25$',
			'img' => 'assets/img/bdlands_small.jpg',
			'url' => '?game=borderlands',
			'size' => 'small',
		),
	);

#Array pour la page games
$games_gamesArticles = array(
		'witcher' => array(
				'title' => 'The Witcher',
				'genre' => 'rpg',
				'price' => '20$',
				'img' => 'assets/img/witcher_big.jpg',
				'url' => '?game=witcher',
				'id' => 'vg_01',
				'description' => 'About: A truly next-generation role playing game combining a mature, non-linear story with a vast open world.
						The Witcher 3: Wild Hunt, the RPG epic with a mature, non-linear story that reacts to your decisions, a vast open world with a living ecosystem, dynamic and tactical combat, and stunning visuals, is available on GOG.com!
						We are part of the CD PROJEKT family, so buying here also gives you the chance to support us directly!',
			),
		'baldursgate' => array(
				'title' => 'Baldurs Gate',
				'genre' => 'rpg',
				'price' => '30$',
				'img' => 'assets/img/baldur_small.jpg',
				'url' => '?game=baldursgate',
				'id' => 'vg_02',
				'description' => 'About: Includes Baldur\'s Gate II: Shadows of Amn and its expansion: Baldur\'s Gate II: Throne of Bhaal.
						Will you resist the evil within you and forge a legend of heroic proportions? Or will you embrace your monstrous inner nature and carve a swath of destruction across the Realms? Your story begins anew in the exotic southern kingdom of Amn, amidst the opulence of the sinister capital city of Athkatla. Journey through the fierce, unforgiving wilderness of Amn in your quest for artifacts of awesome power and treasure of unfathomable wealth... Even challenge dragons, if you dare. Such is the life of a legend.
						One of the greatest fantasy adventures continues! Return to the Forgotten Realms and once again lead the exciting life of an adventurer in this timeless Dungeons & Dragons cRPG classic!'
			),
		'neverwinter' => array(
				'title' => 'Neverwinter Nights',
				'genre' => 'rpg',
				'price' => '40$',
				'img' => 'assets/img/neverwinter_small.jpg',
				'url' => '?game=neverwinter',
				'id' => 'vg_03',
				'description' => 'About: Experience one of the most popular role-playing adventures of our time, a journey that has thrilled millions. Inhabit dreamlike worlds of myth and mystery. Boundless lands of deadly creatures, foreboding omens and bold heroism.
						This game puts you at the center of an epic tale of faith, war and betrayal, all the while staying true to the pen-and-paper role-playing tradition.
						Neverwinter Nights - A world without limits!',
			),
		'dungeonkeeper2' => array(
				'title' => 'Dungeon Keeper 2',
				'genre' => 'strategy',
				'price' => '45$',
				'img' => 'assets/img/dungeonkeeper_small.jpg',
				'url' => '?game=dungeonkeeper2',
				'id' => 'vg_04',
				'description' => 'About: It feels good to be bad, but it feels even better to be the embodiment of evil! Discover your evil side as you build your own underground kingdom. Carve out a living, breathing world and attract a host of devilish creatures to swell the ranks of your dark hoards. Form an alliance with the Horned Reaper and expand your empire in your quest to reach the daylight and invade the realms above.
						Dungeon Keeper 2 is everything its predecessor was, only better and badder! It is probably one of the most addictive and fun games ever created; with tons of dark humor, smooth gameplay, and high replayability value. In addition to that there is a well designed multiplayer mode and a pet-dungeon module that tests your ability to build the ultimate underground labyrinth filled with traps, monsters, and other hellish devices. If you liked Dungeon Keeper you will love this ultimate installment of the Bullfrog series.',
			),
		'alphacentauri' => array(
				'title' => 'Alpha Centauri',
				'genre' => 'strategy',
				'price' => '20$',
				'img' => 'assets/img/alphacentauri_small.jpg',
				'url' => '?game=alphacentauri',
				'id' => 'vg_05',
				'description' => 'About: Mankind begins its most monumental task – the colonization of space. A crew of internationally renowned scientists and security strategists, with wide-ranging convictions and diverse ethics, embarks on a mission that will change the world. One Planet. Seven unique factions. Which will you lead? Each faction has its own agenda, each leader a final goal. You must play to each strength and exploit each hidden weakness in your quest to rule the future.',
			),
		'dukenukem' => array(
				'title' => 'Duke Nukem 3D',
				'genre' => 'fps',
				'price' => '35$',
				'img' => 'assets/img/dukenukem_small.jpg',
				'url' => '?game=dukenukem',
				'id' => 'vg_06',
				'description'=> 'About: Duke Nukem, the politically incorrect celebrity and ultimate alien ass kicker, defends Earth and its babes from alien invasion. He is a can-do hero who realizes that sometimes innocent people have to die in order to save Earth, so accuracy of gun fire is not a real concern to him. This is the award-winning game that helped define the FPS genre and introduced unparalleled interactivity and a talking main character.',
			),
		'dragonshard' => array(
				'title' => 'Dragon Shard',
				'genre' => 'rpg',
				'price' => '00$',
				'img' => 'assets/img/dragonshard_small.jpg',
				'url' => '?game=dragonshard',
				'id' => 'vg_07',
			),
		'farcry3' => array(
				'title' => 'FarCry',
				'genre' => 'fps',
				'price' => '20$',
				'img' => 'assets/img/farcry_small.jpg',
				'url' => '?game=farcry3',
				'id' => 'vg_08',
			),
		'postal2' => array(
				'title' => 'Postal 2',
				'genre' => 'fps',
				'price' => '20$',
				'img' => 'assets/img/postal_small.jpg',
				'url' => '?game=postal2',
				'id' => 'vg_09',
			),
		'unreal' => array(
				'title' => 'Unreal Tournament',
				'genre' => 'fps',
				'price' => '15$',
				'img' => 'assets/img/unreal_small.jpg',
				'url' => '?game=unreal',
				'id' => 'vg_10',
			),
		'icewind' => array(
				'title' => 'IceWind Dale',
				'genre' => 'rpg',
				'price' => '40$',
				'img' => 'assets/img/icewind_small.jpg',
				'url' => '?game=icewind',
				'id' => 'vg_11',
			),
		'arcanum' => array(
				'title' => 'Arcanum',
				'genre' => 'rpg',
				'price' => '25$',
				'img' => 'assets/img/arcanum_small.jpg',
				'url' => '?game=arcanum',
				'id' => 'vg_12',
			),
		'commandos' => array(
				'title' => 'Commandos',
				'genre' => 'strategy',
				'price' => '5$',
				'img' => 'assets/img/commandos_small.jpg',
				'url' => '?game=commandos',
				'id' => 'vg_13',
			),
		'stalker' => array(
				'title' => 'S.T.A.L.K.E.R.',
				'genre' => 'fps',
				'price' => '25$',
				'img' => 'assets/img/stalker_small.jpg',
				'url' => '?game=stalker',
				'id' => 'vg_14',
			),
		'bloodrayne' => array(
				'title' => 'Bloodrayne',
				'genre' => 'fps',
				'price' => '20$',
				'img' => 'assets/img/bloodrayne_small.jpg',
				'url' => '?game=bloodrayne',
				'id' => 'vg_15',
			),
		'deusex' => array(
				'title' => 'Deus Ex',
				'genre' => 'fps/rpg',
				'price' => '60$',
				'img' => 'assets/img/deusex_small.jpg',
				'url' => '?game=deusex',
				'id' => 'vg_16',
			),
		'singold' => array(
				'title' => 'Sin Gold',
				'genre' => 'fps',
				'price' => '2$',
				'img' => 'assets/img/singold_small.jpg',
				'url' => '?game=singold',
				'id' => 'vg_17',
			),
		'colonization' => array(
				'title' => 'Colonization',
				'genre' => 'strategy',
				'price' => '20$',
				'img' => 'assets/img/colonization_small.jpg',
				'url' => '?game=colonization',
				'id' => 'vg_18',
			),
		'mightandmagic' => array(
				'title' => 'Might and Magic 8',
				'genre' => 'rpg',
				'price' => '10$',
				'img' => 'assets/img/mightandmagic_small.jpg',
				'url' => '?game=mightandmagic',
				'id' => 'vg_19',
			),
		'banished' => array(
				'title' => 'Banished',
				'genre' => 'strategy',
				'price' => '20$',
				'img' => 'assets/img/banished_small.jpg',
				'url' => '?game=banished',
				'id' => 'vg_20',
			),
		'jediknight' => array(
				'title' => 'Star wars : Jedi Knight',
				'genre' => 'fps',
				'price' => '50$',
				'img' => 'assets/img/jediknight_small.jpg',
				'url' => '?game=jediknight',
				'id' => 'vg_21',
			),
		'gothic2' => array(
				'title' => 'Gothic 2',
				'genre' => 'rpg',
				'price' => '10$',
				'img' => 'assets/img/gothic_small.jpg',
				'url' => '?game=gothic2',
				'id' => 'vg_22',
			),
		'Silver' => array(
				'title' => 'Silver',
				'genre' => 'rpg',
				'price' => '35$',
				'img' => 'assets/img/silver_small.jpg',
				'url' => '?game=Silver',
				'id' => 'vg_23',
			),
		'silentstor' => array(
				'title' => 'Silent Storm',
				'genre' => 'strategy',
				'price' => '20$',
				'img' => 'assets/img/silentstorm_small.jpg',
				'url' => '?game=silentstorm',
				'id' => 'vg_24',
			),
		'castle' => array(
				'title' => 'Castles 1 + 2',
				'genre' => 'strategy',
				'price' => '25$',
				'img' => 'assets/img/castle_small.jpg',
				'url' => '?game=castles',
				'id' => 'vg_25',
			),
		'rainbowsix' => array(
				'title' => 'Rainbow Six',
				'genre' => 'fps',
				'price' => '40$',
				'img' => 'assets/img/rainbowsix_small.jpg',
				'url' => '?game=rainbowsix',
				'id' => 'vg_26',
			),
		'wizardy' => array(
				'title' => 'Wizardry 8',
				'genre' => 'rpg',
				'price' => '30$',
				'img' => 'assets/img/wizardy_small.jpg',
				'url' => '?game=wizardy',
				'id' => 'vg_27',
			),
		'kotr' => array(
				'title' => 'Star wars : KOTOR',
				'genre' => 'rpg',
				'price' => '20$',
				'img' => 'assets/img/kotr_small.jpg',
				'url' => '?game=kotr',
				'id' => 'vg_28',
			),
		'defcon' => array(
				'title' => 'Defcon',
				'genre' => 'strategy',
				'price' => '35$',
				'img' => 'assets/img/defcon_small.jpg',
				'url' => '?game=defcon',
				'id' => 'vg_29',
			),
		'borderlands' => array(
				'title' => 'Borderlands : Pre Sequel',
				'genre' => 'fps',
				'price' => '25$',
				'img' => 'assets/img/bdlands_small.jpg',
				'url' => '?game=borderlands',
				'id' => 'vg_30',
			),
		'shadowru' => array(
				'title' => 'Shadowrun',
				'genre' => 'rpg',
				'price' => '10$',
				'img' => 'assets/img/shadowrun_small.jpg',
				'url' => '?game=shadowrun',
				'id' => 'vg_31',
			),
		'gangsters' => array(
				'title' => 'Gangsters',
				'genre' => 'rpg',
				'price' => '25$',
				'img' => 'assets/img/gangsters_small.jpg',
				'url' => '?game=gangsters',
				'id' => 'vg_32',
			),
		'invisibl' => array(
				'title' => 'Invisible',
				'genre' => 'fps',
				'price' => '10$',
				'img' => 'assets/img/invisible_small.jpg',
				'url' => '?game=invisible',
				'id' => 'vg_33',
			),
		'metro' => array(
				'title' => 'Metro redux',
				'genre' => 'fps',
				'price' => '40$',
				'img' => 'assets/img/metro_small.jpg',
				'url' => '?game=metro',
				'id' => 'vg_34',
			),
		'got' => array(
				'title' => 'Games of Thrones',
				'genre' => 'adventure',
				'price' => '40$',
				'img' => 'assets/img/got_small.jpg',
				'url' => '?game=got',
				'id' => 'vg_35',
			),
		'rebuild' => array(
				'title' => 'Rebuild3',
				'genre' => 'adventure',
				'price' => '30$',
				'img' => 'assets/img/rebuild_small.jpg',
				'url' => '?game=rebuild',
				'id' => 'vg_36',
			),
		'dragon' => array(
				'title' => 'Dragon Age',
				'genre' => 'rpg',
				'price' => '60$',
				'img' => 'assets/img/dragon_small.jpg',
				'url' => '?game=dragon',
				'id' => 'vg_37',
			),
		);