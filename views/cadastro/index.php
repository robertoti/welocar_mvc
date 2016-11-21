<section class="row">
    <div class="container text-center">
        <h2 class="title">Cadastro</h2>
            <hr id="hr-cat"/>
    </div>

    <div class="container">     

        <div class="col-md-12 text-center"> 
            <form class="form-horizontal" method="post" action="cadastro/create">
                <?php if ((isset($_GET['erro']))): ?>  
                <div class="form-group has-error">
                <?php echo "<script>alert('Usuário já existe!')</script>"; ?>
                <?php else: ?>                           
                <div class="form-group ">                            
                        <?php endif; ?>                    
                    <label class="col-sm-4 control-label">Login</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" name="login" placeholder="Digite seu login" required/>
                    </div>
                </div>
                <?php if (Session::get('cadastro' == 'erro')): ?>  
                <div class="form-group has-error">                            
                <?php else: ?>                           
                <div class="form-group ">                            
                <?php endif; ?>
                    <label class="col-sm-4 control-label">Senha</label>
                    <div class="col-sm-4">
                        <input class="form-control"  type="password" name="password" placeholder="Digite sua senha" required />
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">                      
                        <button class="btn btn-success form-control" type="submit">Cadastrar</button>
                    </div>
                </div>               
<!--                <div class="form-group">
                    <label class="col-sm-4 control-label">Login</label>
                    <div class="col-sm-4">
                        <input type="text" name="login" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Senha</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="password" name="password" required />
                    </div>                        
                </div>
                <div class="form-group"> 
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">                      
                        <button class="btn btn-success form-control" type="submit">Cadastrar</button>

                    </div>

                </div>-->
            </form>
        </div>
    </div>
</section>


