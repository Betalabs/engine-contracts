<?php

namespace Betalabs\Engine\Contracts;

interface Address
{
    /**
     * Get full address.
     *
     * @return string
     */
    public function getAddress();

    /**
     * Get address number.
     *
     * @return string
     */
    public function getNumber();

    /**
     * Get address zip code.
     *
     * @return string
     */
    public function getZipCode();
}
