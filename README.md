# Weareicers Payment

A payment processing library for various gateways like MoMo, Stripe, PayPal, and Card.

## Installation

You can install the package via Composer:

```bash
composer require your-username/weareicers_payment


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
