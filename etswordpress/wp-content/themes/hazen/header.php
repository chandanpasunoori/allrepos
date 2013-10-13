<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php global $query_string; ?><html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
	<link rel="icon" type="image/png" href="<?php echo of_get_option('favicon'); ?>" />
    <title><?php wp_title(); ?></title>
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?> " type="text/css" media="all" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Wrapper one starts here -->
	<div id="wrapper_one">	
	<!-- Wrapper four starts here -->
	<div id="wrapper_four">    

		<!-- Wrapper one starts here -->
		<div id="wrapper_two">


            <!-- Logo Container starts here -->
            <div id="logo_section_container">

				<div id="wrapper_three"> 
                
                     <!-- Logo Section starts here -->
                     <div id="logo_section">
                        

                                <div id="logo">
                                    <p class="logo_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></p>
                                    <p class="logo_desc"><?php bloginfo('description'); ?></p>
                                </div>
                                
                                
                                <div id="header_ad">
        

        
                                </div>
                                
                               
                
                    </div>	
                    <!-- Logo Section ends here -->	   
	                               	
                
                </div>                           
            
            </div>
            <!-- Logo Container ends here -->   
            
            <!-- Menu Container starts here -->
            <div id="menu_section_container">


                    
                    <!-- Menu Section starts here -->
                    
            			<div id="menu">
							<?php wp_nav_menu( array( 'theme_location' => 'mainmenu', 'menu_class' => 'dropdown dropdown-horizontal', 'fallback_cb' => 'Hazen_backupmenu', 'menu_id'=>'Main_nav', 'container'=>'') ); ?>			
                        </div>
                        
                   
                    <!-- Menu Section ends here -->		                               	
                
                         
            
            </div>
            <!-- Menu Container ends here -->  
            
            <?php if(of_get_option('custom_header_home') == 'true') : ?>

                    <!-- Slider Container starts here --> 
                    <div id="featured_section_cont">
                        
                        <div class="slider_container">
                        
                        	<div class="slider_cheader">
                        
                                                
                                <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
                            
                            </div>    
        
                        </div>        
                    
                    </div>        
                    <!-- Slider Container ends here --> 
            
            <?php else : ?>           
            
					<?php if((is_home() || is_front_page()) && (!of_get_option('show_magpro_slider_home') || of_get_option('show_magpro_slider_home') == 'true')) : ?> 
                    <!-- Slider Container starts here --> 
                    <div id="featured_section_cont">
                        
                        <div class="slider_container"> 
                        
                                                   
                                <?php get_template_part( 'slider', 'wilto' ); ?>
                                
        
                        </div>        
                    
                    </div>        
                    <!-- Slider Container ends here --> 
                    <?php endif; ?>
                    
                    <?php if(is_page() && of_get_option('show_magpro_slider_page') == 'true') : ?> 
                    <!-- Slider Container starts here --> 
                    <div id="featured_section_cont">
                        
                        <div class="slider_container"> 
                        
                                                   
                                <?php get_template_part( 'slider', 'wilto' ); ?>
                                
        
                        </div>        
                    
                    </div>        
                    <!-- Slider Container ends here --> 
                    <?php endif; ?>   
                    
                    <?php if(is_single() && of_get_option('show_magpro_slider_single') == 'true') : ?> 
                    <!-- Slider Container starts here --> 
                    <div id="featured_section_cont">
                        
                        <div class="slider_container"> 
                        
                                                   
                                <?php get_template_part( 'slider', 'wilto' ); ?>
                                
        
                        </div>        
                    
                    </div>        
                    <!-- Slider Container ends here --> 
                    <?php endif; ?>   
                    
                    <?php if(is_archive() && of_get_option('show_magpro_slider_archive') == 'true') : ?> 
                    <!-- Slider Container starts here --> 
                    <div id="featured_section_cont">
                        
                        <div class="slider_container"> 
                        
                                                   
                                <?php get_template_part( 'slider', 'wilto' ); ?>
                                
        
                        </div>        
                    
                    </div>        
                    <!-- Slider Container ends here --> 
                    <?php endif; ?> 
                    
            <?php endif; ?>                               
            
			<!-- Wrapper three starts here -->
			<div id="wrapper_three">
            

                			

                  
                <!-- Content Section starts here -->
                <div id="content_section">

                    
   
                    
                                     