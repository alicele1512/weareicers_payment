<?php
// MoMoGateway.php

class MoMoGateway {
    private $connect;

    public function __construct($connect) {
        $this->connect = $connect;
    }

    public function processPayment($user_id, $amount, $trans_id) {
        // Include MoMo processing logic here
        // For demonstration, assume payment is always successful
        return true;
    }
}
?>
