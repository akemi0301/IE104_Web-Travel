<?php $__env->startSection('title'); ?>
    <title>Trang chủ</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">

        <?php echo $__env->make('partials.content-header', ['name' => 'Menu', 'key' => 'Thêm'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <form action="<?php echo e(route('menu.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label>Tên menu</label>
                                <input type="text" class="form-control"
                                       name="Ten"
                                       placeholder="Nhập tên menu">
                            </div>

                            <div class="form-group">
                                <label>Menu cha</label>
                                <select class="form-control" name="id_Parent">
                                    <option value="0">Chọn menu cha</option>
                                    <?php echo $optionSelect; ?>

                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\tourismanagement\resources\views/menu/add.blade.php ENDPATH**/ ?>