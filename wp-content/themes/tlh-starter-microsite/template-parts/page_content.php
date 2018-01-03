<div class="page-content">
  <?php
  // check if the flexible content field has rows of data
  if( have_rows('main_content') ):
       // loop through the rows of data
      while ( have_rows('main_content') ) : the_row();
          if( get_row_layout() == 'wysiwyg' ):
            the_sub_field('content');
          elseif( get_row_layout() == 'accordion' ):
            $accordion_content = get_sub_field('accordion_content');
            tlh_accordion($accordion_content, get_sub_field('accordion_allow_multiple'), get_sub_field('accordion_first_open'));
          endif;
      endwhile;
  else :
      // no layouts found
  endif; ?>
</div>
