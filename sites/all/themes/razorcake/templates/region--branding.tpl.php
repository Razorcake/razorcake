<div<?php print $attributes; ?>>

<div class="social-links">

  <div class="social-links-row">  	
    <a href="http://razorcake-records.bandcamp.com/" target="_blank"><div class="social-link social-bandcamp"></div></a>
    <a href="http://gorskypress.bandcamp.com/" target="_blank"><div class="social-link social-gorsky-bandcamp"></div></a>
    <a href="http://instagram.com/razorcakegorsky" target="_blank"><div class="social-link social-instagram"></div></a>
    <a href="http://razorcake.tumblr.com" target="_blank"><div class="social-link social-tumblr"></div></a>
    <a href="http://www.youtube.com/user/RazorcakeGorsky" target="_blank"><div class="social-link social-youtube"></div></a>
    <a href="http://twitter.com/#!/RazorcakeGorsky" target="_blank"><div class="social-link social-twitter"></div></a>
    <a href="http://www.facebook.com/razorcake" target="_blank"><div class="social-link social-facebook"></div></a>    
  </div>
  
  <div class="social-links-row"></div>
  
</div>

  <div<?php print $content_attributes; ?>>
    <?php if ($linked_logo_img || $site_name || $site_slogan): ?>
    <div class="branding-data clearfix">
      <?php if ($linked_logo_img): ?>
      <div class="logo-img">
        <?php print $linked_logo_img; ?>
      </div>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
      	<?php $class = $site_name_hidden && $site_slogan_hidden ? ' element-invisible' : ''; ?>
      	<div class="site-name-slogan<?php print $class; ?>">

        <?php if ($site_name): ?>
        	<?php $class = $site_name_hidden ? ' element-invisible' : ''; ?>
        	<?php if ($is_front): ?>        
        		<h1 class="site-name<?php print $class; ?>"><?php print $linked_site_name; ?></h1>
        	<?php else: ?>
        		<h2 class="site-name<?php print $class; ?>"><?php print $linked_site_name; ?></h2>
        	<?php endif; ?>
        <?php endif; ?>

      </div>      
      <?php endif; ?>      
    </div>



    <?php endif; ?>
        
    <?php print $content; ?>

  </div>
  
</div>

