# Pengertian
ini itu crud mudah di lumen, kita akan mengoprasikan curdnya lewat aplikasi 'postman', kamu bisa mendapatkan aplikasi tersebut di https://www.getpostman.com/downloads/

# File

ada dua controller yaitu **kelasController**yang berfungsi mengatur crud di *tabel kelas* dan *KelasController* yang berfungsi mengatur *crud* di table *siswa*

## Cara Kerjanya
- Database dibuat dulu lewat aplikasi database manager biasa seperti *sqlyog*
- Pembuatan table dilakukan melalui migration
- Buat kelas pada setiap tabel yang berisi **variable** *fillable*dan *controllernya* untuk setiap table.
- Dan disinilah fungsi-fungsi untuk mengoprasikan crud

## Cara Instal

 1. download postman di link tersebut https://www.getpostman.com/downloads/ 
 2. Buat database di *sqlyog* dengan nama database *api_sekolah*
 3. download filenya
 4. buka **postman**
 5. Pakai method *post* untuk menambah data
 6. Tambah id diakhir *url* jika ingin membaca datanya
 7. Gunakan method *delete* jika ingin menghapus data & menambahkan id di akhir url
 8. Dan gunakan *get*jika ingin diedit.
