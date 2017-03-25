<?php



get_header();

?>
<?php if(is_page('home' and'nieuws')){?>
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
  
<?php if(is_page('radio' )){?>
   <div id="radio"><h2><span>Radio</span>
   <?php }?></h2></div>
   
   <?php if(is_page('radio')){?>
   <div id="rooster">
    <table>

  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
  
            
   
   <?php }?></table> </div>
   
   <?php
get_footer();

?>


    
    
    
