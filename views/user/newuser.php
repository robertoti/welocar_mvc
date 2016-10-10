<section class="row">
    <div class="container text-center">
        <h2 class="title">Usuários
        <hr id="hr-cat"/>
    </div>

    <div class="container">     
        
        <div class="col-md-12 text-center">
            
            <form class="form-horizontal" method="post" action="<?php echo URL; ?>user/create">
                
                <div class="form-group">
                    <label class="col-sm-4 control-label">Login</label>                    
                    <div class="col-sm-4">                                        
                        <input class="form-control" type="text" name="login" />
                    </div>                    
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Senha</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="password" name="password" />
                    </div>                        
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Direitos</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="role">
                                <option value="default">Cliente</option>
                                <option value="admin">Admin</option>
                                <option value="owner">Funcionario</option>
                            </select>
                        </div>
                </div>
                    
                <button  class="btn btn-success btn-lg" type="submit" > Fazer cadastro</button>
                </div>
                    
                    
        </form>

            
        </div>

        <?php if (Session::get('hole' == 'owner')):?>
        <hr />
        <div class="container">
            <table class="table table-bordered">
                <?php
                foreach ($this->userList as $key => $value) {
                    echo '<tr>';
                    echo '<td>' . $value['userid'] . '</td>';
                    echo '<td>' . $value['login'] . '</td>';
                    echo '<td>' . $value['role'] . '</td>';
                    echo '<td>
                <a href="' . URL . 'user/edit/' . $value['userid'] . '"><button class="btn btn-primary">Editar</button></a> 
                <a href="' . URL . 'user/delete/' . $value['userid'] . '"><button class="btn btn-danger">Deletar</button></a></td>';
                    echo '</tr>';
                }
                ?>            
            </table>
          

        </div>
        <?php endif;?>

</section>


