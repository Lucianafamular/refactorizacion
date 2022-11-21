<?php

namespace App\Services;

class PricingService
{
    public function calculateTotalPrice($price, $discount, $tax, $shippingFeed)
    {
        $orderPrice = $price - $discount + $shippingFeed;
        $totalPrice = $orderPrice * (1 + $tax / 100);
        return $totalPrice;
    }
}

