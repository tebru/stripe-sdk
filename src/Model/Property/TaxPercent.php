<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait TaxPercent
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait TaxPercent
{
    /**
     * @var double
     *
     * @Type("double")
     * @Groups({"CustomerCreate"})
     */
    private $taxPercent;

    /**
     * @return double
     */
    public function getTaxPercent()
    {
        return $this->taxPercent;
    }

    /**
     * @param double $taxPercent
     * @return $this
     */
    public function setTaxPercent($taxPercent)
    {
        $this->taxPercent = $taxPercent;

        return $this;
    }
}
