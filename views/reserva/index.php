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

                    <div class="form-group">

                        <label class="col-sm-4 control-label">Horário da retirada</label>
                        <div class="col-sm-4">
                            <input id="time" type="text" required class="form-control"  name="hora_inicio" />
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

<?php endif; ?>

<section>

    <div class="container text-center">
        <h2 class="title">Reservas ativas</h2>
        <hr id="hr-cat"/>
    </div>
    <div class="container table-overflow">
        <table class="table table-bordered">
            <tr class="text-uppercase">
                <th class="text-center">Categoria</th>
                <?php if (Session::get('role') != 'default'): ?>
                <th class="text-center">Nome do Cliente</th>
                <?php endif;?>
                <th class="text-center">Data da compra</th>
                <th class="text-center">Retirada</th>
                <th class="text-center">Entrega</th>
                <th class="text-center">Status</th>
                <th class="text-center"><i class="fa fa-cog fa-fw" aria-hidden="true" title="Opções"></i></th>
            </tr>            

            <?php
            ?>
            <?php
            
            foreach ($this->reservaList as $key => $value) {
                echo '<tr>';
                echo '<td class="text-center">' . $value['categoria'] . '</td>';
                if (Session::get('role') != 'default'):
                    echo '<td>' . $value['login'] . '</td>';
                endif;
                echo '<td class="text-center">' .  Helpers::dateTimeToView($value['date_added'])  . '</td>';
                echo '<td><span class="text-uppercase text-info">dia:&nbsp;&nbsp;&nbsp;&nbsp;</span> ' . Helpers::dateToView($value['date_inicio']);
                echo '<br><span class="text-uppercase text-info">hora:&nbsp;&nbsp;&nbsp;</span>' .$value['hora_inicio'] . '</td>';
                echo '<td class="text-center">' . Helpers::dateToView($value['date_fim']) . '</td>';
                echo '<td class="text-center">' . $value['status'] . '</td>';
                echo '<td class="text-center">
                <a href="' . URL . 'reserva/edit/' . $value['reservaid'] . '">
                    <i class="fa fa-edit fa-fw" aria-hidden="true" title="Editar"></i>
                </a>                 
                <a href="' . URL . 'reserva/delete/' . $value['reservaid'] . '">
                    <i class="fa fa-trash fa-fw" aria-hidden="true" title="Deletar"></i>
                </a>
                </td>';
                echo '</tr>';
            }
            
            ?>   

        </table>

    </div>

</section>

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

    $(function() {

        $('.delete').click(function(e) {
            var c = confirm("Tem certeza que deseja deletar?");
            if (c == false) return false;

        });

    });

</script>
<script type="text/javascript">
		$(document).ready(function()
		{
			$('#date').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true
			});

			$('#time').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});

			$('#date-format').bootstrapMaterialDatePicker
			({
				format: 'dddd DD MMMM YYYY - HH:mm'
			});
			$('#date-fr').bootstrapMaterialDatePicker
			({
				format: 'DD/MM/YYYY HH:mm',
				lang: 'fr',
				weekStart: 1, 
				cancelText : 'ANNULER',
				nowButton : true,
				switchOnClick : true
			});

			$('#date-end').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm'
			});
			$('#date-start').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm', shortTime : true
			}).on('change', function(e, date)
			{
				$('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
			});

			$('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });

			$.material.init()
		});
		</script>
