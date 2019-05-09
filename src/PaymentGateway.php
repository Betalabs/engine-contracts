<?php

namespace Betalabs\Engine\Contracts;

interface PaymentGateway extends Configurable
{
    /**
     * Get path for integrator class.
     *
     * @return string
     */
    public function getIntegratorClassPath();

    /**
     * Get API key by gateway name. If neither exists or is not set could return null.
     *
     * @param string $name
     *
     * @return string
     * @throws \Betalabs\Engine\Contracts\ApiKeyNotFoundException
     * @throws \Betalabs\Engine\Contracts\GatewayInactivatedException
     */
    public static function getApiKey(string $name);

    /**
     * Get postback url by gateway name.
     *
     * @param string $name
     * @return string
     * @throws \Betalabs\Engine\Contracts\GatewayInactivatedException
     */
    public static function getPostbackUrl(string $name);
}
