<?php



get_header();

?>
<?php if(is_page('HOME' and'nieuws')){?>

<div id="nieuws"><h2><span>Nieuws</span>
    <?php }?></h2></div>
<?php

if(have_posts()) :
	while (have_posts()) : the_post(); ?>
	<article class="post">
		<h2><a href="<?php the_permalink();?>"> <?php the_title();?></a></h2>
		<?php the_content();?>
		<div id="date">
		<?php the_date(); ?>
        </div>
	</article>

	<?php endwhile;
	
	else :
		echo "<p>No content found</p>";
endif;
?>

<?php if(is_page('nieuws' )){?>
	<div id="radio"><h2><span>Nieuws</span>
		</h2></div><?php }?>

  
<?php if(is_page('RADIO' )){?>
   <div id="radio"><h2><span>Radio</span>
	   </h2></div><?php }?>
   
   <?php if(is_page('RADIO')){?>
	   <style>
		   article.post{
			   display: none;
		   }
	   </style>
   <div id="rooster">

	   <?php echo do_shortcode("[schema2]"); ?>
   </div>
   
   <?php }?>
<?php if(is_page('CONTACT' )){?>
	<div id="radio"><h2><span>Contact</span>
		</h2></div><?php }?>



<?php if(is_page('CONTACT')){?>
	<style>
		article.post{
			display: none;
		}
	</style>

	<div id="contactpage">
		<div class="rechterinfo">

		<h2>Contactgegevens</h2>
		<p>N1<br>
		Bezoekadres:<br>
		Arsenaalgas 8A<br>
		6511 PE  Nijmegen<br>
		redactie@n1.nl<br>
		024-3608068</p>
			<h4>Route</h4>
			<p>
				Postadres:<br>
				Postbus 31184<br>
				6503 CD  Nijmegen<br>
			</p>
		</div>
		<div class="linkerinfo">
			<img id="u692_img" class="img " src="http://d2t44wh9rnwl5y.cloudfront.net/gsc/JSZHMC/33/5c/d6/335cd689b6274ba485887bb742185a60/images/contact/u692.png?token=4a8e65f9824a45e0c52c2a914d9a1016">
		</div>
		</div>
		<hr>
	<div id="contactpagina2">
		<div class="rechterinfo2">
			<h2>Frequenties & Kanalen</h2>
			<p>N1 is op meerdere manieren te ontvangen</p>
			<b><p style="color: red">Radio</p></b>
			<p>FM 107.8 in groot Nijmegen FM 106.8 in Dukenburg en Lindenholt<br>
				UPC Kabel: 93.1<br>
				XMS analoog: FM 107.5<br>
				XMS digitaal: kanaal 840 (DVB-C)<br>
				XMS Interactieve radio: kanaal 761<br>
				KPN Glasvezel kanaal 371<br>
			</p>

		</div>
		<div class="linkerinfo2">
			<h2></h2>
			<p></p>
			<b><p style="color: red">TV</p></b>
			<p style="color: black">XMS Digitale TV:<br>
			kanaal 38 (800MHz, 62+)<br>
			DVB-C kanaal 41<br>
			Instellingen XMS DVB-C ontvanger<br>
			Frequentie: 304 <br>
			Symbol rate: 6875 kBd<br>
			Modulatie: QAM-64<br>
			DVB-C Netwerk ID : 3900<br>
			XMS Analoog<br>
			Kanaal: 62+ Frequentie: 800<br>
			UPC Digitale TV:<br>
			UPC Digitaal: 31<br>
			UPC Analoog:<br>
			Kanaal: s14+ Frequentie: 256,00 MHz<br>
			KPN Glasvezel<br>
			Kanaal 621<br>
			Vodafone Thuis<br>
			Kanaal 702</p>



		</div>
	</div>

<?php }?>
   
   <?php
get_footer();

?>


    
    
    
