<?php
namespace WeareicersPayment\Controllers;

use WeareicersPayment\Gateways\PayPalGateway;
use WeareicersPayment\Gateways\MoMoGateway;
use WeareicersPayment\Gateways\CardGateway;
use WeareicersPayment\Gateways\StripeGateway;

class PaymentController {
    private $connect;

    public function __construct($connect) {
        $this->connect = $connect;
    }

    public function processPayment($payment_method, $user_id, $amount, $trans_id) {
        switch ($payment_method) {
            case 'paypal':
                $gateway = new PayPalGateway($this->connect);
                return $gateway->processPayment($user_id, $amount, $trans_id);
            case 'momo':
                $gateway = new MoMoGateway($this->connect);
                return $gateway->processPayment($user_id, $amount, $trans_id);
            case 'card':
                $gateway = new CardGateway($this->connect);
                return $gateway->processPayment($user_id, $amount, $trans_id);
            case 'stripe':
                $gateway = new StripeGateway($this->connect);
                return $gateway->processPayment($user_id, $amount, $trans_id);
            default:
                return false;
        }
    }
}
?>
