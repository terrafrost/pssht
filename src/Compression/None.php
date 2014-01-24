<?php

/*
* This file is part of pssht.
*
* (c) François Poirotte <clicky@erebot.net>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Clicky\Pssht\Compression;

use Clicky\Pssht\CompressionInterface;

class       None
implements  CompressionInterface
{
    public function __construct()
    {
    }

    static public function getName()
    {
        return 'none';
    }

    public function compress($data)
    {
        return $data;
    }

    public function uncompress($data)
    {
        return $data;
    }
}
