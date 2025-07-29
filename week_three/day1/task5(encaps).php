<?php
class BankAccount {
    private $balance = 0; 
    
    public function getBalance() {
        return $this->balance;
    }
    
    public function deposit($amount) {
        $this->balance += $amount;
    }
    
    public function withd($amount) {
        $this->balance -= $amount;
    }
}

$account = new BankAccount();

echo "main: " . $account->getBalance() . "<br>";

$account->deposit(100);
echo "after deposit: " . $account->getBalance() . "<br>";

$account->withd(30);
echo "after withdrawal: " . $account->getBalance() . "<br>";
?>