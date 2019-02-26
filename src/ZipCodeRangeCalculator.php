<?php

namespace Betalabs\Engine\Contracts;


interface ZipCodeRangeCalculator
{
    /**
     * Set Zip Code
     *
     * @param string $zipCode
     * @return mixed
     */
    public function setZipCode(string $zipCode);

    /**
     * Set Items Ids to calculate
     *
     * @param array $itemsIds
     * @return mixed
     */
    public function setItemsIds(array $itemsIds);

    /**
     * Set quantities for items setted
     *
     * @param $quantities
     * @return mixed
     */
    public function setQuantities($quantities);

    /**
     * Set channels to consider
     *
     * @param array $channels
     * @return mixed
     */
    public function setChannels(array $channels);

    /**
     * Calculate the freight according specified attributes
     *
     * @return mixed
     */
    public function calculate();
}
