<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Fixed Sidebar</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo e(asset('adminlte/plugins/fontawesome-free/css/all.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('adminlte/dist/css/adminlte.min.css')); ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <?php if (isset($component)) { $__componentOriginal69384bd0a07e38a1af1ee9618d4b6686 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69384bd0a07e38a1af1ee9618d4b6686 = $attributes; } ?>
<?php $component = App\View\Components\TopNavbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('top-navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TopNavbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69384bd0a07e38a1af1ee9618d4b6686)): ?>
<?php $attributes = $__attributesOriginal69384bd0a07e38a1af1ee9618d4b6686; ?>
<?php unset($__attributesOriginal69384bd0a07e38a1af1ee9618d4b6686); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69384bd0a07e38a1af1ee9618d4b6686)): ?>
<?php $component = $__componentOriginal69384bd0a07e38a1af1ee9618d4b6686; ?>
<?php unset($__componentOriginal69384bd0a07e38a1af1ee9618d4b6686); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal0194515b6b695d8cf6c9d3ade76a371b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0194515b6b695d8cf6c9d3ade76a371b = $attributes; } ?>
<?php $component = App\View\Components\SideNavbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('side-navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SideNavbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0194515b6b695d8cf6c9d3ade76a371b)): ?>
<?php $attributes = $__attributesOriginal0194515b6b695d8cf6c9d3ade76a371b; ?>
<?php unset($__attributesOriginal0194515b6b695d8cf6c9d3ade76a371b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0194515b6b695d8cf6c9d3ade76a371b)): ?>
<?php $component = $__componentOriginal0194515b6b695d8cf6c9d3ade76a371b; ?>
<?php unset($__componentOriginal0194515b6b695d8cf6c9d3ade76a371b); ?>
<?php endif; ?>

  <div class="content-wrapper">
    <section class="content">
        <?php echo e($slot); ?>

    </section>
  </div>

    <?php if (isset($component)) { $__componentOriginala33122cb0b9fd17772b84599172c4ce9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala33122cb0b9fd17772b84599172c4ce9 = $attributes; } ?>
<?php $component = App\View\Components\PageFooter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('page-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PageFooter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala33122cb0b9fd17772b84599172c4ce9)): ?>
<?php $attributes = $__attributesOriginala33122cb0b9fd17772b84599172c4ce9; ?>
<?php unset($__attributesOriginala33122cb0b9fd17772b84599172c4ce9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala33122cb0b9fd17772b84599172c4ce9)): ?>
<?php $component = $__componentOriginala33122cb0b9fd17772b84599172c4ce9; ?>
<?php unset($__componentOriginala33122cb0b9fd17772b84599172c4ce9); ?>
<?php endif; ?>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script src="<?php echo e(asset('adminlte/plugins/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/dist/js/adminlte.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/dist/js/demo.js')); ?>"></script>
</body>
</html>
<?php /**PATH /home/aluno/Downloads/app/resources/views/components/layouts/app.blade.php ENDPATH**/ ?>