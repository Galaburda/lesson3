<?php

declare(strict_types=1);

namespace Order;

use Interface\GenerateReportInterface;
use Interface\OrderProcessorInterface;

class Order
{
    public function __construct(
        OrderProcessorInterface $order,
        GenerateReportInterface $generateReport,
    ) {
        $data = $order->processOrder();
        $generateReport->generateReport($data);
    }
}