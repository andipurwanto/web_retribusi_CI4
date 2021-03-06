<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>My Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">My Profile</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="card mb-3" style="max-width: 1024px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url('/assets/img/avatar/' . user()->user_image); ?>" class="card-img img-thumbnail" alt="<?= user()->username; ?>">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <b>
                                        <li class="list-group-item"><?= user()->username; ?></li>
                                    </b>
                                    <?php if (user()->fullname) : ?>
                                        <li class="list-group-item"><?= user()->fullname; ?></li>
                                    <?php endif; ?>
                                    <li class="list-group-item"><?= user()->email; ?></li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<?= $this->endSection(); ?>