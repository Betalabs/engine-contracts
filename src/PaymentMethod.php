<?php

namespace Betalabs\Engine\Contracts;

interface PaymentMethod
{
    /**
     * Returns payment method's key.
     *
     * @return bool
     */
    public function getKey();

    /**
     * Get payment method's name to describe them.
     */
    public function getName();

    /**
     * Get PaymentGateway related to this PaymentMethod instance.
     *
     * @return \Betalabs\Engine\Contracts\PaymentGateway|null
     */
    public function getPaymentGateway();

    /**
     * Returns true if type is bank slip.
     *
     * @return bool
     */
    public function isBankSlip();

    /**
     * Returns true if type is credit card.
     *
     * @return bool
     */
    public function isCreditCard();

    /**
     * Returns true if type is debit card.
     *
     * @return bool
     */
    public function isDebitCard();

    /**
     * Returns true if type is credit or debit card.
     *
     * @return bool
     */
    public function isCard();

    /**
     * Returns true if type is payment on shipping.
     *
     * @return bool
     */
    public function isPaymentOnShipping();

    /**
     * Returns true if type is non transparent checkout.
     *
     * @return bool
     */
    public function isNonTransparentCheckout();

    /**
     * Returns true if type is PIX.
     *
     * @return bool
     */
    public function isPix();
}
