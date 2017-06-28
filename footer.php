 <?php global $themeum; ?>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                   <p><?php if(isset($themeum['footer_text_1'])) echo $themeum['footer_text_1']; ?></p>
                </div>
                <div class="col-sm-6">
                    <p class="pull-right"><?php if(isset($themeum['footer_text_2'])) echo $themeum['footer_text_2']; ?></p>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php if(isset($themeum['before_body']))  echo $themeum['before_body']; ?>
<?php if(isset($themeum['google_analytics'])) echo $themeum['google_analytics'];?>

    <?php if(isset($themeum['custom_css'])): ?>
        <?php if(!empty($themeum['custom_css'])): ?>
            <style>
                <?php echo $themeum['custom_css']; ?>
            </style>
        <?php endif; ?>
    <?php endif; ?>
<?php wp_footer(); ?>
    <script src='http://uschkureit.mattcoffee.com/wp-content/themes/Enter/js/ScrollReveal.js'></script>
    <script>

      window.sr = new scrollReveal();

    </script>
</body>
</html>