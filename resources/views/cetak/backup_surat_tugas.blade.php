<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
      surat tugas - {{$item->no_surat}}
  </title>
  <style>
    * {
      font-family: Arial, Helvetica, sans-serif;
      font-size: small;
    }

    .text-center {
      text-align: center
    }
  </style>
</head>
<body>
  <div class="text-center">
      <h1>
        KEMENTERIAN AGAMA REPUBLIK INDONESIA <br/>
        KANTOR WILAYAH KEMENTERIAN AGAMA <br/>
        DAERAH ISTIMEWA YOGYAKARTA
      </h1>
      <p>
          Jalan Sukonandi No. 8 Yogyakarta 55166 <br/>
          Telp.(0274) 513492 Faksimili.(0274)516030 <br/>
          Website: www.yogyakarta.kemenag.go.id
      </p>
      <hr>
      <h2>SURAT TUGAS</h2>
  </div>

    Nomor Surat Tugas
    <h3>{{$item->no_surat}}</h3>
    
    Data Pegawai
    <h3>{{$item->user->name}}</h3>
    
    Nomor Undangan
    <h3>{{$item->undangan->no_surat}}</h3>
    
    Pengundang Acara<h3>
    {{$item->undangan->pengundang}}</h3>
    
    Perihal
    <h3>{{$item->undangan->perihal}}</h3>
    
    Nama Kegiatan
    <h3>{{$item->undangan->nama_acara}}</h3>

    Acara dimulai
    <h3>{{$item->undangan->waktu_mulai}}</h3>

    Acara selesai
    <h3>{{$item->undangan->waktu_selesai}}</h3>
    
    Lokasi
    <h3>{{$item->undangan->tempat}}</h3>
    
    TTD Atasan
    <h3>{{$item->ttd->name}}</h3>
    
</body>
</html>