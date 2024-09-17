<?php

// simple factory
class PaymentFactory {
    public static function initPayment ($paymentType) : Payment {
        switch ($paymentType) {
            case 'bkash':
                return new BkashPayment();
            case 'nagad':
                return new NagadPayment();
            default:
                return new CashPayment();
        }
    }
}

// payment interface
interface Payment {
    public function pay(): void;
}

// Bkash concrete implementation
class BkashPayment implements Payment {
    public function pay (): void {
        echo "payment done with bkash";
    }
}

// Nagad concrete implementation
class NagadPayment implements Payment {
    public function pay (): void {
        echo "payment with nagad";
    }
}

// Cash concrete implementation
class CashPayment implements Payment {
    public function pay (): void {
        echo "payed with cash";
    }
}


// client code
$paymentfactory = PaymentFactory::initPayment("nagad");
$paymentfactory->pay();