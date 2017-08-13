<?php 

include_once( ABSPATH . '/wp-content/plugins/Techtonic-WPPlugin/utils/DataAccess.php');
/* Template Name: Contact Page */ 

global $wpdb;
$user = wp_get_current_user();
$Data = new DataAccess();
$testData = $Data::GetHomepage();
?>

<?php get_header();?>

<style>
  .mhiBtn{
    background-color:#03c4eb;
    border-color:#03c4eb;
    color:white;
  }
</style>
	<div ng-controller="contactController" id="content" class="site-content">
 <div id="content" class="site-content">

		<div class="page-header">
			<div class="container">
				<h1 class="entry-title">Contact</h1>			</div>
		</div>

		
		<div id="content-inside" class="container right-sidebar">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					
						
<article id="post-83" class="post-83 page type-page status-publish hentry">
	<header class="entry-header">
			</header><!-- .entry-header -->

	<div class="entry-content">
		<div role="form" class="wpcf7" id="wpcf7-f55-p83-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/test/#wpcf7-f55-p83-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="55" />
<input type="hidden" name="_wpcf7_version" value="4.8.1" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f55-p83-o1" />
<input type="hidden" name="_wpcf7_container_post" value="83" />
<input type="hidden" name="_wpcf7_nonce" value="949b3bfb93" />
</div>
<p><label> Your Name (required)<br />
    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></p>
<p><label> Your Email (required)<br />
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </label></p>
<p><label> Subject<br />
    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> </label></p>
<p><label> Your Message<br />
    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
<p><div ng-click="submitBtnClick();" type="" value="" class="btn mhiBtn" >Submit</div></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
			</div><!-- .entry-content -->
</article><!-- #post-## -->


						
					
				</main><!-- #main -->
			</div><!-- #primary -->

                            
<div id="secondary" class="widget-area sidebar" role="complementary">
	<aside id="text-2" class="widget widget_text"><h2 class="widget-title">Find Us</h2>			<div class="textwidget"><p><strong>Address</strong><br />
3472 Research Pkwy #104-185<br />
Colorado Springs, CO 80920</p>
<p><strong>Phone</strong><br />
719-419-4252</p>
</div>
		</aside><aside id="search-3" class="widget widget_search"><h2 class="widget-title">Search</h2><form role="search" method="get" class="search-form" action="http://www.mhi.com/">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
				</label>
				<input type="submit" class="search-submit" value="Search" />
			</form></aside><aside id="text-3" class="widget widget_text"><h2 class="widget-title">About This Site</h2>			<div class="textwidget">This may be a good place to introduce yourself and your site or include some credits.</div>
		</aside></div><!-- #secondary -->
            
		</div><!--#content-inside -->
	</div><!-- #content -->
<?php get_footer();?>


<script type="text/javascript">

mhiApp.controller('contactController', function($scope, $http){
    $scope.contactForm = {};
    
    $scope.EmailIsSent = false;


    $scope.submitBtnClick = function(){
      event.preventDefault();
       debugger;
        $scope.getFormValues();


        $scope.contactFormSubmit($scope.contactFormSubmitCallback, $scope.contactFormSubmitErrorCallback);
    }

    $scope.contactFormSubmit = function(callback, errorcallback){

          var url = "https://api.sendgrid.com/v3/mail/send";
            var settings = {
            async: true,
            dataType: 'jsonp',
            crossDomain: true,
            url: "https://api.sendgrid.com/v3/mail/send",
            method: "POST",
            headers: {
                "authorization": "Bearer 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",
                "content-type": "application/javascript"
            },
            processData: false,
            data: JSON.stringify($scope.contactForm.personalizations)
            }

            $http(settings).then(function(response){
              callback(response);
            }).catch(function(response){
              errorcallback(response);
            });

            // $.ajax(settings).done(function (response) {
            // callback(response);
            // });
    };

    $scope.contactFormSubmitCallback = function(response){
            $scope.EmailIsSent = true;
            $('#successMsg').show();

    }

     $scope.contactFormSubmitErrorCallback = function(response){
            $scope.EmailIsSent = false;
            $('#errorMsg').show();
    }

    $scope.getFormValues = function(){     
         $scope.contactForm = {
        personalizations: [
            {
            to: [
                {
                email: "steve.seeber@gmail.com",
                name: "Steve"
                }
            ],
            subject: "Test"
            }
        ],
        from: {
            email: "srsDev99@gmail.com",
            name: "Dev Test"
        },
        reply_to: {
            email: "srsDev99@gmail.com",
            name: "Dev Test"
        },
        subject: "Test",
        content: [
            {
            type: "text/html",
            value: "Test"
            }
        ]
        };
    }

});
</script>