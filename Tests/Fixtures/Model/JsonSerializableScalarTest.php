<?php

/*
 * This file is part of the NelmioApiDocBundle.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Nelmio\ApiDocBundle\Tests\Fixtures\Model;

/**
 * @author Marius Kraemer <marius@marius-kraemer.de>
 */
class JsonSerializableScalarTest implements \JsonSerializable
{
    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        return 123;
    }
}
