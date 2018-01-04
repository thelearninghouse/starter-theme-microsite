<?php

function tlh_icon ( $name, $class = NULL ) {
  echo '<i class="icon' . ($class ? ' ' . $class : '') . '">';
  include(get_stylesheet_directory() . '/library/images/icons/' . $name . '.svg');
  echo '</i>';
}

// $data = [['title' => '...', 'content' => '...'], ... ]
function tlh_accordion ( $data, $allow_multiple = false, $first_open = false ) {
  static $i = 1;
  if ( $data )
  { ?>
    <dl id="accordionGroup" role="presentation" class="accordion" data-allow-toggle=""<?php echo $allow_multiple ? ' data-allow-multiple=""' : ''; ?><?php echo $first_open ? ' data-first-open=""' : ''; ?>>
  	<?php foreach ( $data as $row ) { ?>
      <dt role="heading" aria-level="3">
        <button aria-expanded="false" class="accordion-trigger" aria-controls="sect<?php echo $i; ?>" id="accordion<?php echo $i; ?>id" type="button">
          <span class="accordion-title"><?php echo $row['title']; ?></span>
          <span class="accordion-icon">
        </button>
      </dt>
      <dd id="sect<?php echo $i; ?>"
        role="region"
        aria-labelledby="accordion1id"
        class="accordion-panel">
        <div>
          <?php echo $row['content']; ?>
        </div>
      </dd>
  	<?php $i++;
      } ?>
    </dl>
  <?php }
}

?>
