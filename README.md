# Coffee Shop Theme (WordPress)

Repo ini berisi **WordPress** dengan theme kustom bernama **Coffee Shop Theme** untuk landing page kopi.

## Struktur singkat
- `wp-content/themes/coffee-shop-theme/`
  - `style.css` – CSS untuk tampilan landing page
  - `template-landing-kopi.php` – template halaman: **Landing Page Kopi Arabica**

## Fitur landing page
- Hero section (harga & CTA)
- Kartu keunggulan (100% organik, single origin, freshly roasted, rating)
- Form pemesanan (nama, WhatsApp, email, produk, jumlah)
- Validasi sederhana + feedback alert
- POST ke endpoint API untuk mengirim order

## Cara pakai
1. Pastikan WordPress sudah terpasang dan berjalan.
2. Buka folder theme:
   - `wp-content/themes/coffee-shop-theme/`
3. Di WordPress Admin:
   - **Appearance / Themes** → aktifkan theme `Coffee Shop Theme`.
4. Buat halaman baru dengan template:
   - Pilih template **Landing Page Kopi Arabica**.

## Konfigurasi API (penting)
Di `template-landing-kopi.php`, terdapat fetch ke:
- `http://localhost:8000/api/orders`

Sesuaikan dengan host/port API kamu bila berbeda.

## Catatan
Template menggunakan `fetch` (JavaScript) di browser. Pastikan CORS dan endpoint API siap menerima request `POST` dengan `Content-Type: application/json`.

## License
Lihat `license.txt`.
