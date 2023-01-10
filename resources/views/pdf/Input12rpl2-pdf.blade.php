<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kelas</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Skor</th>
            
        </tr>
    </thead>
    <tbody>
        {{-- perulangan --}}
        @foreach ($dataa as $b => $items)
            <tr>
                <th scope="row">{{ ++$b }}</th>
                <td>12 RPL 2</td>
                <td>{{ $items->nama }}</td>
                <td>{{ $items->skor }}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>

