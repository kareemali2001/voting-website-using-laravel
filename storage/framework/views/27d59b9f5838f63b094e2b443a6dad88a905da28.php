<div>
     <?php $__env->slot('title', null, []); ?> 
        Dashboard
         <?php $__env->endSlot(); ?>

        <div class="container my-4 ">
            <div class="row flex justify-content-center">
                <div class="col-xl-4 my-3 col-lg-4 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h4>Position</h4>
                            <span><?php echo e($totalPositions); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 my-3 col-lg-4 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h4>Condidates</h4>
                            <span><?php echo e($totalCandidates); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 my-3 col-lg-4 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h4>Voter</h4>
                            <span><?php echo e($totalVoter); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4  col-lg-4 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h4>Votes</h4>
                            <span><?php echo e($totalVotes); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Voted User</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>IsVoted</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(count($isVotedUser) > 0): ?>
                                            <?php $__currentLoopData = $isVotedUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($user->id); ?></td>
                                                    <td><?php echo e($user->name); ?></td>
                                                    <td><?php echo e($user->voted == 1 ? 'Voted' : ''); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Not Voted User</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>IsVoted</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(count($notVotedUser) > 0): ?>
                                            <?php $__currentLoopData = $notVotedUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($user->id); ?></td>
                                                    <td><?php echo e($user->name); ?></td>
                                                    <td><?php echo e($user->voted == 0 ? 'NotVoted' : ''); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php /**PATH C:\Users\DELL\vote project service\resources\views/livewire/admin/dashboard.blade.php ENDPATH**/ ?>