<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema Integral - Policia Cientifica</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">DDGG Pol.Cientifica</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Fecha Hoy <a href="salir.php" class="btn btn-danger square-btn-adjust">Salir</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
            <? include('menu.php') ?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Menu Planos</h2>   
                        <h5>Bienvenido [USUARIO]. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Alta de Planos
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                        <div class="form-group">
                                            <label>Plano Nro</label>
                                            <input class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha Hecho</label>
                                            <input class="form-control" id="campoData" placeholder="Fecha Ingreso" />
                                        </div>
                                        <div class="form-group">
                                            <label>Causa</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Cria Juzgado</label>
                                            <input class="form-control" placeholder="Cria Juzgado" />
                                        </div>
                                        <div class="form-group">
                                            <label>Involucrados</label>
                                            <input class="form-control" placeholder="Involucrados" />
                                        </div>
                                        <div class="form-group">
                                            <label>Oficial SVC</label>
                                            <input class="form-control" placeholder="Oficial SVC" />
                                        </div>
                                        <div class="form-group">
                                            <label>Lic. Turno</label>
                                            <input class="form-control" id="fegreso" placeholder="Lic. Turno" />
                                        </div>
                                        <button type="submit" class="btn btn-default">Guardar</button>
                            </form>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
                <!-- /. ROW  -->
            
            
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
	<script src="http://vinteum.com/estudos/jquery/mask/jquery-1.5.2.min.js"></script>
	<script src="http://vinteum.com/estudos/jquery/mask/jquery.maskedinput-1.3.min.js"></script>
    <script>
		jQuery(function($){
	       $("#campoData").mask("99/99/9999");
           $("#fegreso").mask("99/99/9999");
		});
	</script>

   
</body>
</html>
