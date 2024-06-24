<?php echo $this->extend('/layout/header'); ?>
<?php echo $this->section('content'); ?>
<?= $this->include('/layout/navbar') ?>

<div class="container-fluid">
<h1> <?php echo $title; ?></h1>
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add
</button>

<table class="table table-hover ">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th  scope="col">Unit</td>
        <th  scope="col">Jam</td>
        <th  scope="col">State</td>
        <th  scope="col">Edit</td>
    </tr>
    </thead>
    <?php   $n=1 ; foreach($dataUnit as $d): ?>
    <tbody>
    <tr>
        <td><?php echo $n++; ?> </td>
        <td><?php echo $d->nolambung ?> </td>
        <td><?php echo $d->waktu ?> </td>
        <td><?php echo $d->status ?> </td>
        <td><?php echo $d->id_project ?> </td>
    </tr>
    </tbody>

    <?php endforeach; ?>
</table>
</div>


<!-- Modal form input -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Equipment</h1>
      </div>
      <div class="modal-body">
        <!--  form batas atas -->
        <form action="">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Lambung</label>
                <input type="text" class="form-control" id="nolambung">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Waktu</label>
                <input type="text" class="form-control" id="waktu">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status">
            </div>
            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </form>
      <!-- form bawah -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?php echo $this->endSection(); ?>
 