<div>
     <?php $__env->slot('title', null, []); ?> 
        Login
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('image_title', null, []); ?> 
            Home / Login
             <?php $__env->endSlot(); ?>
            <div class="my-5">
                <h1 class="text-center">Login For Voting</h1>
                <div class="container my-4">
                    <div class="row flex justify-content-center">
                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12">

                            <?php if(session()->has('error')): ?>
                                <div class="alert alert-danger">
                                    <strong><?php echo e(session('error')); ?></strong>
                                </div>
                            <?php endif; ?>
                            <form wire:submit.prevent='login'>
                                <div class="mb-3 mt-3">
                                    <label for="id" class="form-label">Vote Id:</label>
                                    <input type="text" wire:model='vote_id' class="form-control" id="voteid"
                                        placeholder="Enter Voteid" name="voteid">
                                    <?php $__errorArgs = ['vote_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="pwd" class="form-label">Password:</label>
                                    <input type="password" wire:model='password' class="form-control" id="pwd"
                                        placeholder="Enter password" name="pswd">
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</div>
<?php /**PATH C:\Users\DELL\online-voting-website-in-laravel-livewire-master\resources\views/livewire/frontend/login.blade.php ENDPATH**/ ?>