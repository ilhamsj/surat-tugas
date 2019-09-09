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
        padding: 0 5px;
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
      <img src="{{secure_asset('images/logo2019.png')}}" alt="" srcset="" style="max-width:120px">
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
        Nomor :  <u>{{$item->surattugas->nomor}}</u>

    </div>

    <div>
      <table class="main">
      <tr>
        <td>Menimbang</td>
        <td>
          <ol type="a"> 
            <li>
              <u>{{ $item->surattugas->undangan->pengundang }}</u>
              Akan menyelenggarakan 
              kegiatan
              <u>{{ $item->surattugas->undangan->acara }}</u>
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
            <u>{{ $item->surattugas->undangan->tipe }}</u>
            <u>{{ $item->surattugas->undangan->pengundang }}</u>,
            Nomor  <u>{{ $item->surattugas->undangan->nomor }}</u>,
            perihal  <u>{{$item->surattugas->undangan->perihal}}</u>.

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
              <tr class="text-center ">
                  <td>No</td>
                  <td>Nama</td>
                  <td>Jabatan</td>
              </tr>

              @php
                  $no = 1;
              @endphp

              @foreach ($item->surattugas->pelaksana as $pegawai)
                  <tr>
                      <td class="text-center">{{$no++}}</td>
                      <td>{{$pegawai->user->name}}</td>
                      <td>{{$pegawai->user->jabatan}}</td>
                  </tr>
              @endforeach

          </table>
          
        </td>
      </tr>

      <tr>
        <td>Untuk</td>
        <td>
            Melaksanakan tugas pada kegiatan <b>tersebut diatas</b>, pada:
              <table class="peserta ttd" style="width: 450px">
                <tr>
                  <td>1. Hari/Tanggal </td>
                  <td> : </td>
                  <td> 
                      {{\Carbon\Carbon::parse($item->surattugas->undangan->waktu)->format('d M Y')}} - Selesai
                  </td>
                </tr>
                <tr>
                  <td>2. Tempat </td>
                  <td>:</td>
                  <td> 
                      <u>{{$item->surattugas->undangan->tempat}}</u>,
                  </td>
                </tr>

                <tr>
                  <td colspan="3" class="kepala">
                    <p>Yogyakarta,  {{  date('d M Y')  }}</p>
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
                    @php
                        $pangkat = $item->SuratTugas->pangkat->nama;
                    @endphp
                    @if ($pangkat == 'kakanwil')
                      <img src="{{secure_asset('images/ttd/ttd_kepala.jpg')}}" style="width:100px">
                    @else
                      <img src="{{secure_asset('images/ttd/ttd_kepala_bagian.jpg')}}" style="width:200px">
                    @endif
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td class="kepala">
                    {{$item->SuratTugas->pangkat->user->name}}
                  </td>
                </tr>
                <tr style="text-align:right">
                  <td colspan="3">
                    @if ($pangkat == 'kakanwil')
                      <img src="{{  secure_asset('images/ttd/paraf_kasubag.jpg') }}" alt="" srcset="" style="max-width:20px; margin-right:100px">
                      <img src="{{  secure_asset('images/ttd/paraf_kepala_bagian_tata_usaha.jpg') }}" alt="" srcset="" style="max-width:20px">
                    @else
                      <img src="{{  secure_asset('images/ttd/paraf_kasubag.jpg') }}" alt="" srcset="" style="max-width:20px;">
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