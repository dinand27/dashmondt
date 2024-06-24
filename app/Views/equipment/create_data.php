<?php echo $this->extend('/layout/header'); ?>
<?php echo $this->section('content'); ?>
<?= $this->include('/layout/navbar') ?>

<div class="container fluid">
    <h1>Add Data</h1>

    <form action="<?php base_url('proses_data') ?> " method="POST">
            <div class="mb-3">
                <label for="nolambung" class="form-label">Nomor Lambung</label>
                <input type="text" class="form-control" id="nolambung" name="nolambung">
            </div>
            <div class="mb-3">
                <label for="waktu" class="form-label">Waktu</label>
                <input type="text" class="form-control" id="waktu" name="waktu">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      <!-- form bawah -->

</div>

<?php echo $this->endSection(); ?>