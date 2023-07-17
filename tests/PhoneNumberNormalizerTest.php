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
use Teusal\ContaoPhoneNumberNormalizerBundle\Library\PhoneNumberNormalizer;

class PhoneNumberNormalizerTest extends TestCase
{
    public function testNormalizePhoneNumbers(): void
    {
        $this->assertSame('040 / 1234567', PhoneNumberNormalizer::format('1234567'));
        $this->assertSame('040 / 1234567', PhoneNumberNormalizer::format('0401234567'));
        $this->assertSame('040 / 1234567', PhoneNumberNormalizer::format('040-1234567'));
        $this->assertSame('040 / 1234567', PhoneNumberNormalizer::format('040 1234567'));
        $this->assertSame('040 / 1234567', PhoneNumberNormalizer::format('040 123456 - 7'));
        $this->assertSame('040 / 1234567', PhoneNumberNormalizer::format('(040) 1234567'));
        $this->assertSame('0171 / 1234567', PhoneNumberNormalizer::format('0171 1234567'));
        $this->assertSame('040 / 1234567', PhoneNumberNormalizer::format('+49 40 1234567'));
        $this->assertSame('+1 312-566-4777', PhoneNumberNormalizer::format('+1 312-566-4777'));
    }
}
