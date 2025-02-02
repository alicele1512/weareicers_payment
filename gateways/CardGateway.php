<?php
// CardGateway.php

class CardGateway {
    private $connect;

    public function __construct($connect) {
        $this->connect = $connect;
    }

    public function processPayment($user_id, $amount, $trans_id) {
        // Include card processing logic here
        // For demonstration, assume payment is always successful
        return true;
    }
}
?>
