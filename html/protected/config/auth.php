<?php
return array(
	'0' => array(
		'type' => CAuthItem::TYPE_ROLE,
		'description' => 'Guest',
		'bizRule' => null,
		'data' => null
	),
	'1' => array(
		'type' => CAuthItem::TYPE_ROLE,
		'description' => 'User',
		'children' => array(
			'guest', // унаследуемся от гостя
		),
		'bizRule' => null,
		'data' => null
	),
	'2' => array(
		'type' => CAuthItem::TYPE_ROLE,
		'description' => 'Administrator',
		'children' => array(
			'moderator',         // позволим админу всё, что позволено модератору
		),
		'bizRule' => null,
		'data' => null
	),
);