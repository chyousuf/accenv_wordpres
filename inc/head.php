<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<?php /*<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="" />
		<meta name="keywords" content="" />*/ ?>
		<?php if ( get_field( 'meta_title' ) ): ?>
			<?php $meta_title = get_field( 'meta_title' ); else: $meta_title = ''; ?>
		<?php endif; ?>
		<title><?php
            if ( is_single() && 'product' == get_post_type() ) {
                $course_head_id = get_field('course');
                $course_head_title = get_term($course_head_id)->name;
                echo $course_head_title;
                
                if($meta_title != "")
                echo ' | ';
            }            
            echo $meta_title;
            ?></title>
		<?php if ( get_field( 'meta_description' ) ): ?>
			<?php $meta_description = get_field( 'meta_description' ); else: $meta_description = ''; ?>
		<?php endif; ?>
		<meta name="description" content="<?php
            if ( is_single() && 'product' == get_post_type() ) {
                $venue_head_id = get_field('venue');
                $venue_head_title = get_term($venue_head_id)->name;
                echo $venue_head_title.', '.get_field('class_date');
                
                if($meta_description != "")
                echo ' | ';
            } 
                                          
            echo $meta_description; ?>">
		<?php if ( get_field( 'meta_keyword' ) ): ?>
			<?php $meta_keyword = get_field( 'meta_keyword' ); else: $meta_keyword = '' ?>
		<?php endif; ?>
		<meta name="keywords" content="<?php echo $meta_keyword; ?>">
		<?php if ( get_field( 'meta_box' ) ): ?>
			<?php the_field( 'meta_box' ); ?>
		<?php endif; ?>
		<?php if ( get_field( 'meta_open_graphs' ) ): ?>
			<?php the_field( 'meta_open_graphs' ); ?>
		<?php endif; ?>
		<?php $basename = basename($_SERVER['SCRIPT_FILENAME']); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
		<?php if(is_front_page()){ ?>
			<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/home.css">
			<link href='<?php bloginfo('template_url'); ?>/fullcalendar/main.css' rel='stylesheet' />
		<?php } else { ?>
			<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/home.css">
			<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/all.css">
			<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/woocommerce.css">
			<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
		<?php } ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/searchform.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/contactform7.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-19051011-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-19051011-1');
		</script>
		
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-NCJ2M87');</script>
		<!-- End Google Tag Manager -->
		
		<?php wp_head(); ?>
		
		<!-- Global site tag (gtag.js) - Google Ads: 10829242630 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10829242630"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-10829242630'); </script> 
		
		<?
		
		$pageId = get_the_ID();
		
		if($pageId == 769)
		
		{
		
		?>
		
		<!-- Event snippet for Request quote conversion page --> <script> gtag('event', 'conversion', {'send_to': 'AW-10829242630/I00iCMz9hakDEIbC5Kso'}); </script> 
		
		<? } ?>
		<!--Schema Code-->
<script type="application/ld+json"> {
"@context": "http://schema.org",
"@type": "LocalBusiness",
"name": "ACC Environmental Consultants",
"url": "https://www.accenv.com/",
"image": "https://www.accenv.com/images/banner5.jpg",
"description": "Established in 1986, ACC Environmental Consultants, Inc. is a 100% employee-owned, multi-practice environmental consulting firm recognized for its excellent and reliable client services.
",
"email": "general@accenv.com",
"priceRange": "$$$",
"telephone": "+1800-525-8838",
"hasMap": "https://www.google.com/maps/place/ACC+Environmental+Consultants/@37.7393132,-122.204002,15z/data=!4m5!3m4!1s0x0:0x18b66107f463aa40!8m2!3d37.7393132!4d-122.204002",
"logo": {
 "@type": "ImageObject",
 "url": "https://www.accenv.com/images/logo.jpg",
 "width": 600,
 "height": 60
},
"address": [{
 "@type": "PostalAddress",
 "streetAddress": "7977 Capwell Drive, Suite 100",
 "addressLocality": "Oakland",
 "addressRegion": "California",
 "postalCode": "94621",
 "addressCountry": "USA"
}],
"contactPoint" : [{
 "@type" : "ContactPoint",
 "telephone" : "+1510-638-8400",
 "contactType" : "customer service"
}],
"geo": {
 "@type": "GeoCoordinates",
 "latitude": "37.7393132",
 "longitude": "-122.204002"
},
"openingHoursSpecification": [{
 "@type": "OpeningHoursSpecification",
 "dayOfWeek": [
 "Monday",
 "Tuesday",
 "Wednesday",
 "Thursday",
 "Friday"
 ],
 "opens": "08:00",
 "closes": "17:00"
}],
"aggregateRating": [{
  "@type": "AggregateRating",
  "ratingValue": "5",
  "bestRating": "5",
  "worstRating": "1",
  "ratingCount": "1"
}]
}
</script>

	</head>
	<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCJ2M87"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<div id="wrapper">