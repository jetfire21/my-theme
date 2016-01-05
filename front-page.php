<?php get_header();?>

<div class="container-fluid">
    <div class="row">
        <div class="right_bg">
            <div class="left_bg">


                <div class="top_bar">
                    <div class="country pull-left">Country:USA</div>
                    <div class="top_menu pull-right">
                         <ul class="nav nav-pills">
                            <li role="presentation" class="active"><a href="#">Search</a></li>
                            <li role="presentation" ><a href="#">My accoutn</a></li>
                            <li role="presentation" ><a href="#">Washlist 0</a></li>
                            <li role="presentation" ><a href="#">My Basket 0</a></li>
                        </ul>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="logo">
                    <h1 class="text-center">Cotton&Co</h1>
                </div>

                <div class="main_menu">
                     <ul class="nav nav-pills text-center  center-block">
                        <li role="presentation" class="active"><a href="#">Sony</a></li>
                        <li role="presentation" ><a href="#">Samsung</a></li>
                        <li role="presentation" ><a href="#">Apple</a></li>
                        <li role="presentation" ><a href="#">Htc</a></li>
                        <li role="presentation" ><a href="#">Huawey</a></li>
                        <li role="presentation" ><a href="#">Nokia</a></li>
                    </ul>
                    <?php if ( is_active_sidebar( 'menu_cat' ) ) : ?>
                          <?php dynamic_sidebar( 'menu_cat' ); ?>
                    <?php endif; ?>
                    <?php                      
                          // echo do_shortcode('[product_categories count="null" number="6" parent="0"]');
                     ?>
                </div>


            </div>
        </div>
            <div class="footer_menu">
                 <ul class="nav nav-pills text-center  center-block">
                    <li role="presentation" class="active"><a href="#">About</a></li>
                    <li role="presentation" ><a href="#">Samsung</a></li>
                    <li role="presentation" ><a href="#">Apple</a></li>
                    <li role="presentation" ><a href="#">Htc</a></li>
                    <li role="presentation" ><a href="#">Huawey</a></li>
                    <li role="presentation" ><a href="#">Nokia</a></li>
                </ul>
            </div>
    </div>
</div>
<?php wp_footer();?>
</body>
</html>