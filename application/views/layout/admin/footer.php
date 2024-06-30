

                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                        <p>&copy; <span id="countYearFooter"></span></p>
                        <script>document.getElementById('countYearFooter').textContent = new Date().getFullYear();</script>
                        </div>
                        <div class="float-end">
                            <p>Admin Perpustakaan Digital <span class="text-danger"></span> oleh <a href="https://badanpangan.go.id/">BAPANAS</a></p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="<?= base_url('assets/admin/static/js/components/dark.js') ?>"></script>
        <script src="<?= base_url('assets/admin/extensions/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/compiled/js/app.js') ?>"></script>

        <!-- Need: Apexcharts -->
        <script src="<?= base_url('assets/admin/extensions/apexcharts/apexcharts.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/static/js/pages/dashboard.js') ?>"></script>

        <!-- Datatable jQuery -->
        <script src="<?= base_url('assets/admin/extensions/jquery/jquery.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/extensions/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js') ?>"></script>
        <script src="<?= base_url('assets/admin/static/js/pages/datatables.js') ?>"></script>

    
        <script src="<?= base_url('assets/admin/extensions/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')?>"></script>
        <script src="<?= base_url('assets/admin/extensions/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')?>"></script>
        <script src="<?= base_url('assets/admin/extensions/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')?>"></script>
        <script src="<?= base_url('assets/admin/extensions/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')?>"></script>
        <script src="<?= base_url('assets/admin/extensions/filepond-plugin-image-filter/filepond-plugin-image-filter.min.js')?>"></script>
        <script src="<?= base_url('assets/admin/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')?>"></script>
        <script src="<?= base_url('assets/admin/extensions/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')?>"></script>
        <script src="<?= base_url('assets/admin/extensions/filepond/filepond.js')?>"></script>
        <script src="<?= base_url('assets/admin/extensions/toastify-js/src/toastify.js')?>"></script>
        <script src="<?= base_url('assets/admin/static/js/pages/filepond.js')?>"></script>

        <script src="<?= base_url('assets/admin/extensions/flatpickr/flatpickr.min.js')?>"></script>
        <script src="<?= base_url('assets/admin/static/js/pages/date-picker.js') ?>"></script>
    
        <script src="<?= base_url('assets/admin/extensions/choices.js/public/assets/scripts/choices.js')?>"></script>
        <script src="<?= base_url('assets/admin/static/js/pages/form-element-select.js')?>"></script>

        <?php 
            if(@$ajax) {
                foreach(@$ajax as $a){
                    echo "<script src='".base_url('assets/admin/custom/js/' . $a).".js'></script>";
                }
            }      
        ?>
    </body>

</html>