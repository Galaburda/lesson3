<?php

declare(strict_types=1);

namespace Interface;

interface GenerateReportInterface
{
    public function generateReport(OrderProcessorInterface $data);
}