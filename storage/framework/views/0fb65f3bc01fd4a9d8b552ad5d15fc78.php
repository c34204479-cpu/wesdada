<?php $__env->startSection('title', 'Hubungi Kami - Apotek Medistra Farma'); ?>

<?php $__env->startSection('styles'); ?>
<style>
    /* Contact Header - Mobile First Responsive Design */
    .contact-header {
        background: linear-gradient(135deg, #0f766e 0%, #14b8a6 50%, #2563eb 100%);
        position: relative;
        overflow: hidden;
        min-height: 280px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1.5rem 0;
    }

    .contact-header::before {
        content: '';
        position: absolute;
        top: -80px; right: -80px;
        width: 350px; height: 350px;
        background: radial-gradient(circle, rgba(255,255,255,0.18) 0%, transparent 70%);
        border-radius: 50%;
    }

    .contact-header .header-deco-icon {
        position: absolute;
        color: rgba(255,255,255,0.08);
        pointer-events: none;
        animation: headerIconFloat 6s ease-in-out infinite;
    }

    .contact-header .header-deco-icon-1 { bottom: 10%; right: 8%; font-size: 3rem; animation-delay: 0s; }
    .contact-header .header-deco-icon-2 { top: 15%; right: 25%; font-size: 2.5rem; animation-delay: 2s; }
    .contact-header .header-deco-icon-3 { bottom: 20%; right: 38%; font-size: 2rem; animation-delay: 4s; }

    @keyframes headerIconFloat {
        0%, 100% { transform: translateY(0) rotate(0deg); opacity: 0.08; }
        50%       { transform: translateY(-12px) rotate(8deg); opacity: 0.14; }
    }

    .contact-header .container {
        width: 100%;
        max-width: 100%;
        padding: 0 1rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        z-index: 1;
    }

    /* Breadcrumb - Mobile */
    .breadcrumb-custom {
        display: flex;
        gap: 0.4rem;
        align-items: center;
        margin-bottom: 0.8rem;
        position: relative;
        font-size: 0.75rem;
        flex-wrap: wrap;
    }

    .breadcrumb-custom a,
    .breadcrumb-custom span {
        color: rgba(255,255,255,0.7);
        text-decoration: none;
        font-size: 0.75rem;
    }

    .breadcrumb-custom a:hover {
        color: white;
    }

    .breadcrumb-custom .current {
        color: #d1fae5;
        font-weight: 600;
    }

    /* Heading - Mobile */
    .contact-header h1 {
        font-size: 1.75rem;
        font-weight: 800;
        color: white;
        margin-bottom: 0.6rem;
        position: relative;
        line-height: 1.2;
        letter-spacing: -0.5px;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .contact-header h1 i {
        font-size: 1.5rem;
    }

    /* Description - Mobile */
    .contact-header p {
        color: rgba(255,255,255,0.95);
        font-size: 0.9rem;
        position: relative;
        margin: 0;
        line-height: 1.5;
        font-weight: 400;
    }

    /* Tablet - 768px and up */
    @media (min-width: 768px) {
        .contact-header {
            min-height: 320px;
            padding: 2rem 0;
        }

        .contact-header .container {
            max-width: 1200px;
            padding: 0 1.5rem;
            margin: 0 auto;
        }

        .breadcrumb-custom {
            font-size: 0.85rem;
            margin-bottom: 1rem;
        }

        .breadcrumb-custom a,
        .breadcrumb-custom span {
            font-size: 0.85rem;
        }

        .contact-header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.8rem;
        }

        .contact-header h1 i {
            font-size: 2rem;
        }

        .contact-header p {
            font-size: 1rem;
            line-height: 1.6;
        }

        .contact-header .header-deco-icon-1 { font-size: 3.5rem; }
        .contact-header .header-deco-icon-2 { font-size: 3rem; }
        .contact-header .header-deco-icon-3 { font-size: 2.5rem; }
    }

    /* Desktop - 992px and up */
    @media (min-width: 992px) {
        .contact-header {
            min-height: 340px;
            padding: 2.5rem 0;
        }

        .contact-header .container {
            max-width: 1200px;
            padding: 0 2rem;
        }

        .breadcrumb-custom {
            font-size: 0.9rem;
            margin-bottom: 1.2rem;
        }

        .breadcrumb-custom a,
        .breadcrumb-custom span {
            font-size: 0.9rem;
        }

        .contact-header h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .contact-header h1 i {
            font-size: 2.5rem;
        }

        .contact-header p {
            font-size: 1.05rem;
            line-height: 1.7;
        }

        .contact-header .header-deco-icon-1 { font-size: 4rem; }
        .contact-header .header-deco-icon-2 { font-size: 3.5rem; }
        .contact-header .header-deco-icon-3 { font-size: 3rem; }
    }

    /* Large Desktop - 1400px and up */
    @media (min-width: 1400px) {
        .contact-header {
            min-height: 360px;
            padding: 3rem 0;
        }

        .contact-header h1 {
            font-size: 3.5rem;
            margin-bottom: 1.2rem;
        }

        .contact-header h1 i {
            font-size: 3rem;
        }

        .contact-header p {
            font-size: 1.1rem;
        }
    }

    .contact-main { background: #f8faff; padding: 1rem 0 5rem; }

    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1.6fr;
        gap: 2rem;
        align-items: start;
    }

    /* Info Cards */
    .info-card {
        background: white;
        border-radius: 16px;
        padding: 2rem;
        box-shadow: 0 2px 12px rgba(0,0,0,0.06);
        border: 1px solid #e5e7eb;
    }

    .info-item {
        display: flex;
        gap: 1rem;
        align-items: flex-start;
        padding: 1.1rem 0;
        border-bottom: 1px solid #f3f4f6;
    }
    .info-item:last-child { border-bottom: none; padding-bottom: 0; }
    .info-item:first-child { padding-top: 0; }

    .info-icon {
        width: 42px; height: 42px;
        border-radius: 10px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.1rem; flex-shrink: 0;
    }
    .icon-blue   { background: #e0f2fe; color: #0f766e; }
    .icon-green  { background: #ccfbf1; color: #14b8a6; }
    .icon-orange { background: #dbeafe; color: #2563eb; }
    .icon-purple { background: #dbeafe; color: #1d4ed8; }

    .info-text h4 { font-size: 0.9rem; font-weight: 700; color: #374151; margin-bottom: 0.25rem; }
    .info-text p, .info-text a { font-size: 0.85rem; color: #6b7280; margin: 0; line-height: 1.7; text-decoration: none; }
    .info-text a:hover { color: #0f766e; }

    .social-row { display: flex; gap: 0.6rem; margin-top: 1.25rem; flex-wrap: wrap; }
    .social-btn {
        width: 40px; height: 40px; border-radius: 9px;
        display: flex; align-items: center; justify-content: center;
        color: white; text-decoration: none; font-size: 1rem;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .social-btn img {
        width: 16px; height: 16px; object-fit: contain; display: block;
    }
    .social-btn:hover { transform: translateY(-3px); box-shadow: 0 6px 16px rgba(0,0,0,0.2); color: white; }

    /* Form Card */
    .form-card {
        background: white;
        border-radius: 16px;
        padding: 2rem;
        box-shadow: 0 2px 12px rgba(0,0,0,0.06);
        border: 1px solid #e5e7eb;
    }

    .form-card h3 { font-size: 1.2rem; font-weight: 700; color: #1f2937; margin-bottom: 1.5rem; }

    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem; }

    .form-group { margin-bottom: 1rem; }
    .form-group label { display: block; font-size: 0.85rem; font-weight: 600; color: #374151; margin-bottom: 0.35rem; }
    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%; padding: 0.65rem 0.9rem;
        border: 1.5px solid #e5e7eb; border-radius: 10px;
        font-size: 0.9rem; color: #374151; background: #f9fafb;
        transition: all 0.2s; outline: none; font-family: inherit;
    }
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: #14b8a6; background: white;
        box-shadow: 0 0 0 3px rgba(20,184,166,0.12);
    }
    .form-group textarea { resize: vertical; min-height: 130px; }

    .btn-send {
        width: 100%; padding: 0.85rem;
        background: linear-gradient(135deg, #25D366, #1f8f4a);
        color: white; border: none; border-radius: 10px;
        font-size: 1rem; font-weight: 700; cursor: pointer;
        display: flex; align-items: center; justify-content: center; gap: 0.6rem;
        transition: all 0.3s;
    }
    .btn-send:hover { background: linear-gradient(135deg, #1f8f4a, #188a3a); transform: translateY(-2px); box-shadow: 0 6px 20px rgba(37,211,102,0.35); }

    /* Map */
    .map-section { margin-top: 2.5rem; }
    .map-section h3 { font-size: 1.1rem; font-weight: 700; color: #1f2937; margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem; }
    .map-wrap { border-radius: 16px; overflow: hidden; box-shadow: 0 2px 12px rgba(0,0,0,0.08); border: 1px solid #e5e7eb; }

    @media (max-width: 768px) {
        .contact-main { padding: 1.75rem 0 3rem; }
        .contact-grid { grid-template-columns: 1fr; gap: 1.25rem; }
        .form-row { grid-template-columns: 1fr; gap: 0; }
        .form-card { padding: 1.25rem; }
        .info-card { padding: 1.25rem; }
        .social-row { gap: 0.5rem; }
        .social-btn { width: 38px; height: 38px; }
        .info-text p, .info-text a { font-size: 0.8rem; }
        .info-text h4 { font-size: 0.82rem; }
    }

    @media (max-width: 480px) {
        .form-group textarea { min-height: 100px; }
        .map-wrap iframe { height: 240px; }
        .social-row { gap: 0.45rem; }
        .social-btn { width: 36px; height: 36px; font-size: 0.8rem; }
        .info-text p, .info-text a { font-size: 0.78rem; line-height: 1.5; word-break: break-word; }
        .info-text h4 { font-size: 0.8rem; }
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="contact-header">
    <div class="container">
        <div class="breadcrumb-custom">
            <a href="<?php echo e(route('home')); ?>"><i class="fa-solid fa-house"></i> Home</a>
            <span>/</span>
            <span class="current">Hubungi Kami</span>
        </div>
        <h1><i class="fa-solid fa-headset"></i> Hubungi Kami</h1>
        <p>Kami siap membantu Anda — hubungi melalui WhatsApp, telepon, atau email</p>
    </div>
    <i class="fa-solid fa-headset header-deco-icon header-deco-icon-1"></i>
    <i class="fa-solid fa-phone header-deco-icon header-deco-icon-2"></i>
    <i class="fa-solid fa-envelope header-deco-icon header-deco-icon-3"></i>
</div>

<div class="contact-main">
    <div class="container">
        <div class="contact-grid">

            
            <div>
                
                <div class="info-card">
                    <div class="info-item">
                        <div class="info-icon icon-blue"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="info-text">
                            <h4>Alamat</h4>
                            <p>Jl. R. Suprapto No.48A, Tengah<br>Kec. Delta Pawan<br>Kabupaten Ketapang<br>Kalimantan Barat 78821</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon icon-green"><i class="fa-brands fa-whatsapp"></i></div>
                        <div class="info-text">
                            <h4>WhatsApp</h4>
                            <a href="https://wa.me/6281345559456" target="_blank">+62 813-4555-9456</a>
                            <p style="margin-top:0.2rem;font-size:0.8rem;">Klik untuk chat langsung</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon icon-orange"><i class="fa-solid fa-phone"></i></div>
                        <div class="info-text">
                            <h4>Telepon</h4>
                            <a href="tel:+6281345559456">+62 813-4555-9456</a>
                            <p style="margin-top:0.2rem;font-size:0.8rem;">Buka hingga pukul 21:45</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon icon-purple"><i class="fa-solid fa-envelope"></i></div>
                        <div class="info-text">
                            <h4>Plus Code</h4>
                            <p>5X59+2H Tengah, Ketapang</p>
                        </div>
                    </div>
                </div>

                <div style="margin-top:1.25rem; background:white; border-radius:16px; padding:1.5rem; box-shadow:0 2px 12px rgba(0,0,0,0.06); border:1px solid #e5e7eb;">
                    <h4 style="font-size:0.9rem;font-weight:700;color:#374151;margin-bottom:0.75rem;"><i class="fa-solid fa-share-nodes" style="color:#0f766e;margin-right:0.4rem;"></i> Ikuti Kami</h4>
                    <div class="social-row">
                        <a href="https://wa.me/6281234567890" target="_blank" class="social-btn" style="background:#25D366;" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="https://www.instagram.com/medistrafarmaketapang/" target="_blank" class="social-btn" style="background:linear-gradient(135deg,#f09433,#e6683c,#dc2743,#cc2366,#bc1888);" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.tiktok.com/@apotekmedistrafarma" target="_blank" class="social-btn" style="background:#000000;display:flex;align-items:center;justify-content:center;" title="TikTok"><div style="width:18px;height:18px;background:white;border-radius:6px;display:flex;align-items:center;justify-content:center;"><img src="<?php echo e(asset('logo tiktok.avif')); ?>" alt="TikTok" style="width:14px;height:14px;object-fit:contain;"></div></a>
                        <a href="https://shopee.co.id/" target="_blank" class="social-btn" style="background:#EE3131;display:flex;align-items:center;justify-content:center;" title="Shopee"><div style="width:18px;height:18px;background:white;border-radius:6px;display:flex;align-items:center;justify-content:center;"><img src="<?php echo e(asset('logoshopee.jpeg')); ?>" alt="Shopee" style="width:14px;height:14px;object-fit:contain;"></div></a>
                    </div>
                </div>

            </div>

            
            <div>
                <div class="form-card">
                    <h3><i class="fa-solid fa-paper-plane" style="color:#0f766e;margin-right:0.5rem;"></i> Kirim Pesan via WhatsApp</h3>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap *</label>
                            <input type="text" id="nama" placeholder="Nama Anda">
                        </div>
                        <div class="form-group">
                            <label for="telepon">Nomor Telepon</label>
                            <input type="tel" id="telepon" placeholder="08xx-xxxx-xxxx">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subjek">Subjek *</label>
                        <select id="subjek">
                            <option value="">-- Pilih subjek --</option>
                            <option value="Pertanyaan Pemesanan">Pertanyaan Pemesanan</option>
                            <option value="Pertanyaan Produk">Pertanyaan Produk</option>
                            <option value="Masalah Pengiriman">Masalah Pengiriman</option>
                            <option value="Kerjasama">Kerjasama</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pesan">Pesan *</label>
                        <textarea id="pesan" placeholder="Tuliskan pesan Anda di sini..."></textarea>
                    </div>

                    <p id="formError" style="color:#ef4444;font-size:0.85rem;margin-bottom:0.75rem;display:none;">
                        <i class="fa-solid fa-circle-exclamation"></i> Nama, subjek, dan pesan wajib diisi.
                    </p>

                    <button class="btn-send" onclick="kirimWA()">
                        <i class="fa-brands fa-whatsapp" style="font-size:1.2rem;"></i> Kirim via WhatsApp
                    </button>
                </div>

                
                <div class="map-section">
                    <h3><i class="fa-solid fa-map-location-dot" style="color:#0f766e;"></i> Lokasi Kami</h3>
                    <p style="margin-bottom:0.75rem; font-size:0.95rem; color:#4b5563;">Gunakan rute langsung ke lokasi kami dengan Google Maps.</p>
                    <a href="https://www.google.com/maps/dir/?api=1&destination=5X59+2H+Tengah,+Kabupaten+Ketapang,+Kalimantan+Barat" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:0.5rem;margin-bottom:0.9rem;padding:0.75rem 1rem;background:linear-gradient(135deg,#0f766e,#2563eb);color:#fff;border-radius:999px;text-decoration:none;font-weight:700;box-shadow:0 12px 32px rgba(37,99,235,0.18);">
                        <i class="fa-brands fa-google" style="font-size:1rem;"></i>
                        Buka Rute di Maps
                    </a>
                    <div class="map-wrap">
                        <iframe
                            src="https://maps.google.com/maps?q=5X59%2B2H%20Tengah%2C%20Kabupaten%20Ketapang%2C%20Kalimantan%20Barat&output=embed"
                            width="100%" height="320" style="border:0;display:block;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
function kirimWA() {
    const nama   = document.getElementById('nama').value.trim();
    const telp   = document.getElementById('telepon').value.trim();
    const subjek = document.getElementById('subjek').value;
    const pesan  = document.getElementById('pesan').value.trim();
    const errEl  = document.getElementById('formError');

    if (!nama || !subjek || !pesan) {
        errEl.style.display = 'block';
        return;
    }
    errEl.style.display = 'none';

    const teks =
`Halo Apotek Medistra Farma!

👤 *Nama*    : ${nama}
📱 *Telepon* : ${telp || '-'}
📌 *Subjek*  : ${subjek}

💬 *Pesan*:
${pesan}`;

    window.open('https://wa.me/6281345559456?text=' + encodeURIComponent(teks), '_blank');
}
</script>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.frontend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Ali Attaziri\medistrafarma\resources\views\contact.blade.php ENDPATH**/ ?>