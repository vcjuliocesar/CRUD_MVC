<?php
$Template = new Template();

class Template{
		public function __construct(){
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Sistema Web</title>
    <meta charset="utf-8" />
    <link href="<?php echo BASE_URL;?>template/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo BASE_URL;?>template/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo BASE_URL;?>template/assets/styles.css" rel="stylesheet" media="screen">
    <link href="<?php echo BASE_URL;?>template/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
          <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
          <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
          <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
          <![endif]-->
  <style>
   body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:1270px;
        padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
  </style>
</head>
<body>
  <div class="container box">

<?php
		}
		public function __destruct(){
?>
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
</div>
</body>
</html>

<?php
		}
	}
 ?>
