<?php

namespace App\Providers;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Di hosting public_html = root project, path.public tetap base_path()
        // Di lokal, path.public = base_path('public')
        $this->app->bind('path.public', function () {
            $rootIndexExists = file_exists(base_path('index.php')) && !file_exists(base_path('public/index.php'));
            $rootVendorExists = file_exists(base_path('vendor/autoload.php'));

            if ($rootIndexExists && $rootVendorExists) {
                return base_path(); // hosting: root project dipakai sebagai document root
            }

            return base_path('public'); // lokal: subfolder public/
        });
    }

    public function boot(): void
    {
        // Vite build directory langsung di root public_html/build
        Vite::useBuildDirectory('build');

        // Pada server/hosting, gunakan symlink public/storage => storage/app/public
        // agar file upload nantinya dapat diakses tanpa perlu custom route.
        $storageLink = public_path('storage');
        $targetLink = storage_path('app/public');

        if (!file_exists($storageLink) && is_dir($targetLink)) {
            @symlink($targetLink, $storageLink);
        }

        // Pastikan folder storage selalu ada
        $dirs = [
            storage_path('framework/views'),
            storage_path('framework/cache'),
            storage_path('framework/sessions'),
            storage_path('app/public'),
            storage_path('app/public/medicines'),
            storage_path('app/public/banners'),
            storage_path('app/public/promos'),
            storage_path('app/public/principellogos'),
            storage_path('app/public/news'),
        ];

        foreach ($dirs as $dir) {
            if (!is_dir($dir)) {
                mkdir($dir, 0775, true);
            }
        }
    }
}
