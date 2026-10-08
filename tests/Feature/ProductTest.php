<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_products_page_renders_successfully(): void
    {
        Product::create([
            'name' => 'VELORA Dining Standard',
            'slug' => 'velora-dining-standard',
            'size' => '1 LITER',
            'category' => 'Dining & Athletic',
            'tagline' => 'The Gold Standard for Tables & Restaurants',
            'description' => 'Flagship silhouette for fine dining.',
            'is_active' => true,
        ]);

        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertSee('VELORA Dining Standard');
        $response->assertSee('1 LITER');
        $response->assertSee('Dining & Athletic');
    }

    public function test_inactive_products_are_not_shown_on_public_catalog(): void
    {
        Product::create([
            'name' => 'Active Format',
            'slug' => 'active-format',
            'size' => '500 ML',
            'is_active' => true,
        ]);

        Product::create([
            'name' => 'Archived Secret Format',
            'slug' => 'archived-secret-format',
            'size' => '10 LITER',
            'is_active' => false,
        ]);

        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertSee('Active Format');
        $response->assertDontSee('Archived Secret Format');
    }

    public function test_product_detail_page_renders(): void
    {
        $product = Product::create([
            'name' => 'VELORA Petite Banquet',
            'slug' => 'velora-petite-banquet',
            'size' => '250 ML',
            'category' => 'Personal & Events',
            'description' => 'Single-serve banquet bottles for luxury hospitality.',
            'specs' => [
                'Packaging' => 'BPA-Free Food Grade PET',
                'Carton Size' => '48 Units',
            ],
            'is_active' => true,
        ]);

        $response = $this->get('/products/'.$product->slug);

        $response->assertStatus(200);
        $response->assertSee('VELORA Petite Banquet');
        $response->assertSee('250 ML');
        $response->assertSee('BPA-Free Food Grade PET');
    }

    public function test_product_category_filtering(): void
    {
        Product::create([
            'name' => 'Personal Bottle',
            'slug' => 'personal-bottle',
            'size' => '500 ML',
            'category' => 'Personal & Events',
            'is_active' => true,
        ]);

        Product::create([
            'name' => 'Bulk Dispenser Jar',
            'slug' => 'bulk-dispenser-jar',
            'size' => '20 LITER',
            'category' => 'Bulk & Dispenser',
            'is_active' => true,
        ]);

        $response = $this->get('/products?category=Personal%20%26%20Events');

        $response->assertStatus(200);
        $response->assertSee('Personal Bottle');
        $response->assertDontSee('Bulk Dispenser Jar');
    }
}
