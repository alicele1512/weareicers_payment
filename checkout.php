<?php
// checkout.php
include 'core/db.php';
include 'core/functions.php';
include '../vendor/weareicers_payment/controllers/PaymentController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $payment_method = $_POST['payment_method'];
    $amount = $_POST['amount'];

    $trans_id = createPayment($connect, $user_id, $payment_method, $amount);

    $controller = new PaymentController($connect);
    $result = $controller->processPayment($payment_method, $user_id, $amount, $trans_id);

    if ($result) {
        updatePaymentStatus($connect, $trans_id, 'completed');
        echo "Payment successful. Transaction ID: " . $trans_id;
    } else {
        updatePaymentStatus($connect, $trans_id, 'failed');
        echo "Payment failed.";
    }
} else {
    echo "Invalid request method.";
}
?>
