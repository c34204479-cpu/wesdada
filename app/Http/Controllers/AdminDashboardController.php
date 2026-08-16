<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Banner;
use App\Models\News;
use App\Models\Comment;
use App\Constants\Companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $latestBanners = Schema::hasTable('banners') ? Banner::orderBy('urutan')->orderBy('id')->limit(5)->get() : collect();
        $totalBanners  = Schema::hasTable('banners') ? Banner::count() : 0;
        $activeBanners = Schema::hasTable('banners') ? Banner::where('aktif', true)->count() : 0;

        $latestNews = News::latest()->limit(5)->get();
        $totalNews = News::count();
        $publishedNews = News::where('is_published', true)->count();
        $totalComments = Comment::count();

        return view('admin.dashboard', compact(
            'latestBanners', 'totalBanners', 'activeBanners',
            'latestNews', 'totalNews', 'publishedNews', 'totalComments'
        ));
    }

    public function stats()
    {
        $totalNews = News::count();
        $publishedNews = News::where('is_published', true)->count();
        $totalBanners = Schema::hasTable('banners') ? Banner::count() : 0;
        $activeBanners = Schema::hasTable('banners') ? Banner::where('aktif', true)->count() : 0;
        $totalComments = Comment::count();

        return response()->json([
            'totalNews' => $totalNews,
            'publishedNews' => $publishedNews,
            'totalBanners' => $totalBanners,
            'activeBanners' => $activeBanners,
            'totalComments' => $totalComments,
            'generatedAt' => now()->format('H:i:s'),
        ]);
    }

    public function globalStats()
    {
        return response()->json(['message' => 'Unauthorized'], 403);
    }
}

