<?php



get_header();

?>
<?php if(is_page('HOME')){?>
	<div id="radio"><h2><span>Nieuws</span>
		</h2></div>
	<article class="post2">
		<h2><a href="http://localhost/wordpress/index.php/2017/03/27/mooi-weer-5/"> mooi weer</a></h2>
		<p><img class="" src="http://www.n1.nl/cwm/fm/userfiles/content/eyecatcher/normal/250_150_crop/257644_DSC01202.JPG" alt="Man gearresteerd na brand in Broerstraat Nijmegen " width="521" height="313" /></p>
		<div id="news1">Arrived totally in as between private. Favour of so as on pretty though elinor direct. Reasonable estimating be alteration we themselves entreaties me of reasonably. Direct wished so be expect polite valley. Whose asked stand it sense no spoil to. Prudent you too his conduct feeling limited and. Side he lose paid as hope so face upon be. Goodness did suitable learning put.</p>
			<p> <a href="http://localhost/wordpress/index.php/2017/03/27/mooi-weer-5/#more-54" class="more-link"><span aria-label="Meer lezen over mooi weer">(meer&hellip;)</span></a></div>
		<div id="date">
			27 maart 2017        </div>
	</article>

	<article class="post2">
		<h2><a href="http://localhost/wordpress/index.php/2017/03/27/mooi-weer-4/"> mooi weer</a></h2>
		<p><img class="" src="http://www.n1.nl/cwm/fm/userfiles/content/eyecatcher/normal/250_150_crop/257644_DSC01202.JPG" alt="Man gearresteerd na brand in Broerstraat Nijmegen " width="521" height="313" /></p>
		<div id="news1">Arrived totally in as between private. Favour of so as on pretty though elinor direct. Reasonable estimating be alteration we themselves entreaties me of reasonably. Direct wished so be expect polite valley. Whose asked stand it sense no spoil to. Prudent you too his conduct feeling limited and. Side he lose paid as hope so face upon be. Goodness did suitable learning put.</p>
		</div>
		<p> <a href="http://localhost/wordpress/index.php/2017/03/27/mooi-weer-4/#more-47" class="more-link"><span aria-label="Meer lezen over mooi weer">(meer&hellip;)</span></a></p>
		<div id="date">
		</div>
	</article>
	<article class="post2">
		<h2><a href="http://localhost/wordpress/index.php/2017/03/27/mooi-weer-5/"> mooi weer</a></h2>
		<p><img class="" src="http://www.n1.nl/cwm/fm/userfiles/content/eyecatcher/normal/250_150_crop/257644_DSC01202.JPG" alt="Man gearresteerd na brand in Broerstraat Nijmegen " width="521" height="313" /></p>
		<div id="news1">Arrived totally in as between private. Favour of so as on pretty though elinor direct. Reasonable estimating be alteration we themselves entreaties me of reasonably. Direct wished so be expect polite valley. Whose asked stand it sense no spoil to. Prudent you too his conduct feeling limited and. Side he lose paid as hope so face upon be. Goodness did suitable learning put.</p>
			<p> <a href="http://localhost/wordpress/index.php/2017/03/27/mooi-weer-5/#more-54" class="more-link"><span aria-label="Meer lezen over mooi weer">(meer&hellip;)</span></a></div>
		<div id="date">
			27 maart 2017        </div>
	</article>

	<article class="post2">
		<h2><a href="http://localhost/wordpress/index.php/2017/03/27/mooi-weer-4/"> mooi weer</a></h2>
		<p><img class="" src="http://www.n1.nl/cwm/fm/userfiles/content/eyecatcher/normal/250_150_crop/257644_DSC01202.JPG" alt="Man gearresteerd na brand in Broerstraat Nijmegen " width="521" height="313" /></p>
		<div id="news1">Arrived totally in as between private. Favour of so as on pretty though elinor direct. Reasonable estimating be alteration we themselves entreaties me of reasonably. Direct wished so be expect polite valley. Whose asked stand it sense no spoil to. Prudent you too his conduct feeling limited and. Side he lose paid as hope so face upon be. Goodness did suitable learning put.</p>
		</div>
		<p> <a href="http://localhost/wordpress/index.php/2017/03/27/mooi-weer-4/#more-47" class="more-link"><span aria-label="Meer lezen over mooi weer">(meer&hellip;)</span></a></p>
		<div id="date">
		</div>
	</article>
	<a href="index.php/nieuws" ><div id="leesveder">
		<p>Lees veder</p>
	</div>
	</a>
	<div id="radio2"><h2><span>Radio</span>
		</h2></div>
	<style>
		article.post{
			display: none;
		}
	</style>
	<?php echo do_shortcode("[schema2]"); ?>
<?php } ?>
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

<?php if(is_page('NIEUWS' )){?>
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




<?php if(is_page('CONTACT')){?>

	<style>
		article.post{
			display: none;
		}
	</style>
	<div id="radio"><h2><span>Contact</span>
		</h2></div>

	<div id="contactpage">

		<div class="linkerinfo">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2464.8871985674014!2d5.863526515672164!3d51.844755793801816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c70844deb39289%3A0xdf11dcc4485a195d!2sArsenaalgas+8A%2C+6511+PE+Nijmegen!5e0!3m2!1sen!2snl!4v1490704497207" width="490" height="410" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="rechterinfo">
			<h2>Contactgegevens</h2>
			<p><i>N1 Bezoekadres:</i><br>
				Arsenaalgas 8A<br>
				6511 PE  Nijmegen<br>
				redactie@n1.nl<br>
				024-3608068</p>
			<h3>Route</h3>
			<p>
				<i>Postadres:</i><br>
				Postbus 31184<br>
				6503 CD  Nijmegen<br>
			</p>
		</div>
	</div>
	<div id="contactpagina2">
		<div class="rechterinfo2">
			<h2>Frequenties & Kanalen</h2>
			<p>N1 is op meerdere manieren te ontvangen en bereiken.</p>
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
			<br><br><br><br><br>
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
			<br><br>
		</div>
	</div>


<?php }?>
   
   <?php
get_footer();

?>


    
    
    
