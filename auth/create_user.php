<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Crear Usuario</title>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="../../css/admin_usuarios.css"/>
	
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Crear Usuario</h1>
        <p>Por favor introduce los datos del usuario</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12"><div id="infoMessage"><?php echo $message;?></div></div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <?php echo form_open("auth/create_user");?>
                <div class="form-group">
                    <label for="first_name">Nombre:</label>
                    <?php echo form_input($first_name);?>
                </div>
                <div class="form-group">
                    <label for="last_name">Apellido:</label>
                    <?php echo form_input($last_name);?>
                </div>
                <div class="form-group">
                    <label for="company">Area Principal:</label>
                    <?php echo form_input($company);?>
                </div>
                <div class="form-group">
                    <label for="area">Area:</label>
                    <?php echo form_input($area);?>
                </div>
                <div class="form-group">
                    <label for="puesto">Puesto:</label>
                    <?php echo form_input($puesto);?>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <?php echo form_input($email);?>
                </div>
                <div class="form-group">
                    <label for="phone">Teléfono:</label>
                    <?php echo form_input($phone);?>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <?php echo form_input($password);?>
                </div>
                <div class="form-group">
                    <label for="password_confirm">Repetir Password:</label>
                    <?php echo form_input($password_confirm);?>
                </div>

                <p><?php echo form_submit('submit','Crear Usuario','class="form-control btn btn-success"');?></p>

                <?php echo form_close();?>
            </div>
        </div>
    </div>





</body>