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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
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
                nomor_wa: formData.get('nomor_wa').trim(),
                email: formData.get('email').trim(),
                nama_produk: formData.get('nama_produk'),
                jumlah: parseInt(formData.get('jumlah')),
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
                    const errors = data.errors ?
                        Object.values(data.errors).flat().join(' ') :
                        (data.message || 'Terjadi kesalahan, coba lagi.');
                    alertBox.className = 'alert error';
                    alertBox.textContent = '❌ ' + errors;
                }
            } catch (err) {
                alertBox.className = 'alert error';
                alertBox.textContent = '❌ Tidak dapat terhubung ke server. Pastikan API Laravel sedang berjalan.';
            } finally {
                btn.disabled = false;
                btn.textContent = '☕ Pesan Sekarang';
                alertBox.scrollIntoView({
                    behavior: 'smooth',
                    block: 'nearest'
                });
            }
        });
    </script>

</body>

</html>