<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait ReceiptEmail
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ReceiptEmail
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"ChargeCreate", "ChargeUpdate", "ChargeCapture"})
     */
    private $receiptEmail;

    /**
     * @return string
     */
    public function getReceiptEmail()
    {
        return $this->receiptEmail;
    }

    /**
     * @param string $receiptEmail
     * @return $this
     */
    public function setReceiptEmail($receiptEmail)
    {
        $this->receiptEmail = $receiptEmail;

        return $this;
    }
}
