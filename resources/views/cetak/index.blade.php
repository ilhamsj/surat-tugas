<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
      Surat Tugas
  </title>
  <style>
    * {
      font-family: Arial, Helvetica, sans-serif;
      font-size: medium;
    }

    table, tr, td {
      border-collapse: collapse;
    }
    .main {
      margin: auto;
      text-align: left;
      width: 90%;
    }

    table tr, .main td {
      vertical-align: top;
      padding: 10px;
    }

    .peserta td {
      padding: 0;
    }
    .list {
      width: 100%;
    }
   .list td{
      border: 1px solid black;
    }


    .ttd .kepala {
      text-align: right
    }

    table img {
      width: 150px;
    }

    .text-center {
      text-align: center;
    }

    ol {
      margin: 0;
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
      <h2>
        <u>SURAT TUGAS</u>
      </h2>
      Nomor : {{$surat->no_surat}}/Kw.12.1/2/KP.01.1/{{$surat->no_surat}}

  </div>

  <div>
    <table class="main">
    <tr>
      <td>Menimbang</td>
      <td>
          {{-- -- a. Bidang Urusan Agama Islam dan Pembinaan Syariah Kanwil Kementerian Agama Daerah Istimewa Yogyakarta, akan menyelenggarakan kegiatan       </td> ----}}
        <ol type="a"> 
          <li>
            {{-- $item->undangan->pengundang--}}
            Akan menyelenggarakan 
            kegiatan
            {{-- $item->undangan->nama_acara--}}
          <li>
              Bahwa mereka yang namanya tercantum disurat tugas ini dipandang
              mampu, cakap serta bertanggung jawab sepenuhnya dalam
              melaksanakan tugasnya              
          </li>
          <li>
              Berdasarkan pertimbangan sebagaimana dimaksud huruf a dan b, perlu
              menetapkan surat tugas;
              
          </li>
        </ol>
      </tr>
    <tr>
      <td>Dasar</td>
      <td>
          Nota Dinas {{-- $item->undangan->pengundang--}}
          Nomor {{-- $item->undangan->no_surat--}} ,
          perihal {{-- $item->undangan->perihal--}},
          memberikan tugas
      </td>
    </tr>

    <tr>
      <td>Kepada</td>
      <td>

        <table class="peserta list">
          <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Jabatan</td>
          </tr>

          @forelse ($items as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->user->name }}</td>
              <td>
                  {{ $item->user->jabatan }}
              </td>
            </tr>
          @empty
              
          @endforelse
        </table>
        
      </td>
    </tr>

    <tr>
      <td>Untuk</td>
      <td>
          Melaksanakan tugas pada kegiatan tersebut diatas, pada
            <table class="peserta ttd">
              <tr>
                <td>1. Hari/Tanggal </td>
                <td> : </td>
                <td>{{-- $item->undangan->waktu_mulai--}} - {{-- $item->undangan->waktu_selesai--}}</td>
              </tr>
              <tr>
                <td>2. Tempat </td>
                <td>:</td>
                <td>{{-- $item->undangan->tempat--}}</td>
              </tr>

              <tr>
                <td colspan="3" class="kepala">
                  <p>Yogyakarta, {{--  $ttd --}}</p>
                </td>
              </tr>
              <tr>
                <td colspan="3" class="kepala">Kepala</td>
              </tr>
              <tr>
                <td colspan="3" class="kepala">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Tanda_tangan_bapak.png/240px-Tanda_tangan_bapak.png" alt="" srcset="">
                </td>
              </tr>
              <tr>
                <td colspan="3" class="kepala">
                  {{ $penanda_tangan }}
                </td>
              </tr>
            </table>
        </tr>
      </table>
    </p>
  </div>

</body>
</html>