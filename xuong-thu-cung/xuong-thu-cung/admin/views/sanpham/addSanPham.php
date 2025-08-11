<?php
require './views/layout/header.php';
?>


<?php
include './views/layout/navbar.php';
?>
<?php

include './views/layout/sidebar.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quan ly danh sach san pham</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Them san pham</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?= BASE_URL_ADMIN.'?act=them-san-pham'?>" method="POST"
                            enctype="multipart/form-data">
                            <div class=" row card-body ">
                                <div class="form-group col-12">
                                    <label>ten san pham </label>
                                    <input type="text" class="form-control" name="ten_san_pham"
                                        placeholder="nhap ten san pham">
                                    <?php
                                        if(isset($errors['ten_san_pham'])){ ?>
                                    <p class="text-danger"><?=$errors['ten_san_pham'] ?></p>
                                    <?php }
                                                ?>
                                </div>
                                <div class="form-group col-6">
                                    <label>gia san pham </label>
                                    <input type="number" class="form-control" name="gia_san_pham"
                                        placeholder="nhap gia san pham">
                                    <?php
                                        if(isset($errors['gia_san_pham'])){ ?>
                                    <p class="text-danger"><?=$errors['gia_san_pham'] ?></p>
                                    <?php }
                                                ?>
                                </div>
                                <div class="form-group col-6">
                                    <label>gia khuyen mai</label>
                                    <input type="number" class="form-control" name="gia_khuyen_mai"
                                        placeholder="nhap gia khuyen mai">
                                    <?php
                                        if(isset($errors['gia_khuyen_mai'])){ ?>
                                    <p class="text-danger"><?=$errors['gia_khuyen_mai'] ?></p>
                                    <?php }
                                                ?>
                                </div>
                                <div class="form-group col-6">
                                    <label>hinh anh </label>
                                    <input type="file" class="form-control" name="hinh_anh">
                                    <?php
                                        if(isset($errors['hinh_anh'])){ ?>
                                    <p class="text-danger"><?=$errors['hinh_anh'] ?></p>
                                    <?php }
                                                ?>
                                </div>
                                <div class="form-group col-6">
                                    <label>album anh </label>
                                    <input type="file" class="form-control" name="img_array[]" multiple
                                        placeholder="nhap gia san pham">

                                </div>
                                <div class="form-group col-6">
                                    <label>so luong</label>
                                    <input type="number" class="form-control" name="so_luong"
                                        placeholder="nhap gia khuyen mai">
                                    <?php
                                        if(isset($errors['so_luong'])){ ?>
                                    <p class="text-danger"><?=$errors['so_luong'] ?></p>
                                    <?php }
                                                ?>
                                </div>
                                <div class="form-group col-6">
                                    <label>ngay nhap </label>
                                    <input type="date" class="form-control" name="ngay_nhap"
                                        placeholder="nhap gia san pham">
                                    <?php
                                        if(isset($errors['ngay_nhap'])){ ?>
                                    <p class="text-danger"><?=$errors['ngay_nhap'] ?></p>
                                    <?php }
                                                ?>
                                </div>
                                <div class="form-group col-6">
                                    <label>danh muc </label>
                                    <select class="form-control" name="danh_muc_id" id="exampleFormControlSelect1">
                                        <option selected disabled>chon danh muc san pham</option>
                                        <?php foreach($listDanhMuc as $danhMuc):?>
                                        <option value="<? $danhMuc['id']?>"><?= $danhMuc['ten_danh_muc']?></option>




                                        <?php endforeach ?>
                                    </select>
                                    <?php
                                        if(isset($errors['danh_muc_id'])){ ?>
                                    <p class="text-danger"><?=$errors['danh_muc_id'] ?></p>
                                    <?php }
                                                ?>
                                </div>
                                <div class="form-group col-12">
                                    <label>Trang thai </label>
                                    <select class="form-control " name="trang_thai" id="exampleFormControlSelect1">
                                        <option selected disabled>chon danh muc san pham</option>
                                        <option value="1">con ban</option>
                                        <option value="2">dung ban</option>
                                    </select>
                                    <?php
                                        if(isset($errors['trang_thai'])){ ?>
                                    <p class="text-danger"><?=$errors['trang_thai'] ?></p>
                                    <?php }
                                                ?>
                                </div>
                                <div class="form-group col-12">
                                    <label>mo ta </label><textarea name="mo_ta" id="" class="form-control"
                                        placeholder="nhap mo ta"></textarea>

                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include './views/layout/footer.php';

?>


</body>

</html>