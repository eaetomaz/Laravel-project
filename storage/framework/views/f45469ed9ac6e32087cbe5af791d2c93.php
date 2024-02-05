

<?php $__env->startSection('title', 'Criar evento'); ?>

<?php $__env->startSection('content'); ?>

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-group">
            <label for="image">Imagem do evento:</label>
            <input type="file" id="image" name="image" class="from-control-file">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Insira o nome do evento">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Em qual cidade vai ocorrer?">
        </div>
        <div class="form-group">
            <label for="private">É privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descriçao:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer nesse evento?"></textarea>
            <input type="submit" value="Criar evento" class="btn btn-primary">
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projeto laravel\project\resources\views/events/create.blade.php ENDPATH**/ ?>