<?php

/*
 * This file is part of the Fidry\AliceDataFixtures package.
 *
 * (c) Théo FIDRY <theo.fidry@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Fidry\AliceDataFixtures\Bridge\Doctrine\PhpCrDocument;

use Doctrine\ODM\PHPCR\Mapping\Annotations\Document;
use Doctrine\ODM\PHPCR\Mapping\Annotations\Id;

/**
 * @Document()
 *
 * @author Théo FIDRY <theo.fidry@gmail.com>
 */
class Dummy
{
    /**
     * @Id()
     */
    public $id;
}
