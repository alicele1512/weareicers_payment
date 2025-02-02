<?php

namespace WeareicersPayment\Models;

use WeareicersPayment\Helpers\PaymentHelper;
use PDO;

class Payment
{
    private $db;
    private $table = 'payments';

    public $id;
    public $user_id;
    public $payment_method;
    public $transaction_id;
    public $amount;
    public $status;
    public $created_at;
    public $updated_at;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Create a new payment transaction in the database
    public function create()
    {
        $query = "INSERT INTO " . $this->table . " 
                  SET user_id = :user_id, 
                      payment_method = :payment_method, 
                      transaction_id = :transaction_id, 
                      amount = :amount, 
                      status = :status, 
                      created_at = :created_at, 
                      updated_at = :updated_at";

        $stmt = $this->db->prepare($query);

        // Clean data
        $this->user_id = htmlspecialchars(strip_tags($this->user_id));
        $this->payment_method = htmlspecialchars(strip_tags($this->payment_method));
        $this->transaction_id = htmlspecialchars(strip_tags($this->transaction_id));
        $this->amount = htmlspecialchars(strip_tags($this->amount));
        $this->status = htmlspecialchars(strip_tags($this->status));
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = date('Y-m-d H:i:s');

        // Bind values
        $stmt->bindParam(':user_id', $this->user_id);
        $stmt->bindParam(':payment_method', $this->payment_method);
        $stmt->bindParam(':transaction_id', $this->transaction_id);
        $stmt->bindParam(':amount', $this->amount);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':created_at', $this->created_at);
        $stmt->bindParam(':updated_at', $this->updated_at);

        // Execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Retrieve payment by transaction ID
    public function readByTransactionId($transaction_id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE transaction_id = :transaction_id LIMIT 1";

        $stmt = $this->db->prepare($query);

        // Clean data
        $transaction_id = htmlspecialchars(strip_tags($transaction_id));

        // Bind value
        $stmt->bindParam(':transaction_id', $transaction_id);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            // Populate the Payment object with the data
            $this->id = $row['id'];
            $this->user_id = $row['user_id'];
            $this->payment_method = $row['payment_method'];
            $this->transaction_id = $row['transaction_id'];
            $this->amount = $row['amount'];
            $this->status = $row['status'];
            $this->created_at = $row['created_at'];
            $this->updated_at = $row['updated_at'];

            return true;
        }

        return false;
    }

    // Update the status of a payment
    public function updateStatus($status)
    {
        $query = "UPDATE " . $this->table . " 
                  SET status = :status, 
                      updated_at = :updated_at 
                  WHERE transaction_id = :transaction_id";

        $stmt = $this->db->prepare($query);

        // Clean data
        $status = strip_tags($status);
        $this->updated_at = date('Y-m-d H:i:s');

        // Bind values
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':updated_at', $this->updated_at);
        $stmt->bindParam(':transaction_id', $this->transaction_id);

        // Execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Get all payments for a user
    public function getPaymentsByUser($user_id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE user_id = :user_id ORDER BY created_at DESC";

        $stmt = $this->db->prepare($query);

        // Clean data
        $user_id = htmlspecialchars(strip_tags($user_id));

        // Bind value
        $stmt->bindParam(':user_id', $user_id);

        $stmt->execute();

        return $stmt;
    }

    // Get all payments
    public function getAllPayments()
    {
        $query = "SELECT * FROM " . $this->table . " ORDER BY created_at DESC";

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}
