<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Voting System<?php echo e($title); ?></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <?php echo \Livewire\Livewire::styles(); ?>


</head>
<style>
    .bg-image {
        background: rgba(0, 0, 0, 0.5) url('https://images.unsplash.com/photo-1616891722586-e572f3ea8acb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGVsZWN0aW9ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=400&q=60');
        background-blend-mode: darken;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 30vh;
    }

</style>

<body>
    <nav class="container-fluid bg-dark">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="nav-link text-white"></h3>
                <div class="d-flex text-white align-items-center">
                    <?php if(auth()->guard()->check()): ?>
                        <h5><?php echo e(Auth::user()->name); ?></h5>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.logout')->html();
} elseif ($_instance->childHasBeenRendered('Y4r7ycg')) {
    $componentId = $_instance->getRenderedChildComponentId('Y4r7ycg');
    $componentTag = $_instance->getRenderedChildComponentTagName('Y4r7ycg');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Y4r7ycg');
} else {
    $response = \Livewire\Livewire::mount('frontend.logout');
    $html = $response->html();
    $_instance->logRenderedChild('Y4r7ycg', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <?php endif; ?>
                    <?php if(auth()->guard()->guest()): ?>
                        <a href="<?php echo e(route('front.login')); ?>" class="nav-link text-white">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- hero section -->
   
            

        </div>
    </div>

    <?php echo e($slot); ?>

   
    <!-- Latest compiled JavaScript -->
    <script src=" <?php echo e(asset('js/bootstrap.min.css')); ?>">
    </script>

    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH C:\Users\DELL\vote project service\resources\views/layout/app.blade.php ENDPATH**/ ?>