<?php include("../blocks/header.php"); ?>

<?php 
	$phoneVisible = "(501) 263-2549";
	$location = "Little Rock, AR";
	$phone = preg_replace("/[^0-9]/", "", $phoneVisible);
	$mail = "statelocksinc@gmail.com";
?>

<div class="resp_menu trans-no-all">
	<div class="resp_menu_toggle">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
	<div class="resp_menu_ul"></div>
</div>
<div class="mobile_call_button">
	<a href="tel:<?php echo $phone ?>">
		<img src="/images/bottom_hours.png" alt="">
		<img src="/images/bottom_phone.png" alt="">
		<img src="/images/bottom_badge.png" alt="">
	</a>
</div>

<header class="trans-all-4">
	<div class="container">
		<div class="header_menu">
    <nav class="navigation">
      <ul class="navigation">
        <li class="menu-item ">
          <a href="../">Home</a>
        </li>
        <li class="menu-item current-menu-item">
          <a href="#">Testimonials</a>
        </li>
      </ul>
    </nav>
		</div>
		<div class="logo">
      <a href="../">
				<img src="/images/logo.png" alt="">
			</a>
		</div>
		<div class="header_right">
			<div class="header_phone">
				<span>Get An Estimate Now</span>
				<div class="theme_button blue">
					<a href="tel:<?php echo $phone ?>">
						<em class="ri-phone-fill"></em>
						<span><?php echo $phoneVisible ?></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</header>

<section class="testimonials">
    <div class="container">
        <div data-embed-placeholder="9367"><script src="https://www.local-marketing-reports.com/external/showcase-reviews/embed/02b03debfcd99f13879c3aaff6d01859996f169e?id=9367"></script></div>
    </div>
</section>
<style>
    .testimonials{
        margin-bottom: 150px;
    }
    @media(max-width: 1024px){
        .testimonials{
            margin-bottom: 50px;
        }
    }
</style>

<?php include("../blocks/footer.php"); ?>