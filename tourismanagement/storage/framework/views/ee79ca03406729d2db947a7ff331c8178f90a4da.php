<?php $__env->startSection('title'); ?>
    <title>Trang chủ</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">

        <?php echo $__env->make('partials.content-header', ['name' => 'Danh Mục', 'key' => 'Sửa'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <form action="<?php echo e(route('danhmuc.update', ['id'=>$danhmuc->id])); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input type="text" class="form-control"
                                       name="TenDanhMuc"
                                       value="<?php echo e($danhmuc->TenDanhMuc); ?>"
                                       placeholder="Nhập tên danh mục">
                            </div>

                            <div class="form-group">
                                <label>Danh mục cha</label>
                                <select class="form-control" name="id_Parent">
                                    <option value="0">Chọn danh mục cha</option>
                                    <?php echo $htmlOption; ?>

                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\tourismanagement\resources\views/danhmuc/edit.blade.php ENDPATH**/ ?>