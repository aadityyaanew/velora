<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            if (Schema::hasTable('settings')) {
                $dbSettings = Setting::getAllSettings();
                $brand = config('velora.brand', []);

                foreach ($dbSettings as $key => $value) {
                    $brand[$key] = $value;
                }

                // Auto-fallback for raw phone numbers if not explicitly customized
                if (empty($brand['phone_raw']) && !empty($brand['phone'])) {
                    $brand['phone_raw'] = preg_replace('/[^0-9+]/', '', $brand['phone']);
                }

                if (empty($brand['whatsapp_number']) && !empty($brand['phone'])) {
                    $brand['whatsapp_number'] = preg_replace('/[^0-9]/', '', $brand['phone']);
                }

                config(['velora.brand' => $brand]);
                View::share('brand', $brand);
                View::share('siteSettings', $brand);
            }
        } catch (\Throwable $e) {
            // Fail gracefully during deployment or early migrations
        }
    }
}
