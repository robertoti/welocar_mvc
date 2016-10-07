<section class="row">
    <div class="container text-center">
        <h2 class="title">Cadastro
            <hr id="hr-cat"/>
    </div>

    <div class="container">     

        <div class="col-md-12 text-center">

            <form class="form-horizontal" method="post" action="<?php echo URL; ?>cadastro/create">


                <div class="form-group">
                    <label class="col-sm-4 control-label">Login</label>
                    <div class="col-sm-4">
                        <input type="text" name="login" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Senha</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="password" name="password" />
                    </div>                        
                </div>
                <div class="form-group"> 
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">

                        <button class="btn btn-success form-control" type="submit">Cadastrar</button>

                    </div>

                </div>





            </form>
        </div>

    </div>


    <hr />



</div>

</section>


