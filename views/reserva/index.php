<?php Session::init() ?>

<?php if (Session::get('role') == 'default'): ?>


<section class="row">

    <div class="container text-center">
        <h2 class="title">Reservas</h2>
        <hr id="hr-cat"/>
    </div>

    <div class="container">     

        <div class="col-md-12 text-center">

            <form class="form-horizontal" method="post" action="<?php echo URL; ?>reserva/create">

                <div class="form-group">

                    <label class="col-sm-4 control-label">Categoria</label>

                    <div class="col-sm-4">

                        <select class="form-control"  name="categoria">
                            <option value="ouro"  <?php if (isset($_POST['categoria']) && $_POST['categoria'] == 'ouro') echo 'selected' ?>>Ouro</option>
                            <option value="prata" <?php if (isset($_POST['categoria']) && $_POST['categoria'] == 'prata') echo 'selected' ?>>Prata</option>
                            <option value="bronze"<?php if (isset($_POST['categoria']) && $_POST['categoria'] == 'bronze') echo 'selected' ?>>Bronze</option>
                        </select>

                    </div>

                </div>
                <div class="form-group">

                    <label class="col-sm-4 control-label">Data de retirada</label>
                    <div class="col-sm-4">
                        <input id="retirada" type="text" required class="form-control"  name="date_inicio" />
                    </div>

                </div>
                <div class="form-group">

                    <label class="col-sm-4 control-label">Data da devolução</label>
                    <div class="col-sm-4">

                        <input id="devolucao" type="text"required class="form-control"  name="date_fim" />


                    </div>

                </div>

                <input type="hidden" value="<?php echo date('Y-m-d h:m') ?>" name="date_added" />
                <input type="hidden" value="ativa" name="status" />

                <button type="submit" class="btn btn-success btn-lg">Fazer reserva</button>

                <div class="espaco"></div>

            </form>

        </div>

    </div>
</section>

<?php endif;?>

    <section>

        <div class="container text-center">
            <h2 class="title">Reservas ativas</h2>
            <hr id="hr-cat"/>
        </div>


        <div class="container">
            <table class="table table-bordered">

                <?php
                ?>
                <?php
                foreach ($this->reservaList as $key => $value) {
                    echo '<tr>';
                    echo '<td>' . $value['categoria'] . '</td>';
                    echo '<td>' . $value['userid'] . '</td>';
                    echo '<td>' . $value['date_added'] . '</td>';
                    echo '<td>' . $value['date_inicio'] = implode("/", array_reverse(explode("-", $value['date_inicio']))) . '</td>';
                    echo '<td>' . $value['date_fim'] = implode("/", array_reverse(explode("-", $value['date_fim']))) . '</td>';
                    echo '<td>' . $value['status'] . '</td>';
                    echo '<td>
                <a href="' . URL . 'reserva/edit/' . $value['reservaid'] . '"><button class="btn btn-primary">Editar</button></a> 
                <a href="' . URL . 'reserva/delete/' . $value['reservaid'] . '"><button class="btn btn-danger">Deletar</button></a></td>';
                    echo '</tr>';
                }
                
                var_dump($this->reservaList)
                ?>   

            </table>
            
        </div>

    </section>



    <?php if (Session::get('role') != 'default'): ?>

        <section>
            
            <div class="container text-center">
            <h2 class="title">Veículos</h2>
            <hr id="hr-cat"/>
            </div>

            <div class="container">
                <table class="table table-bordered">
                    <?php
                    foreach ($this->carroList as $key1 => $value1) {
                        echo '<tr>';
                        echo '<td>' . $value1['car_id'] . '</td>';
                        echo '<td>' . $value1['categoria'] . '</td>';
                        echo '<td>' . $value1['disponivel'] . '</td>';
                        echo '<td>' . $value1['placa'] . '</td>';
                        echo '<td>' . $value1['km'] . '</td>';

                        echo '<td>
                <a href="' . URL . 'carro/edit/' . $value1['car_id'] . '"><button class="btn btn-primary">Editar</button></a> 
                <a href="' . URL . 'carro/delete/' . $value1['car_id'] . '"><button class="btn btn-danger">Deletar</button></a></td>';
                        echo '</tr>';
                    }
                    ?>   

                </table>

            </div>

        </section>



    <?php endif; ?>


<script>

    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

    var checkin = $('#retirada').datepicker({
        format: 'dd/mm/yyyy',
        language: 'pt-BR',
        onRender: function (date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
    }).on('changeDate', function (ev) {
        if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
        }
        checkin.hide();
        $('#devolucao')[0].focus();
    }).data('datepicker');
    var checkout = $('#devolucao').datepicker({
        format: 'dd/mm/yyyy',
        language: 'pt-BR',
        onRender: function (date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
        }
    }).on('changeDate', function (ev) {
        checkout.hide();
    }).data('datepicker');

</script>
