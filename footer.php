   <!-- Start Footer -->
    <footer class="bg-primary ">
        <div class="container">
            <div class="row py-4">

                    <div class="col-lg-3 col-12 align-left">
                        <a class="navbar-brand" href="index.php">
                            <i class='bx bx-buildings bx-sm text-light'></i>
                            <span class="text-danger h2">X</span><span class="text-light h3 semi-bold-600">Resume</span>
                        </a>
                        <p class="text-light my-lg-4 my-2" id="About">
                          This website is basically about creating your cv with ease in order for you to showcase your skill instead of you to be going through
                            the stress of going to the cafe or typing by yourself ...All you just have to do is input your personal info at the required 
                            place and see what happens next..so click on <a href="signin.php"><span class="text-warning ">My Account</span> </a>to create an account with us.
                        </p>
                    
                    </div>

                    <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                      <h4 class="h4 pb-lg-3 text-light light-300">Our Company</h4>
                        <ul class="list-unstyled text-light light-300">
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="index.php">Home</a>
                            </li>
                            
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="signin.php">My Account</a>
                            </li>
                            
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Term of use</a>
                            </li>

                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Privacy Policy</a>
                            </li>
                              
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Feedback</a>
                            </li>

                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#About">About Us</a>
                            </li>  
                        </ul>
                    </div>

        

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">Call us</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
                </div>


              <div class="col-lg-3 col-12 align-right">
                <ul class="list-inline footer-icons light-300">
                    <li class="list-inline-item m-0">
                        <a class="text-light" target="_blank" href="http://facebook.com/">
                            <i class='bx bxl-facebook-square bx-md'></i>
                        </a>
                    </li>
                    <li class="list-inline-item m-0">
                        <a class="text-light" target="_blank" href="https://www.linkedin.com/">
                            <i class='bx bxl-linkedin-square bx-md'></i>
                        </a>
                    </li>
                    <li class="list-inline-item m-0">
                        <a class="text-light" target="_blank" href="https://www.whatsapp.com/">
                            <i class='bx bxl-whatsapp-square bx-md'></i>
                        </a>
                    </li>
                    <li class="list-inline-item m-0">
                        <a class="text-light" target="_blank" href="https://www.flickr.com/">
                            <i class='bx bxl-flickr-square bx-md'></i>
                        </a>
                    </li>
                    <li class="list-inline-item m-0">
                        <a class="text-light" target="_blank" href="https://www.medium.com/">
                            <i class='bx bxl-medium-square bx-md' ></i>
                        </a>
                    </li>
                </ul>
              </div> 

            </div>
        </div>

        <div class="w-100 bg-dark py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text-center text-light light-300">
                            © Copyright 2022. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-end text-center text-light light-300">
                            Designed by Nife with <span class="icon text-danger"><i class="fa fa-heart" aria-hidden="true"></i></span> 
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->


    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Load jQuery require for isotope -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.js"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    <!-- Templatemo -->
    <script src="assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="assets/js/custom.js"></script>

  </body>

</html>