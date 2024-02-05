<?php $__env->startSection('title', 'HDC Events'); ?>

<?php $__env->startSection('content'); ?>

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" name="search" id="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div  id="events-container" class="col-md-12">
        <h2>Próximos eventos</h2>
        <p >Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card col-md-3">
                    <img src="/img/events/ <?php echo e($event->image); ?>" alt="<?php echo e($event->title); ?>">
                    <div class="card-body">
                        <p class="card-date">19/02/2024</p>
                        <h5 class="card-title"><?php echo e($event->title); ?></h5>
                        <p class="card-participants">X participantes</p>
                        <a href="" class="btn btn-primeary">Saber mais</a>
                    </div>                
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projeto laravel\project\resources\views/welcome.blade.php ENDPATH**/ ?>