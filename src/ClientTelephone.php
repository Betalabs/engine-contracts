<?php

namespace Betalabs\Engine\Contracts;

interface ClientTelephone
{
    /**
     * Get phone area code.
     *
     * @return mixed
     */
    public function getDdd();

    /**
     * Get phone number.
     *
     * @return mixed
     */
    public function getNumber();
}
