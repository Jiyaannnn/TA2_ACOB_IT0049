<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Acob POS database-backed account management portal">
    <title><?= esc($title) ?> | Acob POS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600&family=Manrope:wght@400;500;600;700&family=Syne:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>
<body>
    <a class="skip-link" href="#main-content">Skip to main content</a>
    <!-- Decorative layers are hidden from assistive technology because they carry no information. -->
    <div class="ambient ambient-one" aria-hidden="true"></div>
    <div class="ambient ambient-two" aria-hidden="true"></div>
    <div class="page-grid" aria-hidden="true"></div>
    <div class="app-shell">
        <!-- One shared layout keeps the header and footer consistent on every page. -->
        <header class="site-header">
            <a class="brand" href="<?= site_url('/') ?>" aria-label="Acob POS home">
                <span class="brand-mark"><span>A</span></span>
                <span><strong>ACOB<span>/POS</span></strong><small>RETAIL CONTROL SYSTEM</small></span>
            </a>
            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-navigation">Menu</button>
            <nav id="site-navigation" class="site-nav" aria-label="Main navigation">
                <a class="<?= $activePage === 'home' ? 'active' : '' ?>" href="<?= site_url('/') ?>">Dashboard</a>
                <a class="<?= $activePage === 'customers' ? 'active' : '' ?>" href="<?= site_url('customers') ?>">Customers</a>
                <a class="<?= $activePage === 'users' ? 'active' : '' ?>" href="<?= site_url('users') ?>">Users</a>
                <a class="<?= $activePage === 'about' ? 'active' : '' ?>" href="<?= site_url('about') ?>">About</a>
            </nav>
            <span class="course-chip">IT0049</span>
        </header>

        <!-- Child views insert their unique content into this named section. -->
        <main id="main-content" tabindex="-1"><?= $this->renderSection('content') ?></main>

        <footer class="site-footer">
            <p><strong>ACOB POS</strong> / Jian Edward A. Acob</p>
            <p>TW32 / IT0049 Web System Technologies</p>
        </footer>
    </div>
    <script>
        // This small script only controls the mobile navigation's open/closed state.
        const toggle = document.querySelector('.nav-toggle');
        const navigation = document.querySelector('.site-nav');
        toggle?.addEventListener('click', () => {
            const isOpen = toggle.getAttribute('aria-expanded') === 'true';
            toggle.setAttribute('aria-expanded', String(!isOpen));
            navigation.classList.toggle('open');
        });
    </script>
</body>
</html>
