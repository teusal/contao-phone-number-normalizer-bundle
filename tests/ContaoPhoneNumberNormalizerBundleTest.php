<?php

declare(strict_types=1);

/*
 * This file is part of Contao Phone Number Normalizer Bundle.
 *
 * (c) Alexander Teuscher
 *
 * @license LGPL-3.0-or-later
 */

namespace Teusal\ContaoPhoneNumberNormalizerBundle\Tests;

use PHPUnit\Framework\TestCase;
use Teusal\ContaoPhoneNumberNormalizerBundle\ContaoPhoneNumberNormalizerBundle;

class ContaoPhoneNumberNormalizerBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoPhoneNumberNormalizerBundle();

        $this->assertInstanceOf('Teusal\ContaoPhoneNumberNormalizerBundle\ContaoPhoneNumberNormalizerBundle', $bundle);
    }
}
