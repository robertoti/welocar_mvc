<section>
    <div class="container text-center">
        <h2 class="title">Editar carro</h2>
        <hr id="hr-cat"/>
</div>

    <div class="container">
        
         <div class="col-md-12 form-group">
 
        
            <form class="form-horizontal" method="post" action="<?php echo URL; ?>carro/editSave/<?php echo $this->carro[0]['car_id']; ?>">

                
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
                        <input class="form-control" type="text" name="placa" value="<?php echo $this->carro[0]['placa']; ?>" />
                    </div>                        
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Odômetro</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" name="km" value="<?php echo $this->carro[0]['km']; ?>" /><br />
                    </div>                        
                </div>
                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-4">
                     
                <button class="form-control btn btn-success" type="submit">Salvar</button>
                
                </div>
        

            </form>

        </div>
    </div>  
        
    </div>
</section>
