<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = config('velora.products', []);

        foreach ($products as $index => $item) {
            Product::updateOrCreate(
                ['slug' => Str::slug($item['name'])],
                [
                    'name' => $item['name'],
                    'size' => $item['size'],
                    'badge' => $item['badge'] ?? null,
                    'category' => match ($item['id'] ?? '') {
                        '250ml', '500ml' => 'Personal & Events',
                        '1l', '2-5l' => 'Dining & Athletic',
                        '5l', '20l' => 'Bulk & Dispenser',
                        default => 'Packaged Drinking Water'
                    },
                    'tagline' => $item['tagline'] ?? null,
                    'description' => $item['description'] ?? null,
                    'specs' => $item['specs'] ?? [],
                    'whatsapp_text' => $item['whatsapp_text'] ?? null,
                    'is_featured' => ! empty($item['popular']),
                    'is_active' => true,
                    'sort_order' => $index + 1,
                ]
            );
        }
    }
}
