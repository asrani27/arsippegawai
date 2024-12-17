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
    <h3 style="text-align: center">LAPORAN DATA PENSIUN<br>
    </h3>
    
    <center>PERIODE : {{\Carbon\Carbon::createFromFormat('m', $bulan)->translatedFormat('F')}} {{$tahun}}</center>
    <br />
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Tanggal Pensiun</th>
            <th>Nama Pegawai</th>
            <th>Keterangan</th>
        </tr>
        @php
        $no =1;
        @endphp

        @foreach ($data as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->tanggal}}</td>
            <td>{{$item->pegawai == null ? null : $item->pegawai->nama}}</td>
            <td>{{$item->keterangan}}</td>
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