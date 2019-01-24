<?php

namespace Betalabs\Engine\Contracts;

interface PaymentGateway
{
    /**
     * Get path for integrator class.
     *
     * @return string
     */
    public function getIntegratorClassPath();
}
