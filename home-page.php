<?php
 /*
    Template Name: Home page
    */
?>
<?php get_header();?> <!--  Tells WordPress to include header.php -->
<section class="container-fluid aboutbg text-center">
  <div class="container">
  <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
  <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
<p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
      </div>
  </div> <!-- container -->
</section> <!-- container-fluid -->


<section class="container-fluid articlesbg">
  <div class="container">
   <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
    <div class="row">
      
      <div class="col-md-4">
        <img class="img-fluid" src="http://170.187.231.66/~mesh2/wp-content/themes/starter_for_josh_site/images/port1.jpg" alt="robot">
        <h4 class="article-title">A PORTRAIT</h4>
        <p class="date"> Friday November 2030</p>
        <p class="article-p">STS has never been shy of seeking new terrains of  investigation. More and  more  STS s cholars are  starting to explore and intervene in the arts.  This object of study  brings  new challenges and  opportunities that we want  to explore in this session.   We would  like to gather first of all simply  new kinds of  knowledge arising from  STS study  of the arts.</p>     
     <a href="a" class="readmore">CONTINUE READING</a>
      </div>

      <div class="col-md-4">
      <img class="img-fluid" alt=“portait” src="images/port1.jpg">
        <h4 class="article-title">A PORTRAIT</h4>
        <p class="date"> Friday November 2030</p>
        <p class="article-p">STS has never been shy of seeking new terrains of  investigation. More and  more  STS s cholars are  starting to explore and intervene in the arts.  This object of study  brings  new challenges and  opportunities that we want  to explore in this session.   We would  like to gather first of all simply  new kinds of  knowledge arising from  STS study  of the arts.</p>     
     <a href="a" class="readmore">CONTINUE READING</a>
      </div>

      <div class="col-md-4">
      <img class="img-fluid" alt=“portait” src="<?php the_field('articleimage');?>">
      <h4 class="article-title"><?php the_field('articletitle'); ?></h4>
      <p class="date" ><?php the_field('articledate'); ?></p>
      <p class="article-p"><?php the_field('articleexcerpt'); ?> </p>
      <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
      </div>




    </div> <!-- row -->




  </div> <!-- container -->
</section> <!-- container-fluid -->

<?php get_footer();?>  <!-- Tells WordPress to include footer.php   -->