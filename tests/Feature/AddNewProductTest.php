<?php

namespace Tests\Feature;



use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AddNewProductTest extends TestCase
{
    use RefreshDatabase;
    public function test_add_new_product(): void
    {
        ///AAA

        ///A- Arrange
        $product = Product::factory()->make();


        ///A-Act
        $response = $this->post('api/create-product', [$product]);

        ///A-Assention
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'status',
            'message',
        ]);
    }

}
