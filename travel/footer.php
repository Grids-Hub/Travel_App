    <!-- footer -->
    <footer>
        <div class="container-fluid container-xxl footer pt-5 ps-xxl-0">
            <div class="footers pt-5 ">
                <div class="row ">
                    <div class="col-md-12 col-xs-12 col-lg-12 col-xl-5 mx-auto my-4 text-xl-start text-lg-center text-md-center text-sm-center text-center foottext">
                        <?php if (is_active_sidebar('foot1')) {
                            dynamic_sidebar("foot1");
                        } ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 col-xl-2 mx-auto p-0 my-4  text-xl-start text-lg-center text-md-center text-sm-center text-center footlist">
                        <?php if (is_active_sidebar('foot2')) {
                            dynamic_sidebar("foot2");
                        } ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 col-xl-2  mx-auto p-0 my-4 text-xl-start text-lg-center text-md-center text-sm-center text-center  footlist">
                        <?php if (is_active_sidebar('foot3')) {
                            dynamic_sidebar("foot3");
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </section>
    <?php wp_footer(); ?>
    </body>
    </html>