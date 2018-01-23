<?php

// Icon
function tlh_build_icon ( $name, $class = NULL, $title = NULL ) {
  $icon_file = get_stylesheet_directory() . '/library/images/icons/' . $name . '.svg';

  if ( ! file_exists( $icon_file ) ) {
    $icon_file = get_stylesheet_directory() . '/library/images/icons/unknown.svg';
  }

  $output  = '<i class="icon' . ($class ? ' ' . $class : '') . '"' . ($title ? ' title="' . $title . '"': '') . '>';
  $output .= file_get_contents($icon_file);
  $output .= '</i>';

  return $output;
}

function tlh_icon ( $name, $class = NULL, $title = NULL ) {
  echo tlh_build_icon( $name, $class, $title );
}

function tlh_shortcode_icon ( $atts ) {
  $a = shortcode_atts( array(
    'name' => 'info-circle',
    'class' => 'inline',
    'title' => NULL,
  ), $atts );

  return tlh_build_icon( $a['name'], $a['class'], $a['title'] );
}
add_shortcode( 'icon', 'tlh_shortcode_icon' );

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
