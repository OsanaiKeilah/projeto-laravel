<div>

    <div class="row pt-3">
        <div class="col-md-8 mx-auto">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Categorias de Contas</h3>
              </div>

              <form wire:submit="save">
                <div class="card-body">
                  <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <input wire:model="form.tipo" type="text" class="form-control" id="tipo" name="tipo">
                  </div>
                  <div class="form-group">
                    <label for="nome">Nome</label>
                    <input wire:model="form.nome" type="text" class="form-control" id="nome" name="nome">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>
            </div>


        </div>
    </div>

    <div class="row my-2">
        <div class="col-md-8 mx-auto">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Tipo</th>
                      <th>Nome</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($categorias as $categoria)
                    <tr>
                      <td>{{$categoria->id}}.</td>
                      <td>{{$categoria->tipo}}</td>
                      <td>{{$categoria->nome}}</td>
                      <td>
                        <i wire:click="edit({{$categoria->id}})" class="nav-icon fas fa-edit text-blue mx-2"></i>
                        <i wire:click="delete({{$categoria->id}})" class="nav-icon fas fa-trash text-red"></i>
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

</div>
