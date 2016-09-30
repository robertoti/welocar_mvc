</div>

<footer>
    <div class="row panel-footer"> 
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-red">
                    <img id="logofooter" src="<?php echo URL; ?>public/images/logo.png" alt="logo"/>
                </div>
                <div class="col-md-10">
                    <span class="container">Oferecemos o serviço de aluguel de veículos online com segurança, comodidade e garantia de qualidade</span>    
                </div>
            </div>
        </div>
    </div>

    <div class="row panel-footer">      

        <span>Copyright &copy; Projeto Integrado Multidisciplinar 2016.</span>
        <span class="footer-info">DS4-P30<a href="/views/ajuda">Pagina de ajuda</a></span>     

    </div>
</footer>
<script src="<?php echo URL; ?>public/jquery-modal/jquery.modal.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>

<script>
    $(document).ready(function () {

        $("#owl-demo").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds 
            items: 6,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]

        });

    });

</script> 

<script src="<?php echo URL; ?>public/owl-carousel/assets/js/bootstrap-collapse.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/owl-carousel/assets/js/bootstrap-transition.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/owl-carousel/assets/js/bootstrap-tab.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/js/custom.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>views/dashboard/js/default.js" type="text/javascript"></script>
</body>
</html>