<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "minimale_distribution"
 *
 * 
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Beispielprojekt T3 9LTS',
	'description' => 'Das Beispielprojekt für neue TYPO3-Projekte, das individuell angepasst werden kann.',
	'category' => 'templates',
	'author' => 'Saadet Bozaci',
	'author_email' => 's4saboza@uni-trier.de',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '9.5.0-9.5.99',
			'indexed_search'=> '9.5.8',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);
