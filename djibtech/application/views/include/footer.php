<section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-logo">
                                <a class="mt-2 text-left" href="index.html"><img src="assets/images/logo.svg" alt="Logo"></a>
                                <p class="text-white text-center">
                                000229-941-809-32 djibouti ville, Djibouti
                                </p>

                                <p class="text-white text-center">
                                000229-941-809-32 cotonou, Benin
                                </p>

                                <p class="text-white text-justify">
                                
                                </p>
                            </div> <!-- footer logo -->
                        </div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <!-- <div class="footer-support text-center">
                                <span class="number">+8801234567890</span>
                                <span class="mail">support@uideck.com</span>
                            </div> -->
                            <ul class="social text-center mt-2">
                                <p class="text-white text-center font-weight-bold pt-3">
                                    Suivez-Nous
                                </p>
                                <li><a href="https://www.facebook.com/djibtech/" target="_blank"><i class="lni lni-facebook-original"></i></a></li>
                                <li><a href="https://www.instagram.com/djibtech/" target="_blank"><i class="lni lni-instagram-original"></i></a></li>
                                <li><a><i class="lni lni-twitter-original"></i></a></li>
                            </ul> <!-- social -->
                        </div>
                    </div>
                    
                    <div class="copyright text-center mt-60 ">
                        <p class="text"  style="color:blue;">Designé et realisé par Djibtech </p>
                    </div> <!--  copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TOP TOP PART START ======-->

<a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

<!--====== BACK TOP TOP PART ENDS ======-->

<!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

<!--====== PART ENDS ======-->




<!--====== Jquery js ======-->
<script src="<?php echo public_url(); ?>/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?php echo public_url(); ?>/js/vendor/modernizr-3.7.1.min.js"></script>

<!--====== Bootstrap js ======-->
<script src="<?php echo public_url(); ?>/js/popper.min.js"></script>
<script src="<?php echo public_url(); ?>/js/bootstrap.min.js"></script>


<!--====== Isotope js ======-->
<script src="<?php echo public_url(); ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo public_url(); ?>/js/isotope.pkgd.min.js"></script>

<!--====== Scrolling Nav js ======-->
<script src="<?php echo public_url(); ?>/js/jquery.easing.min.js"></script>
<script src="<?php echo public_url(); ?>/js/scrolling-nav.js"></script>

<!--====== Main js ======-->
<script src="<?php echo public_url(); ?>/js/main.js"></script>




<script>

/*code ajax pour ne pas renvoyer sur le controlleur apres l' enregistrement*/
$(document).ready(function() {

    $("#id-add-email").submit(function(e) {
        e.preventDefault();
        $(".save").prop("disabled", true);
        $(".save").html('En cours <i class="fa fa-fw fa-spin fa-spinner"></i>');

        var appData = new FormData($(this)[0]);

        $.ajax({
            type: "POST",
            url: $(this).prop("action"),
            data: appData,
            enctype: $(this).prop("enctype"),
            processData: false,
            contentType: false,
            dataType: "json",
            async: false,
            success: function(data) {
                if (!data.success) {
                    $("#id-add-email .notification").html(
                        '<div class="alert alert-danger" role="alert"><strong>Sorry!</strong> ' +
                        data.message +
                        "</div>"
                    );
                    $(".save").html("Enregistrer");
                    $(".save").prop("disabled", false);
                    setTimeout(function() {
                        $(".notification").html();
                    }, 2000);
                } else {
                    $("#id-add-email .notification").html(
                        '<div class="alert alert-success" role="alert"><strong> ' +
                        data.message + '</strong>'+
                        "</div>"
                    );
                    $(".save").html("Enregistrer");
                    setTimeout(function() {
                        $(".notification").html();
                        window.location.reload();
                    }, 2000);
                    $(".save").prop("disabled", false);
                }
            },
            error: function(data) {
                alert("Can not perform the upload action:" + JSON.stringify(data));
            }
        });
    });

    

});
</script>

</body>

</html>