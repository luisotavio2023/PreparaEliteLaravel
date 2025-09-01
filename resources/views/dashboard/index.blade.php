<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            <i class="fas fa-graduation-cap me-2"></i>PreparaElite
        </a>
        
        <!-- Search Bar -->
        <div class="d-flex mx-lg-3 flex-grow-1">
            <form action="{{ route('courses.index') }}" method="GET" class="w-100">
                <div class="input-group">
                    <input class="form-control" type="search" name="search" placeholder="Buscar cursos..." aria-label="Search">
                    <button class="btn btn-light" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
        
        <!-- Nav Links -->
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item mx-1">
                    <a class="nav-link" href="{{ route('store.index') }}"><i class="fas fa-store me-1"></i> Loja</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link" href="{{ route('my-courses.index') }}"><i class="fas fa-book-open me-1"></i> Meus Cursos</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link" href="{{ route('exams.index') }}"><i class="fas fa-file-alt me-1"></i> Simulados</a>
                </li>
                <li class="nav-item dropdown mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user-circle me-1"></i> {{ Auth::user()->first_name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><h6 class="dropdown-header">Olá, {{ Auth::user()->full_name }}!</h6></li>
                        <li><a class="dropdown-item" href="{{ route('profile.show') }}"><i class="fas fa-user me-2"></i> Meu Perfil</a></li>
                        <li><a class="dropdown-item" href="{{ route('my-courses.index') }}"><i class="fas fa-book me-2"></i> Meus Cursos</a></li>
                        <li><a class="dropdown-item" href="{{ route('certificates.index') }}"><i class="fas fa-file-certificate me-2"></i> Certificados</a></li>
                        <li><a class="dropdown-item" href="{{ route('subscription.index') }}"><i class="fas fa-credit-card me-2"></i> Assinatura</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger"><i class="fas fa-sign-out-alt me-2"></i> Sair</button>
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link position-relative" href="{{ route('cart.index') }}">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-count">
                            {{ auth()->user()->cartItems()->count() }}
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>