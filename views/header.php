<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta charset="UTF-8">
        <title><?= (isset($this->title)) ? $this->title : 'Welocar - Aluguel de veículos'; ?></title>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />    
        <link rel="stylesheet" href="<?php echo URL; ?>/public/hover/hover-min.css" />
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
        <link href="<?php echo URL; ?>public/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" type="text/css"/>

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

                <div class="container">         

                    <input type="checkbox" id="control-nav" />
                    <label for="control-nav" class="control-nav"></label>
                    <label for="control-nav" class="control-nav-close"></label>

                    <nav class="float-l" id="menu">

                        <ul id="float-l" class="list-auto float-l">


                            <li>
                                <a class="hvr-overline-from-center" href="<?php echo URL; ?>">Inicio</a>
                            </li>

                            <?php Session::init(); ?>

                            <!-- #########################    Estrutura de para definir os itens do menu quando o usuário está logado   ############################-->


                            <?php if (Session::get('loggedIn') == TRUE): ?>

                                <li>
                                    <a class="hvr-overline-from-center" href="<?php echo URL; ?>reserva">Reservas</a>
                                </li>
                                <!-- #########################     A partir daqui somente o administrador do sistema pode ver #######################################-->

                                <?php if (Session::get('role') == 'owner'): ?>

                                    <!--                                    <li>                                                            
                                                                            <a  class="hvr-overline-from-center" href="<?php echo URL; ?>admin">Administração</a>
                                                                        </li>-->
                                    <li>
                                        <a class="hvr-overline-from-center" href="<?php echo URL; ?>user">Usuários</a>                                    
                                    </li>
                                    <li>
                                        <a class="hvr-overline-from-center" href="<?php echo URL; ?>carro">Carros</a>                                    
                                    </li>
                                <?php endif; ?> 

                                <!-- #########################     termino da visualização do administrador do sistema #############################################-->


                                <!-- #########################     A partir daqui somente os funcionários do sistema podem ver #####################################-->


                                <?php if (Session::get('role') == 'admin'): ?>

                                    <!--                                    <li>                                                            
                                                                            <a class="hvr-overline-from-center" href="<?php echo URL; ?>admin">Administração</a>
                                                                        </li>-->
                                    <!--                                    <li>
                                                                            <a class="hvr-overline-from-center" href="<?php echo URL; ?>user">Usuários</a>                                    
                                                                        </li>-->
                                    <li>
                                        <a class="hvr-overline-from-center" href="<?php echo URL; ?>carro">Carros</a>                                    
                                    </li>
                                <?php endif; ?>                                
                                <li>
                                    <a class="hvr-overline-from-center" href="<?php echo URL; ?>admin/logout">Sair</a>    
                                </li>
                                <li>
                                    <a class="hvr-overline-from-center" href="<?php echo URL; ?>user/">
                                        Bem vindo 
                                        <?php  if (Session::get('role') == 'owner'):
                                                    echo 'Sr.';
                                                elseif(Session::get('role') == 'admin'):
                                                    echo 'Colaborador';
                                                endif;
                                        ?>
                                        <?php echo Session::get('login'); ?>
                                    </a>                                    
                                </li>                                                    

                            <?php else: ?>                              
                                <li>
                                    <a  class="hvr-overline-from-center" href="<?php echo URL; ?>login">Login</a>
                                </li>
                            <?php endif; ?>  

                            <!-- #########################     termino da visualização do funcionários do sistema ################################################-->                                



                            <!-- #########################    Estrutura de para definir os itens do menu quando o não existe usuário logado no sistema  ############################-->


                            <?php if (Session::get('loggedIn') == false): ?>
                                <li>
                                    <a class="hvr-overline-from-center" href="<?php echo URL ?>#nossos-veiculos" title="">Nossos veículos</a>  
                                </li>
                                <!--                                <li>
                                                                    <a class="hvr-overline-from-center" href="#contato" title="">Contato</a>                              
                                                                </li>  
                                                                <li>
                                                                    <a class="hvr-overline-from-center" href="<?php echo URL; ?>help">Ajuda</a>                               
                                                                </li>-->

                            </ul>

                        </nav>


                        <!-- #########################    formulário de login do Header, visivel somente na página inicial     ############################-->

                        <?php if (($_SERVER['REQUEST_URI'] == '/index') OR ( $_SERVER['REQUEST_URI'] == '/')): ?>
                            <div id="login">
                                <form class="form-inline float-r" action="login/run" method="post">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail3">Login</label>
                                        <input type="text" class="form-control" name="login" id="exampleInputEmail3" placeholder="Digite seu login">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputPassword3">Senha</label>
                                        <input type="password" class="form-control" name="password" id="senha" placeholder="Digite sua senha...">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Entrar</button>                                
                                </form>
                            </div>







                        <?php endif; ?>


                        <!-- #########################    fim do formulários de login do Header   ############################################################-->

                    <?php endif; ?>

                </div>
            </div> 
        </header>


        <div id="content">

