<!doctype html>
<html>
    <head>
        <title>Welocar</title>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />    
        <link rel="shortcut icon" href="<?php echo URL; ?>public/images/favicon.ico" type="image/ico" />
        <link href="<?php echo URL; ?>public/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>

        <link href="<?php echo URL; ?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL; ?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL; ?>public/jquery-modal/jquery.modal.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL; ?>public/owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL; ?>public/owl-carousel/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css"/>        

        <!-- jQuery e Datepicker -  Para o funcionamento do  DataPicker da pagina de de reservas  para o carousel  -->
        
        <script src="<?php echo URL; ?>public/jquery/jquery.js" type="text/javascript"></script>        
        <link href="<?php echo URL; ?>public/datepicker/css/datepicker.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo URL; ?>public/datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
        <script>
            $(function () {
                $("#datepicker").datepicker();
            });
        </script>

        <?php
        if (isset($this->js)) {
            foreach ($this->js as $js) {
                echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
            }
        }
        ?>
    </head>
    <body>
        <header>
            <div class="espaco"></div>
            <div class="container">
                <div class="col-md-2">
                    <a href="<?php echo URL ?>">
                        <img id="logotipo" src="<?php echo URL; ?>public/images/logo.png" alt="logo">           
                    </a>
                </div>
                <div id="msg-logo" class="col-md-4">
                    <a href="<?php echo URL ?>">
                        <h1>WELOCAR</h1>
                    </a>                    
                    <span id="frase">Aluguel de veículos online com segurança</span>   
                </div>


            </div>    
            <div id="menu">

                <div class="container container-fluid">         

                    <input type="checkbox" id="control-nav" />
                    <label for="control-nav" class="control-nav"></label>
                    <label for="control-nav" class="control-nav-close"></label>

                    <nav class="float-l" id="menu">

                        <ul id="float-l" class="list-auto float-l">


                            <?php Session::init(); ?>
                            <li>
                                <a href="<?php echo URL; ?>index">Inicio</a>
                            </li>
                            <?php if (Session::get('loggedIn') == false): ?>

                                <li>
                                    <a href="<?php echo URL; ?>help">Help</a>                               
                                </li>
                            <?php endif; ?>

                            <?php if (Session::get('loggedIn') == TRUE): ?>
                                <li>                                                            
                                    <a href="<?php echo URL; ?>dashboard">Administração</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL; ?>reserva">Reservas</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL; ?>note">Notas</a>
                                </li>
                                <?php if (Session::get('role') == 'owner'): ?>
                                    <li>
                                        <a href="<?php echo URL; ?>user">Usuários</a>                                    
                                    </li>
                                <?php endif; ?>
                                <li>
                                    <a href="<?php echo URL; ?>dashboard/logout">Sair</a>    
                                </li>
                            <?php else: ?>                              
                                <li>
                                    <a href="<?php echo URL; ?>login">Login</a>
                                </li>
                            <?php endif; ?>    



                            <?php if (Session::get('loggedIn') == false): ?>
                                <li>
                                    <a href="<?php echo URL ?>#nossos-veiculos" title="">Nossos veículos</a>  
                                </li>
                                <li>
                                    <a href="#contato" title="">Contato</a>                              
                                </li>                           

                            </ul>

                        </nav>


                        <?php if ($_SERVER['REQUEST_URI'] != '/mvc/login'): ?>
                            <div id="login" class="pull-right">

                                <form class="form-inline" action="login/run" method="post">
                                    <div class="form-group">
                                        <label class="sr-only" for="login">Login </label>
                                        <input class="form-control" type="text" name="login" placeholder="Digite seu login" />
                                    </div>

                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputPassword3">Senha </label>
                                        <input class="form-control"  type="password" name="password"  placeholder="Digite sua senha..." />
                                    </div>                

                                    <button type="submit" class="btn btn-default">Sign in</button>

                                </form>

                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                </div>

            </div> 
        </header>


        <div id="content">

