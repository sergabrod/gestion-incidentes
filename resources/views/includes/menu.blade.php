<div class="card">
    <div class="card-header text-white bg-primary">Menú</div>

    <div class="card-body">
        <ul class="nav nav-pills flex-column">
            @if (auth()->check())
                <li class="nav-item"><a href="#" class="nav-link active">Dashboard</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Ver incidencias</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Reportar incidencias</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Administración</a></li>
            @else
                <li class="nav-item"><a href="#" class="nav-link">Bienvenidos</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Instrucciones</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Créditos</a></li>
            @endif
        </ul>
    </div>
</div>
