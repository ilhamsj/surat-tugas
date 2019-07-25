# FAQ
1. apa hal wajib yang harus saya ketahui seputar laravel
1. seputar backend

#request
1. multiple user authentication (2 tipe user(admin, customer))
1. insert multiple data
1. search, filter, and sorting

#pertanyaan
1. cara menggunakan package npm pada laravel misal : template admin
1. cara menggunakan method dari controller/class lain
1. arti ``{{ __('Simpan') }}`` pada button
1. sistem query pada laravel (eloquent, db builder dll blm paham)
1. ORM  
1. kapan harus menggunakan put patch delete
1. cara migration tanpa fresh
1. tinker
1. index, unique, primary key

#tips
1. untuk merubah error message di sini [validation](resources\lang\en\validation.php)

1. add migration command ``php artisan make:migration add_column_image_to_course --table=courses``
1. Error when renaming column ``composer require doctrine/dbal``
1. add factory with model ``php artisan make:factory SuratTugasFactory -m SuratTugas``
1. agar file dapat di akses secara public ``php artisan storage:link``
1. amazon s3

#deploy to heroku
1. echo "web: vendor/bin/heroku-php-apache2 public/" > Procfile
1. commit
1. heroku create
1. heroku config:set APP_KEY=MBmJVvgC8ZOdaH2bipBf1tikPVlEdV4jpb88T4
<!-- 
$pegawai = User::orderBy('role', 'desc')->get();
$pegawai = User::all();
$pegawai = User::first(); 
$pegawai = User::where('name', 'budi')->get(); // menampilkan seleksi data
$pegawai = User::where('name', 'like', '%i%')->get(); // menampilkan seleksi data 
-->

1. php artisan vendor:publish


*SAGET ROAD TO SCHOOL*
📘📝 🎨✏️📏

Mau tau cara mudah belajar ?
Mau tau cara mudah menghafal ?

Kenali dulu tipe gaya belajarmu
Setiap orang memiliki tipe gaya belajar yang berbeda-beda,
dengan tipe gaya belajar yang sesuai dijamin prestasi kamu akan meningkat pesat 🚀🚀🚀

Jadi, apa kamu mau tau tipe gaya belajarmu ?
Tunggu kehadiran Dr. Saget di sekolahmu ya 🚐🚐🚐 !

Mau sekolahmu kami kunjungi ?
yuk hubungi !

*☎️ SAGET OFFICIAL ☎️* 
bit.ly/saget-wa
bit.ly/saget-ig
bit.ly/saget-fb
bit.ly/saget-on

#SagetRoadToSchool