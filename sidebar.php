<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dnduy
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="sidebar">

	<div class="hidden-xs hidden-sm"> 
		
		<a  href="<?php echo esc_url( home_url( '/' ) ); ?>" title=""> <img class="site-logo" src="<?php echo bloginfo('template_directory');?>/images/logo.png" alt=""></a>

	</div>
	<div class="booking-form-container">
	<?php  //	 echo do_shortcode( '[contact-form-7 id="44" title="Contact form 1"]' ); ?>
	
    	 

    <form action="/hotels/index.php/booking" method="get" class=" " novalidate=" ">
<!-- 
        <div class="row">
        <div class="col-md-12">
          <span class="wpcf7-form-control-wrap datetime-973"><input type="text" name="datetime-973" value="" size="40" class=" " placeholder="Check in Date" id="ngayden"> </span>
        </div>
        <div class="col-md-12">
        <p><span class="wpcf7-form-control-wrap datetime-974"><input type="text" name="datetime-974" value="" size="40" class=" " placeholder="Check out Date" id="ngaydi"> </span>
        </p></div>
        <div class="col-md-6">
         <span class=" "><input type="number" name="number-300" value="" class=" " aria-invalid="false" placeholder="Guest"></span>
        </div>
        <div class="col-md-6">
          <span class=" ""><input type="number" name="number-301" value="" class=" " aria-invalid="false" placeholder="Rooms"></span>
        </div>
        <div class="col-md-6">
        <span class=" "><input type="text" name="text-668" value="" size="40" class=" " aria-invalid="false" placeholder="Promot / Corp"></span>
        </div>
        <div class="col-md-6">
        <span class=" "><input type="text" name="text-594" value="" size="40" class=" " aria-invalid="false" placeholder="Group"></span>
        </div>
        <div class="col-md-12">
        <input type="submit" value="BOOKING NOW" class=" "> 
        </div>
        </div> -->


         <div class="row">
        <div class="col-md-12">
          <span class="wpcf7-form-control-wrap datetime-973"><input type="text" name="ngayden" size="40" class=" " placeholder="Check in Date" id="ngayden"> </span>
        </div>
        <div class="col-md-12">
        <p><span class="wpcf7-form-control-wrap datetime-974"><input type="text" name="ngaydi" value="" size="40" class=" " placeholder="Check out Date" id="ngaydi"> </span>
        </p></div>
        <div class="col-md-6">
         <span class=" "><input type="number" name="guest" value="" class=" " aria-invalid="false" placeholder="Guest"></span>
        </div>
        <div class="col-md-6">
          <span class=" ""><input type="number" name="rooms" value="" class=" " aria-invalid="false" placeholder="Rooms"></span>
        </div>
        <div class="col-md-6">
        <span class=" "><input type="text" name="promotion" value="" size="40" class=" " aria-invalid="false" placeholder="Promot / Corp"></span>
        </div>
        <div class="col-md-6">
        <span class=" "><input type="text" name="group" value="" size="40" class=" " aria-invalid="false" placeholder="Group"></span>
        </div>
        <div class="col-md-12">
        <input type="submit" value="BOOKING NOW" class=" "> 
        </div>
        </div>


        </form>
        
		
	</div>
	
    <script  type="text/javascript" charset="utf-8" async defer>
        
         jQuery('#ngayden').datepicker({
        autoclose: true,
    }).on('changeDate', function(e) {
        var day=jQuery(this).val().substring(3,5);
        var month=jQuery(this).val().substring(0,2);
        var year = jQuery(this).val().substring(6,10);
        jQuery('.frommonth').val(month);
        jQuery('.fromday').val(day);
        jQuery('.fromyear').val(year);
    });
    jQuery('#ngaydi').datepicker({
        autoclose: true,
    }).on('changeDate', function(e) {
        var day=jQuery(this).val().substring(3,5);
        var month=jQuery(this).val().substring(0,2);
        var year = jQuery(this).val().substring(6,10);
        jQuery('.tomonth').val(month);
        jQuery('.today').val(day);
        jQuery('.toyear').val(year);
    });
    </script>


    <?php dynamic_sidebar( 'sidebar-1' ); ?>

</div><!-- #secondary -->
