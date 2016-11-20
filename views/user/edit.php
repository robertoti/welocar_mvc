<section>
    <div class="container text-center">
        <h2 class="title">Editar usuario</h2>
        <hr id="hr-cat"/>
</div>

    <div class="container">
        
    <div class="col-md-12 text-center">

        <form class="form-horizontal" method="post" action="<?php echo URL; ?>user/editSave/<?php echo $this->user[0]['userid']; ?>">
            
            <div class="form-group">
                <label class="col-sm-4 control-label">Login</label>                
                <div class="col-sm-4">
                    <input class="form-control" type="text" name="login" value="<?php echo $this->user[0]['login']; ?>" />                   
                </div>
            </div> 
            
            <div class="form-group">
                <label class="col-sm-4 control-label">Senha</label>                
                <div class="col-sm-4">
                    <input class="form-control" type="password" name="password"/>
                </div>
            </div> 
            
            
            
            <div class="form-group">
                    <label class="col-sm-4 control-label">Direitos</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="role">
                                <option value="default" <?php if ($this->user[0]['role'] == 'default') echo 'selected'; ?>>Cliente</option>
                                <option value="admin" <?php if ($this->user[0]['role'] == 'admin') echo 'selected'; ?>>Funcionário</option>
                            </select>
                        </div>
            </div>
            <button  class="btn btn-success btn-lg" type="submit" >Alterar Usuário</button>
           
            
        </form>
    </div>
    </div>
</section>
