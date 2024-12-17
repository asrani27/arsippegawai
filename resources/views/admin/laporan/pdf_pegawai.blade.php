<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
</head>

<body>

    <table width="100%">
        <tr>
            <td width="15%">
                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('logo/kalsel.png'))) }}" width="70px"> &nbsp;&nbsp;
            </td>
            <td style="text-align: center;" width="60%">
                PEMERINTAH PROVINSI KALIMANTAN SELATAN<br />
                KANTOR SEKRETARIAT DAERAH<br />
                JL Aneka Tambang Trikora, Palam, Kec Cempaka. Kota Banjarbaru. Kalimantan Selatan 70111
            </td>
            <td width="15%">
            </td>
        </tr>
    </table>
    <hr>
    <h3 style="text-align: center">LAPORAN DATA PEGAWAI<br>
    </h3>
    
    <br />
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nip</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Tgl Lahir</th>
            <th>Tempat Lahir</th>
            <th>Jkel</th>
            <th>Status Pegawai</th>
            <th>Status Kawin</th>
            <th>Gol darah</th>
            <th>Nomor Kepegawaian</th>
            <th>Unit Kerja</th>
        </tr>
        @php
        $no =1;
        @endphp

        @foreach ($data as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->nip}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->telp}}</td>
            <td>{{$item->tanggal_lahir}}</td>
            <td>{{$item->tempat_lahir}}</td>
            <td>{{$item->jkel}}</td>
            <td>{{$item->status_pegawai}}</td>
            <td>{{$item->status_kawin}}</td>
            <td>{{$item->gol_darah}}</td>
            <td>{{$item->nomor_pegawai}}</td>
            <td>{{$item->unitkerja == null ? null : $item->unitkerja->nama}}</td>
        </tr>
        @endforeach
    </table>

    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td></td>
            <td><br />Banjarbaru, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}<br />
                Sekretaris <br /><br /><br /><br />

                <u>Roy Rizali Anwar</u><br />
                NIP. 19820516 198701 1 023
            </td>
        </tr>
    </table>
</body>

</html>