## Support this project

You can support this project by becoming a sponsor on GitHub:

[![Sponsor](https://img.shields.io/badge/sponsor-GitHub-yellow.svg)](https://github.com/sponsors/alicele1512)

## Donate

If you'd like to support the development of this project, you can donate via PayPal:

[![Donate with PayPal](https://www.paypalobjects.com/webstatic/mktg/logo/PP_logo_h_100x26.png)](https://www.paypal.me/alicele1512)


# Weareicers Payment

A payment processing library for various gateways like MoMo, Stripe, PayPal, and Card.



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

## Directory Structure

root/
├── public_html/
│   ├── core/
│   │   ├── db.php
│   │   ├── functions.php
│   ├── config/
│   ├── checkout.php
│   ├── index.php
├── vendor/
│   ├── weareicers_payment/
│       ├── Controllers/
│       │   └── PaymentController.php
│       ├── Models/
│       │   └── Payment.php
│       ├── Gateways/
│       │   ├── PayPalGateway.php
│       │   ├── MoMoGateway.php
│       │   ├── CardGateway.php
│       │   └── StripeGateway.php
│       ├── Helpers/
│       │   └── PaymentHelper.php# weareicers_payment

## Installation

You can install the package via Composer:

```bash
composer require alicele1512/weareicers_payment
