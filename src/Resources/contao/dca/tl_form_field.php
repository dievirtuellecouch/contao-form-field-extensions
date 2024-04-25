<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_form_field']['fields']['helpText'] = [
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'tl_class' => 'clr',
        'maxlength' => 255,
    ],
    'sql' => [
        'type' => 'string',
        'length' => '255',
        'default' => '',
        'notnull' => true,
    ],
];

$GLOBALS['TL_DCA']['tl_form_field']['fields']['htmlInputmode'] = [
    'exclude' => true,
    'inputType' => 'select',
    'eval' => [
        'tl_class' => 'w50 clr',
        'includeBlankOption' => true,
    ],
    'options' => [
        'text',
        'decimal',
        'numeric',
        'tel',
        'search',
        'email',
        'url',
    ],
    'sql' => [
        'type' => 'string',
        'length' => '16',
        'default' => '',
        'notnull' => true,
    ],
];

PaletteManipulator::create()
    ->addField('helpText', 'fconfig_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('text', 'tl_form_field')
    ->applyToPalette('password', 'tl_form_field')
    ->applyToPalette('textarea', 'tl_form_field')
    ->applyToPalette('select', 'tl_form_field')
    ->applyToPalette('radio', 'tl_form_field')
    ->applyToPalette('checkbox', 'tl_form_field')
    ->applyToPalette('upload', 'tl_form_field')
    ->applyToPalette('range', 'tl_form_field')
    ->applyToPalette('captcha', 'tl_form_field')
;

PaletteManipulator::create()
    ->addField('htmlInputmode', 'expert_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('text', 'tl_form_field')
;
