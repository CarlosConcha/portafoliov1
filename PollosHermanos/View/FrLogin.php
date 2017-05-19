<?php
  if(isset($_GET["acceso"])){
	  $err="<div class='alert alert-danger alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Atencion!</strong> El usuario o Contraseña ingresada no es correcto!
</div>";
  }
?>
<html>
<head>

<meta http-equiv="Content-type" content="text/html; charset=utf-8" /> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
  <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Ingresar</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">si olvido su contraseña contacte al administrador</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                      <?php if(isset($err)){ echo $err;} ?>
                            
                        <form id="loginform" method="post" action="../MVC/MVCLogin.php" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="txt_user" type="text" class="form-control" name="txt_user"  placeholder="Usuario">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="txt_pass" type="password" class="form-control" name="txt_pass" placeholder="password">
                                    </div>
                                    

                                                  
                                <div style="margin-top:10px" class="form-group">
                                    

                                    <div class="col-sm-12 controls">
                                      <input type="submit" id="btn_login" name="btn_login" class="btn btn-success" value="Ingresar">
                                    </div>
                                </div>


                            
                            </form>     



                        </div>                     
                    </div>  
        </div>
</body>
</html>