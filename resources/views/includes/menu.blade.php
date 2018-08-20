<div class="card">
    <div class="card-header text-white bg-primary">Menú</div>

    <div class="card-body">
        <ul class="nav nav-pills flex-column">
            @if (auth()->check())
                <li class="nav-item"><a href="#" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Ver incidencias</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Reportar incidencias</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  Administración</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ URL::to('/')}}/usuarios">Usuarios</a>
                    <a class="dropdown-item" href="{{ URL::to('/')}}/proyectos">Proyectos</a>
                    <a class="dropdown-item" href="{{ URL::to('/')}}/configuracion">configuración</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Opciones</a>
                  </div>
                </li>
            @else
                <li class="nav-item"><a href="#" class="nav-link">Bienvenidos</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Instrucciones</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Créditos</a></li>
            @endif
        </ul>
    </div>
</div>
