<div>
     <?php $__env->slot('title', null, []); ?> 
        Voter
         <?php $__env->endSlot(); ?>
        <div class="container">
            <div class="card my-3">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4><?php echo e(__('Voters ')); ?>(<?php echo e($total); ?>)</h4>
                        <button wire:click='showForm' class="btn btn-primary">New</button>
                    </div>
                </div>
            </div>
            <?php if($showTable == true): ?>
                <input type="text" wire:model="search" class="form-control" placeholder="Search Here...">
                <?php if(session()->has('success')): ?>
                    <div class="alert alert-success">
                        <strong><?php echo e(session('success')); ?></strong>
                    </div>
                <?php endif; ?>
                <?php if(session()->has('error')): ?>
                    <div class="alert alert-danger">
                        <strong><?php echo e(session('error')); ?></strong>
                    </div>
                <?php endif; ?>
                <div class="table-responsive my-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Vote Id</th>
                                <th>votes</th>
                                <th>voted</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($voters) > 0): ?>
                                <?php $__currentLoopData = $voters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($voter->id); ?></td>
                                        <td><?php echo e($voter->name); ?></td>
                                        <td><?php echo e($voter->email); ?></td>
                                        <td><?php echo e($voter->vote_id); ?></td>
                                        <td><?php echo e($voter->vote_limit); ?></td>
                                        <td><?php echo e($voter->voted == 0 ? 'Not Voted' : 'Voted'); ?></td>
                                        <td><img src="<?php echo e(asset('storage')); ?>/<?php echo e($voter->image); ?>"
                                                style="width:70px;height:70px;" alt=""></td>
                                        <td><button wire:click="edit(<?php echo e($voter->id); ?>)" class="btn btn-success">Edit</button></td>
                                        <td><button class="btn btn-danger" wire:click.prevent='delete(<?php echo e($voter->id); ?>)'>Delete</button></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <h4>Record Not Found</h4>
                            <?php endif; ?>

                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
            <?php if($showCreate == true): ?>
                <div class="my-2">
                    <button class="btn btn-secondary my-2" wire:click='goBack'>Go Back</button>

                    <form wire:submit.prevent='create'>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Name:</label>
                            <input type="text" wire:model.lazy="name" class="form-control" placeholder="Enter Name">
                            <?php $__errorArgs = ['name'];
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
                            <label for="pwd" class="form-label">Email:</label>
                            <input type="text" wire:model.lazy="email" class="form-control" placeholder="Enter Email">
                            <?php $__errorArgs = ['email'];
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
                            <input type="password" wire:model.lazy="password" class="form-control"
                                placeholder="Enter Password">
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
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Image:</label>
                            <input type="file" wire:model="image" class="form-control" placeholder="Enter Image">
                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <?php if($image): ?>
                                <img src="<?php echo e($image->temporaryUrl()); ?>" style="width:70px;height:70px;" alt="">
                            <?php endif; ?>

                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            <?php endif; ?>
            <?php if($showUpdate == true): ?>
                <div class="my-2">
                    <button class="btn btn-secondary my-2" wire:click='goBack'>Go Back</button>

                    <form wire:submit.prevent='update(<?php echo e($voter_id); ?>)'>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Name:</label>
                            <input type="text" wire:model.lazy="edit_name" class="form-control" placeholder="Enter Name">
                            <?php $__errorArgs = ['edit_name'];
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
                            <label for="pwd" class="form-label">Email:</label>
                            <input type="text" wire:model.lazy="edit_email" class="form-control" placeholder="Enter Email">
                            <?php $__errorArgs = ['edit_email'];
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
                            <label for="pwd" class="form-label">Image:</label>
                            <input type="file" wire:model="new_image" class="form-control" placeholder="Enter Image">

                            <?php if($new_image): ?>
                                <img src="<?php echo e($new_image->temporaryUrl()); ?>" style="width:70px;height:70px;" alt="">
                            <?php else: ?>
                                <img src="<?php echo e(asset('storage')); ?>/<?php echo e($old_image); ?>"
                                    style="width:70px;height:70px;" alt="">
                                <input type="text" wire:model='old_image'>
                            <?php endif; ?>

                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            <?php endif; ?>
        </div>
</div>
<?php /**PATH C:\Users\DELL\online-voting-website-in-laravel-livewire-master\resources\views/livewire/admin/voter.blade.php ENDPATH**/ ?>