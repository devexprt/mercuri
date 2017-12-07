<footer class="footer t-a-c">© 2017 All Rights Reserved | Designed By Indi IT Solutions</footer>
<script src="assets/admin/plugins/components/jquery/dist/jquery.min.js"></script>
<script src="assets/admin/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/admin/js/sidebarmenu.js"></script>
<script src="assets/admin/js/jquery.slimscroll.js"></script>
<script src="assets/admin/js/waves.js"></script>
<script src="assets/admin/js/custom.js"></script>
<script src="assets/admin/plugins/components/datatables/jquery.dataTables.min.js"></script>
<!-- custom js -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/toastr.js"></script>

<?php if($this->session->flashdata('message_name')) echo'toastr["success"]("'.$this->session->flashdata('message_name').'");'; ?>


<?php if($this->session->flashdata('error')) echo'toastr["error"]("'.$this->session->flashdata('error').'");'; ?>