<?php

namespace olakunlevpn\BitcoinNairaConverter\Util;

class CurrencyCodeChecker
{
    /**
     * List of all fiat currencies.
     *
     * @var array
     */
    protected $fiatCurrencyCodes = [
       'NGN','USD'
    ];

    /**
     * List of all crypto currencies.
     *
     * @var array
     */
    protected $cryptoCurrencyCodes = [
        'AUR', 'BIS', 'BTC', 'XBT', 'BCH', 'BCC', 'BC', 'BURST', 'DASH', 'DOGE', 'XDG', 'XDN', 'EMC', 'ETH',
        'ETC', 'GRC', 'IOT', 'MIOTA', 'LTC', 'MZC', 'XMR', 'NMC', 'XEM', 'NXT', 'MSC', 'PPC', 'POT', 'XPM',
        'XRP', 'SIL', 'STC', 'AMP', 'TIT', 'UBQ', 'VTC', 'ZEC', 'XBC', 'XLM', 'XZC', 'NEO', 'LSK', 'STRAT',
        'WAVES', 'BCN', 'HSR', 'BTS', 'STEEM', 'KMD', 'ARK', 'FCT', 'SC', 'GBYTE', 'PIVX', 'DCR', 'DGB',
        'NXS', 'BTCD', 'GAME', 'SYS', 'BLOCK', 'XVG', 'NAV', 'LKK', 'UBQ', 'PART', 'NLC2', 'GXS', 'NLG', 'DCT',
        'FRST', 'RISE', 'EMC', 'LEO', 'XEL', 'IOC', 'XAS', 'ADK', 'PPC', 'RDD', 'WTC', 'FAIR', 'VTC', 'XCP',
        'VIA', 'ETP', 'MONA', 'EXP', 'CLOACK', 'OK', 'ION', 'SIB', 'TCC', 'EB3', 'LBC', 'RADS', 'BAY', 'CRW',
        'POT', 'CLAM', 'PPY', 'SKY', 'ZEN', 'UNO', 'MUE', 'SHIFT', 'BLK', 'SPR', 'SLS', 'GOLOS', 'OMNI', 'YBC',
        'ENRG', 'MOON', 'RBY', 'VRC', 'XRB', 'ECN', 'DMD', 'EDR'
    ];

    /**
     * Check if crypto currency.
     *
     * @param  string  $currencyCode
     * @return boolean
     */
    public function isCryptoCurrency($currencyCode)
    {
        return in_array(strtoupper($currencyCode), $this->cryptoCurrencyCodes);
    }

    /**
     * Check if fiat currency.
     *
     * @param  string  $currencyCode
     * @return boolean
     */
    public function isFiatCurrency($currencyCode)
    {
        return in_array(strtoupper($currencyCode), $this->fiatCurrencyCodes);
    }

    /**
     * Check if currency code.
     *
     * @param  string  $currencyCode
     * @return boolean
     */
    public function isCurrencyCode($currencyCode)
    {
        return $this->isFiatCurrency($currencyCode) || $this->isCryptoCurrency($currencyCode);
    }
}
