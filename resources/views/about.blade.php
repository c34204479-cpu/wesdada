@extends('layouts.frontend')

@section('title', 'Tentang Kami - Apotek Medistra Farma')

@section('styles')
<style>
    main.page-offset { padding-top: 0 !important; }

    .about-hero {
        position: relative; background: linear-gradient(135deg, #0f766e 0%, #14b8a6 35%, #2563eb 100%);
        border-radius: 28px; padding: 2.5rem 2.5rem 3rem; color: #fff; overflow: hidden;
        box-shadow: 0 24px 60px rgba(14, 116, 110, 0.22); margin-bottom: 2rem;
    }
    .about-hero::before {
        content: ''; position: absolute; inset: 0; pointer-events: none;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }
    .about-hero-badge { display: inline-flex; align-items: center; gap: 0.4rem; background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.25); border-radius: 999px; padding: 0.35rem 1rem; font-size: 0.78rem; font-weight: 700; letter-spacing: 0.06em; text-transform: uppercase; color: #ecfeff; margin-bottom: 1rem; }
    .about-hero h1 { font-size: clamp(1.8rem, 3.5vw, 2.8rem); font-weight: 900; margin-bottom: 0.75rem; line-height: 1.15; color: #fff; }
    .about-hero p.lead { color: rgba(255,255,255,0.88); max-width: 680px; font-size: 1.02rem; line-height: 1.8; margin-bottom: 1.5rem; }
    .hero-stats { display: flex; flex-wrap: wrap; gap: 1.25rem; margin-top: 0.5rem; }
    .hero-stat { background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2); border-radius: 16px; padding: 0.9rem 1.4rem; text-align: center; min-width: 110px; }
    .hero-stat-num { font-size: 1.7rem; font-weight: 900; line-height: 1; display: block; color: #fff; }
    .hero-stat-label { font-size: 0.72rem; font-weight: 600; color: rgba(255,255,255,0.75); text-transform: uppercase; letter-spacing: 0.05em; margin-top: 0.25rem; display: block; }
    .hero-btn-row { display: flex; flex-wrap: wrap; gap: 0.75rem; margin-top: 1.75rem; }
    .hero-btn-row a { text-decoration: none; display: inline-flex; align-items: center; gap: 0.45rem; padding: 0.75rem 1.25rem; border-radius: 999px; font-weight: 700; font-size: 0.9rem; transition: all 0.2s; }
    .btn-hero-primary { background: #fff; color: #0f766e; }
    .btn-hero-primary:hover { background: #ecfeff; color: #0f766e; }
    .btn-hero-outline { background: rgba(255,255,255,0.12); color: #fff; border: 1px solid rgba(255,255,255,0.3); }
    .btn-hero-outline:hover { background: rgba(255,255,255,0.2); color: #fff; }

    .about-section-label { font-size: 0.72rem; font-weight: 800; letter-spacing: 0.1em; text-transform: uppercase; color: #0f766e; margin-bottom: 0.4rem; display: block; }
    .about-section-title { font-size: clamp(1.35rem, 2.5vw, 1.8rem); font-weight: 800; color: #0f172a; margin-bottom: 0.5rem; line-height: 1.25; }
    .about-section-sub { font-size: 0.95rem; color: #475569; line-height: 1.75; max-width: 640px; }

    .abt-info-grid { display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 1.25rem; margin-bottom: 1.5rem; }
    .abt-card { background: #fff; border: 1px solid #cffafe; border-radius: 20px; padding: 1.75rem; box-shadow: 0 8px 28px rgba(14,116,110,0.06); }
    .abt-card h2 { font-size: 1.1rem; font-weight: 800; color: #0f172a; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem; }
    .abt-card h2 i { color: #0f766e; font-size: 1rem; }
    .abt-card p, .abt-card li { color: #334155; line-height: 1.8; font-size: 0.93rem; }
    .abt-list { padding-left: 1.1rem; margin: 0; }
    .abt-list li { margin-bottom: 0.4rem; }

    .abt-visimisi-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem; margin-bottom: 1.5rem; }
    .abt-vm-card { border-radius: 20px; padding: 1.75rem; position: relative; overflow: hidden; }
    .abt-vm-card.visi { background: linear-gradient(135deg, #0f766e, #2563eb); color: #fff; }
    .abt-vm-card.misi { background: #fff; border: 1px solid #cffafe; box-shadow: 0 8px 28px rgba(0,0,0,0.05); }
    .abt-vm-card h3 { font-size: 1.1rem; font-weight: 800; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem; }
    .abt-vm-card.visi h3 { color: #d1fae5; }
    .abt-vm-card.misi h3 { color: #0f172a; }
    .abt-vm-card.misi h3 i { color: #0f766e; }
    .abt-vm-card.visi p { color: rgba(255,255,255,0.9); font-size: 0.95rem; line-height: 1.8; }
    .abt-misi-list { list-style: none; padding: 0; margin: 0; }
    .abt-misi-list li { display: flex; align-items: flex-start; gap: 0.6rem; font-size: 0.9rem; color: #334155; margin-bottom: 0.6rem; line-height: 1.65; }
    .abt-misi-list li i { color: #0f766e; margin-top: 0.15rem; flex-shrink: 0; }

    .abt-nilai-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; margin-bottom: 1.5rem; }
    .abt-nilai-card { background: #fff; border: 1px solid #cffafe; border-radius: 18px; padding: 1.4rem 1rem; text-align: center; box-shadow: 0 6px 20px rgba(0,0,0,0.04); }
    .abt-nilai-icon { width: 52px; height: 52px; border-radius: 14px; background: linear-gradient(135deg, #ecfeff, #ccfbf1); display: flex; align-items: center; justify-content: center; margin: 0 auto 0.85rem; font-size: 1.3rem; color: #0f766e; }
    .abt-nilai-card h4 { font-size: 0.88rem; font-weight: 800; color: #0f172a; margin-bottom: 0.35rem; }
    .abt-nilai-card p { font-size: 0.78rem; color: #475569; line-height: 1.6; margin: 0; }

    .abt-struktur-wrap { background: #fff; border: 1px solid #cffafe; border-radius: 24px; padding: 2rem; box-shadow: 0 8px 28px rgba(0,0,0,0.05); margin-bottom: 1.5rem; }
    .abt-struktur-img { border-radius: 16px; overflow: hidden; border: 2px solid #99f6e4; margin-top: 1.25rem; box-shadow: 0 8px 28px rgba(37, 99, 235, 0.08); }
    .abt-struktur-img img { width: 100%; display: block; object-fit: contain; max-height: 520px; background: #fff; }
    .abt-struktur-note { display: flex; align-items: center; gap: 0.5rem; margin-top: 0.85rem; font-size: 0.82rem; color: #475569; }
    .abt-struktur-note i { color: #0f766e; }

    .abt-gallery-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-bottom: 1.5rem; }
    .abt-gallery-item { border-radius: 18px; overflow: hidden; border: 1px solid #cffafe; background: #fff; box-shadow: 0 8px 24px rgba(0,0,0,0.05); }
    .abt-gallery-item img { width: 100%; height: 200px; object-fit: cover; display: block; }
    .abt-gallery-caption { padding: 0.75rem 1rem; font-size: 0.82rem; font-weight: 600; color: #0f766e; background: #fff; }

    .abt-branch-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem; }
    .abt-branch-card { background: #fff; border: 1px solid #cffafe; border-radius: 20px; padding: 1.5rem; box-shadow: 0 6px 20px rgba(0,0,0,0.04); }
    .abt-branch-head { display: flex; align-items: center; gap: 0.65rem; margin-bottom: 0.85rem; }
    .abt-branch-icon { width: 40px; height: 40px; border-radius: 11px; background: linear-gradient(135deg, #ecfeff, #ccfbf1); display: flex; align-items: center; justify-content: center; font-size: 1rem; color: #0f766e; flex-shrink: 0; }
    .abt-branch-card h3 { font-size: 0.95rem; font-weight: 800; color: #0f172a; margin: 0; }
    .abt-branch-card .abt-branch-sub { font-size: 0.82rem; color: #64748b; margin: 0.15rem 0 0; }
    .abt-branch-card p { font-size: 0.85rem; color: #475569; margin: 0; line-height: 1.6; }

    @media (max-width: 768px) {
        .about-hero { padding: 1.5rem 1.25rem 2rem; border-radius: 20px; }
        .hero-stats { gap: 0.75rem; }
        .hero-stat { min-width: 90px; padding: 0.75rem 1rem; }
        .hero-stat-num { font-size: 1.4rem; }
        .abt-info-grid { grid-template-columns: 1fr; }
        .abt-visimisi-grid { grid-template-columns: 1fr; }
        .abt-nilai-grid { grid-template-columns: repeat(2, 1fr); }
        .abt-gallery-grid { grid-template-columns: 1fr 1fr; }
        .abt-branch-grid { grid-template-columns: 1fr; }
        .abt-struktur-img img { max-height: 260px; }
    }
    @media (max-width: 480px) {
        .abt-gallery-grid { grid-template-columns: 1fr; }
        .abt-nilai-grid { grid-template-columns: repeat(2, 1fr); }
        .hero-stats { gap: 0.5rem; }
        .hero-stat { min-width: 80px; }
    }
</style>
@endsection

@section('content')
<section style="padding: 0 0 5rem; background: linear-gradient(180deg, #f0fdfa 0%, #fff 100%);">
<div class="container">
    <div class="about-hero">
        <span class="about-hero-badge"><i class="fa-solid fa-building-shield"></i> Apotek &amp; Layanan Kesehatan</span>
        <h1>Apotek Medistra Farma</h1>
        <p class="lead">Apotek Medistra Farma hadir untuk menjadi mitra kesehatan masyarakat dengan layanan yang ramah, produk yang terpercaya, dan kepedulian terhadap kebutuhan obat serta kebutuhan kesehatan harian Anda.</p>
        <div class="hero-stats">
            <div class="hero-stat">
                <span class="hero-stat-num">24/7</span>
                <span class="hero-stat-label">Pelayanan</span>
            </div>
            <div class="hero-stat">
                <span class="hero-stat-num">100%</span>
                <span class="hero-stat-label">Produk</span>
            </div>
            <div class="hero-stat">
                <span class="hero-stat-num">Aman</span>
                <span class="hero-stat-label">Bergaransi</span>
            </div>
            <div class="hero-stat">
                <span class="hero-stat-num">Tepat</span>
                <span class="hero-stat-label">Layanan</span>
            </div>
        </div>
        <div class="hero-btn-row">
            <a href="{{ route('partners') }}" class="btn-hero-primary"><i class="fa-solid fa-handshake"></i> Lihat Mitra Kami</a>
            <a href="{{ route('contact') }}" class="btn-hero-outline"><i class="fa-solid fa-phone"></i> Hubungi Kami</a>
        </div>
    </div>

    <div style="margin-bottom:1.5rem;">
        <span class="about-section-label"><i class="fa-solid fa-circle-info"></i> Profil Kami</span>
        <h2 class="about-section-title">Siapa Kami</h2>
        <p class="about-section-sub">Apotek Medistra Farma berkomitmen menjadi tempat layanan kesehatan yang cepat, aman, dan profesional untuk kebutuhan obat, alat kesehatan, serta produk pendukung kesehatan masyarakat.</p>
    </div>
    <div class="abt-info-grid">
        <div class="abt-card">
            <h2><i class="fa-solid fa-briefcase-medical"></i> Tentang Apotek</h2>
            <p style="margin-bottom:0.85rem;">Apotek Medistra Farma fokus pada pelayanan kesehatan masyarakat dengan pendekatan yang lebih dekat, cepat, dan ramah. Kami memahami kebutuhan setiap pasien, pelanggan, dan mitra usaha dalam memperoleh produk obat dan layanan kesehatan yang tepat.</p>
            <p style="margin-bottom:0.85rem;">Semua proses pelayanan kami diarahkan untuk memberikan pengalaman belanja obat dan produk kesehatan yang nyaman, aman, serta sesuai kebutuhan tiap individu dan keluarga.</p>
            <ul class="abt-list">
                <li>Pelayanan obat umum dan kebutuhan kesehatan harian</li>
                <li>Produk farmasi sesuai standar keamanan dan mutu</li>
                <li>Tim pelayanan yang ramah, responsif, dan profesional</li>
                <li>Fokus pada kebutuhan pelanggan serta masyarakat sekitar</li>
            </ul>
        </div>
        <div class="abt-card">
            <h2><i class="fa-solid fa-certificate"></i> Komitmen Kami</h2>
            <ul class="abt-list">
                <li><strong>Kualitas</strong> — produk yang dipilih sesuai kebutuhan dan standar aman</li>
                <li><strong>Pelayanan</strong> — cepat, sopan, dan mudah diakses</li>
                <li><strong>Kebersihan</strong> — lingkungan apotek yang nyaman dan rapi</li>
                <li><strong>Kepercayaan</strong> — menjadi mitra kesehatan yang dapat diandalkan</li>
                <li><strong>Kecepatan</strong> — responsif terhadap kebutuhan pelanggan</li>
            </ul>
            <div style="margin-top:1rem;padding:0.85rem 1rem;background:#ecfeff;border-radius:12px;border-left:3px solid #0f766e;">
                <p style="margin:0;font-size:0.82rem;color:#0f766e;font-weight:600;"><i class="fa-solid fa-shield-halved"></i>&nbsp; Kami selalu mengutamakan keamanan, kenyamanan, dan kepuasan pelanggan dalam setiap layanan.</p>
            </div>
        </div>
    </div>

    <div style="margin-bottom:1.5rem;margin-top:2rem;">
        <span class="about-section-label"><i class="fa-solid fa-bullseye"></i> Visi &amp; Misi</span>
        <h2 class="about-section-title">Misi Kami</h2>
    </div>
    <div class="abt-visimisi-grid">
        <div class="abt-vm-card visi">
            <h3><i class="fa-solid fa-eye"></i> Visi</h3>
            <p>Menjadi apotek yang dipercaya masyarakat sebagai tempat layanan kesehatan yang aman, modern, dan mudah dijangkau.</p>
        </div>
        <div class="abt-vm-card misi">
            <h3><i class="fa-solid fa-list-check"></i> Misi</h3>
            <ul class="abt-misi-list">
                <li><i class="fa-solid fa-check-circle"></i> Menyediakan produk farmasi yang aman dan berkualitas</li>
                <li><i class="fa-solid fa-check-circle"></i> Memberikan pelayanan yang cepat, ramah, dan profesional</li>
                <li><i class="fa-solid fa-check-circle"></i> Menjadi mitra kesehatan yang dekat dengan masyarakat</li>
                <li><i class="fa-solid fa-check-circle"></i> Mengedepankan dukungan kesehatan serta edukasi yang bermanfaat</li>
                <li><i class="fa-solid fa-check-circle"></i> Menjaga kepercayaan pelanggan melalui konsistensi layanan</li>
            </ul>
        </div>
    </div>

    <div style="margin-bottom:1.5rem;margin-top:2rem;">
        <span class="about-section-label"><i class="fa-solid fa-star"></i> Nilai Kami</span>
        <h2 class="about-section-title">Keunggulan Apotek Medistra Farma</h2>
    </div>
    <div class="abt-nilai-grid">
        <div class="abt-nilai-card">
            <div class="abt-nilai-icon"><i class="fa-solid fa-shield-halved"></i></div>
            <h4>Aman</h4>
            <p>Produk dan layanan yang kami prioritaskan selalu aman dan sesuai standar</p>
        </div>
        <div class="abt-nilai-card">
            <div class="abt-nilai-icon"><i class="fa-solid fa-user-doctor"></i></div>
            <h4>Profesional</h4>
            <p>Tim yang siap membantu dengan layanan yang ramah dan responsif</p>
        </div>
        <div class="abt-nilai-card">
            <div class="abt-nilai-icon"><i class="fa-solid fa-handshake"></i></div>
            <h4>Terpercaya</h4>
            <p>Menjadi mitra kesehatan yang didukung kepercayaan pelanggan</p>
        </div>
        <div class="abt-nilai-card">
            <div class="abt-nilai-icon"><i class="fa-solid fa-bolt"></i></div>
            <h4>Praktis</h4>
            <p>Proses layanan yang sederhana, cepat, dan mudah dijangkau</p>
        </div>
    </div>

    <div class="abt-struktur-wrap">
        <span class="about-section-label"><i class="fa-solid fa-sitemap"></i> Tim Kami</span>
        <h2 class="about-section-title">Tim Apotek Medistra Farma</h2>
        <p class="about-section-sub" style="margin-bottom:0;">Kami memiliki tim yang siap memberikan pelayanan terbaik, menjaga ketersediaan produk, serta mendukung kebutuhan kesehatan masyarakat secara konsisten.</p>
        <div class="abt-struktur-img">
            <img src="{{ asset('TIM APOTEK MEDISTRA FARMA.jpeg') }}" alt="Tim Apotek Medistra Farma" loading="lazy">
        </div>
        <div class="abt-struktur-note">
            <i class="fa-solid fa-circle-info"></i>
            Tim kami senantiasa berkomitmen memberikan pelayanan yang ramah, cepat, dan responsif untuk kebutuhan kesehatan pelanggan.
        </div>
    </div>

    <div style="margin-bottom:1.5rem;margin-top:2rem;">
        <span class="about-section-label"><i class="fa-solid fa-image"></i> Dokumentasi</span>
        <h2 class="about-section-title">Lingkungan &amp; Fasilitas Apotek</h2>
    </div>
    <div class="abt-gallery-grid">
        <div class="abt-gallery-item">
            <img src="{{ asset('APOTEK.jpeg') }}" alt="Tampak depan apotek Medistra Farma" loading="lazy">
            <div class="abt-gallery-caption"><i class="fa-solid fa-building"></i> Tampak Depan</div>
        </div>
        <div class="abt-gallery-item">
            <img src="{{ asset('APOTEK (1).jpeg') }}" alt="Area dalam apotek Medistra Farma" loading="lazy">
            <div class="abt-gallery-caption"><i class="fa-solid fa-store"></i> Area Dalam</div>
        </div>
        <div class="abt-gallery-item">
            <img src="{{ asset('APOTEK (2).jpeg') }}" alt="Area pelayanan apotek Medistra Farma" loading="lazy">
            <div class="abt-gallery-caption"><i class="fa-solid fa-user-nurse"></i> Area Pelayanan</div>
        </div>
        <div class="abt-gallery-item">
            <img src="{{ asset('APOTEK (3).jpeg') }}" alt="Kawasan apotek Medistra Farma" loading="lazy">
            <div class="abt-gallery-caption"><i class="fa-solid fa-house-medical"></i> Kawasan Apotek</div>
        </div>
        <div class="abt-gallery-item">
            <img src="{{ asset('KAWASAN APOTEK (1).jpeg') }}" alt="Kawasan sekitar apotek Medistra Farma" loading="lazy">
            <div class="abt-gallery-caption"><i class="fa-solid fa-location-dot"></i> Kawasan Sekitar</div>
        </div>
        <div class="abt-gallery-item">
            <img src="{{ asset('TEMPAT PEGAWAI (1).jpeg') }}" alt="Area pegawai Apotek Medistra Farma" loading="lazy">
            <div class="abt-gallery-caption"><i class="fa-solid fa-users"></i> Area Pegawai</div>
        </div>
    </div>

    <div style="margin-bottom:1.5rem;margin-top:2rem;">
        <span class="about-section-label"><i class="fa-solid fa-map-location-dot"></i> Kenyamanan</span>
        <h2 class="about-section-title">Pelayanan Yang Mudah Dijangkau</h2>
        <p class="about-section-sub">Apotek Medistra Farma ingin menjadi pilihan utama bagi masyarakat yang membutuhkan layanan kesehatan yang cepat, nyaman, dan dapat diandalkan.</p>
    </div>
    <div class="abt-branch-grid">
        <div class="abt-branch-card">
            <div class="abt-branch-head">
                <div class="abt-branch-icon"><i class="fa-solid fa-truck-medical"></i></div>
                <div>
                    <h3>Produk Kesehatan</h3>
                    <p class="abt-branch-sub">Pilihan produk yang sesuai kebutuhan</p>
                </div>
            </div>
            <p>Menawarkan kebutuhan obat dan produk kesehatan yang bermanfaat untuk keluarga, pasien, serta pelanggan sehari-hari.</p>
        </div>
        <div class="abt-branch-card">
            <div class="abt-branch-head">
                <div class="abt-branch-icon"><i class="fa-solid fa-mobile-screen"></i></div>
                <div>
                    <h3>Layanan Cepat</h3>
                    <p class="abt-branch-sub">Mudah dihubungi dan diakses</p>
                </div>
            </div>
            <p>Pelayanan yang ramah dan cepat membuat proses pemesanan serta konsultasi kebutuhan kesehatan menjadi lebih mudah.</p>
        </div>
    </div>
</div>
</section>
@endsection
