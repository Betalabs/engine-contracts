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
     * Get birthdate.
     *
     * @return string
     */
    public function getBirthDate();

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

    /**
     * Return if the client is natural or legal person.
     *
     * @return boolean
     */
    public function isEmployer();

    /**
     * Return the document number of this legal or natural person.
     *
     * @return string
     */
    public function getDocumentNumber();

    /**
     * Return the client registration date
     *
     * @return string
     */
    public function getRegistrationDate();
}
