
<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>

<div class="actionbutton mt-2">
   <a class="btn btn-info float-right mb20" href="<?=site_url('subjects/create')?>">Add Subject</a>
</div>

<?php 
// Display Response
if(session()->has('message')){
?>
   <div class="alert <?= session()->getFlashdata('alert-class') ?>">
      <?= session()->getFlashdata('message') ?>
   </div>
<?php
}
?>

<!-- Subject List -->
<table width="100%" border="1" style="border-collapse: collapse;">
  <thead>
    <tr>
      <th width="10%">ID</th>
      <th width="30%">Name</th>
      <th width="45%">Description</th>
      <th width="15%">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  if(count($subjects) > 0){

    foreach($subjects as $subject){
  ?>
     <tr>
       <td><?= $subject['id'] ?></td>
       <td><?= $subject['name'] ?></td>
       <td><?= $subject['description'] ?></td>
       <td align="center">
         <a class="btn btn-sm btn-info" href="<?= site_url('subjects/edit/'.$subject['id']) ?>">Edit</a>
         <a class="btn btn-sm btn-danger" href="<?= site_url('subjects/delete/'.$subject['id']) ?>">Delete</a>
       </td>
     </tr>
  <?php
    }

  }else{
  ?>
    <tr>
      <td colspan="4">No data found.</td>
    </tr>
  <?php
  }
  ?>
  </tbody>
</table>
<?= $this->endSection() ?>
