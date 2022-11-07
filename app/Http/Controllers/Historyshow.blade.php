@if ($History->isEmpty())
    <h6>Belum ada pelanggaran sama sekali Yang pernah dilakukan oleh Siswa ini</h6>  
@else
    @foreach ($History as $item1)
    <div class="col-lg-12">
            <div class="card shadow mb-4"> 
                <div class="card-header" id="pp">
                    <div class="row">
                    </div>
                    </div>
                <div class="card-body">
                  <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">no</th>
                          <th scope="col">Bentuk pelanggaran</th>
                          <th scope="col">Skor Sanksi</th>
                          <th scope="col">Tanggal</th>
                          <th scope="col">Guru</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                        <tr>
                          <th scope="row">{{++$i}}</th>
                          <td>{{$item1 -> nisn }}</td>
                          <td>{{$item1 -> nama }}</td>
                          <td><a onclick="" class="btn-sm btn-info"><i class="fas fa-folder-open"></i></a>
                              <a href="" class="btn-sm btn-primary"><i class="fas fa-plus"></i></a>
                            </a></td>
                        </tr>
                    </table>
                </div>
              </div>
               </div>
    @endforeach
@endif