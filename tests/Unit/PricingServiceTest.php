<?php

namespace Tests\Unit;

use App\Services\PricingService;
use PHPUnit\Framework\TestCase;

class PricingServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $order = [
            'price' => 100,
            'discount' => 10
        ];

        $service = new PricingService();
        $totalPrice = $service->calculateTotalPrice($order['price'], $order['discount'], 15, 50);
        $this->assertEquals(161.00, $totalPrice);
    }
}
