<section class="row">
    <div class="container text-center">
        <h2 class="title">Nossas categorias</h2>
        <hr id="hr-cat"/>
    </div>
    
    <div class="container">       
        
    <?php if(Session::get('loggedIn') == TRUE):?>
        
        <form method="post" action="<?php echo URL; ?>reserva">
            
    <?php else:?>
            
        <form method="post" action="<?php echo URL; ?>reserva">   
            
    <?php endif;?>

            <div class="col-md-4 text-center">
                <img src="<?php echo URL; ?>public/images/carros/cruze.jpg" alt="">
               
                <button id="bronze" value="ouro" name="categoria" class="btn btn-warning outline btn-lg reservar hvr-float-shadow" title="Sedan executivo, completo.">OURO</button>
              
               
                <ul class="list-group">
                    <li class="list-group-item">Jetta</li>
                    <li class="list-group-item">Fusion</li>
                    <li class="list-group-item">Linea</li>
                    <li class="list-group-item">Cruser</li>
                    <li class="list-group-item">Corola</li>
                </ul>

            </div>
            <div class="col-md-4 text-center">
                <img src="<?php echo URL; ?>public/images/carros/voyage.jpg" alt="">
             
                    <button value="prata" name="categoria" class="btn btn-default outline btn-lg reservar hvr-float-shadow " title="Sedan, 4 portas, ar-condicionado">PRATA</button>
              
                <ul class="list-group">
                    <li class="list-group-item">Voyage</li>
                    <li class="list-group-item">Siena</li>
                    <li class="list-group-item">Fiesta Sedan</li>
                    <li class="list-group-item">Prisma</li>
                    <li class="list-group-item">Etios Sedan</li>
                </ul>

            </div>
            <div class="col-md-4 text-center">
                <img src="<?php echo URL; ?>public/images/carros/gol.jpg" alt="">
              
                    <button value="bronze" name="categoria" class="btn btn-danger outline btn-lg reservar hvr-float-shadow" title="Ar-condicionado, 4 portas, manual.">BRONZE</button>
            
                <ul class="list-group">
                    <li class="list-group-item">Gol</li>
                    <li class="list-group-item">Palio</li>
                    <li class="list-group-item">Fiesta</li>
                    <li class="list-group-item">Onix</li>
                    <li class="list-group-item">Etios</li>
                </ul>

            </div>
        </form>
                
    </div>
</section>



<section>
            <div id="nossos-veiculos" class="row">
                <div class="container text-center">
                    <h2 class="title">Nossos veículos</h2>
                    <hr id="hr-cat"/>
                </div>
                <div id="owl-demo">
   
                  <div class="item"><img src="<?php echo URL; ?>public/images/carros/jetta.jpg" alt="Veículos"></div>
                  <div class="item"><img src="<?php echo URL; ?>public/images/carros/fusion.jpg" alt="Veículos"></div>
                  <div class="item"><img src="<?php echo URL; ?>public/images/carros/linea.jpg" alt="Veículos"></div>
                  <div class="item"><img src="<?php echo URL; ?>public/images/carros/cruze.jpg" alt="Veículos"></div>
                  <div class="item"><img src="<?php echo URL; ?>public/images/carros/corolla.jpg" alt="Veículos"></div>
                  <div class="item"><img src="<?php echo URL; ?>public/images/carros/voyage.jpg" alt="Veículos"></div>
                  <div class="item"><img src="<?php echo URL; ?>public/images/carros/siena.jpg" alt="Veículos"></div>
                  <div class="item"><img src="<?php echo URL; ?>public/images/carros/f-sedan.jpg" alt="Veículos"></div>
                  <div class="item"><img src="<?php echo URL; ?>public/images/carros/prisma.jpg" alt="Veículos"></div>
                  <div class="item"><img src="<?php echo URL; ?>public/images/carros/e-sedan.jpg" alt="Veículos"></div>
                  <div class="item"><img src="<?php echo URL; ?>public/images/carros/gol.jpg" alt="Veículos"></div>
                  <div class="item"><img src="<?php echo URL; ?>public/images/carros/palio.jpg" alt="Veículos"></div>
                  <div class="item"><img src="<?php echo URL; ?>public/images/carros/fiesta.jpg" alt="Veículos"></div>
                  <div class="item"><img src="<?php echo URL; ?>public/images/carros/onix.jpg" alt="Veículos"></div>
                  <div class="item"><img src="<?php echo URL; ?>public/images/carros/etios.jpg" alt="Veículos"></div>
                  
                </div>
            </div>
    
</section>
