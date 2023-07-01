<?php

declare(strict_types=1);

namespace Order;

use Interface\OrderProcessorInterface;

class Delivery implements OrderProcessorInterface
{
    public function processOrder(): Delivery
    {
        echo 'обробка замовелння на доставку' . PHP_EOL;
        return $this;
    }
}