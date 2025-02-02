<?php
// functions.php

function createPayment($connect, $user_id, $payment_method, $amount) {
    $trans_id = uniqid();
    $stmt = $connect->prepare("INSERT INTO payment (user_id, payment_meth, trans_id, amt, status) VALUES (?, ?, ?, ?, 'pending')");
    $stmt->bind_param("issd", $user_id, $payment_method, $trans_id, $amount);
    $stmt->execute();
    $stmt->close();
    return $trans_id;
}

function updatePaymentStatus($connect, $trans_id, $status) {
    $stmt = $connect->prepare("UPDATE payment SET status = ? WHERE trans_id = ?");
    $stmt->bind_param("ss", $status, $trans_id);
    $stmt->execute();
    $stmt->close();
}
?>
