<div>
     <?php $__env->slot('title', null, []); ?> 
        Position
         <?php $__env->endSlot(); ?>
        <div class="container">
            <div class="card my-3">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4><?php echo e(__('Position ')); ?>(<?php echo e($total); ?>)</h4>
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
                                <th>Position</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($positiones) > 0): ?>
                                <?php $__currentLoopData = $positiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($position->id); ?></td>
                                        <td><?php echo e($position->positions); ?></td>
                                        <td><button wire:click="edit(<?php echo e($position->id); ?>)" class="btn btn-success">Edit</button></td>
                                        <td><button class="btn btn-danger" wire:click.prevent='delete(<?php echo e($position->id); ?>)'>Delete</button></td>
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

                    <form wire:submit.prevent='store'>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Position:</label>
                            <input type="text" wire:model.lazy="positions" class="form-control"
                                placeholder="Enter positions">
                            <?php $__errorArgs = ['positions'];
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
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            <?php endif; ?>
            <?php if($showUpdate == true): ?>
                <div class="my-2">
                    <button class="btn btn-secondary my-2" wire:click='goBack'>Go Back</button>

                    <form wire:submit.prevent='update(<?php echo e($position_id); ?>)'>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Position:</label>
                            <input type="text" wire:model.lazy="edit_position" class="form-control"
                                placeholder="Enter positions">
                            <?php $__errorArgs = ['edit_position'];
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
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            <?php endif; ?>
        </div>
</div>
<?php /**PATH C:\Users\DELL\vote project service\resources\views/livewire/admin/position.blade.php ENDPATH**/ ?>