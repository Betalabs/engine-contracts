<?php

namespace Betalabs\Engine\Contracts;

interface CreditCard
{
    /**
     * Get number of installments.
     *
     * @return int
     */
    public function getInstallments(): int;
}
