<?php $__env->startSection('title'); ?>
    <title>Trang chủ</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?php echo $__env->make('partials.content-header', ['name' => 'Danh Mục', 'key' => 'Thêm'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <form>
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input type="email" class="form-control"
                                       placeholder="Nhập tên danh mục">
                            </div>

                            <div class="form-group">
                                <label>Danh mục cha</label>
                                <select class="form-control">
                                    <option value="0">Chọn danh mục cha</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\tourismanagement\resources\views/danhmuc/add.blade.php ENDPATH**/ ?>
