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
                                <option value="admin">Funcionário</option>
                            </select>
                        </div>
                </div>
                    
                <button  class="btn btn-success btn-lg" type="submit" > Fazer cadastro</button>
            
            </form>
        
        </div>                               
        

            
        </div>

        <?php if (!Session::get('hole' == 'default')):?>
        <hr />
        <div class="container table-overflow">
            <table class="table table-bordered">                
                <tr>
                    <th>ID</th>
                    <th>login</th>
                    <th>Direitos</th>
                    <th>Opções</th>
                </tr>
                <?php
                foreach ($this->userList as $key => $value):
                    echo '<tr>';
                    echo '<td>' . $value['userid'] . '</td>';
                    echo '<td>' . $value['login'] . '</td>';
                ?>
                <?php if ($value['role'] == 'owner'): ?>
                    <td>Manutenção</td>                
                <?php endif; ?>
                <?php if ($value['role'] == 'default'): ?>
                    <td>Cliente</td>                
                <?php endif; ?>
                <?php if ($value['role'] == 'admin'): ?>
                    <td>Funcionário</td>                
                <?php endif; ?>
                    
                <?php
                    echo '<td>
                <a href="' . URL . 'user/edit/' . $value['userid'] . '"><button class="btn btn-primary">Editar</button></a> 
                <a href="' . URL . 'user/delete/' . $value['userid'] . '"><button class="btn btn-danger">Deletar</button></a></td>';
                    echo '</tr>';
                endforeach;
                ?>            
            </table>
          

        </div>
        <?php endif;?>

</section>


