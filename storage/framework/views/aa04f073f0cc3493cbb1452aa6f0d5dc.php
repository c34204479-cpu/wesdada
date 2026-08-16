<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="theme-color" content="#0F766E">
    <meta name="msapplication-TileColor" content="#0F766E">
    <?php
        $faviconV = @filemtime(public_path('favicon.ico')) ?: '20260803-13';
    ?>
    <meta property="og:image" content="<?php echo e(asset('logo apotek medistra farma.png')); ?>?v=20260803-8">
    <meta property="og:image:secure_url" content="<?php echo e(asset('logo apotek medistra farma.png')); ?>?v=20260803-8">
    <meta name="twitter:image" content="<?php echo e(asset('logo apotek medistra farma.png')); ?>?v=20260803-8">
    <title><?php echo $__env->yieldContent('title', 'Apotek Medistra Farma - Apotik Online'); ?></title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico?v=<?php echo e($faviconV); ?>">
    <link rel="shortcut icon" href="/favicon.ico?v=<?php echo e($faviconV); ?>">
    
    <!-- FIX CURSOR - MUST BE FIRST TO OVERRIDE EVERYTHING -->
    <style>
        /* FORCE RESET CURSOR - HIGHEST PRIORITY */
        html, html *, html *::before, html *::after,
        body, body *, body *::before, body *::after {
            cursor: auto !important;
        }
        a, a *, button, button *, [role="button"], [onclick], 
        input[type="button"], input[type="submit"], input[type="reset"], select {
            cursor: pointer !important;
        }
        input[type="text"], input[type="email"], input[type="password"],
        input[type="search"], input[type="tel"], input[type="url"],
        input[type="number"], textarea {
            cursor: text !important;
        }
        [disabled], .disabled {
            cursor: not-allowed !important;
        }
    </style>
    <link rel="stylesheet" href="<?php echo e(asset('css/fix-cursor.css')); ?>">
    
    <!-- Fix Cursor Script - Load ASAP -->
    <script>
        // Immediate cursor fix - runs before page loads
        (function() {
            'use strict';
            function fix() {
                document.documentElement.style.setProperty('cursor', 'auto', 'important');
                if (document.body) {
                    document.body.style.setProperty('cursor', 'auto', 'important');
                }
            }
            fix();
            setInterval(fix, 100);
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', fix);
            }
        })();
    </script>
    
    <!-- Font Awesome (switched to jsDelivr mirror to avoid CDN font issues) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.0/css/all.min.css">
    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <style>
        /* ===== BOOTSTRAP GRID REPLACEMENT ===== */
        *, *::before, *::after { box-sizing: border-box; }
        html, body { overflow-x: hidden; max-width: 100%; }        html { min-height: 100%; }
        body { margin: 0; display: flex; flex-direction: column; min-height: 100vh; }
        img, svg, video { max-width: 100%; height: auto; display: block; }
        button, input, textarea, select { max-width: 100%; }
        .container { width: 100%; max-width: 100%; padding-left: 1rem; padding-right: 1rem; margin-left: auto; margin-right: auto; }
        @media (max-width: 480px) {
            .container { padding-left: 0.75rem; padding-right: 0.75rem; }
        }
        .row { display: flex; flex-wrap: wrap; margin-left: -0.75rem; margin-right: -0.75rem; }
        .row > * { padding-left: 0.75rem; padding-right: 0.75rem; width: 100%; }
        .col-lg-6 { flex: 0 0 auto; }
        .col-lg-5 { flex: 0 0 auto; }
        .col-lg-7 { flex: 0 0 auto; }
        @media (min-width: 992px) {
            .col-lg-6 { width: 50%; }
            .col-lg-5 { width: 41.6667%; }
            .col-lg-7 { width: 58.3333%; }
            .d-none { display: none !important; }
            .d-lg-block { display: block !important; }
            .align-items-center { align-items: center !important; }
        }
        @media (max-width: 991px) {
            .col-lg-6, .col-lg-5, .col-lg-7 { width: 100%; }
            .d-none { display: none !important; }
        }
        .g-5 { gap: 1.5rem; }
        .g-3 { gap: 1rem; }

        /* ===== GLOBAL SECTION DECORATIONS ===== */

        /* Header pages */
        .about-header, .contact-header, .act-header,
        .news-page-header, .products-header, .page-header {
            position: relative;
            overflow: hidden;
        }

        /* Floating deco icons di semua header */
        .header-deco-icon {
            position: absolute;
            color: rgba(255,255,255,0.08);
            pointer-events: none;
            animation: headerIconFloat 6s ease-in-out infinite;
        }
        .header-deco-icon-1 { bottom: 10px; right: 12%; font-size: 4rem;   animation-delay: 0s; }
        .header-deco-icon-2 { top: 15px;   right: 28%; font-size: 3rem;   animation-delay: 2s; }
        .header-deco-icon-3 { bottom: 20px; right: 40%; font-size: 2.5rem; animation-delay: 4s; }

        @keyframes headerIconFloat {
            0%, 100% { transform: translateY(0) rotate(0deg);   opacity: 0.08; }
            50%       { transform: translateY(-12px) rotate(8deg); opacity: 0.15; }
        }

        /* Stats bar */
        .stats-bar { position: relative; overflow: hidden; }
        .stats-bar::before {
            content: '';
            position: absolute;
            top: -40px; left: -40px;
            width: 180px; height: 180px;
            background: radial-gradient(circle, rgba(220,38,38,0.07) 0%, transparent 70%);
            border-radius: 50%; pointer-events: none;
        }
        .stats-bar::after {
            content: '';
            position: absolute;
            bottom: -40px; right: -40px;
            width: 160px; height: 160px;
            background: radial-gradient(circle, rgba(220,38,38,0.07) 0%, transparent 70%);
            border-radius: 50%; pointer-events: none;
        }

        /* Products section */
        .products-section { position: relative; overflow: hidden; }
        .products-section::before {
            content: '';
            position: absolute;
            top: -60px; right: -60px;
            width: 300px; height: 300px;
            background: radial-gradient(circle, rgba(220,38,38,0.05) 0%, transparent 70%);
            border-radius: 50%; pointer-events: none;
        }
        .products-section::after {
            content: '';
            position: absolute;
            bottom: 40px; left: -80px;
            width: 250px; height: 250px;
            background: radial-gradient(circle, rgba(220,38,38,0.05) 0%, transparent 70%);
            border-radius: 50%; pointer-events: none;
        }

        /* About section */
        .about-section { position: relative; overflow: hidden; }
        .about-section::before {
            content: '';
            position: absolute;
            top: -80px; right: -80px;
            width: 350px; height: 350px;
            background: radial-gradient(circle, rgba(220,38,38,0.04) 0%, transparent 70%);
            border-radius: 50%; pointer-events: none;
        }
        .about-section::after {
            content: '';
            position: absolute;
            bottom: -60px; left: -60px;
            width: 280px; height: 280px;
            background: radial-gradient(circle, rgba(220,38,38,0.05) 0%, transparent 70%);
            border-radius: 50%; pointer-events: none;
        }

        /* About/contact/act main */
        .about-main, .contact-main, .act-main { position: relative; overflow: hidden; }
        .about-main::before, .contact-main::before, .act-main::before {
            content: '';
            position: absolute;
            top: 0; right: -100px;
            width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(220,38,38,0.03) 0%, transparent 70%);
            border-radius: 50%; pointer-events: none;
        }

        /* Section card subtle deco */
        .section-card { position: relative; overflow: hidden; }
        .section-card::before {
            content: '';
            position: absolute;
            top: -30px; right: -30px;
            width: 120px; height: 120px;
            background: radial-gradient(circle, rgba(220,38,38,0.04) 0%, transparent 70%);
            border-radius: 50%; pointer-events: none;
        }

        /* Footer */
        .footer { position: relative; overflow: hidden; }
        .footer::before {
            content: '';
            position: absolute;
            top: -80px; right: -80px;
            width: 350px; height: 350px;
            background: radial-gradient(circle, rgba(220,38,38,0.05) 0%, transparent 70%);
            border-radius: 50%; pointer-events: none;
        }
        .footer::after {
            content: '';
            position: absolute;
            bottom: -60px; left: -60px;
            width: 280px; height: 280px;
            background: radial-gradient(circle, rgba(220,38,38,0.04) 0%, transparent 70%);
            border-radius: 50%; pointer-events: none;
        }

        /* ===== CARD DECORATIONS ===== */
        .medicine-card, .news-card, .news-preview-card, .photo-card,
        .feature-item, .section-card, .vm-card, .value-item,
        .stat-box, .info-card, .form-card, .detail-container,
        .news-detail-content, .about-image-main, .float-stat {
            position: relative;
            overflow: hidden;
        }

        /* Blob kanan atas - biru */
        .medicine-card::before,
        .news-card::before,
        .news-preview-card::before,
        .feature-item::before,
        .value-item::before,
        .info-card::before,
        .form-card::before,
        .detail-container::before,
        .news-detail-content::before {
            content: '';
            position: absolute;
            top: -25px; right: -25px;
            width: 90px; height: 90px;
            background: radial-gradient(circle, rgba(220,38,38,0.07) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            z-index: 0;
        }

        /* Blob kiri bawah - hijau */
        .medicine-card::after,
        .news-card::after,
        .news-preview-card::after,
        .photo-card::after,
        .feature-item::after,
        .section-card::after,
        .vm-card::after,
        .stat-box::after,
        .info-card::after,
        .form-card::after,
        .detail-container::after,
        .news-detail-content::after,
        .about-image-main::after,
        .float-stat::after {
            content: '';
            position: absolute;
            bottom: -20px; right: -20px;
            width: 75px; height: 75px;
            background: radial-gradient(circle, rgba(220,38,38,0.08) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            z-index: 0;
        }

        /* Section card blob lebih besar */
        .section-card::before {
            content: '';
            position: absolute;
            top: -30px; right: -30px;
            width: 120px; height: 120px;
            background: radial-gradient(circle, rgba(220,38,38,0.05) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            z-index: 0;
        }

        /* ===== BACKGROUND DEKORATIF ===== */
        .med-particles {
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            z-index: 0;
            pointer-events: none;
            overflow: hidden;
        }

        /* Blob / lingkaran blur besar */
        .mp-blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: var(--o, 0.18);
        }

        /* Leaf / daun dekoratif */
        .mp-leaf {
            position: absolute;
            width: var(--w, 120px);
            height: var(--h, 68px);
            border-radius: 70% 0 70% 0;
            background: linear-gradient(135deg, rgba(110, 231, 183, 0.48), rgba(20, 184, 166, 0.28), rgba(14, 116, 144, 0.20));
            border: 1px solid rgba(16, 185, 129, 0.22);
            box-shadow: inset -8px -12px 16px rgba(255,255,255,0.18), 0 10px 18px rgba(15,118,110,0.08);
            transform: rotate(var(--r, 30deg));
            opacity: 0.82;
            filter: blur(0.2px);
        }

        .mp-leaf::before {
            content: '';
            position: absolute;
            inset: 18% 45% 18% 45%;
            border-radius: 999px;
            background: rgba(255,255,255,0.24);
            transform: rotate(90deg);
        }

        /* Ring / cincin outline */
        .mp-ring {
            position: absolute;
            border-radius: 50%;
            border: 1px solid rgba(185,28,28,var(--bo, 0.10));
            background: transparent;
            opacity: var(--o, 1);
        }

        /* Persegi panjang miring */
        .mp-rect {
            position: absolute;
            border-radius: 10px;
            background: rgba(185,28,28,var(--o, 0.05));
            transform: rotate(var(--r, 30deg));
        }

        /* Garis panjang diagonal */
        .mp-line {
            position: absolute;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(185,28,28,0.15), transparent);
            transform: rotate(var(--r, -25deg));
            transform-origin: left center;
        }

        /* Dot grid pattern (pseudo-element trick) */
        .mp-dotgrid {
            position: absolute;
            background-image: radial-gradient(circle, rgba(185,28,28,0.13) 1px, transparent 1px);
            background-size: 22px 22px;
            opacity: var(--o, 0.6);
            border-radius: 4px;
        }
    </style>
    
    <style>
        :root {
            --primary: #0F766E;
            --secondary: #0EA5A4;
            --accent: #2563EB;
            --dark: #0f172a;
            --light: #ecfeff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            margin: 0 !important;
            padding: 0 !important;
            font-size: 16px;
            line-height: 1.5;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: var(--navbar-height, 65px);
            background:
                radial-gradient(ellipse 80% 50% at 10% 0%,   rgba(253,232,232,0.85) 0%, transparent 60%),
                radial-gradient(ellipse 60% 40% at 90% 20%,  rgba(254,226,226,0.60) 0%, transparent 55%),
                radial-gradient(ellipse 50% 60% at 50% 80%,  rgba(254,242,242,0.70) 0%, transparent 60%),
                radial-gradient(ellipse 70% 40% at 80% 100%, rgba(253,232,232,0.50) 0%, transparent 55%),
                #fff8f8;
            background-attachment: fixed;
            min-height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: transparent;
            color: var(--dark);
            padding-top: var(--navbar-height, 65px);
        }

        main {
            flex: 1 0 auto;
            padding: 1rem 0;
        }

        /* Semua konten di atas canvas */
        main, footer {
            position: relative;
            z-index: 1;
        }

        /* Pastikan footer selalu di bawah dan tidak dikecilkan */
        footer.footer {
            flex-shrink: 0;
        }
        .float-wrap {
            position: relative;
            z-index: 999;
        }
        /* Cart dan overlay harus di atas segalanya */
        #cartDrawer, .cart-overlay {
            z-index: 2001 !important;
        }

        /* Global card style - solid agar tidak tembus pandang */
        .farma-sidebar, .disease-card, .farma-stat-card,
        .stats-bar, .about-section, .visi-misi-section,
        .team-section, .news-preview-section,
        .section-card, .feature-item, .value-item,
        .info-card, .detail-container, .news-detail-content,
        .about-image-main, .float-stat {
            background: #ffffff !important;
            border: 1px solid rgba(15, 118, 110, 0.08) !important;
            box-shadow: 0 12px 30px rgba(15, 118, 110, 0.06) !important;
            backdrop-filter: none !important;
        }

        /* Section backgrounds */
        .products-main, .farma-main, .act-main,
        .news-main, .about-main, .contact-main,
        .products-section, .features-section,
        .search-section-wrap {
            background: #ffffff !important;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(135deg, #f6fffe 0%, #ebfffb 28%, #e6f8f4 52%, #eef7ff 100%);
            box-shadow: 0 12px 28px rgba(15, 118, 110, 0.12), inset 0 1px 0 rgba(255,255,255,0.9);
            padding: 0.8rem 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            margin: 0 !important;
            z-index: 1100;
            border-bottom: 1px solid rgba(15, 118, 110, 0.12);
        }

        body {
            padding-top: 0;
        }

        .page-offset {
            padding-top: var(--navbar-height, 65px);
        }

        .category-page-header,
        .contact-header,
        .farma-header,
        .act-header,
        .news-page-header,
        .medicines-detail-header,
        .about-page-header {
            padding-top: calc(var(--navbar-height, 65px) + 2.5rem) !important;
            padding-bottom: 2.5rem;
        }

        .products-header {
            padding-top: calc(var(--navbar-height, 65px) + 1rem) !important;
            padding-bottom: 2.5rem;
        }

        /* about-hero adalah section pertama di halaman tentang kami */
        .about-hero {
            padding-top: calc(var(--navbar-height, 65px) + 2rem) !important;
        }

        .navbar-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0.72rem 1.1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            border-radius: 22px;
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(15, 118, 110, 0.12);
            box-shadow: inset 0 1px 0 rgba(255,255,255,0.95), 0 10px 28px rgba(15, 118, 110, 0.08);
        }

        .navbar-brand {
            font-size: 1.22rem;
            font-weight: 800;
            letter-spacing: 0.02em;
            color: #0f172a;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.7rem;
            transition: transform 0.25s ease, filter 0.25s ease;
            flex-shrink: 0;
            white-space: nowrap;
            text-shadow: none;
        }

        .navbar-brand:hover {
            transform: translateY(-1px);
            filter: brightness(1.03);
        }

        .navbar-brand img {
            filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.22));
            height: 44px;
            object-fit: contain;
            margin-left: -4px;
            background: rgba(255, 255, 255, 0.96);
            border-radius: 0.95rem;
            padding: 0.42rem;
            box-shadow: 0 10px 22px rgba(0, 0, 0, 0.14);
            border: 1px solid rgba(255, 255, 255, 0.75);
        }

        .navbar-menu {
            display: flex;
            gap: 0.5rem;
            align-items: center;
            list-style: none;
            flex-wrap: wrap;
            justify-content: flex-end;
            flex: 1 1 auto;
            margin: 0;
            padding: 0;
        }

        .navbar-menu li {
            margin: 0;
            list-style: none;
        }

        .navbar-menu a,
        .navbar-menu .logout-btn {
            color: #0f172a;
            text-decoration: none;
            transition: transform 0.2s ease, background 0.25s ease, color 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.7rem 1rem;
            border-radius: 999px;
            font-size: 0.9rem;
            white-space: nowrap;
            position: relative;
            overflow: hidden;
            background: #ffffff;
            border: 1px solid rgba(15, 118, 110, 0.12);
            box-shadow: 0 4px 12px rgba(15, 118, 110, 0.06);
        }

        .navbar-menu a i,
        .navbar-menu .logout-btn i {
            font-size: 0.9rem;
            width: 1.05rem;
            text-align: center;
            opacity: 0.95;
        }

        .navbar-menu a::before,
        .navbar-menu .logout-btn::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(236,254,255,0.9), rgba(255,255,255,0.3));
            opacity: 0;
            transition: opacity 0.25s ease;
            pointer-events: none;
        }

        .navbar-menu a:hover::before,
        .navbar-menu .logout-btn:hover::before {
            opacity: 1;
        }

        .navbar-menu a:hover,
        .navbar-menu .logout-btn:hover {
            background: #f0fdfa;
            border-color: rgba(15, 118, 110, 0.16);
            color: #0f766e;
            transform: translateY(-1px);
            box-shadow: 0 12px 22px rgba(15, 118, 110, 0.08);
        }

        .navbar-menu .logout-btn {
            background: #fff5f5;
            border: 1px solid rgba(239, 68, 68, 0.14);
            cursor: pointer;
            width: auto;
            text-align: center;
            font-size: 0.9rem;
            color: #991b1b;
        }

        .navbar-menu .logout-btn:hover {
            background: #fff1f2;
            border-color: rgba(239, 68, 68, 0.22);
            color: #7f1d1d;
        }

        .navbar-menu .admin-link {
            color: #0f766e;
        }

        .footer-socials {
            display: flex;
            flex-wrap: nowrap;
            gap: 0.5rem;
            margin-top: 1rem;
            justify-content: flex-start;
            align-items: center;
            width: fit-content;
        }

        .social-circle {
            width: 32px;
            height: 32px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background: rgba(255,255,255,0.12);
            color: white;
            text-decoration: none;
            transition: transform 0.2s ease, box-shadow 0.2s ease, filter 0.2s ease;
            flex-shrink: 0;
            box-shadow: none;
            padding: 0;
            overflow: hidden;
        }
        .social-circle:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0,0,0,0.2);
            filter: brightness(1.05);
        }
        .social-circle img {
            width: 16px;
            height: 16px;
            object-fit: contain;
            display: block;
        }
        .footer-content .footer-socials a {
            width: 32px;
            height: 32px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            padding: 0;
            border-radius: 8px;
            overflow: hidden;
        }

        .social-circle:hover {
            background: rgba(255,255,255,0.25);
        }

        /* Social Media Color */
        .social-circle.social-instagram {
            background: linear-gradient(135deg, #f09433 0%, #e6683c 50%, #dc2743 100%);
        }
        .social-circle.social-instagram:hover {
            background: linear-gradient(135deg, #e6683c 0%, #dc2743 50%, #cc2366 100%);
            transform: scale(1.1);
        }
        
        .social-circle.social-whatsapp {
            background: #25D366;
        }
        .social-circle.social-whatsapp:hover {
            background: #1f8f4a;
            transform: scale(1.1);
        }
        
        .social-circle.social-tiktok {
            background: #000000;
        }
        .social-circle.social-tiktok:hover {
            background: #333333;
            transform: scale(1.1);
        }
        
        .social-circle.social-shopee {
            background: #0f766e;
        }
        .social-circle.social-shopee:hover {
            background: #14b8a6;
            transform: scale(1.1);
        }

        .footer-icon {
            margin-right: 0.6rem;
            color: #25D366;
            min-width: 1rem;
        }

        /* Dropdown nav */
        .navbar-menu .has-dropdown { position: relative; }
        .navbar-menu .dropdown-menu-nav {
            display: none;
            position: absolute;
            top: calc(100% + 0.45rem);
            left: 0;
            background: rgba(255,255,255,0.98);
            border-radius: 1rem;
            box-shadow: 0 16px 40px rgba(15, 23, 42, 0.12);
            min-width: 210px;
            padding: 0.55rem;
            z-index: 999;
            list-style: none;
            margin: 0;
            border: 1px solid rgba(15, 118, 110, 0.08);
            overflow: hidden;
        }
        .navbar-menu .has-dropdown:hover .dropdown-menu-nav { display: block; }
        .navbar-menu .dropdown-menu-nav li a {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.72rem 0.9rem;
            color: #1f2937 !important;
            font-size: 0.875rem;
            font-weight: 600;
            background: transparent !important;
            border-radius: 0.75rem;
            white-space: nowrap;
            border: none;
            box-shadow: none;
        }
        .navbar-menu .dropdown-menu-nav li a:hover {
            background: linear-gradient(135deg, #ecfeff, #f0fdf4) !important;
            color: #0f766e !important;
        }

        .admin-login-item a {
            padding: 0.5rem 0.6rem;
            font-size: 1rem;
        }

        /* Cart button di navbar */
        .cart-nav-btn {
            position: relative; background: none; border: none; cursor: pointer;
            color: white; padding: 0.5rem 0.6rem; border-radius: 0.375rem;
            font-size: 1rem; display: flex; align-items: center; transition: background 0.2s;
            flex-shrink: 0;
        }
        .cart-nav-btn:hover { background: rgba(255,255,255,0.2); }
        .cart-badge {
            position: absolute; top: 2px; right: 2px;
            background: #14b8a6; color: white; font-size: 0.6rem; font-weight: 800;
            width: 16px; height: 16px; border-radius: 50%;
            display: none; align-items: center; justify-content: center;
        }

        /* Hamburger Menu */
        .hamburger-menu {
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 5px;
            cursor: pointer;
            background: #ffffff;
            border: 1px solid rgba(15, 118, 110, 0.14);
            border-radius: 14px;
            z-index: 1001;
            padding: 0.7rem 0.72rem;
            box-shadow: 0 10px 24px rgba(15, 118, 110, 0.14);
            transition: all 0.25s ease;
            width: 46px;
            height: 46px;
        }

        .hamburger-menu:hover,
        .hamburger-menu:active {
            background: #111827;
            transform: translateY(-1px);
        }

        .hamburger-menu span {
            width: 22px;
            height: 3px;
            background: #111827;
            border-radius: 999px;
            transition: all 0.25s ease;
            display: block;
            margin: 0;
            line-height: 1;
        }

        .hamburger-menu:hover span,
        .hamburger-menu:active span {
            background: #ffffff;
        }

        .hamburger-menu.active {
            background: #111827;
            box-shadow: 0 10px 24px rgba(15, 118, 110, 0.22);
        }

        .hamburger-menu.active span {
            background: #ffffff;
        }

        .hamburger-menu.active span:nth-child(1) {
            transform: rotate(45deg) translate(5.5px, 5.5px);
        }

        .hamburger-menu.active span:nth-child(2) {
            opacity: 0;
            transform: scaleX(0.1);
        }

        .hamburger-menu.active span:nth-child(3) {
            transform: rotate(-45deg) translate(5.5px, -5.5px);
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #0f766e 0%, #14b8a6 45%, #2563eb 100%) !important;
            color: white;
            padding: 3rem 0;
            margin-top: auto;
            flex-shrink: 0;
            position: relative;
            z-index: 1;
            box-shadow: 0 -4px 20px rgba(14,165,164,0.18), inset 0 1px 0 rgba(255,255,255,0.08);
            border-top: 2px solid rgba(124, 179, 66, 0.4);
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.75rem;
            margin-bottom: 2rem;
        }

        .footer-content > div {
            min-width: 220px;
        }

        .footer-content h3 {
            font-size: 1.1rem;
            margin-bottom: 1rem;
            color: #ecfeff;
        }

        .footer-content ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .footer-content ul li {
            margin-bottom: 0.85rem;
        }

        .footer-content a {
            color: rgba(255,255,255,0.92);
            text-decoration: none;
            transition: color 0.25s ease;
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
            line-height: 1.5;
            font-size: 0.95rem;
            word-break: break-word;
            overflow-wrap: anywhere;
        }

        .footer-content a:hover {
            color: white;
        }

        .footer-content ul a,
        .footer-content > div:not(.footer-socials) a {
            width: 100%;
        }

        .footer-content span {
            color: #d1d5db;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .footer-content a {
                font-size: 0.84rem;
            }
            .social-circle {
                width: 36px;
                height: 36px;
            }
        }

        @media (max-width: 480px) {
            .footer-content a {
                font-size: 0.8rem;
                line-height: 1.4;
                gap: 0.4rem;
            }
            .footer-content h3 {
                font-size: 0.95rem;
            }
            .footer-icon {
                width: 1rem;
            }
            .footer-socials {
                display: flex;
                flex-wrap: nowrap;
                gap: 0.4rem;
                margin-top: 0.75rem;
                justify-content: flex-start;
                align-items: center;
                width: fit-content;
            }
            .social-circle {
                width: 28px !important;
                height: 28px !important;
                min-width: 28px;
                min-height: 28px;
                border-radius: 8px !important;
                padding: 0;
            }
            .footer-content .footer-socials a {
                width: 28px !important;
                height: 28px !important;
                min-width: 28px;
                min-height: 28px;
                border-radius: 8px !important;
                padding: 0;
            }
            .social-circle img {
                width: 13px;
                height: 13px;
            }
        }

        .footer-socials {
            display: flex;
            gap: 0.75rem;
            margin-top: 1rem;
        }

        .social-circle {
            width: 38px;
            height: 38px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            background: rgba(255,255,255,0.12);
            color: white;
            text-decoration: none;
            transition: background 0.25s ease;
        }

        .social-circle:hover {
            background: rgba(255,255,255,0.24);
        }

        /* Social Media Color */
        .social-circle.social-instagram {
            background: linear-gradient(135deg, #f09433 0%, #e6683c 50%, #dc2743 100%);
        }
        .social-circle.social-instagram:hover {
            background: linear-gradient(135deg, #e6683c 0%, #dc2743 50%, #cc2366 100%);
            transform: scale(1.1);
        }
        
        .social-circle.social-whatsapp {
            background: #25D366;
        }
        .social-circle.social-whatsapp:hover {
            background: #1f8f4a;
            transform: scale(1.1);
        }
        
        .social-circle.social-tiktok {
            background: #000000;
        }
        .social-circle.social-tiktok:hover {
            background: #333333;
            transform: scale(1.1);
        }
        
        .social-circle.social-shopee {
            background: #EE3131;
        }
        .social-circle.social-shopee:hover {
            background: #C41C1C;
            transform: scale(1.1);
        }

        .footer-icon {
            width: 1.2rem;
            color: #25D366;
            flex-shrink: 0;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.18);
            padding-top: 1.5rem;
            text-align: center;
            color: rgba(255,255,255,0.82);
            font-size: 0.95rem;
        }

        .footer h3 {
            margin-bottom: 1rem;
            color: #ecfeff;
        }

        .footer ul {
            list-style: none;
        }

        .footer ul li {
            margin-bottom: 0.5rem;
        }

        .footer ul a {
            color: rgba(255,255,255,0.9);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer ul a:hover {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.18);
            padding-top: 2rem;
            text-align: center;
            color: rgba(255,255,255,0.82);
        }

        /* Alert */
        .alert {
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }

        .alert-success {
            background: #fee2e2;
            color: #065f46;
            border-left: 4px solid var(--primary);
        }

        .alert-error {
            background: #fee2e2;
            color: #7f1d1d;
            border-left: 4px solid #14b8a6;
        }

        @media (max-width: 768px) {
            .hamburger-menu {
                display: flex;
            }

            .navbar-container {
                padding: 0.5rem 1rem;
            }

            .navbar-menu {
                position: fixed;
                left: 0;
                top: var(--navbar-height, 65px);
                width: min(92vw, 430px);
                right: 0;
                margin: 0 auto;
                background: rgba(8, 47, 73, 0.9);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
                border: 1px solid rgba(255,255,255,0.12);
                border-radius: 0 0 22px 22px;
                box-shadow: 0 20px 42px rgba(15, 118, 110, 0.18);
                flex-direction: column;
                justify-content: flex-start;
                gap: 0.25rem;
                padding: 0 0.85rem;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.35s ease, padding 0.35s ease, opacity 0.25s ease;
                z-index: 999;
                opacity: 0;
            }

            .navbar-menu.active {
                max-height: 80vh;
                padding: 0.9rem 0.85rem 1.15rem;
                opacity: 1;
            }

            .navbar-menu li {
                width: 100%;
                margin-bottom: 0.2rem;
            }

            .navbar-menu a,
            .navbar-menu .logout-btn {
                padding: 0.9rem 1rem;
                font-size: 0.96rem;
                display: flex;
                align-items: center;
                gap: 0.7rem;
                border-radius: 12px;
                background: #ffffff;
                border: 1px solid rgba(15, 118, 110, 0.12);
                color: #0f172a;
                transition: all 0.2s ease;
                box-shadow: 0 6px 16px rgba(15, 118, 110, 0.08);
            }

            .navbar-menu a:hover,
            .navbar-menu .logout-btn:hover,
            .navbar-menu a:active,
            .navbar-menu .logout-btn:active {
                background: #111827;
                border-color: rgba(17, 24, 39, 0.3);
                color: #ffffff;
                transform: translateX(2px) scale(1.01);
                box-shadow: 0 10px 20px rgba(17, 24, 39, 0.18);
            }

            .navbar-brand img {
                height: 45px;
            }
        }

        @media (max-width: 480px) {
            .navbar-brand {
                font-size: 0.85rem;
            }

            .navbar-brand img {
                height: 38px;
            }

            .navbar-container {
                padding: 0.5rem 0.75rem;
            }

            .navbar-menu {
                padding: 0 0.75rem;
            }

            .navbar-menu.active {
                padding: 0.75rem 0.75rem 1.25rem;
            }

            .navbar-menu a,
            .navbar-menu .logout-btn {
                padding: 0.75rem 0.875rem;
                font-size: 0.95rem;
            }
        }
    </style>

    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>

    <!-- ===== BACKGROUND DEKORATIF ===== -->
    <div class="med-particles" aria-hidden="true">

        
        <span class="mp-blob" style="width:700px;height:700px;top:-200px;left:-200px;background:radial-gradient(circle,#fca5a5,#fee2e2);--o:0.04;"></span>
        <span class="mp-blob" style="width:500px;height:500px;top:30%;right:-180px;background:radial-gradient(circle,#fecaca,transparent);--o:0.03;"></span>
        <span class="mp-blob" style="width:600px;height:400px;bottom:-100px;left:20%;background:radial-gradient(circle,#fde8e8,transparent);--o:0.04;"></span>
        <span class="mp-blob" style="width:300px;height:300px;top:55%;left:40%;background:radial-gradient(circle,#fca5a5,transparent);--o:0.02;"></span>

        
        <span class="mp-ring" style="width:520px;height:520px;top:-80px;right:-100px;--bo:0.08;"></span>
        <span class="mp-ring" style="width:360px;height:360px;top:-40px;right:-60px;--bo:0.06;"></span>
        <span class="mp-ring" style="width:280px;height:280px;top:38%;left:-60px;--bo:0.07;"></span>
        <span class="mp-ring" style="width:180px;height:180px;top:42%;left:-30px;--bo:0.05;"></span>
        <span class="mp-ring" style="width:420px;height:420px;bottom:-120px;right:5%;--bo:0.07;"></span>
        <span class="mp-ring" style="width:240px;height:240px;bottom:-60px;right:12%;--bo:0.05;"></span>
        <span class="mp-ring" style="width:160px;height:160px;top:22%;left:32%;--bo:0.06;"></span>
        <span class="mp-ring" style="width:90px;height:90px;top:65%;right:22%;--bo:0.09;"></span>

        
        <span class="mp-rect" style="width:80px;height:80px;top:18%;left:8%;--r:20deg;--o:0.04;"></span>
        <span class="mp-rect" style="width:50px;height:50px;top:60%;right:10%;--r:-15deg;--o:0.05;"></span>
        <span class="mp-rect" style="width:120px;height:40px;top:80%;left:55%;--r:30deg;--o:0.04;"></span>
        <span class="mp-rect" style="width:60px;height:60px;top:8%;left:60%;--r:45deg;--o:0.04;"></span>

        
        <span class="mp-line" style="width:600px;top:28%;left:-50px;--r:-18deg;"></span>
        <span class="mp-line" style="width:400px;top:62%;right:0;--r:-22deg;"></span>
        <span class="mp-line" style="width:300px;top:45%;left:30%;--r:12deg;"></span>

        
        <span class="mp-dotgrid" style="width:180px;height:180px;top:5%;right:5%;--o:0.45;"></span>
        <span class="mp-dotgrid" style="width:140px;height:140px;bottom:8%;left:4%;--o:0.40;"></span>

        
        <span class="mp-leaf" style="top:10%;left:8%;--w:110px;--h:62px;--r:-28deg;"></span>
        <span class="mp-leaf" style="top:18%;right:10%;--w:130px;--h:72px;--r:24deg;"></span>
        <span class="mp-leaf" style="top:44%;left:20%;--w:100px;--h:58px;--r:28deg;"></span>
        <span class="mp-leaf" style="bottom:14%;right:18%;--w:120px;--h:70px;--r:-18deg;"></span>
        <span class="mp-leaf" style="bottom:18%;left:38%;--w:90px;--h:54px;--r:38deg;"></span>
        <span class="mp-leaf" style="top:60%;right:36%;--w:88px;--h:50px;--r:-34deg;"></span>

    </div>

    <nav class="navbar">
        <div class="navbar-container">
            <a href="<?php echo e(route('login')); ?>" class="navbar-brand" title="Login Admin Apotek Medistra Farma">
                <img src="<?php echo e(asset('logo apotek medistra farma.png')); ?>" alt="Apotek Medistra Farma Logo">
                APOTEK MEDISTRA FARMA
            </a>
            
            <!-- Hamburger Menu Button -->
            <button class="hamburger-menu" id="hamburgerBtn">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <ul class="navbar-menu" id="navbarMenu">
                <li><a href="<?php echo e(route('home')); ?>"><i class="fa-solid fa-house-medical"></i> Home</a></li>
                <li><a href="<?php echo e(route('about')); ?>"><i class="fa-solid fa-user-doctor"></i> Tentang Kami</a></li>
                <li><a href="<?php echo e(route('contact')); ?>"><i class="fa-solid fa-phone-volume"></i> Hubungi Kami</a></li>
                <li><a href="<?php echo e(route('partners')); ?>"><i class="fa-solid fa-handshake-angle"></i> Mitra Kami</a></li>

                <?php if(auth()->guard()->check()): ?>
                    <?php if(auth()->user()->isAdmin()): ?>
                        <li><a href="<?php echo e(route('admin.dashboard')); ?>" class="admin-link"><i class="fa-solid fa-chart-column"></i> Admin Panel</a></li>
                        <li>
                            <form action="<?php echo e(route('logout')); ?>" method="POST" style="margin: 0;">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="logout-btn"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
                            </form>
                        </li>
                    <?php elseif(auth()->user()->isUser()): ?>
                        <li>
                            <form action="<?php echo e(route('customer.logout')); ?>" method="POST" style="margin: 0;">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="logout-btn">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout (<?php echo e(auth()->user()->name); ?>)
                                </button>
                            </form>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>

            
            <?php if(Route::is(['products.*', 'medicines.show'])): ?>
                <button class="cart-nav-btn" id="cartNavBtn" onclick="if(typeof openCart==='function'){openCart();}else{window.location.href='<?php echo e(route('products.apotek')); ?>#keranjang';}" title="Keranjang Belanja" style="display:none;">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="cart-badge" id="cartBadgeNav">0</span>
                </button>
            <?php endif; ?>
        </div>
    </nav>

    <!-- Content -->
    <main class="page-offset">
        <!-- Alert Messages -->
        <?php if($message = Session::get('success')): ?>
            <div class="container" style="padding-top:0.75rem;">
                <div class="alert alert-success">
                    <?php echo e($message); ?>

                </div>
            </div>
        <?php endif; ?>

        <?php if($message = Session::get('error')): ?>
            <div class="container" style="padding-top:0.75rem;">
                <div class="alert alert-error">
                    <?php echo e($message); ?>

                </div>
            </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div>
                    <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:1rem;">
                        <img src="<?php echo e(asset('logo apotek medistra farma.png')); ?>" alt="Logo Apotek Medistra Farma" style="width:52px; height:52px; object-fit:contain; border-radius:12px; background:rgba(255,255,255,0.7); padding:0.35rem; box-shadow:0 8px 16px rgba(15,118,110,0.12);">
                        <h3 style="margin:0;">Apotek Medistra Farma</h3>
                    </div>
                    <p>Apotek yang hadir untuk melayani kebutuhan kesehatan masyarakat dengan produk terpercaya dan layanan yang ramah.</p>
                </div>
                <div>
                    <h3>Informasi</h3>
                    <ul>
                        <li><a href="<?php echo e(route('contact')); ?>"><i class="fa-solid fa-headset fa-fw footer-icon"></i>Hubungi Kami</a></li>
                        <li><a href="<?php echo e(route('about')); ?>"><i class="fa-solid fa-circle-info fa-fw footer-icon"></i>Tentang Kami</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Kontak</h3>
                    <ul>
                        <li>
                            <a href="tel:+6281345559456"><i class="fa-solid fa-phone footer-icon"></i>+62 813-4555-9456</a>
                        </li>
                        <li>
                            <a href="https://wa.me/6281345559456"><i class="fa-brands fa-whatsapp footer-icon"></i>WhatsApp</a>
                        </li>
                        <li>
                            <a href="https://www.google.com/maps/place/Apotik+Medistra+Farma/@-1.8424851,109.9688892,15z/data=!3m1!4b1!4m6!3m5!1s0x2e051868c6b622a1:0x2fc87b2c88183a37!8m2!3d-1.8424851!4d109.9688892!16s%2Fg%2F11c27qz84k?entry=ttu" target="_blank" rel="noopener"><i class="fa-solid fa-map-location-dot footer-icon"></i>Lihat di Maps</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Apotek Medistra Farma. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- Floating Buttons -->
    <style>
        .float-wrap { position:fixed; bottom:1.75rem; right:1.75rem; display:flex; flex-direction:column; align-items:center; gap:0; z-index:999; }

        /* Links container desktop */
        .float-links {
            display:flex; flex-direction:column; align-items:center; gap:0.9rem;
        }

        .float-item { position:relative; display:flex; align-items:center; justify-content:center; }
        .float-tooltip { display:none; }
        .float-label-mobile { display:none; }

        .float-btn {
            width:38px; height:38px; border-radius:50%; display:flex; align-items:center; justify-content:center;
            text-decoration:none; transition:transform 0.2s, box-shadow 0.2s; flex-shrink:0;
            font-size:1.1rem;
        }
        .float-btn:hover { transform:scale(1.13); }

        /* WhatsApp lebih besar */
        .float-btn-wa {
            width:60px !important; height:60px !important; font-size:1.85rem !important;
            margin-top:0.6rem;
        }

        /* Toggle button (mobile only) */
        .float-toggle {
            width:58px; height:58px; border-radius:50%; border:none; color:white; font-size:1.1rem; cursor:pointer;
            display:none; align-items:center; justify-content:center; position:relative; overflow:visible;
            background: radial-gradient(circle at 30% 30%, #5eead4 0%, #14b8a6 22%, #0f766e 46%, #2563eb 100%);
            box-shadow:0 16px 28px rgba(15,118,110,0.32), 0 0 0 6px rgba(255,255,255,0.18), 0 0 0 12px rgba(14,116,144,0.08);
            transition:transform 0.3s ease, box-shadow 0.25s ease, filter 0.25s ease;
            flex-shrink:0;
            z-index: 2;
        }
        .float-toggle::before {
            content:"";
            position:absolute;
            inset:-8px;
            border:1px solid rgba(255,255,255,0.45);
            border-radius:50%;
            opacity:0.9;
            animation: floatOrbPulse 2.4s infinite ease-in-out;
        }
        @keyframes floatOrbPulse {
            0% { transform:scale(0.96); opacity:0.65; }
            50% { transform:scale(1.08); opacity:0.25; }
            100% { transform:scale(0.96); opacity:0.65; }
        }
        .float-toggle:hover {
            transform:translateY(-2px) scale(1.02);
            filter:brightness(1.04);
            box-shadow:0 20px 32px rgba(37,99,235,0.34), 0 0 0 6px rgba(255,255,255,0.2), 0 0 0 12px rgba(14,116,144,0.1);
        }
        .float-toggle.open { transform:rotate(180deg); }

        /* Mobile */
        @media (max-width: 768px) {
            .float-links {
                display:flex; flex-direction:column; align-items:flex-end; gap:0.75rem;
                overflow:hidden; max-height:0; transition:max-height 0.45s ease, opacity 0.35s;
                opacity:0; pointer-events:none;
            }
            .float-links.open {
                max-height:600px; opacity:1; pointer-events:auto;
            }
            .float-wrap { gap:0.6rem; align-items:flex-end; }
            .float-btn { width:46px !important; height:46px !important; font-size:1.25rem !important; }
            .float-btn-wa { width:46px !important; height:46px !important; font-size:1.5rem !important; margin-top:0; }
            .float-toggle {
                width:48px !important;
                height:48px !important;
                font-size:1rem !important;
                display:flex;
            }
            .float-item { gap:0.5rem; flex-direction:row; align-items:center; }
            .float-label-mobile {
                background:#1f2937; color:white; font-size:0.72rem; font-weight:600;
                padding:0.25rem 0.6rem; border-radius:8px; white-space:nowrap;
                display:none;
            }
            .float-links.open .float-label-mobile { display:block; }
        }
    </style>

    <div class="float-wrap">
        <!-- Links (semua tombol) -->
        <div class="float-links" id="floatLinks">
            <!-- Instagram -->
            <div class="float-item">
                <span class="float-tooltip">Instagram</span>
                <span class="float-label-mobile">Instagram</span>
                <a href="https://www.instagram.com/medistrafarmaketapang/" target="_blank" class="float-btn"
                   style="background:linear-gradient(135deg,#f09433,#e6683c,#dc2743,#cc2366,#bc1888);color:white;font-size:1.4rem;box-shadow:0 4px 16px rgba(220,39,67,0.45);">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>

            <!-- TikTok -->
            <div class="float-item">
                <span class="float-tooltip">TikTok</span>
                <span class="float-label-mobile">TikTok</span>
                <a href="https://www.tiktok.com/@apotekmedistrafarma" target="_blank" class="float-btn"
                   style="background:#000;color:white;box-shadow:0 4px 16px rgba(0,0,0,0.25);display:flex;align-items:center;justify-content:center;">
                    <div style="width:24px;height:24px;background:white;border-radius:6px;display:flex;align-items:center;justify-content:center;"><img src="<?php echo e(asset('logo tiktok.avif')); ?>" alt="TikTok" style="width:20px;height:20px;object-fit:cover;border-radius:4px;"></div>
                </a>
            </div>

            <!-- Shopee -->
            <div class="float-item">
                <span class="float-tooltip">Shopee</span>
                <span class="float-label-mobile">Shopee</span>
                <a href="https://shopee.co.id/" target="_blank" class="float-btn"
                   style="background:#EE3131;color:white;box-shadow:0 4px 16px rgba(238,49,49,0.25);display:flex;align-items:center;justify-content:center;">
                    <div style="width:24px;height:24px;background:white;border-radius:6px;display:flex;align-items:center;justify-content:center;"><img src="<?php echo e(asset('logoshopee.jpeg')); ?>" alt="Shopee" style="width:20px;height:20px;object-fit:cover;border-radius:4px;"></div>
                </a>
            </div>

            <!-- WhatsApp -->
            <div class="float-item">
                <span class="float-tooltip">Chat WhatsApp</span>
                <span class="float-label-mobile">WhatsApp</span>
                <a href="https://wa.me/6281345559456?text=Halo%20Apotek%20Medistra%20Farma%2C%20saya%20ingin%20bertanya%20tentang%20produk%20obat."
                   target="_blank" class="float-btn float-btn-wa"
                   style="background:#25D366;color:white;font-size:1.9rem;box-shadow:0 6px 24px rgba(37,211,102,0.55);">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </div>
        </div>

        <!-- Toggle button (mobile only) -->
        <button class="float-toggle" id="floatToggle" onclick="toggleFloat()" aria-label="Buka menu cepat">
            <i class="fa-solid fa-bolt"></i>
        </button>
    </div>

    <script>
        function toggleFloat() {
            const links  = document.getElementById('floatLinks');
            const toggle = document.getElementById('floatToggle');
            links.classList.toggle('open');
            toggle.classList.toggle('open');
        }
        // Desktop: selalu tampil - jangan pakai inline style agar tidak override CSS
        function checkFloatDesktop() {
            const links = document.getElementById('floatLinks');
            if (window.innerWidth > 768) {
                // Hapus semua inline style supaya CSS desktop berlaku
                links.style.maxHeight = '';
                links.style.opacity   = '';
                links.style.overflow  = '';
                links.style.display   = '';
                links.classList.remove('open');
            } else {
                // Mobile: biarkan CSS yang mengatur via class .open
                links.style.maxHeight = '';
                links.style.opacity   = '';
                links.style.overflow  = '';
                links.style.display   = '';
            }
        }
        checkFloatDesktop();
        window.addEventListener('resize', checkFloatDesktop);
    </script>

    <script>
        window.cartSettings = Object.assign({
            storageKey: <?php echo json_encode(auth()->check() ? 'sumberindofarmatama_cart_user_' . auth()->user()->id : 'sumberindofarmatama_cart', 15, 512) ?>
        }, window.cartSettings || {});
    </script>

    <?php echo $__env->yieldContent('scripts'); ?>

    <script>
        // ===== SMOOTH SCROLL =====
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // ===== SCROLL REVEAL =====
        const revealStyle = document.createElement('style');
        revealStyle.textContent = `
            .reveal {
                opacity: 0;
                transform: translateY(32px);
                transition: opacity 0.6s ease, transform 0.6s ease;
            }
            .reveal.visible {
                opacity: 1;
                transform: translateY(0);
            }
            .reveal-left {
                opacity: 0;
                transform: translateX(-40px);
                transition: opacity 0.6s ease, transform 0.6s ease;
            }
            .reveal-left.visible {
                opacity: 1;
                transform: translateX(0);
            }
            .reveal-right {
                opacity: 0;
                transform: translateX(40px);
                transition: opacity 0.6s ease, transform 0.6s ease;
            }
            .reveal-right.visible {
                opacity: 1;
                transform: translateX(0);
            }
            .reveal-scale {
                opacity: 0;
                transform: scale(0.92);
                transition: opacity 0.55s ease, transform 0.55s ease;
            }
            .reveal-scale.visible {
                opacity: 1;
                transform: scale(1);
            }
        `;
        document.head.appendChild(revealStyle);

        // Auto-tag elemen yang perlu dianimasikan
        function tagRevealElements() {
            const selectors = [
                // Cards
                '.feature-card', '.medicine-card', '.news-preview-card',
                '.news-card', '.value-card', '.team-card', '.related-card',
                '.vm-card', '.stat-card',
                // Sections & blocks
                '.about-section', '.about-text', '.about-image-stack',
                '.price-section', '.description-section',
                '.detail-container > .detail-grid',
                '.related-section',
                // Stats bar items
                '.stat-item',
                // Footer columns
                '.footer-content > div',
            ];

            selectors.forEach(sel => {
                document.querySelectorAll(sel).forEach((el, i) => {
                    if (!el.classList.contains('reveal') &&
                        !el.classList.contains('reveal-left') &&
                        !el.classList.contains('reveal-right') &&
                        !el.classList.contains('reveal-scale')) {
                        el.classList.add('reveal');
                        // Stagger delay untuk grid items
                        el.style.transitionDelay = (i % 4) * 0.1 + 's';
                    }
                });
            });

            // Kolom kiri/kanan di row Bootstrap
            document.querySelectorAll('.row > .col-lg-5, .row > .col-md-5').forEach(el => {
                if (!el.querySelector('.reveal-left') && !el.classList.contains('reveal-left')) {
                    el.classList.add('reveal-left');
                }
            });
            document.querySelectorAll('.row > .col-lg-7, .row > .col-md-7').forEach(el => {
                if (!el.classList.contains('reveal-right')) {
                    el.classList.add('reveal-right');
                }
            });
        }

        // IntersectionObserver untuk trigger animasi
        function initObserver() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

            document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale')
                .forEach(el => observer.observe(el));
        }

        // Jalankan setelah DOM siap
        document.addEventListener('DOMContentLoaded', () => {
            tagRevealElements();
            initObserver();
        });

        // Fallback jika DOMContentLoaded sudah lewat
        if (document.readyState !== 'loading') {
            tagRevealElements();
            initObserver();
        }
    </script>

    <script>
        // Cart badge sync - hanya tampilkan jika halaman benar-benar memiliki cart partial
        (function() {
            if (!window.hasProductCart) {
                return;
            }

            // Migrasi sekali: jika ada key lama retail/grosir, gabungkan ke key utama
            ['sumberindofarmatama_cart_retail', 'sumberindofarmatama_cart_grosir'].forEach(function(oldKey) {
                try {
                    const oldData = JSON.parse(localStorage.getItem(oldKey) || '[]');
                    if (oldData.length) {
                        let current = JSON.parse(localStorage.getItem('sumberindofarmatama_cart') || '[]');
                        oldData.forEach(function(item) {
                            const ex = current.find(function(i) { return i.id === item.id; });
                            if (ex) ex.qty += item.qty; else current.push(item);
                        });
                        localStorage.setItem('sumberindofarmatama_cart', JSON.stringify(current));
                        localStorage.removeItem(oldKey);
                    }
                } catch(e) {}
            });

            const defaultPathKey = 'sumberindofarmatama_cart_' + window.location.pathname.toLowerCase().replace(/[^a-z0-9]+/g, '_');
            const storageKey = (window.cartSettings && window.cartSettings.storageKey)
                ? window.cartSettings.storageKey
                : defaultPathKey;
            const cart = JSON.parse(localStorage.getItem(storageKey) || '[]');
            const total = cart.reduce(function(s, i) { return s + i.qty; }, 0);
            
            const badge = document.getElementById('cartBadgeNav');
            const btn   = document.getElementById('cartNavBtn');
            if (badge) { badge.textContent = total; badge.style.display = total > 0 ? 'flex' : 'none'; }
            if (btn) btn.style.display = total > 0 ? 'flex' : 'none';
        })();

        // Hamburger Menu Toggle
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const navbarMenu = document.getElementById('navbarMenu');

        function setNavbarHeight() {
            const navbar = document.querySelector('.navbar');
            if (navbar) {
                document.documentElement.style.setProperty('--navbar-height', navbar.offsetHeight + 'px');
            }
        }
        setNavbarHeight();
        window.addEventListener('DOMContentLoaded', setNavbarHeight);
        window.addEventListener('load', setNavbarHeight);
        window.addEventListener('resize', setNavbarHeight);

        hamburgerBtn.addEventListener('click', () => {
            setNavbarHeight();
            hamburgerBtn.classList.toggle('active');
            navbarMenu.classList.toggle('active');
        });

        // Close menu when clicking on a link
        const menuLinks = navbarMenu.querySelectorAll('a');
        menuLinks.forEach(link => {
            link.addEventListener('click', () => {
                hamburgerBtn.classList.remove('active');
                navbarMenu.classList.remove('active');
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.navbar')) {
                hamburgerBtn.classList.remove('active');
                navbarMenu.classList.remove('active');
            }
        });
    </script>
    
    <!-- Fix Cursor Script -->
    <script src="<?php echo e(asset('js/fix-cursor-override.js')); ?>"></script>
    <script src="<?php echo e(asset('js/fix-cursor.js')); ?>"></script>
</body>
</html>





<?php /**PATH C:\Users\Ali Attaziri\medistrafarma\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>