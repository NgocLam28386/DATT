<div class="py-5" style="background-color: #E5E5E5;">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-2">
                <h4 class="text-danger fw-bold">NoiThatViet</h4>
                <div class="underline mb-2"></div>

                <a href="index.php" class="text-dark"><i class="fa fa-angle-right"> Trang chủ</i></a><br>
                <a href="category.php" class="text-dark"><i class="fa fa-angle-right"> Danh mục</i></a><br>
                <a href="regiser.php" class="text-dark"><i class="fa fa-angle-right"> Đăng ký</i></a><br>
                <a href="login.php" class="text-dark"><i class="fa fa-angle-right"> Đăng nhập</i></a>

            </div> -->
            <div class="col-md-3 text-white">
                <h4 class="text-danger fw-bold">Địa chỉ</h4>
                <div class="underline mb-2"></div>
                <p class="text-dark">Tòa nhà FPT Polytechnic., Cổng số 2, 13 P. Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội, Việt Nam</p>
                <a href="+84 90000000"><i class="fa fa-phone"></i> +84 90000000</a><br>
                <a href="noithatviet@hotro.com"><i class="fa fa-envelope"></i> noithatviet@hotro.com</a>
            </div>

            <div class="col-md-4">
                <form action="function/userhelp.php" method="POST">
                    <h4 class="text-danger fw-bold">Liên hệ hỗ trợ</h4>
                    <div class="underline mb-2"></div>
                    <div class="col-md-12">
                        <label for="" class="">Tên</label>
                        <input type="text" class="form-control" required placeholder="Nhập tên..." name="name">
                    </div>
                    <div class="col-md-12">
                        <label for="" class="">Email</label>
                        <input type="text" class="form-control" required placeholder="Nhập Email..." name="email">
                    </div>
                    <div class="col-md-12">
                        <label for="" class="">SĐT</label>
                        <input type="text" class="form-control" required placeholder="Nhập số điện thoại..."
                            name="phone">
                    </div>
                    <div class="col-md-12">
                        <label for="message">Nội dung</label>
                        <textarea class="form-control" required placeholder="Nhập nội dung..."
                            name="message"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="helper"
                            class="btn btn-outline-secondary w-100 fw-bold mt-2">Gửi</button>
                    </div>
                </form>
            </div>

            <div class="col-md-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8639324316528!2d105.74239087922669!3d21.038129730626856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455e940879933%3A0xcf10b34e9f1a03df!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1720772015751!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class="w-100 " height="250" style="border:0; " allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


<script>

    <?php
    if (isset($_SESSION['message'])) {
        ?>
        alertify.set('notifier', 'position', 'top-right');
        alertify.success('<?= $_SESSION['message'] ?>');
        <?php
        unset($_SESSION['message']);
    } ?>
</script>


</body>

</html>