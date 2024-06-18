

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

    </body>

</html>