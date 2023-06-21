<?= $this->extend('layouts/frontend') ?>

<?= $this->section('content') ?>

      <!-- Main Content -->
      <main class="main-content flex-grow-1">


      <?php foreach($carts as $cart):?>
        <?=$cart['name'];?>    
      <?php endforeach;?>


      </main>
      <!-- End Main Content -->

<?= $this->endSection() ?>

