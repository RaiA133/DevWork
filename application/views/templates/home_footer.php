<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright" style="color: white;">
        &copy; Copyright <strong><span>DevWork</span></strong>. All Rights Reserved
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url(); ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/chart.js/chart.umd.js"></script>
<script src="<?= base_url(); ?>assets/vendor/echarts/echarts.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/quill/quill.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="<?= base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url(); ?>assets/js/main.js"></script>


</body>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are You Sure to Exit Now?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a type="button" class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Yes</a>
            </div>
        </div>
    </div>
</div>

</html>