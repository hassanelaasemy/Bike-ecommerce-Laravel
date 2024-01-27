<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard</title>
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('css/dash.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bxl-c-plus-plus"></i>
            <span class="logo_name">Dream-Bike</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="{{ route('dashboardAdmin') }}" class="active">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('adminproduct') }}">
                    <i class="bx bx-box"></i>
                    <span class="links_name">Products</span>
                </a>

            </li>
            <li>
                <a href="">
                    <i class="bx bx-box"></i>
                    <span class="links_name">Update Pro</span>
                </a>
            </li>
            <li>
                <a href="{{ route('Admincategory') }}">
                    <i class="bx bx-list-ul"></i>
                    <span class="links_name">categories</span>
                </a>
            </li>
            <li>
                <a href="{{route('getallorder')}}">
                    <i class="bx bx-book-alt"></i>
                    <span class="links_name">All orders</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
                <span class="dashboard">Dashboard</span>
            </div>
        </nav>

        @yield('content')
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };
    </script>

</body>

</html>
