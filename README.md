# Pertemuan 6 - Session, Cookie, Flash Message, dan GitHub

## Identitas

Nama: DAFFA AKBAR
NIM: 25012055
Kelas: 25M11

## Deskripsi

Aplikasi keranjang belanja sederhana menggunakan PHP Session,
Flash Message, Cookie, Git, dan GitHub.

## Fitur

* Menampilkan katalog produk
* Menambahkan produk ke keranjang
* Menampilkan jumlah produk dalam keranjang
* Menghapus produk dari keranjang
* Mengosongkan keranjang
* Flash message
* Preferensi tema light/dark menggunakan cookie
* Validasi input
* Escape output
* Pengembangan menggunakan Git dan GitHub

## Cara Menjalankan

1. Jalankan Apache melalui XAMPP.
2. Pastikan project berada pada:

C:\\xampp\\htdocs\\web1\\pertemuan-06

3. Buka browser.
4. Akses:

http://localhost/web1/pertemuan-06/index.php

## Struktur Folder

pertemuan-06/
├── index.php
├── cart.php
├── actions.php
├── bootstrap.php
├── functions.php
├── README.md
├── .gitignore
├── data/
│   └── products.php
└── components/
├── header.php
└── footer.php

## Konsep yang Digunakan

### Session

Session digunakan untuk menyimpan data keranjang selama sesi pengguna.

### Flash Message

Flash message disimpan di session dan dihapus setelah dibaca sehingga
pesan tidak muncul terus ketika halaman di-refresh.

### Cookie

Cookie digunakan untuk menyimpan preferensi tema light/dark.
Cookie tidak digunakan untuk menyimpan password, token, atau data sensitif.

## Pengujian

|No|Skenario|Hasil|
|-|-|-|
|1|Membuka katalog pada sesi baru|Berhasil|
|2|Menambah produk yang sama dua kali|Berhasil|
|3|Refresh setelah flash tampil|Berhasil|
|4|Menambah dua produk berbeda|Berhasil|
|5|Menghapus satu jenis produk|Berhasil|
|6|Mengosongkan keranjang|Berhasil|
|7|Mengirim ID produk tidak dikenal|Berhasil ditolak|
|8|Membuka actions.php dengan GET|Berhasil diarahkan ke index.php|
|9|Memilih tema gelap|Berhasil|
|10|Menggunakan nilai cookie theme yang tidak valid|Kembali ke tema light|
|11|Memeriksa riwayat commit GitHub|Minimal 10 commit|
|12|Clone repository dan menjalankan aplikasi|Berhasil|

## GitHub

Repository:
https://github.com/Daffaakbar17/p06-session-cookie-25012055.git

## Kesimpulan

Praktikum ini membantu memahami penggunaan session, cookie, dan flash
message dalam aplikasi PHP sederhana. Selain itu, penggunaan Git dan
GitHub dengan commit bertahap membuat proses pengembangan lebih teratur
dan setiap perubahan dapat diketahui dengan jelas.



\## Pengujian Keranjang



Fitur keranjang yang sudah diuji:



\- Menambahkan produk ke keranjang.

\- Menambahkan produk yang sama lebih dari satu kali.

\- Menghapus produk dari keranjang.

\- Mengosongkan seluruh isi keranjang.

\- Menampilkan pesan setelah produk ditambahkan.

\- Menampilkan pesan setelah produk dihapus.

\- Menampilkan pesan setelah keranjang dikosongkan.

