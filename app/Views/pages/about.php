<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<!-- Values such as $name and $section were prepared by Pages::about(). -->

<section class="page-heading">
    <span class="eyebrow">Project file / TFA2</span>
    <h1>About Ledgerline</h1>
    <p>A four-page CodeIgniter application that stores persistent account records in MySQL and retrieves them through Models.</p>
</section>

<section class="about-grid">
    <article class="story-card">
        <span class="card-tag">PROJECT BRIEF</span>
        <h2>A retail directory built around reliable records.</h2>
        <p>Ledgerline POS follows a clear MVC flow: a route selects a controller method, the controller asks a Model for records, and a view presents the returned data.</p>
        <p>The CustomerModel and UserModel connect the application to MySQL. Their Query Builder methods replace the static arrays from TFA1 without mixing database logic into the views.</p>
    </article>
    <aside class="profile-card">
        <div class="avatar" aria-hidden="true">JA</div>
        <span class="eyebrow">Developer profile</span>
        <h2><?= esc($name) ?></h2>
        <dl>
            <div><dt>Section</dt><dd><?= esc($section) ?></dd></div>
            <div><dt>Course</dt><dd><?= esc($course) ?></dd></div>
            <div><dt>Project</dt><dd>Technical Formative Assessment 2</dd></div>
        </dl>
    </aside>
</section>

<?= $this->endSection() ?>
