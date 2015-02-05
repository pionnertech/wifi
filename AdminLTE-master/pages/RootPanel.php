<?php session_start();


if(isset($_SESSION['TxtUser']) && $_SESSION['TxtFacility'] == 9999 ){

$datos = mysqli_connect("db557693269.db.1and1.com", "dbo557693269", "ToRoVaCa?256", "db557693269");

$queryString = "SELECT ADM_ID, ADM_NAME, ADM_SURNAME, ADM_USR, ADM_PASS, ADM_LOCK_STATUS, ADM_FAC_NAME FROM ADMIN";
$queryS = mysqli_query($datos, $queryString);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Me Gusta Wifi</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
         

         .var-content input{
            width:50%;
            display: block;
         }
         .var-content{
          width:100%;
          margin: 1.5em .5em;
         }
        .passes input{
            display: inline-block;
            vertical-align: top;
         }
         .pass{
        width:24.5% !important;
         }

         .pass:first{
         margin-right: .5em;
         }
        .pass:last-child{
         margin-left: .5em;
         }
         td span:before{
          content:"";
         }
        </style>
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="#" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
               MeGustaWifi <i class="fa fa-thumbs-o-up" style="color: white;"></i>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span> Martin Rey Mate-Sanz <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../img/avatar5.png" class="img-circle" alt="User Image" />
                                    <p>
                                       Martin Rey Mate-Sanz 
                                        <small>SuperAdministrador</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div align="center">
                                        <a href="../backend/close.php" class="btn btn-default btn-flat">Log-Out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../img/avatar5.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hola Martin!</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Administración principal
                        <small>Panel de control</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Blank page</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
          <div class="col-md-12">
             <div class="box box-primary">
                 <div class="box-header">
                     <div class="box-title">
                         <i class="fa fa-group"></i>    Registro de clientes 
                     </div>

                 </div>
                         <div class="box-body">
                           <div class="var-content">
                                <i class="fa fa-credit-card"></i><strong>    Nombre cliente</strong>
                                 <input type="text" id="cCus" text="" class="form-control" placeholder="Nombre Completo del cliente" />
                           </div>
                           <div class="var-content">
                                <i class="fa fa-building-o"></i><strong>   Nombre del establecimiento </strong>
                                 <input type="text" id="cFac" text="" class="form-control" placeholder="Establecimiento" />
                             </div>
                           <div class="var-content">
                                <i class="fa fa-road"></i><strong>   Direccion</strong>
                                 <input type="text" id="cAddr" text="" class="form-control" placeholder="Direccion" />
                           </div>
                           <div class="var-content">
                                <strong>@   Email</strong>
                                 <input type="text" id="cMail" text="" class="form-control" placeholder="Email" />
                             </div>
                         <div class="var-content">
                                <i class="fa fa-user"></i><strong>Nombre de Usuario</strong>
                                 <input type="text" id="cUsr" text="" class="form-control" placeholder="Usuario" />
                             </div>
                        <div class="var-content">
                                <i class="fa fa-key"></i><strong>Contraseña</strong>
                                <div class="passes">
                                    <input type="password" id="iPass" text="" class="form-control pass" placeholder="Introduzca la contraseña" />
                                    <input type="password" id="cPass" text="" class="form-control pass" placeholder="Repita la contraseña" />
                                </div>
                        </div>
                        <div class="var-content" align="center">
                            <button class="btn btn-info" id="create">Crear cliente</button>
                        </div>

                         </div>
  
             </div>
          </div>
    <div class="col-md-12" >
         <div class="box" style="padding: .5em;">
         <div class="box-header">
            <div class="box-title">
                <i class="fa fa-group"></i>   Tabla de Clientes
            </div>
         </div>
                <div class="box-body no-padding">
                      <table id="customers" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Establecimiento</th>
                                                <th>Usuario</th>
                                                <th>Password</th>
                                                <th>Status / Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                           <?  while ($admins = mysqli_fetch_row($queryS)){ ?>
                                            <tr>
                                             <input type="hidden" value="<? printf($admins[0]) ?>">
                                                <td><? printf($admins[1]) ?> <? printf($admins[2]) ?></td>
                                                <td><? printf($admins[6]) ?></td>
                                                <td><? printf($admins[3]) ?></td>
                                                <td><? printf($admins[4]) ?></td>
                                                <td>
                                        <?  if( $admins[5] == 0 ){  ?>        
                                <i class="fa fa-ban" style="color: red;"></i><span>Bloqueado</span>
                                <i title="resetear" class="fa fa-refresh reset" style="color: gray; float: right; margin: 0 .5em; cursor: pointer;"></i>
                                <i title="bloquear" class="fa fa-check-circle lock" style="color: lightgreen; float: right; margin: 0 1em; cursor: pointer;"></i>
                                        <? } else { ?>
                                        <i class="fa fa-check-circle" style="color: lightgreen;"></i><span>Activo</span>
                                        <i title="resetear" class="fa fa-refresh reset" style="color: gray; float: right; margin: 0 .5em; cursor: pointer;"></i>
                                        <i title="bloquear" class="fa fa-ban lock" style="color: red; float: right; margin: 0 1em; cursor: pointer;"></i>
                                        <? } ?>
                                                </td>
                                            </tr>
                                    <? } ?>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Establecimiento</th>
                                                <th>Mail</th>
                                                <th>Usuario</th>
                                                <th>Status / Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                </div>
         </div>
</div>




                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../js/AdminLTE/app.js" type="text/javascript"></script>
        <script src="../js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <script src="../js/bootbox.min.js" type="text/javascript"></script>

    </body>
</html>

<script type="text/javascript">
    $(document).on('ready', function(){

        $("#customers").dataTable();
        $(".no-print").remove();
    });
    
$("#create").on('click', function(){
   var cName = $("#cCus").val();
   var cFac  = $("#cFac").val();
   var cAddr = $("#cAddr").val();
   var cMail = $("#cMail").val();
   var cUsr  = $("#cUsr").val();
   var cPass = $("#iPass").val();

    createCustom(cName, cFac, cAddr, cMail, cUsr, cPass);
});

function createCustom(cName, cFac, cAddr, cMail, cUsr, cPass){

    $.ajax({
           type: "POST",
           url : "../backend/addCustom.php?name=" + cName +
           "&fac=" + cFac + 
           "&address=" + cAddr +
           "&mail=" + cMail + 
           "&user=" + cUsr + 
           "&pass=" + cPass,
           success : function (data){
            console.info(data);
            bootbox.alert("Cliente ingresado existosamente!");
           }
    });

}





$("#customers i.lock").on('click', function(){
var id_id = $(this).parent().parent().children('input').val();
console.info(id_id);
    setState(id_id,  $(this));
    
});

function setState(id, object){

    $.ajax({
        type: "POST",
        url: "../backend/changeState.php?id=" + id ,
        success : function (data){
            console.info(data);
            if(parseInt(data) == 0){
            
             object.prev().prev().prev().removeClass('fa-check-circle');
             object.prev().prev().prev().addClass('fa-ban');
             object.prev().prev().prev().css({ color: "red" });

             object.removeClass('fa-ban');
             object.addClass('fa-check-circle');
             object.css({ color: "lightgreen" });

             object.parent().children('span').html('Bloqueado');
        
            } else if(parseInt(data) == 1) {

             console.info('activacion');
             object.prev().prev().prev().removeClass('fa-ban');
             object.prev().prev().prev().addClass('fa-check-circle');
             object.prev().prev().prev().css({ color: "lightgreen" });

             object.removeClass('fa-check-circle');
             object.addClass('fa-ban');
             object.css({ color: "red" });

             object.parent().children('span').html('Activo');

            }
        }
    })

}

</script>
<?

} else {

echo "<script language='javascript'>window.location='../access.php'; </script>";

}
?>