<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="pull-right raw-margin-top-24 raw-margin-left-24">
                <?php echo Form::open(['route' => 'toys.search']); ?>

                <input class="form-control form-inline pull-right" name="search" placeholder="Search">
                <?php echo Form::close(); ?>

            </div>
            <h1 class="pull-left">Toys: Edit</h1>
            <a class="btn btn-primary pull-right raw-margin-top-24 raw-margin-right-8" href="<?php echo route('toys.create'); ?>">Add New</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <?php echo Form::model($toy, ['route' => ['toys.update', $toy->id], 'method' => 'patch']); ?>


            <?php echo FormMaker::fromObject($toy, FormMaker::getTableColumns('toys')); ?>

            <?php echo Form::submit('Update', ['class' => 'btn btn-primary pull-right']); ?>


            <?php echo Form::close(); ?>


        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('quarx::layouts.dashboard', ['pageTitle' => '_camelUpper_casePlural_ &raquo; Show'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>