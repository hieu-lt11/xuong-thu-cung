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
                    <h1>Quan ly danh sach thu cung</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?=BASE_URL_ADMIN . '?act=form-them-san-pham'?>"><button
                                    class="btn btn-success">Them Thu Cung Moi</button>

                            </a>

                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th> STT</th>
                                            <th>Ten san pham</th>
                                            <th>Anh san pham</th>
                                            <th>Gia tien</th>
                                            <th>So luong</th>
                                            <th>Danh muc</th>
                                            <th>Trang Thai</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                foreach($listSanPham as $key=>$sanPham):
                                ?>
                                        <tr>
                                            <td><?= $key+1 ?></td>
                                            <td><?= $sanPham['ten_san_pham'] ?></td>
                                            <td><img src="<?= BASE_URL . $sanPham['hinh_anh'] ?>" style="width: 100px"
                                                    alt=""
                                                    onerror="this.onerror=null; this.src='https://cellphones.com.vn/sforum/wp-content/uploads/2024/02/avatar-anh-meo-cute-1.jpg'">
                                            </td>
                                            <td><?= $sanPham['gia_san_pham'] ?></td>
                                            <td><?= $sanPham['so_luong'] ?></td>
                                            <td><?= $sanPham['ten_danh_muc'] ?></td>
                                            <td><?= $sanPham['trang_thai'] ==1 ? 'con ban':'dung ban'; ?></td>
                                            <td>
                                                <a
                                                    href="<?=BASE_URL_ADMIN . '?act=form-sua-san-pham&id_san_pham=' . $sanPham['id']?>"><button
                                                        class="btn btn-warning">Sửa</button></a>
                                                <a href="<?=BASE_URL_ADMIN . '?act=xoa-san-pham&id_san_pham=' . $sanPham['id']?>"
                                                    onclick="return confirm('ban co dong i xoa hay khong')"><button
                                                        class="btn btn-danger">Xóa</button></a>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th> STT</th>
                                            <th>Ten san pham</th>
                                            <th>Anh san pham</th>
                                            <th>Gia tien</th>
                                            <th>So luong</th>
                                            <th>Danh muc</th>
                                            <th>Trang Thai</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                        <!-- /.card -->
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

<script>
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});



<?php
//footer
include './views/layout/footer.php';

?>
</script>
<!-- Code injected by live-server -->
<script>
// <![CDATA[  <-- For SVG support
if ('WebSocket' in window) {
    (function() {
        function refreshCSS() {
            var sheets = [].slice.call(document.getElementsByTagName("link"));
            var head = document.getElementsByTagName("head")[0];
            for (var i = 0; i < sheets.length; ++i) {
                var elem = sheets[i];
                var parent = elem.parentElement || head;
                parent.removeChild(elem);
                var rel = elem.rel;
                if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() ==
                    "stylesheet") {
                    var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                    elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date()
                        .valueOf());
                }
                parent.appendChild(elem);
            }
        }
        var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
        var address = protocol + window.location.host + window.location.pathname + '/ws';
        var socket = new WebSocket(address);
        socket.onmessage = function(msg) {
            if (msg.data == 'reload') window.location.reload();
            else if (msg.data == 'refreshcss') refreshCSS();
        };
        if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
            console.log('Live reload enabled.');
            sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
        }
    })();
} else {
    console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
}
// ]]>
</script>
</body>

</html>