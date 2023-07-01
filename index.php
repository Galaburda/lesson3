<?php

declare(strict_types=1);

use GeneratePrint\GeneratePDF;
use Order\Delivery;
use Order\Order;

include_once 'Interface/GenerateReportInterface.php';
include_once 'Interface/OrderProcessorInterface.php';
include_once 'Order/Order.php';
include_once 'Order/Delivery.php';
include_once 'Order/Service.php';
include_once 'Order/Product.php';
include_once 'GeneratePrint/GenerateCSV.php';
include_once 'GeneratePrint/GeneratePDF.php';

$orderDelivery = new Delivery();
$reportPDF = new GeneratePDF();
// першим параметрм приймаємо любий тип замовлення другим формуємо лубий тип звіту
$order = new Order($orderDelivery, $reportPDF);