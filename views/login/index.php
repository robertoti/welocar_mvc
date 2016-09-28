<?php
(isset($_POST['categoria'])) ? Session::set('categoria', $_POST['categoria'])  : '';?>
<section class="row">
<div class="container text-center">
        <h2 class="title">Faça o login ou cadastre-se para continuar</h2>        
        <hr id="hr-cat"/>
</div>

   <div class="container">
       
        <div class="col-md-12 text-center">

			<form class="form-horizontal" action="login/run" method="post">                            
                            <?php if ((isset($_GET['erro']))):?>  
                                <div class="form-group has-error">
                                <?php echo "<script>alert('Login e senha inválidos')</script>";?>
                            <?php else: ?>                           
                                <div class="form-group ">                            
                            <?php endif;?>                    
					<label class="col-sm-4 control-label">Login</label>
					<div class="col-sm-4">
                                            <input class="form-control" type="text" name="login" placeholder="Digite seu login" />
					</div>
                                    </div>
                            <?php if ((isset($_GET['erro']))):?>  
                                <div class="form-group has-error">                            
                            <?php else: ?>                           
                                <div class="form-group ">                            
                            <?php endif;?>
					<label class="col-sm-4 control-label">Senha</label>
					<div class="col-sm-4">
						<input class="form-control"  type="password" name="password" placeholder="Digite sua senha" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-5 col-sm-2"> 
                                        
                                            <input class="form-control btn btn-success" type="submit" value="Enviar" />
					</div>
				</div>
				
			</form>


		</div>
       
    </div>
