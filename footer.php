		<footer>
		    <div class="container">
		        <div class="copyright">
		            Copyright © 2014 ACA. All Rights Reserved.
		        </div>
		        <div style="display:none;"><?php echo get_option( 'states' );?></div>
		    </div>
		</footer>

        <script src="<?php echo get_template_directory_uri()?>/js/vendor/jquery-1.11.0.min.js"></script>
        <script src="<?php echo get_template_directory_uri()?>/js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri()?>/js/main.js"></script>

        <script src="http://localhost:1337/livereload.js"></script>

        <?php wp_footer()?>
    </body>
</html>