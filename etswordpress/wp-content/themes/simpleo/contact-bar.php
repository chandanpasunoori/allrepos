<?php
/**
 * @package Simpleo
 */
?>			
<div id="contact-bar">
	<p class="label"><?php echo of_get_option('top_panel_contact_text'); ?></p>
	<a class="mail" href="mailto:<?php echo of_get_option('top_panel_email');?>">
		<i class="icon-envelope-alt"></i>
	</a>
	<a class="phone">
		<i class="icon-phone"></i>
		<span><?php echo of_get_option('top_panel_phone'); ?></span>
	</a>
</div><!--contact-bar-->
