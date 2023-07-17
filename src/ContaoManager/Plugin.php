<?php

declare(strict_types=1);

/*
 * This file is part of Contao Phone Number Normalizer Bundle.
 *
 * (c) Alexander Teuscher
 *
 * @license LGPL-3.0-or-later
 */

namespace Teusal\ContaoPhoneNumberNormalizerBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Teusal\ContaoPhoneNumberNormalizerBundle\ContaoPhoneNumberNormalizerBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoPhoneNumberNormalizerBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
