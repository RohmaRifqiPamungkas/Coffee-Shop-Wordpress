# Coffee Shop Theme (WordPress)

Repo ini berisi **WordPress** dengan theme kustom bernama **Coffee Shop Theme** untuk landing page kopi.
<img width="2880" height="1457" alt="image" src="https://github.com/user-attachments/assets/32f60c83-1aa0-4788-91b4-c064e539d564" />
<img width="2880" height="1469" alt="image" src="https://github.com/user-attachments/assets/563ab962-a970-40b2-9a15-92eac36d9c5b" />
<img width="2880" height="1468" alt="image" src="https://github.com/user-attachments/assets/e9fd4bf7-9596-4f6c-a974-aacb14f43e19" />


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
