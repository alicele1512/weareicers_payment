# Weareicers Payment

A payment processing library for various gateways like MoMo, Stripe, PayPal, and Card.

## Installation

You can install the package via Composer:

```bash
composer require your-username/weareicers_payment

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
│       ├── controllers/
│       │   └── PaymentController.php
│       ├── models/
│       │   └── Payment.php
│       ├── gateways/
│       │   ├── PayPalGateway.php
│       │   ├── MoMoGateway.php
│       │   ├── CardGateway.php
│       │   └── StripeGateway.php
│       ├── helpers/
│       │   └── PaymentHelper.php# weareicers_payment
