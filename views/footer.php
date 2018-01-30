  </div>
  </body>
<footer>
  <script src="<?php echo BASE_URL;?>template/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="<?php echo BASE_URL;?>template/vendors/jquery-1.9.1.js"></script>
  <script src="<?php echo BASE_URL;?>template/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo BASE_URL;?>template/vendors/datatables/js/jquery.dataTables.min.js"></script>


      <script src="<?php echo BASE_URL;?>template/assets/scripts.js"></script>
      <script src="<?php echo BASE_URL;?>template/assets/DT_bootstrap.js"></script>
      <script>
      $(document).ready(function() {
        $("#frm-Actor").submit(function(event) {
          return $(this);
          //alert($(this));
        });
        $("#tableActors").dataTable({
          "language": {"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"},
              "destroy":true,
              "paging": true,
              "ordering": true
        });
      });
      </script>
      <P>
        © Julio Cesar Valadez Castañeda 2018
      </P>
</footer>
</html>
