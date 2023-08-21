
<?php get_header(); ?>
<?php 
    global $post;
	$phoneVisible;
	if(is_front_page()){

		$phoneVisible = cmb2_get_option('app_options_page', 'main_phone_number');
	}else{
		$phoneVisible = get_post_meta(get_the_ID(), 'phone_number', true);
	}
    $phone = preg_replace("/[^0-9]/", "", $phoneVisible);
    $mail = cmb2_get_option('app_options_page', 'contact_main_email');
    $address = cmb2_get_option('app_options_page', 'main_address');
?>


<section class="hero inside">
    <figure>
        <?php the_post_thumbnail('post-thumbnail', [ 'loading' => false]); ?>
    </figure>
    <div class="container">
        <div class="hero_text_wrap">
            <h1 class="page_title"><?php the_title() ?></h1>
            <div class="theme_button">
                <a href="tel:<?php echo $phone ?>">Call Us Now</a>
            </div>
        </div>
    </div>
</section>

<section class="about_us inside">
    <?php 
        $aboutTitle = get_post_meta(get_the_ID(), 'about_section_title', true);
        $aboutText = get_post_meta(get_the_ID(), 'about_section_text', true);
        $aboutImage = get_post_meta(get_the_ID(), 'about_section_image', true);
    ?>
    <div class="container">
        <div class="about_wrap">
            <div class="section_text"><?php the_content() ?></div>
            <div class="section_buttons">
                <div class="theme_button transparent">
                    <a href="tel:<?php echo $phone ?>">Learn more</a>
                </div>
                <div class="theme_button blue">
                    <a href="tel:<?php echo $phone ?>">Call now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="front_contact">
    <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/images/town.png" alt="">
    </figure>
    <div class="container">
        <h2 class="section_title">HAVE MORE QUESTIONS?</h2>
        <?php echo do_shortcode('[contact-form-7 id="12" title="Contact form 1"]') ?>
    </div>
</section>

<?php get_footer(); ?>