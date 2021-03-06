<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait Currency
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Currency
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"ChargeCreate", "Source", "Card", "ExternalAccount", "BankAccount"})
     */
    private $currency;

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }
}
