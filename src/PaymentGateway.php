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
     * @param string $gatewayName
     *
     * @return string
     * @throws \Betalabs\Engine\Contracts\ApiKeyNotFoundException
     * @throws \Betalabs\Engine\Contracts\GatewayInactivatedException
     */
    public static function getApiKey(string $gatewayName);

    /**
     * Get postback url by gateway name and token of the transaction.
     *
     * @param string $gatewayName
     * @param string $token
     * @return string
     * @throws \Betalabs\Engine\Contracts\GatewayInactivatedException
     */
    public static function getPostbackUrl(string $gatewayName, string $token);
}
