<?php

/*
* This file is part of pssht.
*
* (c) François Poirotte <clicky@erebot.net>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace fpoirotte\Pssht\MAC\SHA2;

/**
 * MAC generation using the SHA2 hashing algorithm
 * with a 256 bits long MAC (aka "SHA-256").
 */
class Len256 extends \fpoirotte\Pssht\MAC\Base
{
    public static function getName()
    {
        return 'hmac-sha2-256';
    }

    public static function getHash()
    {
        return 'sha256';
    }
}
