    {{-- formulário de cadastro de livros --}}
    <div class="row pt-3">
        <div class="col-md-8 mx-auto">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cadastro de Livros</h3>
              </div>

              <form wire:submit="save">
                <div class="card-body">
                  <div class="form-group">
                    <label for="titulo">Título</label>
                    <input wire:model="form.titulo" type="text" class="form-control" id="titulo" name="titulo">
                  </div>
                  <div class="form-group">
                    <label for="autor">Autor</label>
                    <input wire:model="form.autor" type="text" class="form-control" id="autor" name="autor">
                  </div>
                  <div class="form-group">
                    <label for="ano">Ano de Lançamento</label>
                    <input wire:model="form.ano" type="text" class="form-control" id="ano" name="ano">
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