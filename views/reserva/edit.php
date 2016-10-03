<section>
    
    <div class="container text-center">
        <h2 class="title">Edite sua reserva</h2>
        <hr id="hr-cat"/>
    </div>

    <div class="container">     

        <div class="col-md-12 text-center">

            <form class="form-horizontal" method="post" action="<?php echo URL; ?>reserva/editSave/<?php echo $this->reserva[0]['reservaid']; ?>">

                <div class="form-group">                  
                           

                    <label class="col-sm-4 control-label">Categoria</label>

                    <div class="col-sm-4">

                        <select class="form-control"  name="categoria"> 
                            <option value="ouro" <?php if ($this->reserva[0]['categoria'] == 'ouro') echo 'selected'?>>Ouro</option>
                            <option value="prata" <?php if ($this->reserva[0]['categoria'] == 'prata') echo 'selected'?>>Prata</option>
                            <option value="bronze"<?php if ($this->reserva[0]['categoria'] == 'bronze') echo 'selected'?>>Bronze</option>
                        </select>

                    </div>

                </div>
                <div class="form-group">

                    <label class="col-sm-4 control-label">Data de retirada</label>
                    <div class="col-sm-4">
                        <input id="retirada" value="<?php echo $this->reserva[0]['date_inicio'] =  implode("/",array_reverse(explode("-",$this->reserva[0]['date_inicio'])))?>" type="text" required class="form-control"  name="date_inicio" />
                    </div>

                </div>
                <div class="form-group">

                    <label class="col-sm-4 control-label">Data da devolução</label>
                    <div class="col-sm-4">

                        <input id="devolucao" type="text"required  value="<?php echo $this->reserva[0]['date_fim'] =  implode("/",array_reverse(explode("-",$this->reserva[0]['date_fim'])))?>"class="form-control"  name="date_fim" />


                    </div>

                </div>

                <input type="hidden" value="<?php echo date('Y-m-d h:m') ?>" name="date_added" />
                <input type="hidden" value="ativa" name="status" />

                <button type="submit" class="btn btn-success btn-lg">Alterar reserva</button>
                
                
                
             
            </form>
        
        </div>

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
    
</script>
