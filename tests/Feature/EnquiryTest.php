<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EnquiryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that the VELORA PURE homepage loads successfully.
     */
    public function test_homepage_can_be_rendered(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('VELORA');
        $response->assertSee('PURE BY NATURE');
        $response->assertSee('Packaged Drinking Water');
        $response->assertSee('Alkaline');
        $response->assertSee('250 ML');
        $response->assertSee('20 L');
    }

    /**
     * Test that an enquiry can be submitted via JSON.
     */
    public function test_can_submit_enquiry(): void
    {
        $payload = [
            'name' => 'John Doe',
            'phone' => '+91 9876543210',
            'email' => 'john@example.com',
            'product_type' => 'Alkaline Water (pH 8.5+)',
            'bottle_size' => '1 L',
            'sector' => 'Gym & Fitness',
            'message' => 'Please provide quote for 100 cases monthly.',
        ];

        $response = $this->postJson('/enquiry', $payload);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
        ]);

        $this->assertDatabaseHas('enquiries', [
            'name' => 'John Doe',
            'phone' => '+91 9876543210',
            'bottle_size' => '1 L',
        ]);
    }

    /**
     * Test validation failure when required fields are missing.
     */
    public function test_enquiry_requires_name_and_phone(): void
    {
        $response = $this->postJson('/enquiry', []);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['name', 'phone']);
    }
}
