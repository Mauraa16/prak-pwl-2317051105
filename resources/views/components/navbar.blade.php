<style>
    nav {
        background: #b49c9c;
        padding: 14px 30px;
        color: white;
        box-shadow: 0 2px 6px rgba(150, 120, 120, 0.6);
    }
    nav .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1100px;
        margin: auto;
    }
    nav h1 {
        font-size: 20px;
        font-weight: bold;
        letter-spacing: 1px;
    }
    nav ul {
        display: flex;
        gap: 20px;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    nav a {
        text-decoration: none;
        color: white;
        font-weight: normal;
        transition: 0.3s;
    }
    nav a:hover {
        color: #fddadaba;
    }
    nav a.active {
        font-weight: bold;
    }
</style>

<nav>
    <div class="container">
        <h1>Sistem Pengguna</h1>
        <ul>
            <li>
                <a href="{{ url('/') }}" 
                   class="{{ request()->is('/') ? 'active' : '' }}">
                   Home
                </a>
            </li>
            <li>
                <a href="{{ url('/user') }}" 
                   class="{{ request()->is('user') ? 'active' : '' }}">
                   Daftar Pengguna
                </a>
            </li>
            <li>
                <a href="{{ url('/user/create') }}" 
                   class="{{ request()->is('user/create') ? 'active' : '' }}">
                   Tambah Pengguna
                </a>
            </li>
        </ul>
    </div>
</nav>