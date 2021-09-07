<?php

class Product
{
    private string $name;
    private float $startPrice;
    private int $amount;

    public function __construct(string $name, float $startPrice, int $amount)
    {
        $this->name = $name;
        $this->startPrice = $startPrice;
        $this->amount = $amount;
    }

    public function getName(): string {
        return $this->name;
    }
    public function getStartPrice(): float {
        return $this->startPrice;
    }
    public function getAmount(): int {
        return $this->amount;
    }

    public function setPrice(float $price): void {
        $this->startPrice = $price;
    }

    public function setAmount(int $amount): void {
        $this->amount = $amount;
    }

    public function printProduct(): string
    {
        return "{$this->getName()}, price {$this->getStartPrice()} EUR, amount {$this->getAmount()}." . PHP_EOL;
    }
}

$products = [
    new Product("Logitech mouse", 70.00, 14),
    new Product("iPhone 5S", 999.99, 3),
    new Product("Epson EB-U05", 440.46, 1)
];
foreach($products as $product) {
    echo $product->printProduct();
}