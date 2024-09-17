<?php

// abstract factory
abstract class PaymentAbstructFactory
{
    abstract public function initBkashPayment(): BkashPayment;
    abstract public function initNagadPayment(): NagadPayment;
    abstract public function initCashpayment(): CashPayment;
}

// concreate factory
class PaymentFactory extends PaymentAbstructFactory {
    public function initBkashPayment (): BkashPayment {
        return new BkashPayment();
    }

    public function initNagadPayment (): NagadPayment {
        return new NagadPayment();
    }

    public function initCashpayment (): CashPayment {
        return new CashPayment();
    }
}

// payment interface
interface Payment {
    public function pay(): void;
}

// Bkash concrete implementation
class BkashPayment implements Payment {
    public function pay (): void {
        echo "payment done with bkash \n";
    }
}

// Nagad concrete implementation
class NagadPayment implements Payment {
    public function pay (): void {
        echo "payment with nagad \n";
    }
}

// Cash concrete implementation
class CashPayment implements Payment {
    public function pay (): void {
        echo "payed with cash \n";
    }
}


// client code
$paymentfactory = new PaymentFactory();

$bkashPayment = $paymentfactory->initBkashPayment();
$nagadPayment = $paymentfactory->initNagadPayment();
$cashPayment = $paymentfactory->initCashpayment();

$bkashPayment->pay();
$nagadPayment->pay();
$cashPayment->pay();





/*


MFS Payment
 - Bkash
 - Nagad
 - Upay

PaymentService
 - pay_internet_bill
 - mobile_recharge
 - pay_credit_card_bill




*/