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
                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('logo/logo2.png'))) }}"
                    width="70px"> &nbsp;&nbsp;
            </td>
            <td style="text-align: center;" width="60%">
                <font size="24px"><b>Dinas Komunikasi Informatika Statistik Dan Persandian<br /></b></font>
                Jl. Ahmad Yani KM 3,5 Kel. Batupiring Kec. Paringin Selatan. Kabupaten Balangan
            </td>
            <td width="15%">
            </td>
        </tr>
    </table>
    <hr>
    <h3 style="text-align: center">LAPORAN DATA INSTALASI
    </h3>
    <br />
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Kode instalasi</th>
            <th>Jenis</th>
            <th>Expired</th>
            <th>Aset</th>
        </tr>
        @php
        $no =1;
        @endphp

        @foreach ($data as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$key + 1}}</td>
            <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</td>
            <td>{{$item->kode}}</td>
            <td>{{$item->jenis}}</td>
            <td>{{\Carbon\Carbon::parse($item->expired)->format('d M Y')}}</td>
            <td>{{$item->aset == null ? null : $item->aset->nama}}</td>
        </tr>
        @endforeach
    </table>

    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td></td>
            <td><br />Balangan, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}<br />
                Pimpinan<br /><br /><br /><br /><br />

                <br />
                (...................)
            </td>
        </tr>
    </table>
</body>

</html>