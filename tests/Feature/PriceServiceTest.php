<?php

namespace Tests\Feature;

use App\Models\Order;
use App\Services\PricingService;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PriceServiceTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_calculates_order_total_cost()
    {
        $order = Order::factory()->create();
        $service = new PricingService();
        $totalPrice = $service->calculateTotalPrice($order->price, $order->discount, 15, 50);
        $this->assertEquals(161.00, $totalPrice);
    }
}
