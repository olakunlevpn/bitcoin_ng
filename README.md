# Bitcoin Naira Currency Converter
Simple bitcoin converter from Nigerian (NGN) currency to bitcoin and also support USD to bitcoin conversion only.

## Features

It is simple, lightweight, extensible, framework agnostic and fast.

* You can convert Bitcoin to any currency Naira (NGN) and USD only
* You can convert Nigerian (NGN) currency (ISO 4217 fiat or another cryptocurrency) to Bitcoin

* It supports different exchange rates providers: Coinbase, Coindesk, Bitpay
* It has baked-in caching (PSR16 compliant, swappable with your own or your framework's)

## Install

Lets begin by installing the library by Composer:

``` bash
$ composer require olakunlevpn/bitcoin_ng
```

## Usage

#### You can then convert Bitcoin to any currency (ISO 4217 fiat or crypto) by:

``` php
use olakunlevpn\BitcoinNairaConverter\Converter;

$convert = new Converter;              // uses Coinbase as default provider
echo $convert->toCurrency('NGN', 0.5); // 2,250,50.00
echo $convert->toCurrency('LTC', 0.5); // 10.12345678
```

or you can use the helper function for convenience:

``` php
// uses Coinbase as default provider
echo to_currency('NGN', 0.5); // 2,250,50.00
echo to_currency('LTC', 0.5); // 10.12345678
```

#### You can also convert any currency (ISO 4217 fiat or crypto) to Bitcoin:

``` php
use olakunlevpn\BitcoinNairaConverter\Converter;

$convert = new Converter;         // uses Coinbase as default provider
echo $convert->toBtc(10000, 'NGN'); // 0.0036664
echo $convert->toBtc(20, 'LTC');  // 1.12345678
```

and it also has its helper function for convenience:

``` php
// uses Coinbase as default provider
echo to_btc(10000, 'NGN'); // 0.0036664
echo to_btc(20, 'LTC');  // 2.12345678
```

#### You can use different exchange rates from providers:

``` php
use olakunlevpn\BitcoinNairaConverter\Converter;
use olakunlevpn\BitcoinNairaConverter\Provider\CoinbaseProvider;
use olakunlevpn\BitcoinNairaConverter\Provider\CoindeskProvider;
use olakunlevpn\BitcoinNairaConverter\Provider\BitpayProvider;

$convert = new Converter(new CoinbaseProvider);
$convert = new Converter(new CoindeskProvider);
$convert = new Converter(new BitpayProvider);
```

or if you prefer to use the helper functions:

``` php
echo to_currency('NGN', 0.5, new CoindeskProvider); // 2,250,50.00
echo to_currency('LTC', 0.5, new BitpayProvider);   // 10.12345678
echo to_btc(10000, 'NGN', new CoindeskProvider);      // 0.00045678
echo to_btc(20, 'LTC', new BitpayProvider);         // 2.12345678
```

#### You can specify cache expire time (ttl) on provider by:

``` php
new CoinbaseProvider($httpClient, $psr16CacheImplementation, 5); // cache expires in 5mins, defaults to 60mins
```

## Change log

Initial release

## Testing

``` bash
$ phpunit
```

#### Show full specs and features:

``` bash
$ phpunit --testdox
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.