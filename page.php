<?php 

/*
    Template Name: Glavni sablon
*/

?>
<?php get_header(); ?>

<!-- header -->
<header class="d-flex justify-content-end align-items-center">
    <div class="outsideDiv">
        <div class="insideDiv">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</header>



<!-- blog -->
<section class="container blog py-5">

    <div class="pageTemplate">

        <article>

            <div class="content">
               
                <h4><?php the_content(); ?></h4>
            </div>
                
        </article>
                
    </div>
</section>


<?php get_footer(); ?>
