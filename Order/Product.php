<?php

declare(strict_types=1);

namespace Order;

use Interface\OrderProcessorInterface;

class Product implements OrderProcessorInterface
{
    public function processOrder(): Product
    {
        echo 'обробка замовелння на товар' . PHP_EOL;
        return $this;
    }
}