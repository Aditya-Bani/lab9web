| Nama      | Aditya Bani Isro |
| ----------- | ----------- |
| NIM     | 312010134       |
| Kelas   | TI.20.A.1        |

## Langkah langkah praktikum 8

### 1. Buat file baru dengan nama header.php
![img1](assets/img/header.PNG)

### 2. Buat file baru dengan nama footer.php
![img1](assets/img/footer.PNG)

### 3. Buat file baru dengan nama home.php
![img1](assets/img/home.PNG)

### 4. Buat file baru dengan nama about.php
![img1](assets/img/about.PNG)

### 5. Output
- Halaman Home
![img1](assets/img/o1.PNG)

- Halaman About
![img1](assets/img/o2.PNG)

## Pertanyaan dan Tugas
Implementasikan konsep modularisasi pada kode program praktikum 8 tentang database, sehingga setiap halamannya memiliki template tampilan yang sama.

## Berikut struktur yang saya buat
Lab9_php_database
```
├── config
│   ├── hapus.php
│   ├── koneksi.php
│   ├── tambah.php
│   └── ubah.php
├── layouts
│   ├── footer.php
│   ├── head-static.php
│   ├── header.php
│   ├── main.php
│   ├── tambah.php
│   └── ubah.php
├── static
│   ├── css
│   │   └── style.css
│   └── img
├── index.php
├── tambah.php
└── ubah.php
```

## Config 
Dalam folder tersebut menyimpan file khusus php yang nanti akan dieksekusi

- koneksi.php
![img1](assets/img/2.1.PNG)

- tambah.php
![img1](assets/img/2.2.PNG)

- ubah.php
![img1](assets/img/2.3.PNG)

- hapus.php
![img1](assets/img/2.4.PNG)

## Layouts
Untuk menyimpan tampilan utama pada website, dan dibagi pada beberapa file

- head-static.php
![img1](assets/img/3.1.PNG)

- header.php
![img1](assets/img/3.2.PNG)

- main.php
![img1](assets/img/3.3.PNG)

- footer.php
![img1](assets/img/3.4.PNG)

## Static
Untuk menyimpan file yang diperlukan seperti css, js, gambar

- style.css
![img1](assets/img/4.1.PNG)

## index.php, tambah.php, ubah.php
File utama dan berfungsi sebagai wadah untuk memanggil sub-file di beberapa direktori

- index.php
![img1](assets/img/5.1.PNG)

- tambah.php
![img1](assets/img/5.2.PNG)

- ubah.php
![img1](assets/img/5.3.PNG)

# Output
![img1](assets/img/y1.PNG)

- Tambah barang
![img1](assets/img/y2.PNG)

![img1](assets/img/y2.1.PNG)

- Ubah barang
![img1](assets/img/y3.PNG)

![img1](assets/img/y3.1.PNG)