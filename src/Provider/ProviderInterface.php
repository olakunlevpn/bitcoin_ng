<?php

namespace Olakunlevpn\BitcoinNairaConverter\Provider;

interface ProviderInterface
{
    /**
     * Get rate of currency code.
     *
     * @param  string $currencyCode
     * @return float
     */
    public function getRate($currencyCode);
}
