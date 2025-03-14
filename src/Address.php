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
     * Get complement
     *
     * @return string
     */
    public function getComplement();

    /**
     * Get address zip code.
     *
     * @return string
     */
    public function getZipCode();

    /**
     * Get address neighborhood.
     *
     * @return mixed
     */
    public function getNeighborhood();

    /**
     * Get address city.
     *
     * @return mixed
     */
    public function getCity();

    /**
     * Get address state.
     *
     * @return mixed
     */
    public function getState();
}
