<?php


namespace Betalabs\Engine\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Class ZipCodeRange
 *
 * @property-read string $description
 * @property-read int $zip_code_start
 * @property-read int $zip_code_end
 * @property-read float $amount
 * @property-read float $additional_by_extra_weight
 * @property-read float $additional_percentage_by_order_amount
 * @property-read float $additional_percentage_by_calculated_amount
 * @property-read float $min_weight_volume
 * @property-read float $max_weight_volume
 * @property-read float $minimum_amount_insurance
 * @property-read Carbon $deadline
 * @property-read Carbon $deadline_limit
 */
abstract class ZipCodeRange extends Model
{
    //
}