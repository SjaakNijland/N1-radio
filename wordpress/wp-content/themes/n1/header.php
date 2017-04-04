<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head();?>
	</head>
	<body <?php body_class(); ?>>
	<div class="wrapper">
	
		<!-- site head -->
        <header class="site-head">
            <a href="<?php echo home_url(); ?>"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/LOGON1GOEDE.png" id="logo"></a>
            <div id="twitt"><a href="https://twitter.com/AltijdN1" target="_blank">
                    <img src="http://localhost/wordpress/wp-content/uploads/2017/03/1489682638_Tumblr_social_media_logo.png"></a></div>
            <div id="fb">
                <a href="https://www.facebook.com/altijdN1" target="_blank"> <img src="http://localhost/wordpress/wp-content/uploads/2017/03/1489682653_Facebook_social_media_logo.png"></a>
            </div>
            <div id="yt">
                <a href="https://www.youtube.com/user/altijdN1" target="_blank">
                    <img src="http://localhost/wordpress/wp-content/uploads/2017/04/youtube-red.png"></a>
            </div>
       
			<nav class="site-nav">
            <?php
            $args = array(
                'theme_location' => "primary"
            );
                ?>
            
			    <?php wp_nav_menu($args); ?>
		<?php get_header_image($args); ?>
			    
			</nav>
			<br><br>
			<br>
			
			<?php if(is_page('HOME')){?>
<div id="banner">
                <img src="http://localhost/wordpress/wp-content/uploads/2017/03/banner.jpg"  width="100%" height="600" >
    <?php }?></div>
			
			
        <?php if(is_page('home', 'radio-luisteren.php')){?>   

 <input type="button"value="Luister Live" onclick="window.open('radio-luisteren.php', 'Radio Luisteren','venster_opties'); return false"  />

        <?php }?>
            <?php if(is_page('HOME')){?>
                <div id="knop">
              <div id="nu">Nu op n1</div>
                    <?php //include 'nu.php'; ?>
                    <div id="now">
                        <?php echo do_shortcode("[live]"); ?>
                    </div>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
              <script>
                  $(document).ready(function(){

                      setInterval(function(){
                          $('#now').load('wp-content/themes/n1/nu.php');
                          console.log('harry');
                      },3000);
                  });
              </script>

          </div> 
                <div id="smaller-border"></div>

           <div id="knop2">
               <div id="straks">straks op n1</div>
               <div id="zo"><?php echo do_shortcode("[live]"); ?></div>
               <script>
                   $(document).ready(function(){

                       setInterval(function(){
                           $('#zo').load('wp-content/themes/n1/zo.php');
                           console.log('harry2');
                       },3000);
                   });
               </script>

          </div>
               <div id="knop3">

                   <div id="live" onclick="functionRadio()">Luister live</div>

               </div>
               <script>
                   function functionRadio() {
                       window.open("http://19940.hosts.ma-cloud.nl/radio/index.php", "_blank", "toolbar=no,scrollbars=1,resizable=no,top=0,left=0,width=800,height=210");
                   }
               </script>
           <?php }?>
            
            
		</header><!-- /site-head -->
	