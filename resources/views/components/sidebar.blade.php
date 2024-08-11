<div class="list-group">
    <div class="list-group-item list-group-item action"> 
        <ul>
            @auth
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Welcome back</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li><a href="/signin">Sign in</a></li>
            @endauth
        </ul>
    </div>
    <a href="/" class="list-group-item list-group-item action">Home</a>
    <a href="/list" class="list-group-item list-group-item action">Modul List</a>
    <a href="/add" class="list-group-item list-group-item action">Add New Modul</a>
</div>