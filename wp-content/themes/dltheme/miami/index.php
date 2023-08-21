<?php include("../blocks/header.php"); ?>

<?php 
	$phoneVisible = "(786) 627-5073";
	$location = "Miami, FL";
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
        <li class="menu-item current-menu-item">
          <a href="./">Home</a>
        </li>
        <li class="menu-item">
          <a href="./testimonials/">Testimonials</a>
        </li>
      </ul>
    </nav>
		</div>
		<div class="logo">
      <a href="./">
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


<section class="hero">
    <figure>
        <img src="/images/hero.jpg" alt="Main Image">
    </figure>
    <div class="container">
        <div class="hero_text_wrap">
            <h1 class="page_title">EXPERT LOCKSMITH</h1>
            <div class="hero_subtitle">SERVICES IN <?php echo $location ?></div>
            <div class="hero_text">
              24/7 Locksmith Service Near You
              <ul>
                <li>Immediate On-Site Assistance</li>
                <li>Emergency Locksmith 24/7!</li>
                <li>Auto, Residential &amp; Commercial</li>
                <li>Affordable Locksmiths For Any Budget</li>
                <li>FREE Estimate!</li>
                <li>Average Response time &lt; 10 Seconds</li>
                <li>100’s of 5 STARS Reviews!</li>
              </ul>
            </div>
            <div class="theme_button">
                <a href="tel:<?php echo $phone ?>">Call Now - <?php echo $phoneVisible ?></a>
            </div>
        </div>

    </div>

</section>

<div class="company">
    <div class="container">
      <div class="company_list"> 
        <div class="list_item">
          <img src="/images/benefit1.png" alt="">
          <div class="title">Mobile and Insured</div>
        </div>
        <div class="list_item">
          <img src="/images/benefit2.png" alt="">
          <div class="title">Professional <br> Locksmith</div>
        </div>
        <div class="list_item">
          <img src="/images/benefit3.png" alt="">
          <div class="title">Fair Prices</div>
        </div>
        <div class="list_item">
          <img src="/images/benefit4.png" alt="">
          <div class="title">24/7 Service</div>
        </div>
      </div>
    </div>
</div>

<section class="include" id="services">
  <div class="container">
    <h2 class="block_title">OUR SERVICES INCLUDE</h2>
    <div class="include_list">
      <div class="include_item">
        <a href="tel:<?php echo $phone ?>" class="">
        <span class="icon"><img src="/images/service1.png" alt="Car Lockout"></span>
        <span class="title">Car Lockout</span>
        </a>
      </div>
      <div class="include_item">
        <a href="tel:<?php echo $phone ?>" class="">
        <span class="icon"><img src="/images/service1.png" alt="House Lockout"></span>
        <span class="title">House Lockout</span>
        </a>
      </div>
      <div class="include_item">
        <a href="tel:<?php echo $phone ?>" class="">
        <span class="icon"><img src="/images/service1.png" alt="Commercial Lockout"></span>
        <span class="title">Commercial Lockout</span>
        </a>
      </div>
      <div class="include_item">
        <a href="tel:<?php echo $phone ?>" class="">
        <span class="icon"><img src="/images/service2.png" alt="Lock Replacement"></span>
        <span class="title">Lock Replacement</span>
        </a>
      </div>
      <div class="include_item">
        <a href="tel:<?php echo $phone ?>" class="">
        <span class="icon"><img src="/images/service6.png" alt="Lock Repair"></span>
        <span class="title">Lock Repair</span>
        </a>
      </div>
      <div class="include_item">
        <a href="tel:<?php echo $phone ?>" class="">
        <span class="icon"><img src="/images/service2.png" alt="Lock Installation"></span>
        <span class="title">Lock Installation</span>
        </a>
      </div>
      <div class="include_item">
        <a href="tel:<?php echo $phone ?>" class="">
        <span class="icon"><img src="/images/service3.png" alt="Car Key Replacement"></span>
        <span class="title">Car Key Replacement</span>
        </a>
      </div>
      <div class="include_item">
        <a href="tel:<?php echo $phone ?>" class="">
        <span class="icon"><img src="/images/service5.png" alt="Car Key Duplication"></span>
        <span class="title">Car Key Duplication</span>
        </a>
      </div>
      <div class="include_item">
        <a href="tel:<?php echo $phone ?>" class="">
        <span class="icon"><img src="/images/service9.png" alt="Car Key Programming"></span>
        <span class="title">Car Key Programming</span>
        </a>
      </div>
      <div class="include_item">
        <a href="tel:<?php echo $phone ?>" class="">
        <span class="icon"><img src="/images/service4.png" alt="Ignition Repair"></span>
        <span class="title">Ignition Repair</span>
        </a>
      </div>
      <div class="include_item">
        <a href="tel:<?php echo $phone ?>" class="">
        <span class="icon"><img src="/images/service4.png" alt="Ignition Replacement"></span>
        <span class="title">Ignition Replacement</span>
        </a>
      </div>
      <div class="include_item">
        <a href="tel:<?php echo $phone ?>" class="">
        <span class="icon"><img src="/images/service3.png" alt="Broken Key Extraction"></span>
        <span class="title">Broken Key Extraction</span>
        </a>
      </div>
      <div class="include_item">
        <a href="tel:<?php echo $phone ?>" class="">
        <span class="icon"><img src="/images/service6.png" alt="Lock Rekey"></span>
        <span class="title">Lock Rekey</span>
        </a>
      </div>
      <div class="include_item">
        <a href="tel:<?php echo $phone ?>" class="">
        <span class="icon"><img src="/images/service1.png" alt="Master Rekey"></span>
        <span class="title">Master Rekey</span>
        </a>
      </div>
      <div class="include_item">
        <a href="tel:<?php echo $phone ?>" class="">
        <span class="icon"><img src="/images/service3.png" alt="Safes"></span>
        <span class="title">Safes</span>
        </a>
      </div>
    </div>
    <div class="section_buttons">
      <div class="include_button">
        <a href="tel:<?php echo $phone ?>">
          <img src="/images/phone.png" alt="">
          <span><span class="big"><?php echo $phoneVisible ?></span></span>
        </a>
      </div>
      <div class="include_button blue">
        <a href="mailto:<?php echo $mail ?>">
          <img src="/images/mail.png" alt="">
          <span><span class="big"><?php echo $mail ?></span></span>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="feedbacks">
  <div class="container">
    <h2 class="section_title">SEE WHAT OUR CLIENTS HAVE TO SAY</h2>
    <div class="feedbacks_list">
      <div class="feedback_item">
        <img src="/images/stars.png" alt="">
        <div class="feedback_text">
          <p>Called this 24 hour business for a late night service and actually got someone to answer the phone. He arrived pretty quick to my house and managed to unlock the door in a minute! Great Service!</p>
        </div>
        <div class="feedback_title">Lily C</div>
      </div>
      <div class="feedback_item">
        <img src="/images/stars.png" alt="">
        <div class="feedback_text">
          <p>Amazing service. I locked my keys in my trunk here, twenty minutes after my call the locksmith technician arrived. He was quick and polite. I have never experienced such an attentive service. I’m definitely recommending State Locks and Keys to all.</p>
        </div>
        <div class="feedback_title">Alberta E</div>
      </div>
      <div class="feedback_item">
        <img src="/images/stars.png" alt="">
        <div class="feedback_text">
          <p>Prompt, efficient, and friendly service. Had an emergency issue at our business on a Sunday and they helped us within an hour. Definitely recommend &amp; will use again!</p>
        </div>
        <div class="feedback_title">Barbara R</div>
      </div>
      <div class="feedback_item">
        <img src="/images/stars.png" alt="">
        <div class="feedback_text">
          <p>locked myself out of the car and had to find a locksmith nearby to help me out. Luckily on the second call I found this company and they had a technician real close to my location so I did not have to wait for long! I am pretty satisfied</p>
        </div>
        <div class="feedback_title">Diana W</div>
      </div>
      <div class="feedback_item">
        <img src="/images/stars.png" alt="">
        <div class="feedback_text">
          <p>Called and was pleased to learn they had kept a key on file for me. Excellent support and quick turnaround. Thank you State Locks and Keys!</p>
        </div>
        <div class="feedback_title">Frank E</div>
      </div>
      <div class="feedback_item">
        <img src="/images/stars.png" alt="">
        <div class="feedback_text">
          <p>Fast, friendly &amp; inexpensive! They opened my door in minutes and were super professional!</p>
        </div>
        <div class="feedback_title">Joy M</div>
      </div>
    </div>
    <div class="read_more">
      <a href="">Read more reviews</a>
    </div>
  </div>
</section>

<div class="banner">
  <figure>
    <img src="/images/banner.jpg" alt="">
  </figure>
  <div class="container">
    <div class="banner_wrap">
      <div class="bannet_text">
        <div class="banner_title">LOCKED OUT OF YOUR CAR, HOUSE, OR OFFICE?</div>
        <div class="banner_subtitle">Need an expert locksmith by your side? We’ll arrive at your spot with the best locksmith solutions regardless of which <?php echo $location ?> area you are in! Call today on a 24/7 basis.</div>
      </div>
      <div class="theme_button white">
        <a href="tel:<?php echo $phone ?>">Call Now</a>
      </div>
    </div>
  </div>
</div>

<section class="about_us">
  <div class="container">
    <figure>
      <img src="/images/about_us.jpg" alt="State locks and keys – Who we are">
    </figure>
    <div class="about_wrap">
      <h2 class="section_title left">State locks and keys – Who we are</h2>
      <div class="section_text read_more_text">
        <p><span style="font-weight: 400">State Locks &amp; Keys has all knowledge and credentials to call itself reliable. We offer all major locksmith categories for <?php echo $location ?> residents. </span><span style="font-weight: 400">We guarantee the best outcomes because we know what to do from years of industry experience, and our locksmith services are fully insured and mobile. Whether you need emergency assistance for your house, car, or office space - count on us! State Locks &amp; Keys</span><span style="font-weight: 400"> will provide a trustworthy expert to assist you with your locksmith needs at fair rates! </span><span style="font-weight: 400">You might need skilled locksmith assistance at any time of the day or night, and that is why we offer all our fully mobile expert locksmith solutions round-the-clock. </span><span style="font-weight: 400">We pride ourselves on our quick response times, and when we are on the job, your locksmith concerns will be nothing more than a passing inconvenience. If you need some additional information about our mobile locksmith services, don’t hesitate to call us. We are fast-responsive and super-friendly. When you call us, you can get the answers to any required locksmith topic for FREE. Tell us what you need, and we will assist you according to your locksmith needs. Whether it’s a holiday, weekend, rush hour, or amidst the night, rest assured expert locksmiths are coming your way with modern-day solutions that exceed the expectations from a trustworthy company like State Locks &amp; Keys. Dial our number - <strong><a href="tel:<?php echo $phone ?>"><?php echo $phoneVisible ?></a></strong></span><span style="font-weight: 400">&nbsp;and </span><span style="font-weight: 400">let us take care of you! </span></p>
      </div>
      <div class="section_buttons">
        <div class="theme_button transparent">
          <a href="javascript:void(0)" id="toggle_text">Read more</a>
        </div>
        <div class="theme_button blue">
          <a href="tel:<?php echo $phone ?>">Call Now <br> <?php echo $phoneVisible ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="faq">
  <div class="container">
    <div class="faq_left">
      <h2 class="section_title left">FAQ</h2>
      <div class="faq_list">
        <div class="faq_item">
          <img src="/images/faq.png" alt="">
          <div class="faq_title">Why should I use your local locksmith service?</div>
          <div class="faq_content"><span style="font-weight: 400">State Locks &amp; Keys experts offer a wealth of experience and understanding to any locksmith challenges and are better suited to address maintained tasks in your specific locksmith needs. A skilled locksmith can recommend cutting-edge tools and the best services that operate more cost-effective alternatives with hassle-free and timely manner services.</span></div>
        </div>
        <div class="faq_item">
          <img src="/images/faq.png" alt="">
          <div class="faq_title">How much does a locksmith service cost?</div>
          <div class="faq_content"><span style="font-weight: 400">Many factors impact the price of professional local locksmith services. The cost of your locksmith service will depend on the complexity of the required job. Each job is priced differently and can vary a lot depending on the type of lock or vehicle. The best way to get an accurate quote is to call us and know your lock and key requirements. Once we hear all the details, we will provide you with a free price estimate. </span></div>
        </div>
        <div class="faq_item">
          <img src="/images/faq.png" alt="">
          <div class="faq_title">Do I have to bring my car to you?</div>
          <div class="faq_content"><span style="font-weight: 400">No, you don’t need to make such an effort. We are a mobile auto locksmith service provider, which means you call us, and we come to your location fully equipped with all the up-to-date tools to handle the problem on-site. Our services are fully insured, guaranteeing you get the high-quality service you’re looking for.</span></div>
        </div>
        <div class="faq_item">
          <img src="/images/faq.png" alt="">
          <div class="faq_title">Can you unlock the door without breaking a lock?</div>
          <div class="faq_content"><span style="font-weight: 400">We always endeavor to repair and open locks without causing damage to keep prices low. Before beginning any work, we will always provide a free price estimate.</span></div>
        </div>
        <div class="faq_item">
          <img src="/images/faq.png" alt="">
          <div class="faq_title">Can I use just one key for all of my locks?</div>
          <div class="faq_content"><span style="font-weight: 400">Yes. Locks of the same manufacturer can usually be keyed alike. This means cutting a single key that matches and opens various locks.&nbsp; Access to separate rooms/areas of an office, business, or building can be controlled via a master key system. State Locks &amp; Keys can provide you with a quick and affordable master lock rekey!</span></div>
        </div>
        <div class="faq_item">
          <img src="/images/faq.png" alt="">
          <div class="faq_title">How long does it take to fix a broken lock?</div>
          <div class="faq_content"><span style="font-weight: 400">Fixing a broken lock will vary based on the type of lock and its condition. However, most locks can be fixed within an hour. Still, the kind of lock, the problem, and the state of the door/lock all play a role. Call us, tell us about your lock type/problems, and we will inform you about an exact ETA as well as provide a free price quote!</span></div>
        </div>
        <div class="faq_item">
          <img src="/images/faq.png" alt="">
          <div class="faq_title">I lost my property keys. Do I have to replace all locks?</div>
          <div class="faq_content"><span style="font-weight: 400">No, that won’t be necessary. We can rekey the locks to your house and commercial properties.</span></div>
        </div>
        <div class="faq_item">
          <img src="/images/faq.png" alt="">
          <div class="faq_title">Do you cover evenings and weekends?</div>
          <div class="faq_content" style="display: none;"><span style="font-weight: 400">We absolutely cover weekends and holidays! </span><span style="font-weight: 400">We can help with all your lock and key emergencies 24 hours a day, 365 days a year in the best possible ways!</span></div>
        </div>
      </div>
    </div>
    <figure>
      <img src="/images/faq_img.jpg" alt="FAQ">
    </figure>
  </div>
</section>

<?php include("../blocks/footer.php"); ?>