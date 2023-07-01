<?php

declare(strict_types=1);

namespace Order;

use Interface\OrderProcessorInterface;

class Service implements OrderProcessorInterface
{
    public function processOrder(): Service
    {
        echo 'обробка замовелння на послугу' . PHP_EOL;
        return $this;
    }
}