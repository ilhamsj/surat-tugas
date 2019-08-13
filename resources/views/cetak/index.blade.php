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
      /* border: 1px solid black; */
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
      /* width: 150px; */
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
      Nomor : {{$surat->no_surat}}

  </div>

  <div>
    <table class="main">
    <tr>
      <td>Menimbang</td>
      <td>
        <ol type="a"> 
          <li>
            {{$surat->undangan->pengundang}}
            Akan menyelenggarakan 
            kegiatan
            {{$surat->undangan->nama_acara}}
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
          {{$surat->undangan->tipe_surat}} {{$surat->undangan->pengundang}}
          Nomor {{$surat->undangan->no_surat}}
          perihal {{$surat->undangan->perihal}},
      </td>
    </tr>

    <tr>
      <td></td>
      <td>memberikan tugas</td>
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

          @php
              $no = 1;
          @endphp
          @forelse ($items as $item)
            <tr>
              <td>{{ $no++ }}</td>
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
            <table class="peserta ttd" style="width: 450px">
              <tr>
                <td>1. Hari/Tanggal </td>
                <td> : </td>
                <td>{{$surat->undangan->waktu_mulai}} - {{ $surat->undangan->waktu_selesai }}</td>
              </tr>
              <tr>
                <td>2. Tempat </td>
                <td>:</td>
                <td>{{ $surat->undangan->tempat }}</td>
              </tr>

              <tr>
                <td colspan="3" class="kepala">
                  <p>Yogyakarta, {{ date('d M Y') }}</p>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="kepala">Kepala</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="kepala">
                  @if ($pangkat == 'kanwil')
                    <img src="{{ asset('images/ttd/ttd_kepala.jpg')}}" alt="" srcset="" style="width:100px">
                  @else
                    <img src="{{ asset('images/ttd/ttd_kepala_bagian.jpg')}}" alt="" srcset="" style="width:200px">
                  @endif
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td class="kepala">
                  {{ $penanda_tangan }}
                </td>
              </tr>
              <tr style="text-align:right">
                <td colspan="3">
                  @if ($pangkat == 'kanwil')
                    <img src="{{ asset('images/ttd/paraf_kasubag.jpg')}}" alt="" srcset="" style="max-width:20px; margin-right:100px">
                    <img src="{{ asset('images/ttd/paraf_kepala_bagian_tata_usaha.jpg')}}" alt="" srcset="" style="max-width:20px">
                  @else
                    <img src="{{ asset('images/ttd/paraf_kasubag.jpg')}}" alt="" srcset="" style="max-width:20px;">
                  @endif
                </td>
              </tr>
            </table>
        </tr>
      </table>
    </p>
  </div>

</body>
</html>