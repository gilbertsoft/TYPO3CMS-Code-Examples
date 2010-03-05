<?php
/* $Id$*/
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_examples_dummy'] = array(
	'ctrl' => $TCA['tx_examples_dummy']['ctrl'],
	'columns' => array(
		'hidden' => array(		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type'    => 'check',
				'default' => '0'
			)
		),
		'record_type' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_dummy.record_type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:examples/locallang_db.xml:tx_examples_dummy.record_type.0', 0),
					array('LLL:EXT:examples/locallang_db.xml:tx_examples_dummy.record_type.1', 1),
					array('LLL:EXT:examples/locallang_db.xml:tx_examples_dummy.record_type.2', 2),
				)
			)
		),
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_dummy.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'required,trim',
			)
		),
		'some_date' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_dummy.some_date',
			'config' => array(
				'type' => 'input',
				'size' => 12,
				'eval' => 'date',
			)
		),
		'enforce_date' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_dummy.enforce_date',
			'config' => array(
				'type' => 'check',
			)
		),
		'description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_dummy.description',
			'config' => array(
				'type' => 'text',
				'cols' => 50,
				'rows' => 3
			)
		)
	),
	'types' => array(
			// NOTE: there are alternate versions of this row to demonstrate various features
		'0' => array('showitem' => 'hidden, record_type, title, some_date '),
			// Exchange this row with the one above for the example at the end of the types reference table
//		'0' => array('showitem' => 'hidden;;;;1-1-1, record_type;;;;2-2-2, title;;;;3-3-3, some_date '),
			// Use this row to demonstrate usage of palettes
//		'0' => array('showitem' => 'hidden;;;;1-1-1, record_type;;;;2-2-2, title;;;;3-3-3, some_date;;1 '),
			// Use this row when discussion special configuration
//		'0' => array('showitem' => 'hidden;;;;1-1-1, record_type;;;;2-2-2, title;;;;3-3-3, description;;;nowrap, some_date;;1 '),
		'1' => array('showitem' => 'record_type, title '),
		'2' => array('showitem' => 'title, some_date, hidden, record_type '),
	),
	'palettes' => array(
		'1' => array('showitem' => 'enforce_date'),
	),
);

$TCA['tx_examples_haiku'] = array(
	'ctrl' => $TCA['tx_examples_haiku']['ctrl'],
	'columns' => array(
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type'    => 'check',
				'default' => '0'
			)
		),
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'required,trim',
			)
		),
		'poem' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.poem',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 6
			),
			'defaultExtras' => 'richtext[]:static_write[filename|poem]'
				// NOTE: parameters 4 and 5 don't seem to apply, this must be broken. Investigate later.
//			'defaultExtras' => 'richtext[]:static_write[filename|poem||filesource|filestatus]'
		),
		'filename' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.filename',
			'config' => array(
				'type' => 'input',
				'size' => 30,
			)
		),
		'filesource' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.filesource',
			'config' => array(
				'type' => 'check',
			)
		),
		'filestatus' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.filestatus',
			'config' => array(
				'type' => 'input',
				'size' => 30,
			)
		)
	),
	'types' => array(
		'0' => array('showitem' => 'hidden, title, poem, filename'),
			// NOTE: since filestatus is not used yet, let's not show it, nor the palette with filesource
//		'0' => array('showitem' => 'hidden, title, poem, filename;;1, filestatus'),
	),
/*
 * NOTE: use the filesource flag only when the problems of static_write have been solved
	'palettes' => array(
		'1' => array('showitem' => 'filesource'),
	),
 */
);
?>