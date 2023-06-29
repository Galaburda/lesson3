<?php

class OrderProcessor
{
    public function processOrder(OrderInterface $order,ReportInterface $report)
    {
        $order->generateOrder();
        $report->generationReport();
    }
}


interface OrderInterface
{
    public function generateOrder();
}

class Product implements OrderInterface
{
    public function generateOrder()
    {
        return 'Placing an order for a product';
    }

}

class Service implements OrderInterface
{
    public function generateOrder()
    {
        return 'Placing an order for a service';
    }
}

class Delivery implements OrderInterface
{
    public function generateOrder()
    {
        return 'Placing an order for a delivery' .
    }

}

interface ReportInterface
{
    public function generationReport();
}

class generateReportCSV implements ReportInterface
{
    public function generationReport()
    {
        return 'generated CSV';
    }

}

class generateReportPDF implements ReportInterface
{
    public function generationReport()
    {
        return 'generated PDF';
    }

}

