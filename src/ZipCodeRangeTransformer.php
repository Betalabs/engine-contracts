<?php

namespace Betalabs\Engine\Contracts;

use League\Fractal\TransformerAbstract;

abstract class ZipCodeRangeTransformer extends TransformerAbstract
{
    public function setCalculated(bool $calculated) {
        //
    }
}