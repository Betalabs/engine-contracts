<?php

namespace Betalabs\Engine\Contracts;

interface Client
{
    /**
     * Get client email.
     *
     * @return string
     */
    public function getEmailAddress();

    /**
     * Get client first telephone.
     *
     * @return \Betalabs\Engine\Contracts\ClientTelephone
     */
    public function getTelephone();

    /**
     * Get first client billing address.
     *
     * @return \Betalabs\Engine\Contracts\Address
     */
    public function getBillingAddress();

    /**
     * Get first client name.
     *
     * @return string
     */
    public function getFirstName();

    /**
     * Get second client name.
     *
     * @return string
     */
    public function getSecondName();

    /**
     * Get full name.
     *
     * @return string
     */
    public function getFullName();
}
