@vite(['resources/css/dashboard.css'])

<div class="dashboard-wrapper">
    
    
    <aside class="sidebar">
        <div class="sidebar-brand">The Market</div>
        <nav class="sidebar-menu">
            <div class="menu-item active">Dashboard</div>
            <div class="menu-item">Ads</div>
            <div class="menu-item">Profile</div>
            <div class="menu-item">Settings</div>
        </nav>
    </aside>

    <!-- RECHTERHOOFDPAVILJOEN -->
    <div class="main-content">
        
        <!-- NAVBAR -->
        <header class="navbar">
            <div class="navbar-left">
                <span class="menu-toggle">☰</span>
                <input type="text" class="search-bar" placeholder="Search...">
            </div>
            <div class="navbar-right">
                <div class="user-profile">
                    <span>Welcome, {{ Auth::user()->name }}!</span>
                </div>
            </div>
        </header>

        <!-- DASHBOARD CONTAINER -->
        <main class="dashboard-body">
            
            <h1 class="dashboard-title">Welcome to the marketplace</h1>
            
            <!-- DE 4 SMALL BOXES (Bovenste rij) -->
            <div class="box-container">
                <div class="layout-box">
                    <div class="box-icon-placeholder">
                        <img src="/icons/notif.png" alt="Notification" class="info-icon">
                    </div>
                    <div class="box-content-placeholder">
                        <div class="line-small"></div>
                        <div class="line-large"></div>
                        <div class="line-medium"></div>
                    </div>
                </div>

                <div class="layout-box">
                    <div class="box-icon-placeholder">
                        <img src="/icons/cart.png" alt="Cart" class="info-icon">
                    </div>
                    <div class="box-content-placeholder">
                        <div class="line-small"></div>
                        <div class="line-large"></div>
                        <div class="line-medium"></div>
                    </div>
                </div>

                <div class="layout-box">
                    <div class="box-icon-placeholder">
                    <img src="/icons/user.png" alt="Cart" class="info-icon">
                    </div>
                    <div class="box-content-placeholder">
                        <div class="line-small"></div>
                        <div class="line-large"></div>
                        <div class="line-medium"></div>
                    </div>
                </div>

                <div class="layout-box">
                    <div class="box-icon-placeholder">
                        <img src="/icons/settings.png" alt="Settings" class="info-icon">
                    </div>
                    <div class="box-content-placeholder">
                        <div class="line-small"></div>
                        <div class="line-large"></div>
                        <div class="line-medium"></div>
                    </div>
                </div>
            </div>

            <!-- DE 2 PANELS ERONDER (Onderste rij) -->
            <div class="panels-row">
                <div class="large-panel">
                    <div class="panel-header-placeholder"></div>
                    <div class="panel-chart-placeholder"></div>
                </div>
                <div class="large-panel">
                    <div class="panel-header-placeholder"></div>
                    <div class="panel-chart-placeholder"></div>
                </div>
            </div>

        </main>
    </div>
</div>
