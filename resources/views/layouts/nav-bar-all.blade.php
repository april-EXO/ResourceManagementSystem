<!-- Navigation Bar-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">RMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                </li>

                @if (Auth::check())
                    <li class="nav-item">
                        @if (Auth::user()->isBeneficiary == false)
                            <a class="nav-link active" href="/applicationSubmittedVerify"
                                aria-current="page">Application</a>
                        @else
                            <a class="nav-link active" href="/beneficiary-profile" aria-current="page">Beneficiary
                                Profile</a>
                        @endif
                    </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link active" href="https://yastgroup.com.my/en/">About Us</a>
                </li>
            </ul>

            @auth
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/profile">My Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            @else
                <a class="btn btn btn-dark btn-outline-light mx-2" href="/register" role="submit">Register</a>
                <a class="btn btn btn-dark btn-outline-light mx-2" href="/login" role="submit">Login</a>
                @endif


            </div>
        </div>
    </nav>
