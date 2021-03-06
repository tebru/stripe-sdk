<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model\Card;

/**
 * Trait Source
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Source
{
    /**
     * @var Card
     *
     * @Type("Tebru\Stripe\Model\Card")
     */
    private $source;

    /**
     * @return Card
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param Card $source
     * @return $this
     */
    public function setSource(Card $source)
    {
        $this->source = $source;

        return $this;
    }
}
