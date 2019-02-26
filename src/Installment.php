<?php

namespace Betalabs\Engine\Contracts;

interface Installment
{
    /**
     * Get gross total value
     *
     * @return float
     */
    public function getGrossTotal(): float;
}
