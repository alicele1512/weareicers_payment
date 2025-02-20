# Weareicers Payment
A payment processing library for various gateways like MoMo, Stripe, PayPal, and Card.

[![Source Code](https://img.shields.io/badge/source-alicele1512/weareicers_payment-blue.svg?style=flat-square)](https://github.com/alicele1512/weareicers_payment)
[![Latest Version](https://img.shields.io/github/release/alicele1512/weareicers_payment.svg?style=flat-square)](https://github.com/alicele1512/weareicers_payment/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://github.com/alicele1512/weareicers_payment/blob/master/LICENSE)

## Donate
If you'd like to support the project, please donate via:
[![Buy Me a Coffee](https://img.shields.io/badge/buyme-aCoffee-yellow.svg)](https://www.buymeacoffee.com/alicele)
[![Sponsor](https://img.shields.io/badge/sponsor-GitHub-yellow.svg)](https://github.com/sponsors/alicele1512)
[![Sponsor](https://img.shields.io/badge/sponsor-Paypal-yellow.svg)](https://www.paypal.me/alicele1512)

## Usage Example
use WeareicersPayment\Helpers\PaymentHelper;

$trans_id = PaymentHelper::generateTransactionId();
$formattedAmount = PaymentHelper::formatCurrency(100.0, 'USD');
PaymentHelper::logTransaction("Transaction $trans_id: Payment of $formattedAmount initiated.");
$isValidAmount = PaymentHelper::validateAmount(100.0);

if ($isValidAmount) {
    // Proceed with the payment processing
} else {
    // Handle invalid amount
}


## Installation
You can install the package via Composer:
```bash
composer require alicele1512/weareicers_payment:dev-main
```
or
```bash
git clone https://github.com/alicele1512/weareicers_payment.git
```
