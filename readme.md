CI- Sistem Pendukung Keputusan

Link alat perang, database dan desain sistem : http://ugm.id/ilcci

Aplikasi berbasis Object - PBO
MVC - Model View Controller
Model = tabel dari database/penyimpan data manapun
View = tampilan, halaman depan, login, dkk, ==> template
Controller = method, halaman/, penghubung antara model dan view 


Langkah" tentang web framework:
1. Konfigurasi Koneksi Database [application/config/database.php]
2. Konfigurasi lainnya [application/config/config.php]
2.2. Tambahkan helper url[autoload.php]
3. Mempelajari View dan pembagian template [application/views/]
4. Mempelajari controller [application/controllers/]
5. Mempelajari model [application/models/]

Langkah" membuat aplikasi CRUD [Create, Read, Update, Delete]:
- Setup tampilan template, menu, tombol dkk. 
- Create
	- Membuat Form input
- Read
	- Membuat tabel yg membaca db
- Update
	- Membuat form dengan membaca db
- Delete
	- Membuat aksi delete dg tombol, confirm, dan method delete dg routing di MVC 
