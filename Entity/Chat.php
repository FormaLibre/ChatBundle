<?php

/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FormaLibre\ChatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Claroline\CoreBundle\Entity\Resource\AbstractResource;

/**
 * @ORM\Table(name="formalibre__chat")
 * @ORM\Entity(repositoryClass="FormaLibre\ChatBundle\Repository\ChatRepository")
 */
class Chat extends AbstractResource
{
    /**
     * @ORM\Column(name="field_example")
     */
    protected $field = 'data';
}
