<?= $this->extend('admin/template/template'); ?>
<?= $this->Section('content'); ?>


<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Tambah Founder</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-8">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="card-body">
                        <form action="<?= base_url('admin/founder/proses_tambah') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                            <div class="mb-3">
                                <label class="form-label">Nama Founder</label>
                                <input type="text" class="form-control" name="nama_founder" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto founder</label>
                                <input type="file" class="form-control" name="foto_founder">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi Founder</label>
                                <textarea class="form-control" name="deskripsi_founder"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?= base_url('admin/founder/index') ?>" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div><!--//app-card-->
            </div>
        </div><!--//row-->
        <hr class="my-4">
    </div><!--//container-fluid-->
</div><!--//app-content-->

<?= $this->endSection(); ?>
