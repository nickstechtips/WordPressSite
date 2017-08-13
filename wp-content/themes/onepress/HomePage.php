<?php 

include_once( ABSPATH . '/wp-content/plugins/Techtonic-WPPlugin/utils/DataAccess.php');
/* Template Name: Home Page */ 

global $wpdb;
$user = wp_get_current_user();
$Data = new DataAccess();
$testData = $Data::GetHomepage();
?>

<?php get_header();?>

<style>
    #hero{
        background:url('http://www.mhi.com/wp-content/uploads/2017/08/get-printed-2.jpg');
/*        background:url('http:\/\/www.mhi.com\/wp-content\/uploads\/2017\/07\/theme2-1.jpg'); */
        background-size: cover;
        height:600px;
    }
    .Hero-title{
        color:white;
        text-align:center;
        

    }

</style>
	<div id="content" class="site-content">
		<main id="main" class="site-main" role="main">
            	<section  id="hero" class="hero-slideshow-wrapper hero-slideshow-normal">
                <h1></h1>
        <div class="slider-spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
        <div class="container" style="padding-top: 10%; padding-bottom: 10%;">
		    <div class="">
			    <h2 class="Hero-title"> Maverick Home Inspection</h2>
                <!--<h3 class="hero-small-text">
                <table style="width:75%">
                  <tr>
                    <td>Pre-Purchase</td>
                    <td>Pre-Listing</td>
                    <td>1-Year Warranty</td>
                    <td>Property Management</td>
                    <td>Radon</td>
                  </tr>
                </table> -->  
                <!--<h3 class="hero-small-text"> Pre-Purchase Pre-Listing 1-Year Warranty Property Management</h3> -->	
                <!--<p class="hero-small-text"> Morbi tempus porta nunc <strong>pharetra quisque</strong> ligula imperdiet posuere<br> vitae felis proin sagittis leo ac tellus blandit sollicitudin quisque vitae placerat.</p>						<a href="http://www.mhi.com/#services" class="btn btn-theme-primary btn-lg">Our Services</a>						<a href="http://www.mhi.com/#contact" class="btn btn-secondary-outline btn-lg">Get Started</a>					</div>-->
			</div>
            </section>
            <section id="news"  class="section-news section-padding onepage-section">
                <div class="container">
                        <div class="section-title-area">
                            <h5 class="section-subtitle"><a href="https://www.youtube.com/watch?v=ZQ30VMNyMBw">What a home inspection includes</a></h5>
                            <h2 class="section-title" ><img src="http://www.mhi.com/wp-content/uploads/2017/08/disected-house.jpg"></h2>                    
                        </div>
                        <div class="section-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="blog-entry wow slideInUp">
                                                            
                                        <div class="col-md-12">      
                                            <div class="col-md-4">                                                                        
                  
                                            </div>
                                            <div class="col-md-4">                                                                        
                   
                                            </div>
                                            <div class="col-md-4">                                                                        
                  
                                            </div>
                                        </div>
                                            
                                        <div class="all-news">
                                            <!-- <a class="btn btn-theme-primary-outline" href="#">Read Our Blog</a> -->
                                        </div>
                
                                    </div>
                                </div>
                            </div>

		                </div>
	            </div>
	        </section>
		</main><!-- #main -->
	</div><!-- #content -->

<?php get_footer();?>


<script type="text/javascript">

$(function(){
    $('#hero > div.slider-spinner').toggle();
})
</script>