<?php

declare(strict_types=1);

/*
 * This file is part of Contao Phone Number Normalizer Bundle.
 *
 * (c) Alexander Teuscher
 *
 * @license LGPL-3.0-or-later
 */

use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_settings']['fields']['phone_number_normalizer_your_country_code'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_settings']['phone_number_normalizer_your_country_code'],
    'inputType' => 'text',
    'eval' => ['tl_class' => 'w50', 'rgxp' => 'custom', 'customRgxp' => '/^(\+|00)\d+$/', 'maxlength' => 10],
    'sql' => ['type' => 'string', 'length' => 10, 'default' => ''],
];

$GLOBALS['TL_DCA']['tl_settings']['fields']['phone_number_normalizer_default_area_code'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_settings']['phone_number_normalizer_default_area_code'],
    'inputType' => 'text',
    'eval' => ['tl_class' => 'w50', 'rgxp' => 'custom', 'customRgxp' => '/^0\d+$/', 'maxlength' => 10],
    'sql' => ['type' => 'string', 'length' => 10, 'default' => ''],
];

PaletteManipulator::create()
    // add a new "custom_legend" before the "date_legend"
    ->addLegend('phone_number_normalizer_legend') //, 'date_legend', PaletteManipulator::POSITION_BEFORE)

    // directly add new fields to the new legend
    ->addField('phone_number_normalizer_your_country_code', 'phone_number_normalizer_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('phone_number_normalizer_default_area_code', 'phone_number_normalizer_legend', PaletteManipulator::POSITION_APPEND)

    // then apply it to the palette as usual
    ->applyToPalette('default', 'tl_settings')
;
