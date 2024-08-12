<!-- Column 1: Sidebar -->
<div class="sidebar d-flex flex flex-column">
    <div class="sidebar-up" style="background-color: #45624E; display:flex; flex-direction: column; justify-content:center; align-items:center;">
        <div class="bi bi-person" style="font-size: 45px"></div>
        @auth
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
        @else
        <a href="/signin">Sign in</a>
        @endauth
    </div>

    <div class="sidebar-bottom">
        <!-- Sidebar content here -->
        <div class="d-flex flex-column">
            <a href="/" class="sidebar-link"><span  class="bi bi-app-indicator" style="margin-left: 5px; margin-right: 5px"></span>Home</a>
            <a href="/list" class="sidebar-link"><span  class="bi bi-archive" style="margin-left: 5px; margin-right: 5px"></span>Modul List</a>
            <a href="/add" class="sidebar-link"><span class="bi bi-cloud-upload" style="margin-left: 5px; margin-right: 5px"></span>Add New Module</a>
        </div>
    </div>
</div>