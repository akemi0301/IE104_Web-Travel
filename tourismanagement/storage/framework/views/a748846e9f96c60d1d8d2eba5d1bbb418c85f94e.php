<?php $__env->startSection('title'); ?>
    <title>Trang chủ</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <?php echo $__env->make('partials.content-header', ['name' => 'Danh Mục', 'key' => 'List'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo e(route('danhmuc.create')); ?>" class="btn btn-success float-right m-2">Thêm</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $__currentLoopData = $danhmucs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $danhmuc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($danhmuc->id); ?></th>
                                    <td><?php echo e($danhmuc->TenDanhMuc); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('danhmuc.edit', ['id' => $danhmuc->id])); ?>"
                                           class="btn btn-default">Chỉnh Sửa</a>
                                        <a href="<?php echo e(route('danhmuc.delete',['id' => $danhmuc->id])); ?>"
                                           class="btn btn-danger">Xóa</a>
                                    </td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <?php echo e($danhmucs->links('pagination::bootstrap-4')); ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\tourismanagement\resources\views/danhmuc/index.blade.php ENDPATH**/ ?>