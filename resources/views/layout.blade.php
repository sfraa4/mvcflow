<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; }
        body { display:flex; min-height:100vh; font-family: system-ui, -apple-system, "Segoe UI", Roboto, Arial; background:#f5f5f5; }

        .sidebar {
            width:250px;
            background:rgb(127, 170, 219);
            color:#fff;
            padding:20px 0;
            position:fixed;
            height:100vh;
            overflow-y:auto;
            box-shadow:2px 0 8px rgba(0,0,0,0.12);
        }
        .sidebar .brand{
            padding:20px;
            text-align:center;
            border-bottom:1px solid rgba(255,255,255,0.06);
            margin-bottom:18px;
            display:flex;
            align-items:center;
            gap:10px;
            justify-content:center;
        }
        .sidebar .brand h4 { margin:0; font-size:16px; font-weight:700; color:#fff; }
        .sidebar nav ul { list-style:none; padding:0; margin:0; }
        .sidebar nav ul li { margin:6px 0; }
        .sidebar nav ul li a {
            display:flex; align-items:center; padding:12px 20px; color:rgba(255,255,255,0.95); text-decoration:none;
            transition:all .18s ease; border-left:4px solid transparent;
        }
        .sidebar nav ul li a i { width:20px; text-align:center; margin-right:12px; }
        .sidebar nav ul li a:hover, .sidebar nav ul li a.active {
            background-color: rgba(255,255,255,0.06);
            padding-left:30px;
            border-left-color: rgba(255,255,255,0.12);
        }

        .main-content { margin-left:130px; flex:1; display:flex; flex-direction:column; min-height:100vh; }
        .topbar { background:#fff; padding:18px 28px; box-shadow:0 2px 6px rgba(0,0,0,0.06); display:flex; justify-content:space-between; align-items:center; }
        .topbar h2 { margin:0; color:#222; font-weight:600; font-size:18px; }

        .topbar .top-right { display:flex; align-items:center; gap:16px; }
        .notif { position:relative; color:#333; font-size:18px; cursor:pointer; }
        .notif .badge {
            position:absolute;
            top:-6px;
            right:-8px;
            background:#dc3545;
            color:#fff;
            border-radius:999px;
            padding:2px 6px;
            font-size:11px;
            font-weight:700;
        }

        .user-info { display:flex; align-items:center; gap:10px; }
        .user-avatar {
            width:40px;
            height:40px;
            border-radius:50%;
            background:#001f3f; /* navy */
            color:#fff;
            display:flex;
            align-items:center;
            justify-content:center;
            font-weight:700;
            font-size:16px;
            flex-shrink:0;
        }
        .user-text { display:flex; flex-direction:column; }
        .user-text .name { font-weight:600; color:#222; font-size:14px; }
        .user-text .role { color:#7a7a7a; font-size:13px; }

        .content { padding:26px; flex:1; overflow-y:auto; }

        @media (max-width:768px){ .sidebar{width:200px;} .main-content{margin-left:200px;} .topbar { padding:12px 16px; } }
        @media (max-width:576px){
            .sidebar{width:70px;padding:10px 0;}
            .main-content{margin-left:70px;}
            .sidebar .brand, .sidebar nav ul li a span{ display:none; }
            .sidebar nav ul li a{ justify-content:center; padding:12px; }
        }
    </style>
    @yield('styles')
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="brand">
            <i class="fas fa-cube" style="font-size:20px;color:#fff"></i>
            <h4>Dashboard Admin</h4>
        </div>
        <nav>
            <ul>
                <li><a href="/dashboard" class="active"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
                <li><a href="/categories"><i class="fas fa-tags"></i> <span>Categories</span></a></li>
                <li><a href="/users"><i class="fas fa-users"></i> <span>Users</span></a></li>
                <li><a href="/items"><i class="fas fa-box"></i> <span>Item</span></a></li>
                <li><a href="/transactions"><i class="fas fa-exchange-alt"></i> <span>Transactions</span></a></li>
                <li><a href="/logout"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="topbar">
            <h2>@yield('page-title', 'Dashboard')</h2>

            <div class="top-right">
                <div class="notif" title="Notifications">
                    <i class="fas fa-bell"></i>
                    <span class="badge">3</span>
                </div>

                <div class="user-info">
                    <div class="user-avatar">A</div>
                    <div class="user-text">
                        <div class="name">Admin User</div>
                        <div class="role">Administrator</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>