<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <P>
                <H2 style="text-align: center">LAPORAN POINT PELANGGARAN SISWA</H2>
                <p style="text-align: right">Tanggal : {{$tomorrow}}</p>
                <p>Kelas <span style="display: inline-block; margin-left: 35px;">: {{$kelas->kelass}}</span> <br>
                    Wali Kelas : {{$kelas->kelasss->nama}}
                </p>
            </P>
            <hr>
            <table class="table" id="customers">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nisn</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Skor</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data as $b => $items)
                    <tr>
                        <th scope="row">{{ ++$b }}</th>
                        <td>{{ $items->nisn}}</td>
                        <td>{{ $items->nama }}</td>
                        <td>{{ $items->kelas1->kelass }}</td>
                        <td>{{ $items->skor }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>