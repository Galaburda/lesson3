<?php

declare(strict_types=1);

namespace GeneratePrint;

use Interface\GenerateReportInterface;
use Interface\OrderProcessorInterface;

class GeneratePDF implements GenerateReportInterface
{
    public function generateReport(OrderProcessorInterface $data)
    {
        echo 'logic generate PDF' . PHP_EOL;
    }
}