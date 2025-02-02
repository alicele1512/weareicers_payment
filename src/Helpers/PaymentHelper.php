<?php
namespace WeareicersPayment\Helpers;

class PaymentHelper {
    /**
     * Generates a unique transaction ID.
     *
     * @return string The unique transaction ID.
     */
    public static function generateTransactionId() {
        return uniqid('txn_', true);
    }

    /**
     * Formats the amount to a specific currency format.
     *
     * @param float $amount The amount to be formatted.
     * @param string $currency The currency code (e.g., USD, EUR).
     * @return string The formatted amount.
     */
    public static function formatCurrency($amount, $currency = 'USD') {
        return number_format($amount, 2) . ' ' . strtoupper($currency);
    }

    /**
     * Logs payment transactions.
     *
     * @param string $message The log message.
     */
    public static function logTransaction($message) {
        $logFile = __DIR__ . '/../../logs/payment.log';
        $date = date('Y-m-d H:i:s');
        file_put_contents($logFile, "[$date] $message" . PHP_EOL, FILE_APPEND);
    }

    /**
     * Validates the payment amount.
     *
     * @param float $amount The amount to be validated.
     * @return bool True if the amount is valid, false otherwise.
     */
    public static function validateAmount($amount) {
        return is_numeric($amount) && $amount > 0;
    }
}
?>
