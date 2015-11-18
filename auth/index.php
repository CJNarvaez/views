<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="../js/alertify.min.js"></script>
        <link rel="stylesheet" href="../css/admin_usuarios.css"/>
        <!-- include the core styles -->
        <link rel="stylesheet" href="../css/alertify.core.css" />
        <!-- include a theme, can be included into the core instead of 2 separate files -->
        <link rel="stylesheet" href="../css/alertify.bootstrap.css" />
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="../js/usuarios/admin_usuarios.js"></script>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Administrador de Usuarios</h1><br />
        <h2>Listado de Usuarios</h2>
    </div>
    <div class="container">
        <div id="resultado" role="alert" class="alert alert-dismissible alert-warning">
            <div id="infoMessage"><?php echo $message;?></div>
        </div> 
        <div class="row">
            <div class="col-xs-12">
                <?php echo anchor('auth/create_user', "Crear Usuario",'class="btn btn-success form-control" role="button"')?>
            </div>
        </div>
        <br /> <br />
        <div class="table-responsive">
            <table class="table table-striped table-condensed">
                <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                </tr>
                <?php foreach ($users as $user):?>
                        <tr class="<?php echo $user->id ?>">
                                <td>
                                    <?php echo anchor("auth/edit_user/".$user->id, '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>')?>                                    
                                    <a href="#" id="<?php echo $user->id ?>" class="eliminar"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                                    <?php echo $user->first_name." ";?>
                                    <?php echo $user->last_name;?>
                                </td>
                                <td><?php echo $user->email;?></td>
                        </tr>
                <?php endforeach;?>
            </table>
        </div>
        
        <br />
        <br />
    </div>
</body>
</html>