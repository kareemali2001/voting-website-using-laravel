<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System <?php echo e($title); ?></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <?php echo \Livewire\Livewire::styles(); ?>


</head>

<body style="background-color: rgb(224, 224, 224);">
    <div class="container-fluid p-2">
        <h1 class="text-center"> Voting System</h1>
        
        <h4 class="text-center"><?php echo e(Auth::guard('admin')->user()->username); ?></h4>
        
    </div>
    <hr>
    <div class="container">
        <div class="row flex justify-content-center">
            <div class="col-xl-2 my-3 col-lg-2 col-md-3 col-sm-4 col-3">
                <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-danger w-100">Dashboard</a>

            </div>
            <div class="col-xl-2 my-3 col-lg-2 col-md-3 col-sm-4 col-3">
                <a href="<?php echo e(route('admin.votes')); ?>" class="btn btn-danger w-100">Votes</a>

            </div>
            <div class="col-xl-2 my-3 col-lg-2 col-md-3 col-sm-4 col-3">
                <a href="<?php echo e(route('admin.positions')); ?>" class="btn btn-danger w-100">Position</a>
            </div>
            <div class="col-xl-2 my-3 col-lg-2 col-md-3 col-sm-4 col-3">
                <a href="<?php echo e(route('admin.condidates')); ?>" class="btn btn-danger w-100">Condidates</a>
            </div>
            <div class="col-xl-2 my-3 col-lg-2 col-md-3 col-sm-4 col-3">
                <a href="<?php echo e(route('admin.voters')); ?>" class="btn btn-danger w-100">Voters</a>

           
            <div class="col-xl-2 my-3 col-lg-2 col-md-3 col-sm-4 col-3">
                <div class="dropdown">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown">
                        <?php echo e(Auth::guard('admin')->user()->username); ?>

                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item btn btn-danger"
                                href="<?php echo e(route('admin.change_password')); ?>">Change
                                Password</a></li>
                        <li>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.logout')->html();
} elseif ($_instance->childHasBeenRendered('urwWYDQ')) {
    $componentId = $_instance->getRenderedChildComponentId('urwWYDQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('urwWYDQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('urwWYDQ');
} else {
    $response = \Livewire\Livewire::mount('admin.logout');
    $html = $response->html();
    $_instance->logRenderedChild('urwWYDQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php echo e($slot); ?>

    <footer class="bg-dark text-center p-2">
        <h4 class="text-white">voting System</h4>
    </footer>
    <!-- Latest compiled JavaScript -->
    <script src=" <?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH C:\Users\DELL\online-voting-website-in-laravel-livewire-master\resources\views/layout/admin-app.blade.php ENDPATH**/ ?>