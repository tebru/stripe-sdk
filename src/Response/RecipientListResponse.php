<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\Property\HasMore;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\TotalCount;
use Tebru\Stripe\Response\Property\Url;

/**
 * Class RecipientListResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class RecipientListResponse extends StripeResponse
{
    use Object;
    use Url;
    use HasMore;
    use TotalCount;

    /**
     * @var RecipientResponse[]
     *
     *
     * @Type("array<Tebru\Stripe\Response\RecipientResponse>")
     */
    private $data;

    /**
     * @return RecipientResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param RecipientResponse[] $data
     * @return $this
     */
    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }
}