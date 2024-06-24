<?php echo $this->extend('layout/header'); ?>
<?php echo $this->section('content'); ?>
<?= $this->include('layout/navbar') ?>

<div class="container-fluid">
<h1>Setup Equipment</h1>

<table class="table ">
    <tr>
        <th>#</th>
        <td>Unit</td>
        <td>Jam</td>
        <td>State</td>
        <td>Edit</td>
    </tr>
    <tr>
        <td>1</td>
        <td>DT-333</td>
        <td>12.00</td>
        <td>Ready</td>
        <td><button class="btn btn-success"></button></td>

    </tr>
</table>

</div>

<?php echo $this->endSection(); ?>
 