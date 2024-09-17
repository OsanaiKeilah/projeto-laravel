{{-- tabela de livros cadastrados --}}
    <div class="row my-2">
        <div class="col-md-8 mx-auto">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Título</th>
                      <th>Autor</th>
                      <th style="width: 40px">Ano</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($livros as $livro)
                    <tr>
                      <td>{{$livro->id}}.</td>
                      <td>{{$livro->titulo}}</td>
                      <td>{{$livro->autor}}</td>
                      <td><span class="badge bg-danger">{{$livro->ano}}</span></td>
                      <td>
                        <i wire:click="edit({{$livro->id}})" class="nav-icon fas fa-edit text-blue mx-2"></i>
                        <i wire:click="delete({{$livro->id}})" class="nav-icon fas fa-trash text-red"></i>
                      </td>
                    </tr>                      
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

        </div>
    </div>