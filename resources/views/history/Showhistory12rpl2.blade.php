@if ($His->isEmpty())
    <h6>Siswa Tidak Pernah Membuat Suatu Pelanggaran</h6>  
@else
@foreach ($His as $i => $item1)
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">no</th>
                <th scope="col">Kelas</th>
                <th scope="col">Nisn</th>
                <th scope="col">Nama</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
              <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$item1-> id_kelas}}</td>
                <td>{{$item1 -> nisn }}</td>
                <td>{{$item1 -> nama }}</td>
              </tr>
          </table>
      </div>
        <hr>
    @endforeach
@endif