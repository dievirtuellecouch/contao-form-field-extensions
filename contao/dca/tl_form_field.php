<?php

declare(strict_types=1);

use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_form_field']['fields']['helpText'] = [
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'decodeEntities' => true,
        'tl_class' => 'clr',
        'maxlength' => 255,
    ],
    'sql' => [
        'type' => 'string',
        'length' => 255,
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
        'chosen' => true,
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
        'length' => 16,
        'default' => '',
        'notnull' => true,
    ],
];

foreach ([
    'text',
    'textdigit',
    'textcustom',
    'password',
    'passwordcustom',
    'textarea',
    'textareacustom',
    'select',
    'radio',
    'checkbox',
    'upload',
    'range',
    'captcha',
] as $palette) {
    PaletteManipulator::create()
        ->addField('helpText', 'fconfig_legend', PaletteManipulator::POSITION_APPEND)
        ->applyToPalette($palette, 'tl_form_field')
    ;
}

foreach ([
    'text',
    'textdigit',
    'textcustom',
    'password',
    'passwordcustom',
    'textarea',
    'textareacustom',
    'captcha',
] as $palette) {
    PaletteManipulator::create()
        ->addField('htmlInputmode', 'expert_legend', PaletteManipulator::POSITION_APPEND)
        ->applyToPalette($palette, 'tl_form_field')
    ;
}
