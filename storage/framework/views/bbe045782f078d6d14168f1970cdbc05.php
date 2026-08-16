
<?php $__env->startSection('title', 'Apotek Medistra Farma - Apotik Online Terpercaya'); ?>
<?php $__env->startSection('styles'); ?>
<style>
/* ==============================================
   HOME PAGE - Clean GoApotik Style
   ============================================== */
</style>
<style>
</style>
<style>
/* QUICK CATEGORY */
.quick-section { background: #fff; border-bottom: 1px solid #e5e7eb; padding: 0; display: block; }
.quick-row { display: flex; gap: 0.5rem; overflow-x: auto; padding-bottom: 4px; }
.quick-row::-webkit-scrollbar { height: 3px; }
.quick-row::-webkit-scrollbar-thumb { background: #e5e7eb; border-radius: 2px; }
.quick-btn {
    display: flex; flex-direction: column; align-items: center; gap: 0.35rem;
    padding: 0.5rem 1rem; border-radius: 12px; text-decoration: none;
    color: #374151; white-space: nowrap; flex-shrink: 0;
    border: 1.5px solid #e5e7eb; background: #fff; min-width: 75px;
    transition: all 0.2s; font-size: 0;
}
.quick-btn:hover { background: #ecfeff; border-color: #99f6e4; color: #0f766e; }
.quick-btn.active { background: linear-gradient(135deg,#0f766e,#2563eb); border-color: transparent; color: #fff; }
.quick-btn i { font-size: 1.25rem; }
.quick-btn span { font-size: 0.7rem; font-weight: 600; }

/* PROMO CARDS */
.promo-section { 
    padding: calc(var(--navbar-height, 65px) + 0.02rem) 0 0;
    background: linear-gradient(135deg, #0f766e 0%, #0ea5e9 50%, #2563eb 100%);
    width: 100%;
    margin: 0;
    position: relative;
    z-index: 2;
    overflow: hidden;
    height: clamp(120px, 16vh, 170px);
    display: flex;
    align-items: center;
    isolation: isolate;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.promo-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 20% 50%, rgba(255,255,255,0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255,255,255,0.03) 0%, transparent 50%);
    pointer-events: none;
    z-index: 0;
}

.promo-grid { 
    display: grid; 
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
    gap: 2rem;
    max-width: 420px;
    margin: 0 auto;
    padding: 0 1rem;
    justify-items: center;
    align-items: center;
    min-height: 100%;
    width: 100%;
    position: relative;
    z-index: 4;
}

.promo-card {
    border-radius: 15px; 
    padding: 0.45rem 0.75rem; 
    color: #fff;
    text-decoration: none; 
    display: flex; 
    flex-direction: row;
    align-items: center; 
    justify-content: center;
    gap: 0.45rem;
    transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); 
    position: relative; 
    overflow: hidden;
    box-shadow: 0 8px 18px rgba(0, 0, 0, 0.12),
                inset 0 1px 0 rgba(255, 255, 255, 0.16);
    min-height: 44px;
    width: min(100%, 220px);
    max-width: 220px;
    border: 1px solid rgba(255, 255, 255, 0.18);
    background: rgba(15, 118, 110, 0.9);
    margin: 0 auto;
    z-index: 5;
}

.promo-card::before {
    content: ''; 
    position: absolute; 
    inset: 0; 
    background: linear-gradient(135deg, rgba(255,255,255,0.08) 0%, transparent 50%, rgba(0,0,0,0.1) 100%); 
    border-radius: 24px;
    pointer-events: none;
}

.promo-card::after {
    content: ''; 
    position: absolute; 
    right: -80px; 
    bottom: -80px;
    width: 220px; 
    height: 220px; 
    background: radial-gradient(circle, rgba(255,255,255,0.15) 0%, transparent 70%); 
    border-radius: 50%;
}

.promo-card:hover { 
    transform: translateY(-12px) scale(1.02);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.3);
    border-color: rgba(255, 255, 255, 0.2);
}

.promo-card-content {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    width: 100%;
    position: relative;
    z-index: 2;
}

.promo-card-icon-wrap {
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 80px;
    height: 80px;
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.96);
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: #7F1D1D;
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.8);
}

.promo-card-text {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    flex: 1;
    position: relative;
    z-index: 2;
}
.promo-1 { background: linear-gradient(135deg, #0f766e 0%, #14b8a6 100%); }
.promo-2 { background: linear-gradient(135deg, #0f766e 0%, #2563eb 100%); }
.promo-3 { background: linear-gradient(135deg, #0f766e 0%, #2563eb 100%); }

.promo-contact {
    background: linear-gradient(135deg, #0f766e 0%, #14b8a6 100%);
}

.promo-goapotik {
    background: linear-gradient(135deg, #0d47a1 0%, #1565c0 40%, #1e88e5 75%, #42a5f5 100%);
}

.promo-goapotik-logo {
    height: 28px;
    object-fit: contain;
    flex-shrink: 0;
    filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
}

.promo-pbf {
    background: radial-gradient(circle at 20% 25%, rgba(255,255,255,0.16), transparent 26%),
                linear-gradient(135deg, #fb923c 0%, #f97316 48%, #ea580c 100%);
    border: 1px solid rgba(255, 255, 255, 0.22);
}

.promo-pbf-logo {
    height: 80px;
    object-fit: contain;
    flex-shrink: 0;
    filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.2));
}

.pbf-subtitle {
    display: block;
    font-size: 0.75rem;
    font-weight: 600;
    opacity: 0.95;
    line-height: 1.3;
    letter-spacing: 0.3px;
}

.promo-card > i {
    font-size: 4rem;
    opacity: 0.95;
    flex-shrink: 0;
    filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.15));
}

.promo-card h4 {
    font-size: 0.9rem;
    font-weight: 900;
    margin: 0;
    line-height: 1.1;
    color: #fff;
    letter-spacing: -0.5px;
    white-space: nowrap;
}

.promo-card p {
    font-size: 0.85rem;
    color: rgba(255, 255, 255, 0.92);
    margin: 0;
    font-weight: 500;
    line-height: 1.5;
    opacity: 0.95;
}

/* SECTION HEADER */
.sec-head { display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1.25rem; }
.sec-head-left { display: flex; flex-direction: column; gap: 0.25rem; }
.sec-tag { display: inline-block; background: #ecfeff; color: #0f766e; padding: 0.2rem 0.75rem; border-radius: 50px; font-size: 0.72rem; font-weight: 600; }
.sec-title { font-size: 1.2rem; font-weight: 800; color: #1f2937; margin: 0; }
.sec-link { font-size: 0.82rem; color: #0f766e; text-decoration: none; font-weight: 600; white-space: nowrap; }
.sec-link:hover { text-decoration: underline; }
</style>
<style>
/* PRODUCT GRID */
.prod-section { padding: 1.5rem 0; }
.prod-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(185px, 1fr)); gap: 1rem; margin-bottom: 1.5rem; }
.prod-card {
    background: #ffffff; border-radius: 14px; overflow: hidden;
    border: 1.5px solid rgba(15, 118, 110, 0.12); display: flex; flex-direction: column;
    transition: transform 0.25s, box-shadow 0.25s, border-color 0.25s;
    box-shadow: 0 6px 18px rgba(15, 118, 110, 0.08);
}
.prod-card:hover { transform: translateY(-5px); box-shadow: 0 12px 30px rgba(220,38,38,0.12); border-color: #fecaca; }
.prod-img {
    width: 100%; height: 148px;
    background: linear-gradient(135deg, #fef2f2, #fee2e2);
    display: flex; align-items: center; justify-content: center;
    overflow: hidden; position: relative;
}
.prod-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s; }
.prod-card:hover .prod-img img { transform: scale(1.06); }
.prod-img .no-img-icon { font-size: 2.5rem; color: #fecaca; }
.prod-badge-label {
    position: absolute; top: 8px; left: 8px;
    background: #0f766e; color: #fff;
    font-size: 0.62rem; font-weight: 700; padding: 0.18rem 0.45rem; border-radius: 6px;
}
.prod-badge-grade-a {
    position: absolute; top: 8px; right: 8px;
    background: linear-gradient(135deg, #0f766e, #14b8a6);
    color: #fff;
    font-size: 0.62rem; font-weight: 700; padding: 0.2rem 0.5rem;
    border-radius: 6px;
    display: inline-flex; align-items: center; gap: 0.2rem;
    box-shadow: 0 2px 6px rgba(15,118,110,.35);
}
.prod-body { padding: 0.85rem; flex: 1; display: flex; flex-direction: column; }
.prod-brand-tag {
    font-size: 0.66rem; font-weight: 700; color: #0f766e; background: #ecfeff;
    display: inline-block; padding: 0.15rem 0.5rem; border-radius: 20px; margin-bottom: 0.4rem;
}
.prod-name {
    font-size: 0.86rem; font-weight: 700; color: #1f2937; margin-bottom: 0.4rem;
    display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;
    overflow: hidden; line-height: 1.35; flex: 1;
}
  .prod-desc { color: #374151; font-size: 0.86rem; margin: 0 0 0.45rem; line-height: 1.35; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }
  .prod-meta { font-size: 0.72rem; color: #6b7280; margin-bottom: 0.35rem; }
.prod-price { font-size: 1rem; font-weight: 800; color: #0f766e; margin-bottom: 0.35rem; }
.stock-ok  { font-size: 0.65rem; font-weight: 600; color: #065f46; background: #dff7f4; padding: 0.15rem 0.5rem; border-radius: 20px; display: inline-block; margin-bottom: 0.6rem; }
.stock-low { font-size: 0.65rem; font-weight: 600; color: #0f766e; background: #ecfeff; padding: 0.15rem 0.5rem; border-radius: 20px; display: inline-block; margin-bottom: 0.6rem; }
.stock-out { font-size: 0.65rem; font-weight: 600; color: #0f766e; background: #ecfeff; padding: 0.15rem 0.5rem; border-radius: 20px; display: inline-block; margin-bottom: 0.6rem; }
.btn-detail {
    display: block; width: 100%; padding: 0.5rem;
    background: linear-gradient(135deg, #0f766e, #2563eb); color: #fff;
    border: none; border-radius: 9px; cursor: pointer; font-weight: 700;
    font-size: 0.78rem; text-align: center; text-decoration: none; transition: all 0.25s;
}
.btn-detail:hover { background: linear-gradient(135deg, #0f766e, #0ea5e9); transform: translateY(-1px); color: #fff; }
.btn-cart {
    display: block; width: 100%; padding: 0.42rem;
    background: #fff; color: #0f766e;
    border: 1.5px solid #0f766e; border-radius: 9px; cursor: pointer;
    font-weight: 700; font-size: 0.72rem; text-align: center;
    text-decoration: none; transition: all 0.2s; margin-top: 0.4rem;
}
.btn-cart:hover { background: #ecfeff; }
.btn-cart.added { background: #dff7f4; color: #065f46; border-color: #34d399; }
</style>
<style>
/* WHY US */
.why-section { background: #ffffff; border-top: 1px solid rgba(15, 118, 110, 0.12); border-bottom: 1px solid rgba(15, 118, 110, 0.12); padding: 1.25rem 0; }
.why-grid { display: flex; justify-content: center; gap: 2.5rem; flex-wrap: wrap; }
.why-item { display: flex; align-items: center; gap: 0.75rem; }
.why-icon { width: 44px; height: 44px; border-radius: 12px; flex-shrink: 0; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; }
.why-text h4 { font-size: 0.84rem; font-weight: 700; color: #1f2937; margin: 0 0 0.1rem; }
.why-text p  { font-size: 0.73rem; color: #6b7280; margin: 0; line-height: 1.4; }

/* CTA */
.cta-section {
    padding: 1.25rem 0;
    background: linear-gradient(135deg, #e6fffb 0%, #ecfeff 30%, #dbeafe 100%);
}
.cta-box {
    background: #ffffff;
    border: 1.5px solid rgba(15, 118, 110, 0.12);
    border-radius: 34px;
    padding: 2rem 2.5rem 1.7rem;
    display: flex; align-items: center; justify-content: space-between; gap: 1.5rem; flex-wrap: wrap;
    box-shadow: 0 8px 24px rgba(15, 118, 110, 0.10);
    opacity: 1;
    position: relative;
    overflow: hidden;
}
.cta-box::before,
.cta-box::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    background: #dff7f4;
    pointer-events: none;
}
.cta-box::before {
    width: 220px; height: 220px;
    right: -80px; top: -80px;
}
.cta-box::after {
    width: 180px; height: 180px;
    left: -50px; bottom: -70px;
}
.cta-box h3 {
    font-size: clamp(1.6rem, 2vw, 2.1rem);
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 0.35rem;
    line-height: 1.2;
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}
.cta-box p {
    color: #334155; font-size: 0.95rem; margin: 0; line-height: 1.6; max-width: 520px; position: relative; z-index: 1; }
.btn-wa {
    display: inline-flex; align-items: center; justify-content: center; gap: 0.6rem;
    background: linear-gradient(135deg, #5ecf68 0%, #2dbb62 100%);
    color: #fff; padding: 0.9rem 1.9rem;
    border-radius: 999px; text-decoration: none; font-weight: 800; font-size: 1.05rem;
    transition: all 0.25s; white-space: nowrap; flex-shrink: 0;
    box-shadow: 0 12px 20px rgba(45, 187, 98, 0.25);
    min-width: 220px;
    position: relative; z-index: 1;
}
.btn-wa:hover { background: linear-gradient(135deg, #4ac35d, #1fa554); transform: translateY(-2px); box-shadow: 0 14px 28px rgba(45, 187, 98, 0.28); color: #fff; }

/* CATEGORY GRID */
.cat-section { padding: 1.5rem 0 1rem; }
.cat-grid { display: grid; grid-template-columns: repeat(6, 1fr); gap: 0.75rem; }
.cat-card {
    display: flex; flex-direction: column; align-items: center; gap: 0.5rem;
    padding: 1rem 0.5rem; background: #ffffff; border-radius: 14px;
    border: 1.5px solid rgba(15, 118, 110, 0.12); text-decoration: none; color: #374151;
    transition: all 0.25s; text-align: center;
    box-shadow: 0 6px 18px rgba(15, 118, 110, 0.08);
}
.cat-card:hover { background: #fef2f2; border-color: #fecaca; color: #991B1B; transform: translateY(-3px); box-shadow: 0 6px 18px rgba(220,38,38,0.1); }
.cat-icon { width: 50px; height: 50px; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 1.35rem; }
.cat-card > span { font-size: 0.7rem; font-weight: 600; line-height: 1.3; }

/* ABOUT STRIP */
.about-strip { padding: 1rem 0 2.5rem; }
.about-box {
    background: #ffffff !important;
    border-radius: 20px;
    padding: 1.75rem 2rem;
    border: 2px solid #0f766e !important;
    display: flex;
    align-items: center;
    gap: 2rem;
    flex-wrap: wrap;
    box-shadow: 0 8px 24px rgba(15, 118, 110, 0.12) !important;
    position: relative;
    z-index: 2;
}
.about-logo { height: 72px; object-fit: contain; flex-shrink: 0; }
.about-info { flex: 1; min-width: 200px; }
.about-info h3 { font-size: 1.05rem; font-weight: 800; color: #1f2937; margin: 0 0 0.4rem; }
.about-info p  { font-size: 0.85rem; color: #6b7280; line-height: 1.7; margin: 0 0 0.85rem; }
.btn-about {
    display: inline-flex; align-items: center; gap: 0.4rem;
    background: #ecfeff; color: #0f766e; padding: 0.45rem 1.1rem;
    border-radius: 50px; text-decoration: none; font-weight: 700; font-size: 0.82rem; transition: all 0.2s;
}
.btn-about:hover { background: #0f766e; color: #fff; }
.about-stats { display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.65rem; flex-shrink: 0; }
.about-stat-item {
    text-align: center;
    padding: 0.75rem 1.2rem;
    background: #ffffff !important;
    border-radius: 12px;
    border: 2px solid #99f6e4 !important;
    box-shadow: 0 6px 16px rgba(15, 118, 110, 0.08) !important;
    position: relative;
    z-index: 2;
}
.about-stat-item .n { font-size: 1.3rem; font-weight: 800; color: #0f766e; display: block; line-height: 1.2; }
.about-stat-item .l { font-size: 0.68rem; color: #6b7280; }
.about-stat-item:nth-child(even) .n { color: #2563eb; }

/* PBF PROFILE + GALLERY TEMPLATE */
.pbf-profile-section {
    padding: 0.2rem 0 3rem;
}
.pbf-profile-wrap {
    background: #ffffff !important;
    border: 1px solid #d1fae5 !important;
    border-radius: 24px;
    padding: 1.8rem;
    position: relative;
    overflow: hidden;
    box-shadow: 0 8px 24px rgba(15, 118, 110, 0.08) !important;
    z-index: 2;
}
.pbf-profile-wrap::before {
    content: '';
    position: absolute;
    top: -70px;
    right: -80px;
    width: 220px;
    height: 220px;
    background: radial-gradient(circle, rgba(20, 184, 166, 0.12), transparent 70%);
    pointer-events: none;
}
.pbf-profile-head {
    display: flex;
    gap: 1.25rem;
    align-items: flex-start;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-bottom: 1.4rem;
}
.pbf-profile-tag {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    background: linear-gradient(135deg, #0f766e, #2563eb);
    color: #fff;
    border-radius: 999px;
    padding: 0.33rem 0.8rem;
    font-size: 0.73rem;
    font-weight: 700;
    letter-spacing: 0.02em;
    margin-bottom: 0.65rem;
}
.pbf-profile-head h3 {
    margin: 0 0 0.5rem;
    color: #0f172a;
    font-size: clamp(1.08rem, 2.5vw, 1.35rem);
    line-height: 1.35;
    font-weight: 900;
}
.pbf-profile-head p {
    margin: 0;
    color: #6b7280;
    font-size: 0.9rem;
    line-height: 1.75;
    max-width: 760px;
}
.pbf-keypoints {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
    margin-top: 0.85rem;
}
.pbf-keypoints span {
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
    padding: 0.3rem 0.7rem;
    border-radius: 999px;
    background: #f0fdfa;
    border: 1px solid #99f6e4;
    color: #0f766e;
    font-size: 0.74rem;
    font-weight: 700;
}
.pbf-profile-layout {
    display: grid;
    grid-template-columns: 1.05fr 1.35fr;
    gap: 1.5rem;
    align-items: center;
}
.pbf-profile-copy {
    padding-right: 0.5rem;
}
.pbf-profile-copy h4 {
    margin: 0 0 0.75rem;
    font-size: 1.08rem;
    font-weight: 800;
    color: #0f172a;
}
.pbf-profile-copy p {
    margin: 0;
    color: #475569;
    font-size: 0.9rem;
    line-height: 1.8;
}
.pbf-profile-copy .pbf-keypoints {
    margin-top: 1rem;
}
.pbf-visual-slider {
    position: relative;
    overflow: hidden;
    border-radius: 22px;
    border: 1px solid #dbeafe;
    background: #fff;
    box-shadow: 0 12px 30px rgba(15, 118, 110, 0.08);
}
.pbf-slider-track {
    display: flex;
    transition: transform 0.4s ease;
}
.pbf-slider-slide {
    min-width: 100%;
}
.pbf-slider-slide img {
    display: block;
    width: 100%;
    height: 390px;
    object-fit: cover;
    background: #f8fafc;
}
.pbf-slider-caption {
    position: absolute;
    left: 1rem;
    right: 1rem;
    bottom: 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 0.75rem;
    background: rgba(15, 23, 42, 0.38);
    color: #fff;
    border: 1px solid rgba(255,255,255,0.16);
    backdrop-filter: blur(6px);
    border-radius: 12px;
    padding: 0.55rem 0.75rem;
}
.pbf-slider-caption strong {
    font-size: 0.8rem;
    font-weight: 700;
}
.pbf-slider-caption span {
    font-size: 0.7rem;
    opacity: 0.9;
}
.pbf-slider-dots {
    display: flex;
    justify-content: center;
    gap: 0.5rem;
    margin-top: 0.9rem;
}
.pbf-slider-dot {
    width: 10px;
    height: 10px;
    border: none;
    border-radius: 50%;
    background: rgba(15, 118, 110, 0.2);
    cursor: pointer;
    transition: all 0.2s ease;
}
.pbf-slider-dot.active {
    width: 24px;
    border-radius: 999px;
    background: linear-gradient(135deg, #0f766e, #2563eb);
}
@media (max-width: 768px) {
    .pbf-profile-layout {
        grid-template-columns: 1fr;
    }
    .pbf-slider-slide img {
        height: 280px;
    }
}

/* CART DRAWER */
.cart-overlay { position: fixed; inset: 0; background: rgba(0,0,0,0.45); z-index: 2000; opacity: 0; pointer-events: none; transition: opacity 0.3s; }
.cart-overlay.open { opacity: 1; pointer-events: all; }
.cart-drawer { position: fixed; top: 0; right: -420px; width: 420px; max-width: 100vw; height: 100vh; background: #fff; z-index: 2001; display: flex; flex-direction: column; box-shadow: -8px 0 40px rgba(0,0,0,0.15); transition: right 0.35s cubic-bezier(.4,0,.2,1); }
.cart-drawer.open { right: 0; }
.cart-head { background: linear-gradient(135deg, #0f766e, #2563eb); padding: 1.25rem 1.5rem; color: #fff; display: flex; align-items: center; justify-content: space-between; flex-shrink: 0; }
.cart-head h2 { font-size: 1.1rem; font-weight: 700; margin: 0; display: flex; align-items: center; gap: 0.5rem; }
.cart-close-btn { background: rgba(255,255,255,0.2); border: none; color: #fff; width: 34px; height: 34px; border-radius: 50%; cursor: pointer; font-size: 1rem; display: flex; align-items: center; justify-content: center; transition: background 0.2s; }
.cart-close-btn:hover { background: rgba(255,255,255,0.35); }
.cart-body { flex: 1; overflow-y: auto; padding: 1rem 1.25rem; }
.cart-empty-msg { text-align: center; padding: 3rem 1rem; color: #9ca3af; }
.cart-empty-msg i { font-size: 3rem; display: block; margin-bottom: 0.75rem; }
.cart-item-row { display: flex; gap: 0.75rem; align-items: flex-start; padding: 0.85rem 0; border-bottom: 1px solid #f3f4f6; }
.cart-item-thumb { width: 52px; height: 52px; border-radius: 10px; flex-shrink: 0; background: linear-gradient(135deg,#ecfeff,#dbeafe); display: flex; align-items: center; justify-content: center; overflow: hidden; }
.cart-item-thumb img { width: 100%; height: 100%; object-fit: cover; }
.cart-item-info { flex: 1; min-width: 0; }
.cart-item-name { font-size: 0.84rem; font-weight: 700; color: #1f2937; margin-bottom: 0.2rem; line-height: 1.3; }
.cart-item-price { font-size: 0.8rem; color: #0f766e; font-weight: 700; }
.cart-qty-row { display: flex; align-items: center; gap: 0.4rem; margin-top: 0.4rem; }
.qty-btn { width: 26px; height: 26px; border-radius: 6px; border: 1.5px solid #e5e7eb; background: #fff; cursor: pointer; font-size: 0.9rem; display: flex; align-items: center; justify-content: center; font-weight: 700; color: #374151; transition: all 0.2s; }
.qty-btn:hover { border-color: #0f766e; color: #0f766e; }
.qty-num { font-size: 0.85rem; font-weight: 700; min-width: 20px; text-align: center; }
.cart-item-del { background: none; border: none; color: #d1d5db; cursor: pointer; font-size: 0.9rem; padding: 0.2rem; flex-shrink: 0; transition: color 0.2s; }
.cart-item-del:hover { color: #ef4444; }
.cart-foot { padding: 1.25rem 1.5rem; border-top: 2px solid #f3f4f6; flex-shrink: 0; background: #fafbff; }
.cart-total-row { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; }
.cart-total-row span { font-size: 0.9rem; color: #6b7280; }
.cart-total-row strong { font-size: 1.2rem; color: #0f766e; font-weight: 800; }
.btn-order-wa { display: flex; align-items: center; justify-content: center; gap: 0.6rem; width: 100%; padding: 0.85rem; background: #25D366; color: #fff; border: none; border-radius: 12px; cursor: pointer; font-weight: 700; font-size: 1rem; transition: all 0.3s; }
.btn-order-wa:hover { background: #1f8f4a; transform: translateY(-2px); box-shadow: 0 6px 20px rgba(37,211,102,0.4); }
.btn-clear-cart { display: block; width: 100%; padding: 0.5rem; background: none; border: none; color: #9ca3af; font-size: 0.8rem; cursor: pointer; margin-top: 0.5rem; transition: color 0.2s; }
.btn-clear-cart:hover { color: #ef4444; }
</style>
<style>
/* ORDER MODAL */
.modal-overlay { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.55); z-index: 3000; }
.modal-box { display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%,-50%); width: 92%; max-width: 480px; max-height: 90vh; overflow-y: auto; background: #fff; border-radius: 20px; z-index: 3001; box-shadow: 0 25px 60px rgba(0,0,0,0.25); }
.modal-head { background: linear-gradient(135deg,#0f766e,#2563eb); padding: 1.25rem 1.5rem; border-radius: 20px 20px 0 0; display: flex; justify-content: space-between; align-items: center; }
.modal-head h3 { color: #fff; margin: 0; font-size: 1rem; font-weight: 700; }
.modal-head p { color: rgba(255,255,255,0.8); margin: 0; font-size: 0.75rem; }
.modal-close { background: rgba(255,255,255,0.2); border: none; color: #fff; width: 32px; height: 32px; border-radius: 50%; cursor: pointer; font-size: 1rem; }
.modal-summary { padding: 1rem 1.5rem; background: #f8faff; border-bottom: 1px solid #e5e7eb; font-size: 0.85rem; color: #374151; }
.modal-form { padding: 1.25rem 1.5rem; }
.form-lbl { display: block; font-size: 0.78rem; font-weight: 700; color: #374151; margin-bottom: 0.3rem; }
.form-inp { width: 100%; padding: 0.6rem 0.85rem; border: 1.5px solid #e5e7eb; border-radius: 10px; font-size: 0.9rem; outline: none; transition: border-color 0.2s; margin-bottom: 0.75rem; }
.form-inp:focus { border-color: #0f766e; }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem; }
.form-error { display: none; background: #ecfeff; color: #0f766e; padding: 0.6rem; border-radius: 8px; font-size: 0.8rem; margin-bottom: 0.75rem; }
.btn-submit-wa { width: 100%; padding: 0.85rem; background: linear-gradient(135deg,#25D366,#1f8f4a); color: #fff; border: none; border-radius: 12px; font-size: 1rem; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 0.5rem; }

/* RESPONSIVE */
@media (max-width: 992px) {
    .cat-grid { grid-template-columns: repeat(4,1fr); }
    .why-grid { gap: 1.5rem; }
    .hero-img-wrap { display: none; }
    .promo-section { padding: 2.2rem 0; }
    .promo-grid { gap: 1.75rem; }
    .promo-card { min-height: 160px; padding: 1.5rem; }
}
@media (max-width: 768px) {
    .hero { padding: 2rem 0 1.75rem; }
    .promo-grid { grid-template-columns: 1fr 1fr; gap: 1.5rem; }
    .promo-card { padding: 0.65rem 0.8rem; min-height: 65px; }
    .promo-card-icon-wrap { width: 70px; height: 70px; border-radius: 16px; }
    .promo-card > i { font-size: 3rem; }
    .promo-goapotik-logo, .promo-pbf-logo { height: 35px; }
    .promo-card h4 { font-size: 0.85rem; }
    .promo-card p { font-size: 0.85rem; }
    .cat-grid { grid-template-columns: repeat(3,1fr); }
    .prod-grid { grid-template-columns: repeat(2,1fr); }
    .cta-box { flex-direction: column; text-align: center; padding: 1.5rem; }
    .stats-strip-row { flex-wrap: wrap; }
    .stat-cell { min-width: 50%; border-bottom: 1px solid #e5e7eb; }
    .cart-drawer { width: 100%; max-width: 100%; right: -100%; }
    .cart-drawer.open { right: 0; }
    .about-box { flex-direction: column; align-items: flex-start; }
    .about-stats { width: 100%; grid-template-columns: repeat(4,1fr); }
    .pbf-profile-wrap { padding: 1.2rem; border-radius: 18px; }
    .pbf-gallery-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .pbf-photo-template-featured {
        grid-column: 1 / -1;
        grid-row: auto;
        min-height: 320px;
    }
    .pbf-gallery-grid .mobile-order-1 { order: -3; }
    .pbf-gallery-grid .mobile-order-2 { order: -2; }
    .pbf-gallery-grid .mobile-order-3 { order: -1; }
    .pbf-photo-template-featured img { height: 260px; }
    .pbf-photo-empty { height: 220px; }
}
@media (min-width: 769px) {
    .promo-section {
        overflow: visible;
    }
    .promo-grid {
        margin-top: -18px;
        margin-bottom: 0;
        transform: translateY(-10px);
    }
    .promo-card {
        position: relative;
        top: -18px;
        transform: none;
    }
}

@media (max-width: 480px) {
    .promo-grid { grid-template-columns: 1fr; gap: 0.75rem; padding: 0 0.5rem; max-width: 100%; }
    .promo-card {
        width: min(82vw, 240px);
        max-width: 240px;
        min-height: 48px;
        padding: 0.55rem 0.8rem;
        margin: 0 auto;
        transform: none;
    }
    .promo-card-content {
        width: auto;
        justify-content: center;
        gap: 0.45rem;
    }
    .promo-card-icon-wrap { width: 60px; height: 60px; border-radius: 14px; }
    .promo-card > i { font-size: 2.5rem; }
    .promo-goapotik-logo, .promo-pbf-logo { height: 28px; }
    .promo-card h4 { font-size: 0.86rem; white-space: normal; line-height: 1.2; text-align: center; }
    .promo-card p { font-size: 0.85rem; }
    .pbf-subtitle { font-size: 0.7rem; }
    .cat-grid { grid-template-columns: repeat(3,1fr); }
    .prod-grid { grid-template-columns: repeat(2,1fr); }
    .why-grid { flex-direction: column; align-items: center; gap: 1rem; }
    .hero-btns { flex-direction: column; }
    .about-stats { grid-template-columns: repeat(2,1fr); }
    .pbf-gallery-grid { grid-template-columns: 1fr; }
    .pbf-photo-template { min-height: 0; }
    .pbf-photo-template-featured {
        grid-column: auto;
        min-height: 255px;
    }
    .pbf-photo-template-featured img { height: 210px; }
    .pbf-photo-empty { height: 170px; }
    .form-row { grid-template-columns: 1fr; }
    .cart-head { padding: 0.95rem 1rem; }
    .cart-head h2 { font-size: 0.98rem; }
    .cart-close-btn { width: 30px; height: 30px; font-size: 0.9rem; }
    .cart-body { padding: 0.75rem 0.9rem; }
    .cart-item-row { gap: 0.6rem; padding: 0.7rem 0; }
    .cart-item-thumb { width: 44px; height: 44px; }
    .cart-item-name { font-size: 0.78rem; }
    .cart-item-price { font-size: 0.76rem; }
    .qty-btn { width: 24px; height: 24px; font-size: 0.82rem; }
    .qty-num { font-size: 0.8rem; }
    .cart-foot { padding: 0.9rem 1rem; }
    .cart-total-row { margin-bottom: 0.75rem; }
    .cart-total-row strong { font-size: 1rem; }
    .btn-order-wa { padding: 0.8rem; font-size: 0.92rem; border-radius: 10px; }
    .btn-clear-cart { margin-top: 0.35rem; font-size: 0.75rem; }
    .banner-promo-top {
        padding: 0;
        margin: 0;
    }
    .banner-promo-track {
        border-radius: 14px;
    }
    .banner-promo-item {
        aspect-ratio: 4 / 3;
        min-height: 200px;
        border-radius: 0;
    }
    .banner-promo-copy {
        min-height: 0;
        background: linear-gradient(180deg, rgba(0,0,0,0) 50%, rgba(0,0,0,0.26) 78%, rgba(0,0,0,0.54) 100%);
    }
    .banner-promo-label {
        font-size: 0.72rem;
        padding: 0.28rem 0.75rem;
    }
    .banner-promo-btn {
        font-size: 0.78rem;
        padding: 0.55rem 1.1rem;
    }
    .banner-promo-btn-wrap {
        padding: 0 1rem 0.85rem;
    }
}

.banner-promo-top {
    position: relative;
    overflow: hidden;
    width: 100%;
    max-width: 100%;
    margin: var(--navbar-height, 65px) 0 0;
    padding: 0;
    z-index: 1;
}

.banner-promo-track {
    display: flex;
    width: 100%;
    transition: transform 0.55s cubic-bezier(.4, 0, .2, 1);
    will-change: transform;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 32px rgba(0,0,0,0.18);
}

.banner-promo-item {
    flex: 0 0 100%;
    position: relative;
    overflow: hidden;
    border-radius: 0;
    display: block;
    color: #fff;
    text-decoration: none;
    background: #111;
    box-shadow: none;
    aspect-ratio: 19 / 6;
    min-height: 180px;
    height: auto;
    cursor: default;
    margin: 0;
    padding: 0;
}

.banner-promo-bg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    filter: brightness(0.88);
    transition: transform 0.45s ease;
    object-fit: cover;
}

.banner-promo-item:hover .banner-promo-bg {
    transform: scale(1.02);
}

.banner-volume-toggle {
    position: absolute;
    bottom: 1rem;
    right: 1rem;
    z-index: 3;
    width: 44px;
    height: 44px;
    border-radius: 999px;
    border: none;
    background: rgba(0, 0, 0, 0.55);
    color: #fff;
    font-size: 1.1rem;
    display: grid;
    place-items: center;
    cursor: pointer;
    transition: background 0.2s ease;
}

.banner-volume-toggle:hover {
    background: rgba(0, 0, 0, 0.75);
}

.banner-promo-copy {
    position: absolute;
    inset: 0;
    z-index: 2;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    min-height: 0;
    padding: 0;
    pointer-events: none;
    background: linear-gradient(180deg, rgba(0,0,0,0) 40%, rgba(0,0,0,0.28) 72%, rgba(0,0,0,0.58) 100%);
}

.banner-promo-label {
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
    padding: 0.35rem 0.9rem;
    border-radius: 999px;
    background: rgba(255,255,255,0.94);
    color: #0f766e;
    font-weight: 700;
    font-size: 0.78rem;
    margin-bottom: 0.75rem;
}

.banner-promo-item h2 {
    margin: 0;
    font-size: clamp(1.75rem, 2.5vw, 3rem);
    line-height: 1.05;
    color: #fff;
}

.banner-promo-item p {
    margin: 0;
    color: rgba(255,255,255,0.92);
    font-size: 0.95rem;
    line-height: 1.6;
    max-width: 90%;
}

.banner-promo-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.65rem 1.4rem;
    border-radius: 999px;
    background: #fff;
    color: #0f766e;
    font-weight: 800;
    font-size: 0.88rem;
    letter-spacing: 0.01em;
    text-decoration: none;
    pointer-events: auto;
    box-shadow: 0 4px 18px rgba(0,0,0,0.22);
    transition: background 0.18s, transform 0.18s, box-shadow 0.18s;
    border: none;
    cursor: pointer;
    white-space: nowrap;
}

.banner-promo-btn:hover {
    background: #ecfeff;
    transform: translateY(-2px);
    box-shadow: 0 8px 28px rgba(0,0,0,0.28);
}

.banner-promo-btn-wrap {
    padding: 0 clamp(1rem, 4%, 2.5rem) clamp(1rem, 3%, 1.75rem);
    pointer-events: none;
}

.banner-slider-dots {
    position: absolute;
    left: 50%;
    bottom: 10px;
    transform: translateX(-50%);
    z-index: 4;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 0.45rem;
    margin: 0;
}

.banner-slider-dot {
    width: 9px;
    height: 9px;
    border-radius: 50%;
    border: none;
    padding: 0;
    cursor: pointer;
    background: rgba(127, 29, 29, 0.28);
    transition: transform 0.2s ease, background 0.2s ease;
}

.banner-slider-dot.active {
    background: #0f766e;
    transform: scale(1.15);
}

</style>

<?php $__env->startSection('content'); ?>


<?php if($banners->count()): ?>
    <div class="banner-promo-top">
        <div class="banner-promo-track" id="bannerPromoTrack">
            <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="banner-promo-item">
                    <?php if($banner->is_video): ?>
                        <video class="banner-promo-bg" autoplay muted loop playsinline>
                            <source src="<?php echo e($banner->image_url); ?>">
                        </video>
                        <button type="button" class="banner-volume-toggle" aria-label="Toggle volume">🔈</button>
                    <?php else: ?>
                        <div class="banner-promo-bg" style="background-image: url('<?php echo e($banner->image_url); ?>');"></div>
                    <?php endif; ?>
                    <div class="banner-promo-copy">
                        <?php if($banner->url_tujuan && $banner->label_tombol): ?>
                        <div class="banner-promo-btn-wrap">
                            <a href="<?php echo e($banner->url_tujuan); ?>"
                               class="banner-promo-btn"
                               target="<?php echo e(str_starts_with($banner->url_tujuan, '/') || str_starts_with($banner->url_tujuan, '#') ? '_self' : '_blank'); ?>"
                               rel="noopener noreferrer">
                                <?php echo e($banner->label_tombol); ?>

                                <i class="fa-solid fa-arrow-right" style="font-size:0.75rem;"></i>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php if($banners->count() > 1): ?>
            <div class="banner-slider-dots" id="bannerSliderDots" aria-label="Navigasi banner">
                <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button type="button" class="banner-slider-dot <?php echo e($loop->first ? 'active' : ''); ?>" data-slide-index="<?php echo e($loop->index); ?>" aria-label="Banner <?php echo e($loop->iteration); ?>"></button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.banner-promo-top');
    const track = document.getElementById('bannerPromoTrack');
    const slides = track ? Array.from(track.querySelectorAll('.banner-promo-item')) : [];
    const dots = Array.from(document.querySelectorAll('.banner-slider-dot'));

    if (slider && track && slides.length > 1) {
        let currentIndex = 0;
        let autoTimer = null;
        const intervalMs = 4200;

        const setActiveDot = function(index) {
            dots.forEach(function(dot, dotIndex) {
                dot.classList.toggle('active', dotIndex === index);
            });
        };

        const goToSlide = function(index) {
            currentIndex = (index + slides.length) % slides.length;
            track.style.transform = 'translateX(-' + (currentIndex * 100) + '%)';
            setActiveDot(currentIndex);
        };

        const startAutoSlide = function() {
            if (autoTimer) clearInterval(autoTimer);
            autoTimer = setInterval(function() {
                goToSlide(currentIndex + 1);
            }, intervalMs);
        };

        dots.forEach(function(dot) {
            dot.addEventListener('click', function(event) {
                event.preventDefault();
                goToSlide(Number(dot.dataset.slideIndex || 0));
                startAutoSlide();
            });
        });

        slider.addEventListener('mouseenter', function() {
            if (autoTimer) clearInterval(autoTimer);
        });

        slider.addEventListener('mouseleave', function() {
            startAutoSlide();
        });

        slider.addEventListener('touchstart', function() {
            if (autoTimer) clearInterval(autoTimer);
        }, { passive: true });

        slider.addEventListener('touchend', function() {
            startAutoSlide();
        }, { passive: true });

        goToSlide(0);
        startAutoSlide();
    }

    document.querySelectorAll('.banner-promo-item').forEach(function(item) {
        const video = item.querySelector('video');
        const button = item.querySelector('.banner-volume-toggle');
        if (!video || !button) {
            return;
        }

        button.addEventListener('click', function(event) {
            event.preventDefault();
            event.stopPropagation();
            video.muted = !video.muted;
            button.textContent = video.muted ? '🔈' : '🔊';
        });
    });
});
</script>

<!-- NEWS SECTION -->
<section style="padding: 2.75rem 0 3.25rem; background: linear-gradient(135deg, #f8fffe 0%, #ecfeff 24%, #dffaf7 42%, #dbeafe 100%); position: relative; overflow: hidden; border-top: 1px solid rgba(14, 116, 144, 0.12);">
    <div style="position: absolute; inset: 0; background: radial-gradient(circle at 15% 20%, rgba(45, 212, 191, 0.18), transparent 24%), radial-gradient(circle at 80% 18%, rgba(59, 130, 246, 0.18), transparent 22%), radial-gradient(circle at 50% 85%, rgba(13, 148, 136, 0.10), transparent 26%); pointer-events: none;"></div>
    <div class="container" style="max-width: 1500px; margin: 0 auto; padding: 0 1rem; position: relative; z-index: 1;">
        <div style="display: flex; align-items: center; justify-content: space-between; gap: 1rem; margin-bottom: 1.5rem; flex-wrap: wrap;">
            <div>
                <p style="margin: 0 0 0.35rem; font-size: 0.72rem; font-weight: 700; letter-spacing: 0.12em; color: #0f766e; text-transform: uppercase;">Latest</p>
                <h2 style="font-size: clamp(1.6rem, 2vw, 2.2rem); font-weight: 800; color: #0f172a; margin: 0;">Berita & Update</h2>
            </div>
            <a href="<?php echo e(route('news.index')); ?>" style="text-decoration: none; color: #0f172a; font-weight: 700; font-size: 0.9rem; padding: 0.75rem 1.1rem; border: 2px solid rgba(15,118,110,0.20); border-radius: 999px; background: #ffffff; box-shadow: 0 10px 20px rgba(15,118,110,0.12);">Lihat Semua</a>
        </div>

        <?php
            $latestNews = App\Models\News::published()->latest()->take(6)->get();
        ?>

        <?php if($latestNews->count() > 0): ?>
            <div style="position: relative; border-radius: 28px; padding: 1.15rem 1.15rem 0.9rem; background: linear-gradient(135deg, rgba(255,255,255,0.10), rgba(15,118,110,0.04)); border: 1px solid rgba(15,118,110,0.08); box-shadow: inset 0 1px 0 rgba(255,255,255,0.7), 0 18px 45px rgba(15,118,110,0.08); backdrop-filter: blur(2px);" class="news-shell">
                <div style="position: absolute; inset: 0; border-radius: 28px; background: radial-gradient(circle at 15% 15%, rgba(45,212,191,0.18), transparent 26%), radial-gradient(circle at 85% 10%, rgba(96,165,250,0.16), transparent 24%), linear-gradient(135deg, rgba(255,255,255,0.45), rgba(221,244,241,0.18)); pointer-events: none;"></div>
                <div style="display: flex; gap: 1rem; overflow-x: auto; overflow-y: hidden; white-space: nowrap; padding: 0.3rem 0.2rem 0.5rem; scroll-snap-type: x proximity; -ms-overflow-style: none; scrollbar-width: none; position: relative; z-index: 1;" class="news-scroll">
                <style>
                    .news-shell::before {
                        content: "";
                        position: absolute;
                        width: 220px;
                        height: 220px;
                        right: -30px;
                        top: -40px;
                        background: radial-gradient(circle, rgba(14,165,233,0.12), transparent 68%);
                        border-radius: 50%;
                        pointer-events: none;
                    }
                    .news-shell::after {
                        content: "";
                        position: absolute;
                        width: 220px;
                        height: 220px;
                        left: -30px;
                        bottom: -50px;
                        background: radial-gradient(circle, rgba(20,184,166,0.12), transparent 68%);
                        border-radius: 50%;
                        pointer-events: none;
                    }
                    .news-scroll { width: 100%; }
                    .news-scroll::-webkit-scrollbar { display: none; }
                    .news-card {
                        flex: 0 0 calc((100% - 4rem) / 5);
                        min-width: 180px;
                        max-width: 280px;
                        width: auto;
                        background: linear-gradient(180deg, rgba(255,255,255,0.98) 0%, rgba(239,253,250,0.94) 100%) !important;
                        border: 1.5px solid rgba(15,118,110,0.18) !important;
                        border-radius: 18px !important;
                        box-shadow: 0 14px 35px rgba(15, 118, 110, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.9) !important;
                        position: relative;
                        isolation: isolate;
                        overflow: hidden !important;
                        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
                    }
                    .news-card::before {
                        content: "";
                        position: absolute;
                        top: 0;
                        left: 0;
                        right: 0;
                        height: 4px;
                        background: linear-gradient(90deg, #0f766e 0%, #14b8a6 50%, #2563eb 100%);
                        border-radius: 18px 18px 0 0;
                        z-index: 10;
                    }
                    .news-card::after {
                        content: "";
                        position: absolute;
                        inset: 0;
                        border-radius: 16px;
                        background: transparent;
                        pointer-events: none;
                        z-index: 1;
                    }
                    .news-card:hover {
                        border-color: #14b8a6 !important;
                        box-shadow: 0 20px 60px rgba(15, 118, 110, 0.30), inset 0 1px 0 rgba(255, 255, 255, 0.9) !important;
                        transform: translateY(-8px) scale(1.03);
                    }
                    .news-card:hover .news-media img,
                    .news-card:hover .news-media video {
                        transform: scale(1.12);
                    }
                    .news-card:hover {
                        border-color: rgba(13, 148, 136, 0.6) !important;
                        box-shadow: 0 20px 50px rgba(15, 118, 110, 0.25), inset 0 1px 0 rgba(255, 255, 255, 0.8) !important;
                        transform: translateY(-6px) scale(1.02);
                    }
                    .news-card:hover .news-media img, .news-card:hover .news-media video { transform: scale(1.08); }
                    .news-card .news-media {
                        border-bottom: none;
                        position: relative;
                        z-index: 2;
                        background: linear-gradient(135deg, #a7f3d0 0%, #ecfeff 40%, #dbeafe 100%) !important;
                    }
                    .news-card .news-badge {
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        padding: 0.45rem 0.95rem;
                        border-radius: 999px;
                        background: linear-gradient(135deg, #0f766e, #14b8a6);
                        color: #ffffff;
                        font-size: 0.7rem;
                        font-weight: 900;
                        letter-spacing: 0.08em;
                        border: none;
                        box-shadow: 0 8px 16px rgba(15, 118, 110, 0.25);
                        text-transform: uppercase;
                    }
                    .news-card .news-meta {
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        gap: 0.75rem;
                        margin-bottom: 0.5rem;
                    }
                    .news-card .news-date {
                        font-size: 0.72rem;
                        color: #0f766e;
                        font-weight: 900;
                        letter-spacing: 0.03em;
                        text-transform: capitalize;
                    }
                    .news-card .news-title {
                        display: block;
                        font-size: 0.92rem;
                        font-weight: 900;
                        color: #0f172a;
                        line-height: 1.35;
                        letter-spacing: -0.01em;
                        margin: 0;
                    }
                    .news-card .news-desc {
                        font-size: 0.78rem;
                        color: #475569;
                        line-height: 1.55;
                        min-height: 2.9em;
                        overflow: hidden;
                        display: -webkit-box;
                        -webkit-line-clamp: 2;
                        -webkit-box-orient: vertical;
                        margin: 0;
                        font-weight: 500;
                    }
                    @media (max-width: 991px) {
                        .news-card { flex-basis: clamp(170px, 36vw, 240px); }
                    }
                    @media (max-width: 576px) {
                        .news-card { flex-basis: clamp(140px, 60vw, 200px); }
                        .news-card .news-media {
                            min-height: 170px;
                        }
                    }
                </style>
                <?php $__currentLoopData = $latestNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('news.index', ['news_id' => $news->id])); ?>" class="news-card" style="text-decoration: none; color: inherit; display: block; min-width: 0; border-radius: 16px; overflow: hidden; transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), border-color 0.3s ease, box-shadow 0.3s ease; scroll-snap-align: start; position: relative; z-index: 2;">
                        <div class="news-media" style="position: relative; width: 100%; --news-ratio: <?php echo e($news->ratio === '9:16' ? '9 / 16' : '3 / 4'); ?>; aspect-ratio: var(--news-ratio); background: linear-gradient(135deg, #14b8a6 0%, #2dd4bf 50%, #0ea5e9 100%); overflow: hidden; display: flex; align-items: center; justify-content: center; border: none;">
                            <?php if($news->file): ?>
                                <?php if(str_contains(strtolower($news->file), '.mp4') || str_contains(strtolower($news->file), '.webm') || str_contains(strtolower($news->file), '.mov')): ?>
                                    <video src="<?php echo e(asset('storage/' . $news->file)); ?>" muted loop playsinline style="width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.3s ease;"></video>
                                <?php else: ?>
                                    <img src="<?php echo e(asset('storage/' . $news->file)); ?>" alt="<?php echo e($news->judul); ?>" style="width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.3s ease;">
                                <?php endif; ?>
                            <?php else: ?>
                                <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; font-size: 3.2rem; background: linear-gradient(135deg, #0f766e, #14b8a6, #2563eb);">
                                    <?php switch($news->tipe):
                                        case ('video'): ?> 🎥 <?php break; ?>
                                        <?php case ('galeri'): ?> 📸 <?php break; ?>
                                        <?php default: ?> 📰
                                    <?php endswitch; ?>
                                </div>
                            <?php endif; ?>

                            <div style="position: absolute; inset: 0; background: linear-gradient(180deg, rgba(0,0,0,0.0), rgba(0,0,0,0.50)); z-index: 1;"></div>

                            <div style="position: absolute; inset: auto 0 0 0; padding: 1rem 0.9rem 0.85rem; z-index: 2;">
                                <div class="news-title" style="color: #ffffff; text-shadow: 0 3px 10px rgba(15,23,42,0.70); font-weight: 900;">
                                    <?php echo e($news->judul); ?>

                                </div>
                            </div>
                        </div>

                        <div style="padding: 1.1rem 1rem 1.25rem; background: #ffffff; position: relative; z-index: 2; border-top: 1px solid rgba(15, 118, 110, 0.08);">
                            <div class="news-meta">
                                <div class="news-date"><?php echo e($news->created_at->translatedFormat('d M Y')); ?></div>
                            </div>
                            <p class="news-desc"><?php echo e($news->deskripsi); ?></p>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php else: ?>
            <div style="background: #ffffff; color: #0f172a; border: 1.5px solid rgba(15, 118, 110, 0.12); border-radius: 16px; padding: 3rem; text-align: center; box-shadow: 0 8px 24px rgba(15, 118, 110, 0.10); min-height: 220px; display: flex; align-items: center; justify-content: center;">
                <div>
                    <div style="font-size: 2.2rem; margin-bottom: 0.5rem;">📰</div>
                    <div style="font-weight: 700;">Belum ada berita yang dipublikasikan.</div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>


<?php if(isset($promoProducts) && $promoProducts->count()): ?>
<style>
/* =============================================
   PROMO PRODUK — Simple & Elegant Background
   ============================================= */
.promo-products-section {
    padding: 3rem 0;
    background: linear-gradient(135deg, #0f766e 0%, #2563eb 100%);
    position: relative;
    overflow: hidden;
    border-top: none;
    border-bottom: none;
}

.promo-products-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    gap: 0.75rem;
    flex-wrap: wrap;
    position: relative;
    z-index: 2;
}

.promo-products-header .sec-tag {
    font-size: 0.875rem;
    font-weight: 700;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(255, 255, 255, 0.2);
    padding: 0.5rem 1rem;
    border-radius: 50px;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.promo-products-header .sec-title {
    font-size: 2rem;
    font-weight: 800;
    color: #fff;
    margin: 0;
    text-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    letter-spacing: -0.5px;
}

.promo-products-track-wrap {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: thin;
    scrollbar-color: rgba(255, 255, 255, 0.5) rgba(255, 255, 255, 0.1);
    margin: 0 -1rem;
    padding: 0.5rem 1rem;
    position: relative;
    z-index: 2;
}

.promo-products-track-wrap::-webkit-scrollbar {
    height: 8px;
}

.promo-products-track-wrap::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 4px;
}

.promo-products-track-wrap::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.5);
    border-radius: 4px;
}

.promo-products-track-wrap::-webkit-scrollbar-thumb:hover {
    background: rgba(255, 255, 255, 0.8);
}

.promo-products-track {
    display: flex;
    gap: 1.2rem;
    width: max-content;
    padding: 0.5rem 0;
}

.promo-photo-card {
    width: 165px;
    height: 165px;
    border-radius: 18px;
    overflow: hidden;
    flex-shrink: 0;
    position: relative;
    cursor: pointer;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.18);
    transition: all 0.3s ease;
    text-decoration: none;
    display: block;
    background: #fff;
    border: 2px solid rgba(255, 255, 255, 0.4);
}

.promo-photo-card:hover {
    transform: translateY(-8px) scale(1.05);
    box-shadow: 0 16px 40px rgba(0, 0, 0, 0.25);
    border-color: rgba(255, 255, 255, 0.8);
}

.promo-photo-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.3s ease;
}

.promo-photo-card:hover img { transform: scale(1.08); }

.promo-photo-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(30, 136, 229, 0.3) 0%, rgba(56, 192, 155, 0.2) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none;
}

.promo-photo-card:hover::before { opacity: 1; }

.promo-photo-card::after {
    content: '★';
    position: absolute;
    top: 10px;
    right: 10px;
    width: 36px;
    height: 36px;
    background: linear-gradient(135deg, #fff100 0%, #ffb300 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px rgba(255, 179, 0, 0.4);
    font-size: 18px;
    font-weight: bold;
    color: #fff;
    opacity: 0;
    transition: opacity 0.3s ease;
    transform: scale(0);
}

.promo-photo-card:hover::after { 
    opacity: 1; 
    transform: scale(1);
}

@media (max-width: 768px) {
    .promo-products-section { padding: 2.5rem 0; }
    .promo-products-header .sec-title { font-size: 1.6rem; }
    .promo-photo-card { width: 145px; height: 145px; border-radius: 16px; }
    .promo-products-track { gap: 0.95rem; }
}

@media (max-width: 600px) {
    .promo-products-section { padding: 2rem 0; }
    .promo-photo-card { width: 130px; height: 130px; border-radius: 14px; }
    .promo-products-track { gap: 0.8rem; }
    .promo-products-header .sec-title { font-size: 1.4rem; }
    .promo-products-header .sec-tag { font-size: 0.75rem; padding: 0.4rem 0.8rem; }
}

@media (max-width: 400px) {
    .promo-photo-card { width: 115px; height: 115px; border-radius: 12px; }
    .promo-products-track { gap: 0.6rem; }
    .promo-photo-card::after { width: 28px; height: 28px; font-size: 14px; top: 6px; right: 6px; }
}
</style>

<section class="promo-products-section">
  <div class="container">
    <div class="promo-products-header">
      <div class="sec-head-left">
        <span class="sec-tag">🏷️ PENAWARAN EKSKLUSIF</span>
        <h2 class="sec-title">Promo Spesial Hari Ini</h2>
      </div>
    </div>

    <div class="promo-products-track-wrap">
      <div class="promo-products-track">
        <?php $__currentLoopData = $promoProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $promo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($promo->url_tujuan): ?>
            <a href="<?php echo e($promo->url_tujuan); ?>" class="promo-photo-card" title="<?php echo e($promo->judul); ?>" data-tooltip="<?php echo e($promo->judul); ?>">
          <?php else: ?>
            <span class="promo-photo-card" title="<?php echo e($promo->judul); ?>" data-tooltip="<?php echo e($promo->judul); ?>">
          <?php endif; ?>
            <img src="<?php echo e(url('storage/'.$promo->gambar)); ?>" alt="<?php echo e($promo->judul); ?>" loading="lazy">
          <?php if($promo->url_tujuan): ?>
            </a>
          <?php else: ?>
            </span>
          <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>


<style>
/* =============================================
   KENAPA PILIH KAMI — Modern Card Section
   ============================================= */
.why-cards-section {
    margin-top: 0;
    padding: 5rem 0 5.5rem;
    background: linear-gradient(160deg, #ecfeff 0%, #eef5ff 50%, #f6fbff 100%);
    position: relative;
    overflow: hidden;
}
.why-cards-section::before {
    content: '';
    position: absolute;
    top: -120px; left: -120px;
    width: 420px; height: 420px;
    background: radial-gradient(circle, rgba(20,184,166,.10) 0%, transparent 70%);
    pointer-events: none;
}
.why-cards-section::after {
    content: '';
    position: absolute;
    bottom: -100px; right: -80px;
    width: 360px; height: 360px;
    background: radial-gradient(circle, rgba(37,99,235,.09) 0%, transparent 70%);
    pointer-events: none;
}

/* Section heading */
.why-section-head {
    text-align: center;
    margin-bottom: 2.5rem;
}
.why-section-tag {
    display: inline-flex; align-items: center; gap: .45rem;
    background: linear-gradient(135deg, #0f766e, #2563eb);
    color: #fff;
    padding: .45rem 1.2rem;
    border-radius: 999px;
    font-size: .8rem; font-weight: 700;
    letter-spacing: .04em;
    box-shadow: 0 6px 20px rgba(15,118,110,.25);
    margin-bottom: .85rem;
}
.why-section-title {
    font-size: clamp(1.5rem, 3vw, 2rem);
    font-weight: 900;
    color: #0f172a;
    margin: 0 0 .5rem;
    line-height: 1.2;
}
.why-section-sub {
    font-size: .95rem;
    color: #64748b;
    margin: 0;
}

/* Grid */
.why-cards-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 1.5rem;
    position: relative;
    z-index: 1;
}

/* Card */
.why-card {
    background: #ffffff !important;
    border-radius: 20px;
    padding: 2.25rem 2rem;
    border: 2px solid #d1fae5 !important;
    box-shadow: 0 8px 24px rgba(15, 118, 110, 0.10) !important;
    display: flex;
    flex-direction: column;
    gap: 0;
    transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
    position: relative;
    overflow: hidden;
    z-index: 2;
}
/* Coloured top accent bar */
.why-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 4px;
    border-radius: 20px 20px 0 0;
}
.why-card:nth-child(1)::before { background: linear-gradient(90deg, #0f766e 0%, #14b8a6 100%); }
.why-card:nth-child(2)::before { background: linear-gradient(90deg, #2563eb 0%, #38bdf8 100%); }
.why-card:nth-child(3)::before { background: linear-gradient(90deg, #0ea5e9 0%, #14b8a6 100%); }

/* Hover lift */
.why-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 48px rgba(15,23,42,.12), 0 4px 12px rgba(15,23,42,.06);
    border-color: rgba(20,184,166,.25);
}

/* Icon circle */
.why-card-icon-wrap {
    width: 64px; height: 64px;
    border-radius: 18px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.65rem;
    margin-bottom: 1.25rem;
    flex-shrink: 0;
    transition: transform .3s ease;
}
.why-card:hover .why-card-icon-wrap { transform: scale(1.08) rotate(-4deg); }
.why-card:nth-child(1) .why-card-icon-wrap { background: linear-gradient(135deg, #ecfeff, #cffafe); color: #0f766e; }
.why-card:nth-child(2) .why-card-icon-wrap { background: linear-gradient(135deg, #eff6ff, #dbeafe); color: #2563eb; }
.why-card:nth-child(3) .why-card-icon-wrap { background: linear-gradient(135deg, #f0fdfa, #d1fae5); color: #0f766e; }

/* Title */
.why-card h4 {
    font-size: 1.1rem;
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 .65rem;
    line-height: 1.3;
}

/* Body text */
.why-card p {
    font-size: .92rem;
    color: #64748b;
    line-height: 1.75;
    margin: 0 0 1.25rem;
    flex: 1;
}

/* Badge pill */
.why-card-badge {
    display: inline-flex; align-items: center; gap: .35rem;
    width: fit-content;
    font-size: .76rem; font-weight: 700;
    padding: .4rem .85rem;
    border-radius: 999px;
}
.why-card:nth-child(1) .why-card-badge { background: #ecfeff; color: #0f766e; }
.why-card:nth-child(2) .why-card-badge { background: #eff6ff; color: #2563eb; }
.why-card:nth-child(3) .why-card-badge { background: #f0fdfa; color: #0f766e; }

/* ---- Responsive ---- */
@media (max-width: 900px) {
    .why-cards-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 1.1rem; }
    .why-cards-section { padding: 3.5rem 0 4rem; }
}
@media (max-width: 600px) {
    .why-cards-section { padding: 2.5rem 0 3rem; }
    .why-section-head { margin-bottom: 1.75rem; }
    .why-cards-grid {
        grid-template-columns: 1fr;
        gap: .9rem;
    }
    .why-card {
        padding: 1.5rem 1.25rem;
        border-radius: 16px;
        flex-direction: row;
        align-items: flex-start;
        gap: 1rem;
    }
    .why-card-icon-wrap {
        width: 50px; height: 50px;
        border-radius: 14px;
        font-size: 1.3rem;
        margin-bottom: 0;
        flex-shrink: 0;
    }
    .why-card-content { flex: 1; }
    .why-card h4 { font-size: .98rem; margin-bottom: .4rem; }
    .why-card p { font-size: .84rem; line-height: 1.6; margin-bottom: .75rem; }
    .why-card-badge { font-size: .7rem; padding: .3rem .65rem; }
}
@media (max-width: 400px) {
    .why-card { padding: 1.2rem 1rem; }
    .why-card-icon-wrap { width: 44px; height: 44px; font-size: 1.15rem; }
}
</style>

<section class="why-cards-section">
  <div class="container">

    
    <div class="why-section-head">
      <div>
        <span class="why-section-tag"><i class="fa-solid fa-star"></i> Kenapa Pilih Kami?</span>
      </div>
      <h2 class="why-section-title">Keunggulan Apotek Medistra Farma</h2>
      <p class="why-section-sub">Kami hadir sebagai mitra kesehatan yang siap melayani kebutuhan masyarakat dengan baik</p>
    </div>

    <div class="why-cards-grid">

      
      <div class="why-card">
        <div class="why-card-icon-wrap"><i class="fa-solid fa-shield-halved"></i></div>
        <div class="why-card-content">
          <h4>Produk Original & Terjamin</h4>
          <p>Semua produk bersertifikat BPOM, berstandar GMP, dan dijamin keasliannya langsung dari pabrikan resmi terpercaya.</p>
          <span class="why-card-badge"><i class="fa-solid fa-circle-check"></i> Bersertifikat BPOM</span>
        </div>
      </div>

      
      <div class="why-card">
        <div class="why-card-icon-wrap"><i class="fa-solid fa-truck-fast"></i></div>
        <div class="why-card-content">
          <h4>Pengiriman Cepat & Aman</h4>
                    <p>Didukung sistem distribusi yang efisien dan mitra logistik terpercaya untuk memastikan pesanan tiba tepat waktu, aman, dan dalam kondisi terbaik.</p>
          <span class="why-card-badge"><i class="fa-solid fa-location-dot"></i> Seluruh Indonesia</span>
        </div>
      </div>

      
      <div class="why-card">
        <div class="why-card-icon-wrap"><i class="fa-solid fa-tag"></i></div>
        <div class="why-card-content">
          <h4>Harga Apotek Terjangkau</h4>
          <p>Harga langsung dari apotek dengan kualitas terjamin. Dapatkan obat dan suplemen original dengan harga yang kompetitif dan layanan ramah.</p>
          <span class="why-card-badge"><i class="fa-solid fa-percent"></i> Harga Terjangkau</span>
        </div>
      </div>

    </div>
  </div>
</section>


<div class="about-strip" style="background: rgba(15,118,110,0.04);">
  <div class="container">
    <div class="about-box">
      <img src="<?php echo e(asset('logo apotek medistra farma.png')); ?>" alt="Apotek Medistra Farma" class="about-logo">
      <div class="about-info">
        <h3>Apotek Medistra Farma — Layanan Kesehatan Yang Ramah & Terpercaya</h3>
        <p>Apotek Medistra Farma menghadirkan produk kesehatan, obat-obatan, dan layanan yang siap membantu kebutuhan sehari-hari masyarakat dengan pelayanan yang cepat, aman, dan profesional.</p>
        <a href="<?php echo e(route('about')); ?>" class="btn-about"><i class="fa-solid fa-circle-info"></i> Selengkapnya Tentang Kami</a>
      </div>
      <div class="about-stats">
        <div class="about-stat-item"><span class="n">24/7</span><span class="l">Layanan</span></div>
        <div class="about-stat-item"><span class="n">100%</span><span class="l">Produk Aman</span></div>
        <div class="about-stat-item"><span class="n">Banyak</span><span class="l">Pilihan Obat</span></div>
        <div class="about-stat-item"><span class="n">Ramah</span><span class="l">Pelayanan</span></div>
      </div>
    </div>
  </div>
</div>

<section class="pbf-profile-section" style="background: linear-gradient(180deg, #f0fdfa 0%, #fff 100%);">
    <div class="container">
        <div class="pbf-profile-wrap">
            <div class="pbf-profile-head">
                <div>
                    <span class="pbf-profile-tag"><i class="fa-solid fa-building-shield"></i> Profil Apotek</span>
                    <h3>Apotek Medistra Farma hadir untuk mendukung kebutuhan kesehatan Anda dengan pelayanan yang dekat dan terpercaya.</h3>
                </div>
            </div>

            <div class="pbf-profile-layout">
                <div class="pbf-profile-copy">
                    <h4>Pelayanan yang dekat, aman, dan ramah untuk kebutuhan kesehatan Anda</h4>
                    <p>
                        Apotek Medistra Farma merupakan apotek modern yang berkomitmen menghadirkan produk kesehatan dan layanan yang cepat, aman, serta mudah dijangkau.
                        Kami memprioritaskan kualitas produk, keamanan, serta keramahan pelayanan demi kenyamanan setiap pelanggan dalam setiap transaksi.
                    </p>

                    <div class="pbf-keypoints">
                        <span><i class="fa-solid fa-circle-check"></i> Produk Aman</span>
                        <span><i class="fa-solid fa-warehouse"></i> Stok Tersedia</span>
                        <span><i class="fa-solid fa-truck-fast"></i> Layanan Cepat</span>
                        <span><i class="fa-solid fa-shield-heart"></i> Pelayanan Profesional</span>
                    </div>
                </div>

                <div class="pbf-visual-slider" aria-label="Slider profil apotek">
                    <div class="pbf-slider-track" id="pbfProfileTrack">
                        <div class="pbf-slider-slide">
                            <img src="<?php echo e(asset('APOTEK.jpeg')); ?>" alt="Tampak depan Apotek Medistra Farma">
                        </div>
                        <div class="pbf-slider-slide">
                            <img src="<?php echo e(asset('APOTEK (1).jpeg')); ?>" alt="Area pelayanan Apotek Medistra Farma">
                        </div>
                        <div class="pbf-slider-slide">
                            <img src="<?php echo e(asset('APOTEK (2).jpeg')); ?>" alt="Ruang layanan Apotek Medistra Farma">
                        </div>
                        <div class="pbf-slider-slide">
                            <img src="<?php echo e(asset('TIM APOTEK MEDISTRA FARMA.jpeg')); ?>" alt="Tim Apotek Medistra Farma">
                        </div>
                    </div>

                    <div class="pbf-slider-caption">
                        <strong id="pbfSliderTitle">Tampak Depan</strong>
                        <span id="pbfSliderSubtitle">Apotek Medistra Farma</span>
                    </div>
                </div>
            </div>

            <div class="pbf-slider-dots" aria-label="Navigasi foto profil">
                <button type="button" class="pbf-slider-dot active" data-slide-index="0" aria-label="Gambar 1"></button>
                <button type="button" class="pbf-slider-dot" data-slide-index="1" aria-label="Gambar 2"></button>
                <button type="button" class="pbf-slider-dot" data-slide-index="2" aria-label="Gambar 3"></button>
                <button type="button" class="pbf-slider-dot" data-slide-index="3" aria-label="Gambar 4"></button>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const track = document.getElementById('pbfProfileTrack');
    const dots = Array.from(document.querySelectorAll('.pbf-slider-dot'));
    const sliderTitle = document.getElementById('pbfSliderTitle');
    const sliderSubtitle = document.getElementById('pbfSliderSubtitle');

    if (!track || dots.length === 0) return;

    const captions = [
        { title: 'Tampak Depan', subtitle: 'Apotek Medistra Farma' },
        { title: 'Area Pelayanan', subtitle: 'Produk & layanan kesehatan' },
        { title: 'Ruang Layanan', subtitle: 'Nyaman untuk pelanggan' },
        { title: 'Tim Profesional', subtitle: 'Pelayanan yang ramah' }
    ];

    let currentIndex = 0;

    function updateSlider(index) {
        currentIndex = (index + dots.length) % dots.length;
        track.style.transform = 'translateX(-' + (currentIndex * 100) + '%)';

        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === currentIndex);
        });

        if (sliderTitle && sliderSubtitle) {
            sliderTitle.textContent = captions[currentIndex].title;
            sliderSubtitle.textContent = captions[currentIndex].subtitle;
        }
    }

    dots.forEach((dot) => {
        dot.addEventListener('click', function () {
            updateSlider(Number(this.dataset.slideIndex || 0));
        });
    });

    setInterval(function () {
        updateSlider(currentIndex + 1);
    }, 3500);
});
</script>


<?php echo $__env->make('layouts.frontend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Ali Attaziri\medistrafarma\resources\views/home.blade.php ENDPATH**/ ?>