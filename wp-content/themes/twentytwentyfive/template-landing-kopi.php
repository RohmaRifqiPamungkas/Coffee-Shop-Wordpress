<?php
/**
 * Template Name: Landing Page Kopi Arabica
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopi Arabica Premium – Nikmatnya Tiada Tara</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Georgia', serif;
            background: #1a0f0a;
            color: #f5e6d3;
        }

        /* HERO */
        .hero {
            min-height: 100vh;
            background: linear-gradient(135deg, #1a0f0a 0%, #3d1f0f 50%, #1a0f0a 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 20px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(180,100,30,0.15) 0%, transparent 70%);
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .hero-content { position: relative; z-index: 1; max-width: 700px; }

        .badge {
            display: inline-block;
            background: rgba(180,100,30,0.2);
            border: 1px solid #b4641e;
            color: #e8a060;
            padding: 6px 18px;
            border-radius: 20px;
            font-size: 13px;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 24px;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            line-height: 1.15;
            color: #f5e6d3;
            margin-bottom: 16px;
        }

        .hero h1 span { color: #e8a060; }

        .hero p {
            font-size: 1.1rem;
            color: #c4a882;
            line-height: 1.7;
            margin-bottom: 32px;
        }

        .price-tag {
            font-size: 2.5rem;
            font-weight: bold;
            color: #e8a060;
            margin-bottom: 8px;
        }

        .price-tag small {
            font-size: 1rem;
            color: #c4a882;
            text-decoration: line-through;
            margin-left: 8px;
        }

        .price-note { font-size: 0.85rem; color: #a0845a; margin-bottom: 32px; }

        .btn-cta {
            display: inline-block;
            background: linear-gradient(135deg, #b4641e, #e8a060);
            color: #fff;
            padding: 16px 48px;
            border-radius: 50px;
            font-size: 1.1rem;
            text-decoration: none;
            cursor: pointer;
            border: none;
            transition: all 0.3s;
            box-shadow: 0 8px 30px rgba(180,100,30,0.4);
        }

        .btn-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(180,100,30,0.6);
        }

        /* FEATURES */
        .features {
            padding: 80px 20px;
            background: #120a05;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 32px;
            max-width: 900px;
            margin: 0 auto;
        }

        .feature-card {
            text-align: center;
            padding: 32px 24px;
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(180,100,30,0.2);
            border-radius: 16px;
        }

        .feature-icon { font-size: 2.5rem; margin-bottom: 16px; }
        .feature-card h3 { color: #e8a060; margin-bottom: 8px; font-size: 1.1rem; }
        .feature-card p { color: #a0845a; font-size: 0.9rem; line-height: 1.6; }

        /* SECTION TITLE */
        .section-title {
            text-align: center;
            margin-bottom: 48px;
        }

        .section-title h2 { font-size: 2rem; color: #f5e6d3; margin-bottom: 8px; }
        .section-title p { color: #a0845a; }

        /* FORM */
        .form-section {
            padding: 80px 20px;
            background: #1a0f0a;
        }

        .form-wrapper {
            max-width: 560px;
            margin: 0 auto;
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(180,100,30,0.25);
            border-radius: 24px;
            padding: 48px 40px;
        }

        .form-group { margin-bottom: 20px; }

        .form-group label {
            display: block;
            font-size: 0.85rem;
            color: #c4a882;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }

        .form-group label span { color: #e8a060; }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 14px 18px;
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(180,100,30,0.3);
            border-radius: 10px;
            color: #f5e6d3;
            font-size: 1rem;
            font-family: inherit;
            transition: border-color 0.3s;
            outline: none;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #e8a060;
            background: rgba(255,255,255,0.08);
        }

        .form-group input::placeholder { color: #6b5040; }

        .form-group select option { background: #1a0f0a; }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .btn-submit {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #b4641e, #e8a060);
            color: #fff;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-family: inherit;
            cursor: pointer;
            margin-top: 8px;
            transition: all 0.3s;
            box-shadow: 0 6px 24px rgba(180,100,30,0.35);
        }

        .btn-submit:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 10px 32px rgba(180,100,30,0.55);
        }

        .btn-submit:disabled { opacity: 0.6; cursor: not-allowed; }

        /* ALERT */
        .alert {
            display: none;
            padding: 14px 18px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }

        .alert.success {
            background: rgba(34,197,94,0.15);
            border: 1px solid rgba(34,197,94,0.4);
            color: #86efac;
            display: block;
        }

        .alert.error {
            background: rgba(239,68,68,0.15);
            border: 1px solid rgba(239,68,68,0.4);
            color: #fca5a5;
            display: block;
        }

        /* FOOTER */
        .footer {
            text-align: center;
            padding: 32px;
            color: #5a3a25;
            font-size: 0.85rem;
            border-top: 1px solid rgba(180,100,30,0.1);
        }

        @media (max-width: 480px) {
            .form-wrapper { padding: 32px 24px; }
            .form-row { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <div class="badge">&#9749; Edisi Terbatas</div>
        <h1>Kopi <span>Arabica</span><br>Premium</h1>
        <p>
            Dipetik langsung dari perkebunan di ketinggian 1.500 mdpl.<br>
            Cita rasa yang kaya, aroma yang memanjakan, kenikmatan yang tak terlupakan.
        </p>
        <div class="price-tag">
            Rp 85.000 <small>Rp 120.000</small>
        </div>
        <p class="price-note">per 250gr &bull; Gratis ongkir untuk pemesanan &ge; 2 pack</p>
        <a href="#pesan" class="btn-cta">&#9749; Pesan Sekarang</a>
    </div>
</section>

<!-- KEUNGGULAN -->
<section class="features">
    <div class="section-title">
        <h2>Mengapa Arabica Premium?</h2>
        <p>Kualitas terbaik di setiap cangkir</p>
    </div>
    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-icon">🌿</div>
            <h3>100% Organik</h3>
            <p>Tanpa pestisida, tumbuh alami di tanah vulkanik yang subur.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">🏔️</div>
            <h3>Single Origin</h3>
            <p>Biji kopi pilihan dari perkebunan Gayo, Aceh – high altitude.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">📦</div>
            <h3>Freshly Roasted</h3>
            <p>Diroasting setelah order masuk, dikirim dalam 24 jam.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">⭐</div>
            <h3>Rating 4.9/5</h3>
            <p>Lebih dari 2.000+ pelanggan puas di seluruh Indonesia.</p>
        </div>
    </div>
</section>

<!-- FORM PEMESANAN -->
<section class="form-section" id="pesan">
    <div class="section-title">
        <h2>Form Pemesanan</h2>
        <p>Isi data dengan lengkap, kami akan konfirmasi via WhatsApp</p>
    </div>

    <div class="form-wrapper">
        <div class="alert" id="alert-box"></div>

        <form id="order-form">
            <div class="form-group">
                <label>Nama Lengkap <span>*</span></label>
                <input type="text" name="nama_pemesan" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Nomor WhatsApp <span>*</span></label>
                    <input type="tel" name="nomor_wa" placeholder="08xxxxxxxxxx" required>
                </div>
                <div class="form-group">
                    <label>Email <span>*</span></label>
                    <input type="email" name="email" placeholder="email@kamu.com" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Produk <span>*</span></label>
                    <select name="nama_produk" required>
                        <option value="">Pilih produk</option>
                        <option value="Kopi Arabica Premium 250gr" selected>Arabica Premium 250gr</option>
                        <option value="Kopi Arabica Premium 500gr">Arabica Premium 500gr</option>
                        <option value="Kopi Arabica Premium 1kg">Arabica Premium 1kg</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jumlah (pack) <span>*</span></label>
                    <input type="number" name="jumlah" placeholder="1" min="1" max="100" required>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="btn-submit">
                &#9749; Pesan Sekarang
            </button>
        </form>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    <p>&copy; <?php echo date('Y'); ?> Kopi Arabica Premium. Dibuat dengan ❤️ dan ☕</p>
</footer>

<script>
document.getElementById('order-form').addEventListener('submit', async function(e) {
    e.preventDefault();

    const form = e.target;
    const btn = document.getElementById('btn-submit');
    const alertBox = document.getElementById('alert-box');

    // Reset alert
    alertBox.className = 'alert';
    alertBox.textContent = '';

    // Kumpulkan data form
    const formData = new FormData(form);
    const payload = {
        nama_pemesan: formData.get('nama_pemesan').trim(),
        nomor_wa:     formData.get('nomor_wa').trim(),
        email:        formData.get('email').trim(),
        nama_produk:  formData.get('nama_produk'),
        jumlah:       parseInt(formData.get('jumlah')),
    };

    // Loading state
    btn.disabled = true;
    btn.textContent = 'Memproses...';

    try {
        const response = await fetch('http://localhost:8000/api/orders', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
            body: JSON.stringify(payload),
        });

        const data = await response.json();

        if (response.ok) {
            alertBox.className = 'alert success';
            alertBox.textContent = '✅ Pesanan berhasil dikirim! Kami akan menghubungi kamu via WhatsApp segera.';
            form.reset();
        } else {
            const errors = data.errors
                ? Object.values(data.errors).flat().join(' ')
                : (data.message || 'Terjadi kesalahan, coba lagi.');
            alertBox.className = 'alert error';
            alertBox.textContent = '❌ ' + errors;
        }
    } catch (err) {
        alertBox.className = 'alert error';
        alertBox.textContent = '❌ Tidak dapat terhubung ke server. Pastikan API Laravel sedang berjalan.';
    } finally {
        btn.disabled = false;
        btn.textContent = '☕ Pesan Sekarang';
        alertBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
});
</script>

</body>
</html>
