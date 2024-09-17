    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo e($titulo); ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

                <?php for($i = 0; $i < count($lista) - 1; $i++): ?>
                    <li class="breadcrumb-item"><a href="#"><?php echo e($lista[$i]); ?></a></li>
                <?php endfor; ?>

                <li class="breadcrumb-item active"><?php echo e($lista[count($lista)-1]); ?></li>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section><?php /**PATH C:\Users\Reginaldo do Prado\Documents\tee\livewire\books\resources\views/components/breadcrumb.blade.php ENDPATH**/ ?>