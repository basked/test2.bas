<?php

namespace Algoritms\Recursion;
class PaymentMoney
{
    private $bills = array(
        100 => 25,
        500 => 50,
        1000 => 25,
        5000 => 3
    );
    private int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function getSumBills():int
    {
        $sum = 0;
        foreach ($this->bills as $key => $val) {
            $sum = $sum + $key * $val;
        }
        return $sum;
    }

    private function validate(): bool
    {
        if ($this->amount >= $this->getSumBills()) {
            echo 'Нет столько денег в банкомате!';
            return false;
        }
        $min_nom = min($this->bills);
        if ($this->amount % $min_nom) {
            echo 'Невозможно выдать: Cумма не кратна ' . $min_nom;
            return false;
        }
        return true;
    }

    public function getSumm()
    {
        return $this->amount;
    }

    public function showMessage()
    {
        if ($this->validate()) {
            echo 'Сумма: ' . $this->getSumm();
        }
    }


}