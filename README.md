# Weareicers Payment

A payment processing library for various gateways like MoMo, Stripe, PayPal, and Card.

## Installation

You can install the package via Composer:

composer require alicele1512/weareicers_payment

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
