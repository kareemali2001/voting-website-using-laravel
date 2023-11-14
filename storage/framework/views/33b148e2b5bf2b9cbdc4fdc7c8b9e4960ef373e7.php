<div>
     <?php $__env->slot('title', null, []); ?> 
        Home
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('image_title', null, []); ?> 
            Election 2023
             <?php $__env->endSlot(); ?>
            <div class="my-5">
                <h1 class="text-center">Vote</h1>
                <div class="container my-4">
                    <div class="table-responsive">
                        <?php if(session()->has('success')): ?>
                            <div class="alert alert-success">
                                <strong><?php echo e(session('success')); ?></strong>
                            </div>
                        <?php endif; ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Condidate Name</th>
                                    <th class="text-center">Position</th>
                                    <th class="text-center">Votes</th>
                                    <th class="text-center">Submit vote</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(count($candidates) > 0): ?>
                                    <?php $__currentLoopData = $candidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-center" style="vertical-align: middle">
                                                <?php echo e($candidate->id); ?></td>
                                            <td class="text-center" style="vertical-align: middle"><img
                                                    src="<?php echo e(asset('storage')); ?>/<?php echo e($candidate->image); ?>" alt=""
                                                    style="width:100px;height:100px;"></td>
                                            <td class="text-center" style="vertical-align: middle">
                                                <?php echo e($candidate->fname); ?> <?php echo e($candidate->lname); ?></td>
                                            <td class="text-center" style="vertical-align: middle">
                                                <?php echo e($candidate->positions->positions); ?></td>
                                            <td class="text-center" style="vertical-align: middle">
                                                <?php echo e($candidate->points); ?></td>
                                            <?php
                                                $isVoted = \App\Models\Votes::where(['user_id' => Auth::user()->id, 'con_id' => $candidate->id])->first();
                                                
                                            ?>

                                            <?php if(isset($isVoted)): ?>
                                                <?php if($isVoted->user_id == Auth::user()->id || $isVoted->con_id == $candidate->id): ?>
                                                    <td class="text-center" style="vertical-align: middle"><button
                                                            disabled class="btn btn-success">Submited</button>
                                                    </td>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                            <?php if(empty($isVoted)): ?>
                                                <td class="text-center" style="vertical-align: middle"><button
                                                        class="btn btn-success"
                                                        wire:click='addVote(<?php echo e($candidate->id); ?>)'>Submit</button>
                                                </td>
                                            <?php endif; ?>



                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <h3>Record Not Found</h3>
                                <?php endif; ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</div>
<?php /**PATH C:\Users\DELL\vote project service\resources\views/livewire/frontend/home.blade.php ENDPATH**/ ?>