<?php

namespace GeneratePrint;

use Interface\GenerateReportInterface;
use Interface\OrderProcessorInterface;

class GenerateCSV implements GenerateReportInterface
{
    public function generateReport(OrderProcessorInterface $data)
    {
        echo 'logic generate CSV' . PHP_EOL;
    }
}