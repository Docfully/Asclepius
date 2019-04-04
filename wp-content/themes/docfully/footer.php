<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

			</div><!-- .site-content -->
	         </div><!-- .site-inner -->	

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-inner">
<div class="cust-footer">        

		<div class="container">
		   <div class="row">
				    <div class="col-sm-3">
				    	<div class="left">
				               <?php dynamic_sidebar('footer-left'); ?>
				           </div>
				    </div>
				    <div class="col-sm-6">
				              <?php dynamic_sidebar('footer-main'); ?>
				    </div>

				    <div class="col-sm-3">
				    	<div class="right">
				                 <?php dynamic_sidebar('footer-right'); ?>
				             </div>
				    </div>

		   </div>
		</div>


</div>
</div><!-- .site-inner -->	
	</footer><!-- .site-footer -->



<div class ="copyright">
   <div class="site-inner">
     <div class="container">
		   <div class="row">
				    <div class="col-md-12">
                    <?php dynamic_sidebar('footer-copyright'); ?>
			
                   </div>
           </div>
      </div>
    </div>
 </div>			
			
	</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
