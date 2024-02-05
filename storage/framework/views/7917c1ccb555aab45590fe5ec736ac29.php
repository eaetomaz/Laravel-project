<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $__env->yieldContent('title'); ?></title>

        <!-- Fonte do google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        
        <!-- Fonte do Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <!-- CSS e afins -->
        <link rel="stylesheet" href="/css/styles.css">
        
    </head>
    <body class="antialiased">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class ="navbar-brand"></a>
                        <img src="/img/hdcevents_logo.jpg" alt="HDC Events" class="logo-pequena">
                    </a>
                </div>
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/events/create" class="nav-link">Criar eventos</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/events/entrar" class="nav-link">Entrar</a>
                    <li class="navbar-item">
                        <a href="/events/cadastro" class="nav-link">Cadastrar</a>
                    </li>
                    </li>
                </ul>
            </nav>
        </header>

    <main>
    <div class="container-fluid">
        <div class="row">
            <?php if(session('msg')): ?>
                <p class="msg"><?php echo e(session('msg')); ?></p>
            <?php endif; ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    </main>                   
    
    <footer>
        <p> HDC Events &copy; 2024</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    


    </body>
</html>
<?php /**PATH C:\xampp\htdocs\Projeto laravel\project\resources\views/layouts/main.blade.php ENDPATH**/ ?>