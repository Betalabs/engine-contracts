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
     * Some payment gateways allow not inform explicitly payment details.
     * Then bills can be charged using lastest customer payment profile.
     *
     * @return bool
     */
    public function isAllowedNotInformExplicitlyPaymentDetails(): bool;

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
     * @return string
     * @throws \Betalabs\Engine\Contracts\GatewayInactivatedException
     */
    public static function getPostbackUrl(string $gatewayName);

    /**
     * Get configuration value by key.
     *
     * @param string $gatewayName
     * @param string $key
     * @param null   $default
     *
     * @return string
     * @throws \Betalabs\Engine\Contracts\GatewayInactivatedException
     */
    public static function getConfigurationValue(string $gatewayName, string $key, $default = null);
    
    /**
     * Find payment gateway instance using PascalCaseName.
     *
     * @param string $pascalCaseName
     * @return \App\Models\PaymentGateway|null
     */
    public static function findFromPascalCaseName(string $pascalCaseName): ?PaymentGateway;
}
