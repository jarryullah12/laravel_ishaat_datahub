// Common Navbar Component for Ishaat DataHub

function createNavbar(activePage = '') {
    return `
    <!-- Header -->
    <header class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <h1 class="site-title">وکالت اشاعت</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link ${activePage === 'index' ? 'active' : ''}" href="index.html">
                            <i class="fas fa-home ml-1"></i>صفحہ اول
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ${activePage === 'add-data' ? 'active' : ''}" href="add-data.html">
                            <i class="fas fa-plus ml-1"></i>ڈاک آمد اندراج
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ${activePage === 'view-data' ? 'active' : ''}" href="view-data.html">
                            <i class="fas fa-table ml-1"></i>ڈاک آمد فہرست
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ${activePage === 'add-ishaat-register' ? 'active' : ''}" href="add-ishaat-register.html">
                            <i class="fas fa-book ml-1"></i> روانگی ڈاک اندراج
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ${activePage === 'view-ishaat-register' ? 'active' : ''}" href="view-ishaat-register.html">
                            <i class="fas fa-list ml-1"></i> روانگی ڈاک فہرست 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ${activePage === 'settings' ? 'active' : ''}" href="settings.html">
                            <i class="fas fa-cog ml-1"></i>سیٹنگز
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ${activePage === 'signin' ? 'active' : ''}" href="signin.html">
                            <i class="fas fa-sign-in-alt ml-1"></i>لاگ ان
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    `;
}

// Function to load navbar into a page
function loadNavbar(activePage = '') {
    document.addEventListener('DOMContentLoaded', function() {
        const navbarContainer = document.getElementById('navbar-container');
        if (navbarContainer) {
            navbarContainer.innerHTML = createNavbar(activePage);
        }
    });
}

// Function to set active page
function setActivePage(pageName) {
    document.addEventListener('DOMContentLoaded', function() {
        // Remove active class from all nav links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.classList.remove('active');
        });
        
        // Add active class to current page link
        const activeLink = document.querySelector(`a[href="${pageName}.html"]`);
        if (activeLink) {
            activeLink.classList.add('active');
        }
    });
}
