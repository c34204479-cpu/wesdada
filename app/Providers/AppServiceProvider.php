<?php

namespace App\Providers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Di hosting public_html = root project, path.public tetap base_path()
        // Di lokal, path.public = base_path('public')
        $this->app->bind('path.public', function () {
            if (file_exists(base_path('vendor/autoload.php')) &&
                file_exists(base_path('index.php'))) {
                return base_path(); // hosting: public_html adalah root
            }
            return base_path('public'); // lokal: subfolder public/
        });
    }

    public function boot(): void
    {
        // Vite build directory langsung di root public_html/build
        Vite::useBuildDirectory('build');

        $this->ensureRequiredDatabaseTables();

        // Pastikan folder storage selalu ada
        $dirs = [
            storage_path('framework/views'),
            storage_path('framework/cache'),
            storage_path('framework/sessions'),
            storage_path('app/public'),
            storage_path('app/public/medicines'),
        ];

        foreach ($dirs as $dir) {
            if (!is_dir($dir)) {
                mkdir($dir, 0775, true);
            }
        }

        // Buat folder storage/medicines di public path (untuk hosting tanpa symlink)
        $publicStorageMedicines = public_path('storage/medicines');
        if (!is_dir($publicStorageMedicines)) {
            @mkdir($publicStorageMedicines, 0775, true);
        }
    }

    protected function ensureRequiredDatabaseTables(): void
    {
        if (!Schema::hasTable('banners')) {
            Schema::create('banners', function (Blueprint $table) {
                $table->id();
                $table->string('judul');
                $table->string('subjudul')->nullable();
                $table->string('gambar');
                $table->string('url_tujuan')->nullable();
                $table->string('label_tombol')->nullable()->default('Lihat Sekarang');
                $table->boolean('aktif')->default(true);
                $table->integer('urutan')->default(0);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('promo_products')) {
            Schema::create('promo_products', function (Blueprint $table) {
                $table->id();
                $table->string('judul');
                $table->string('subjudul')->nullable();
                $table->string('gambar');
                $table->string('url_tujuan')->nullable();
                $table->string('label_tombol')->nullable()->default('Lihat Sekarang');
                $table->boolean('aktif')->default(true);
                $table->integer('urutan')->default(0);
                $table->timestamps();
            });
        }

        if (Schema::hasTable('banners') && !Schema::hasColumn('banners', 'label_tombol')) {
            Schema::table('banners', function (Blueprint $table) {
                $table->string('label_tombol')->nullable()->default('Lihat Sekarang')->after('url_tujuan');
            });
        }

        if (Schema::hasTable('promo_products') && !Schema::hasColumn('promo_products', 'label_tombol')) {
            Schema::table('promo_products', function (Blueprint $table) {
                $table->string('label_tombol')->nullable()->default('Lihat Sekarang')->after('url_tujuan');
            });
        }
    }
}
