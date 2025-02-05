## Donate

If you'd like to support the project, you can donate via Buy Me a Coffee:

[![Buy Me a Coffee](https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png)](https://www.buymeacoffee.com/alicele)

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


## Installation

You can install the package via Composer:

```bash
git clone https://github.com/alicele1512/weareicers_payment.git

or
```bash
composer require alicele1512/weareicers_payment
