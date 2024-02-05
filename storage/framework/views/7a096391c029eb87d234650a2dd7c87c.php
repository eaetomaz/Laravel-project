

<?php $__env->startSection('title', 'Product'); ?>

<?php $__env->startSection('content'); ?>


    <?php if($busca != ''): ?>
        <p>O usuário está buscando por: <?php echo e($busca); ?></p>
    <?php endif; ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projeto laravel\project\resources\views/product.blade.php ENDPATH**/ ?>