<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Executive Summary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #000;
        }
        h1, h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
        }
        .badge-opacity-warning {
            color: #856404;
            background-color: rgba(255, 193, 7, .2);
        }
        .badge-opacity-success {
            color: #155724;
            background-color: rgba(40, 167, 69, .2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Laporan Executive Summary</h1>
        <p>Waktu cetak: {{$waktu}}</p>

        <h2>Jumlah Korban</h2>
        <table>
            <thead>
                <tr>
                    <th>Jumlah KK</th>
                    <th>Jumlah Jiwa</th>
                    <th>Luka Ringan</th>
                    <th>Meninggal</th>
                    <th>Hilang</th>
                    <th>Pengungsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$jumlah['kk']}}</td>
                    <td>{{$jumlah['jiwa']}}</td>
                    <td>{{$jumlah['ringan']}}</td>
                    <td>{{$jumlah['mati']}}</td>
                    <td>{{$jumlah['hilang']}}</td>
                    <td>{{$jumlah['pengungsi']}}</td>
                </tr>
            </tbody>
        </table>

        <h2>Kejadian Bencana</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama Kejadian</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kejadian as $x)
                <tr>
                    <td>{{$x->nama_kejadian}}</td>
                    <td>{{$x->tanggal_kejadian}}</td>
                    <td>{{$x->keterangan}}</td>
                    <td>{{$x->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Rekap Layanan</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kejadian</th>
                    <th>Tanggal</th>
                    <th>Distribusi</th>
                    <th>Layanan Kesehatan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no=1;
                @endphp
                @foreach($layanan as $x)
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$x->nmKejadian}}</td>
                    <td>{{$x->dateKejadian}}</td>
                    <td>{{$x->layDis}}</td>
                    <td>{{$x->layKes}}</td>
                    <td>
                        @if($x->stat == 'On Process')
                        <div class="badge badge-opacity-warning">In progress</div>
                        @else
                        <div class="badge badge-opacity-success">Aktif</div>
                        @endif
                    </td>
                </tr>
                @php
                $no++
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
