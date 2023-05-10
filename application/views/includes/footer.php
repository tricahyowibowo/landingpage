<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/642bd8e34247f20fefe9b31c/1gt5keeqb';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<!--End of Tawk.to Script-->
</body>
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <!-- <h3 class="text-uppercase mb-4 font-weight-bold">
                    PT. Mirota KSM
                </h3> -->
                </div>
                <!-- Grid column -->

                <!-- <hr class="w-100 clearfix d-md-none" /> -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <!-- <h3 class="text-uppercase header-footer">Tentang Kami</h3>
                <p>
                    <a class="text-white" href="#">Sejarah</a>
                </p>
                <p>
                    <a class="text-white" href="#">Penghargaaan</a>
                </p>
                <p>
                    <a class="text-white" href="#">Bisnis</a>
                </p>
                <p>
                    <a class="text-white" href="#">Karir</a>
                </p> -->
                </div>
                <!-- Grid column -->

                <!-- <hr class="w-100 clearfix d-md-none" /> -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <!-- <h3 class="text-uppercase header-footer">
                    Produk Kami
                </h3>
                <p>
                    <a class="text-white" href="#">Prosteo</a>
                </p>
                <p>
                    <a class="text-white" href="#">Lactona</a>
                </p>
                <p>
                    <a class="text-white" href="#">Prolansia</a>
                </p> -->
                </div>

                <!-- Grid column -->
                <!-- <hr class="w-100 clearfix d-md-none" /> -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <!-- <h3 class="text-uppercase header-footer">Contact</h3>
                <p><i class="fas fa-home mr-3"></i> Jl Anggrek No. 141 Sambilegi Kidul Yogyakarta</p>
                <p><i class="fas fa-clock mr-3"></i> Senin - Jum'at | 08:00 - 17:00</p>
                <p><i class="fas fa-envelope mr-3"></i> info@mirota.id</p>
                <p><i class="fas fa-phone mr-3"></i> (0274) 488378</p> -->

                </div>
                <!-- Grid column -->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->

        <hr class="my-3">

        <!-- Section: Copyright -->
        <section class="pt-0">
        <div class="row d-flex align-items-center">
            <!-- Grid column -->
            <div class="col-md-2 col-lg-3 text-center text-md-start">
            <!-- Copyright -->
            <div>
                © 2023
                <a class="text-white" href="https://mirota.id/"
                    >Mirota KSM</a
                >
            </div>
            <!-- Copyright -->
            </div>
            <!-- Grid column -->
            <div class="col-md-7 col-lg-6 text-center text-md-start">
                <!-- Manu -->
                <div class="menu-footer">
                    <nav>
                    <ul>
                        <li>
                            <a href="<?php echo base_url('syaratketentuan')?>">Syarat & Ketentuan</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('privasi')?>">Kebjiakan Privasi</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('karir')?>">Karir</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('kontakkami')?>">Kontak Kami</a>
                        </li>
                    </ul>
                    </nav>

                </div>
                <!-- Copyright -->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 ml-lg-0 text-center text-md-end">
            <!-- Facebook -->
            <a
                class="btn btn-outline-light btn-floating m-1"
                class="text-white"
                role="button"
                ><i class="fab fa-linkedin-in"></i></a>

            <!-- Twitter -->
            <a
                class="btn btn-outline-light btn-floating m-1"
                class="text-white"
                role="button"
                ><i class="fab fa-instagram"></i
                ></a>

            <!-- Google -->
            <a
                class="btn btn-outline-light btn-floating m-1"
                class="text-white"
                role="button"
                ><i class="fab fa-tiktok"></i
                ></a>
            </div>
            <!-- Grid column -->
        </div>
        </section>
        <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
    </footer>
    <!-- Footer -->
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Jquery needed -->
    <script src="<?= base_url(); ?>assets/js/jQuery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script>
    $(document).ready(function() {

        $(".theSelect").select2({
            
        });
    
    $("#load").fadeOut(1000);
    });
    </script>

    <!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.navBar').addClass('affix');
                console.log("OK");
            } else {
                $('.navBar').removeClass('affix');
            }
        });
    </script>

    <script id="rendered-js">
    $('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

    });
    //# sourceURL=pen.js


    </script>
</html>