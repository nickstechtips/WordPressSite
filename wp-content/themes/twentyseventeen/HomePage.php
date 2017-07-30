<?php 

include_once( ABSPATH . '/wp-content/plugins/Techtonic-WPPlugin/utils/DataAccess.php');

/* Template Name: Home Page */ 

$wpdb;
$Data = new DataAccess();
?>

<?php get_header();?>
<div class="col-md-12">
    <div class="row">
        <?php if ( have_posts() ) while ( have_posts() ) :
                    the_post(); ?>            
        <?php the_content(); ?>   
        <?php endwhile; ?>	

        Test
    </div>
</div>

<?php get_footer();?>


<script type="text/javascript">


</script>