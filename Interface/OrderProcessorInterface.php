<?php

declare(strict_types=1);

namespace Interface;

interface OrderProcessorInterface
{
    public function processOrder(): OrderProcessorInterface;
}