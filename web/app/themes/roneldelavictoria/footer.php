	<!-- section footer start --> 
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Class aptent taciti sociosqu ad litor? Duis co.</h2>
                    <p>Sed congue at tortor vitae placerat rhoncus gravida</p>
                    <a href=""><button class="primary">Call 123 4567</button></a>
                    <a href=""><button class="secondary">Let's begin</button></a>
                </div>
                <div class="col-md-12 bottom-footer">
                    <div class="d-flex align-items-center">
                       <a href="" class="mr-auto">
                           <img src="<?php echo get_template_directory_uri().'/images/footer-logo.png' ?>" alt="">
                        </a>
                       <p><small>© Lorem 2021</small></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <script>

        jQuery(document).ready(function($){
            $('#menu-button').click(function(){
                $('#nav-collapse').show();
                $('#nav-collapse').addClass('show-nav');
                $('#menu-button').hide();
                $('#menu-button-cancel').show();
            })
            $('#menu-button-cancel').click(function(){
                $('#nav-collapse').hide();
                $('#nav-collapse').removeClass('show-nav');
                $('#menu-button').show();
                $('#menu-button-cancel').hide();
            })
        })
    </script>
   </body>
</html>