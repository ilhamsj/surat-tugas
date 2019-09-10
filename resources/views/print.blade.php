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

      table {
        width: 100%;
      }

      table, tr, td {
        /* border: 1px solid black; */
        border-collapse: collapse;
      }
      
      .bordered table, .bordered tr, .bordered td {
        border: 1px solid black;
      }

      .text-right {
        text-align: right
      }

      .text-center {
        text-align: center;
      }    
    </style>
  </head>
  <body>
    <div class="text-center">
      <table>
        <tr class=" text-center">
          <td>
              <img style="width:120px" src="{{asset('images/logo2019.png')}}">
          </td>
          <td>
              <h1>
                KEMENTERIAN AGAMA REPUBLIK INDONESIA <br/>
                KANTOR WILAYAH KEMENTERIAN AGAMA <br/>
                DAERAH ISTIMEWA YOGYAKARTA
              </h1>
                  Jalan Sukonandi No. 8 Yogyakarta 55166 <br/>
                  Telp.(0274) 513492 Faksimili.(0274)516030 <br/>
                  Website: www.yogyakarta.kemenag.go.id
          </td>
        </tr>
      </table>
        <hr>
        <h2>
          SURAT TUGAS
        </h2>
        Nomor :  {{$item->surattugas->nomor}}

    </div>

    <div>
      <table>
      <tr>
        <td>Menimbang</td>
        <td>:</td>
        <td>
          <ol type="a"> 
            <li>
              {{ $item->surattugas->undangan->pengundang }}
              Akan menyelenggarakan 
              kegiatan
              {{ $item->surattugas->undangan->acara }}
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
        <td>:</td>
        <td>
            {{ $item->surattugas->undangan->tipe }}
            {{ $item->surattugas->undangan->pengundang }},
            Nomor  {{ $item->surattugas->undangan->nomor }},
            perihal  {{$item->surattugas->undangan->perihal}}.

        </td>
      </tr>

      <tr>
        <td colspan="2"></td>
        <td>memberikan tugas</td>
      </tr>

      <tr>
        <td>Kepada</td>
        <td>:</td>
        <td>
          <table class="bordered">
              <tr>
                  <td>No</td>
                  <td>Nama</td>
                  <td>Jabatan</td>
              </tr>

              @php
                  $no = 1;
              @endphp

              @foreach ($item->surattugas->pelaksana as $pegawai)
                  <tr>
                      <td>{{$no++}}</td>
                      <td>{{$pegawai->user->name}}</td>
                      <td>{{$pegawai->user->jabatan}}</td>
                  </tr>
              @endforeach

          </table>
          
        </td>
      </tr>

      <tr>
        <td>Untuk</td>
        <td>:</td>
        <td>
            Melaksanakan tugas pada kegiatan <b>tersebut diatas</b>, pada:
              <table>
                <tr>
                  <td>1</td>
                  <td>Hari/Tanggal </td>
                  <td> : </td>
                  <td> 
                      {{\Carbon\Carbon::parse($item->surattugas->undangan->waktu)->format('d M Y')}} - Selesai
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Tempat </td>
                  <td>:</td>
                  <td> 
                      {{$item->surattugas->undangan->tempat}},
                  </td>
                </tr>
                <tr class="text-right">
                  <td colspan="4">
                      Yogyakarta,  {{  date('d M Y')  }}
                  </td>
                </tr>
                <tr>
                  <td colspan="4" class="text-right">Kepala</td>
                </tr>
                <tr>
                  <td colspan="4" class="text-right">
                    @php
                        $pangkat = $item->SuratTugas->pangkat->nama;
                    @endphp
                    @if ($pangkat == 'kakanwil')
                      <img src="{{asset('images/ttd/ttd_kepala.jpg')}}" style="width:100px">
                    @else
                      <img src="{{asset('images/ttd/ttd_kepala_bagian.jpg')}}" style="width:200px">
                    @endif
                  </td>
                </tr>
                <tr>
                  <td colspan="4" class="text-right">
                    {{$item->SuratTugas->pangkat->user->name}}
                  </td>
                </tr>
                <tr>
                  <td colspan="4" class="text-right">
                    @if ($pangkat == 'kakanwil')
                      <img src="{{  asset('images/ttd/paraf_kasubag.jpg') }}" alt="" srcset="" style="max-width:20px; margin-right:100px">
                      <img src="{{  asset('images/ttd/paraf_kepala_bagian_tata_usaha.jpg') }}" alt="" srcset="" style="max-width:20px">
                    @else
                      <img src="{{  asset('images/ttd/paraf_kasubag.jpg') }}" alt="" srcset="" style="max-width:20px;">
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