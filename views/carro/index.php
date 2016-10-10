<section class="row">
    <div class="container text-center">
        <h2 class="title">Carros
            <hr id="hr-cat"/>
    </div>

    <div class="container">     

        <div class="col-md-12 text-center">

            <form class="form-horizontal" method="post" action="<?php echo URL; ?>carro/create">

                
                <div class="form-group">
                    <label class="col-sm-4 control-label">Categoria</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="categoria">
                            <option value="ouro">Ouro</option>
                            <option value="prata">Prata</option>
                            <option value="bronze">Bronze</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Placa</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" name="placa" />
                    </div>                        
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Odômetro</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="number" min="0" step="1" name="km" />
                    </div>                        
                </div>

                <button class="btn btn-success btn-lg" type="submit">Cadastrar carro</button>
        


        </form>

        </div>
    </div>


    <hr />


    <div class="container">
        <table class="table table-bordered">
            <?php
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>Categoria</th>';
            echo '<th>Diponivel</th>';
            echo '<th>Placa</th>';
            echo '<th>Odômetro</th>';
            echo '</tr>';
            foreach ($this->carroList as $key => $value) {

                echo '<tr>';
                echo '<td>' . $value['car_id'] . '</td>';
                echo '<td>' . $value['categoria'] . '</td>';
                echo '<td>' . $value['disponivel'] . '</td>';
                echo '<td>' . $value['placa'] . '</td>';
                echo '<td>' . $value['km'] . '</td>';
                echo '<td>
                <a href="' . URL . 'carro/edit/' . $value['car_id'] . '"><button class="btn btn-primary">Editar</button></a> 
                <a href="' . URL . 'carro/delete/' . $value['car_id'] . '"><button class="btn btn-danger">Deletar</button></a></td>';
                echo '</tr>';
            }
            ?>            
        </table>


    </div>

</div>

</section>


