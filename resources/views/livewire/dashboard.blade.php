<div>
    <x-breadcrumb titulo="Dashboard" :lista=$caminho />
    <h1>Minha primeira página Livewire</h1>
    <a href="/home" wire:navigate>Home</a>
    <a href="/categoria" wire:navigate>Categorias</a>
    <hr>

    <h3>Livros Disponíveis</h3>
    <div class="row">
        <input wire:keyup="filterBooks($event.target.value)" class="form-control form-control-navbar col-4" type="search" placeholder="Search" aria-label="Search">
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card card-widget widget-user-2">
              <div class="card-footer p-0">
                <ul class="nav flex-column">

                @foreach ($livros as $livro)
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      {{$livro}} <span class="float-right badge bg-primary">31</span>
                    </a>
                  </li>
                @endforeach

                </ul>
              </div>
            </div>
          </div>        

        </div>
    </div>
</div>
