<?php

namespace Betalabs\Engine\Contracts;

use Illuminate\Database\Eloquent\Relations\MorphMany;

interface Configurable
{
    /**
     * Returns Configurations related
     *
     * @param null|string $key
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function configurations(string $key = null): MorphMany;

    /**
     * Create new configuration instance
     *
     * @param $key
     * @param $value
     * @return \Betalabs\Engine\Contracts\Configuration
     */
    public function setValueToConfiguration(
        string $key,
        $value = null
    ): Configuration;

    /**
     * Getter of Configuration value by key
     *
     * @param $key
     * @return mixed
     */
    public function getValueFromConfiguration(string $key);
}
