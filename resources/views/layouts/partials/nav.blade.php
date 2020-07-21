<nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
    <div class="container">
        <a class="navbar-brand ml-2" href="/">Rentaly</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/feed">Feed</a></li>

                @if(session('user_phone')==env('USER_OWNER'))
                <li class="nav-item"><a href="/manage/18765971707" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="/logout" class="nav-link text-primary">Logout</a></li>

                @elseif(session('user_phone')=='')
                <a href="/signin" class="nav-link">Log In</a>
                <a href="/register" class="border border-primary text-primary nav-link">Sign Up</a>

                @else
                <li class="nav-item"><a href="/profile" class="nav-link">My Profile</a></li>
                <li class="nav-item"><a href="/logout" class="nav-link text-primary">Logout</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>