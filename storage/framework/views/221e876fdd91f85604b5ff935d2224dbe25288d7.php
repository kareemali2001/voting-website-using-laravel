<div>
     <?php $__env->slot('title', null, []); ?> 
        Change password
         <?php $__env->endSlot(); ?>
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $candidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?php echo e(asset('storage')); ?>/<?php echo e($candidate->image); ?>" style="width: 100%; "
                                    alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="my-2"><?php echo e($candidate->fname); ?> <?php echo e($candidate->lname); ?></h5>
                                <button class="btn btn-info" style="width: 100%;">points( <?php echo e($candidate->points); ?>

                                    )</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
</div>
<?php /**PATH C:\Users\DELL\online-voting-website-in-laravel-livewire-master\resources\views/livewire/admin/get-candidate-votes.blade.php ENDPATH**/ ?>