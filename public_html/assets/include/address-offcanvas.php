<?php
/**
 * Renders an offcanvas panel.
 * @param array $args ['id','title','content','side']
 * side: 'right' (default) | 'left'
 */
function render_offcanvas($args = [])
{
  $id = $args['id'] ?? 'offcanvasRight';
  $title = $args['title'] ?? 'Offcanvas';
  $content = $args['content'] ?? '<p>Put your content here.</p>';
  $side = $args['side'] ?? 'right';

  // If you want left side, swap the anchor from right to left via inline style
  $sideStyle = $side === 'left' ? 'left:-340px; right:auto;' : '';

  echo '
    <div class="oc" id="' . htmlspecialchars($id) . '"
         role="dialog" aria-modal="true" aria-hidden="true"
         aria-labelledby="' . htmlspecialchars($id) . '-label"
         style="' . $sideStyle . '">
      <div class="oc__header">
        <h5 class="oc__title" id="' . htmlspecialchars($id) . '-label">' . htmlspecialchars($title) . '</h5>
        <button class="oc__close" data-oc-close aria-label="Close">&times;</button>
      </div>
      <div class="oc__body">
        ' . $content . '
      </div>
    </div>
  ';
}

/**
 * Renders a trigger button.
 * @param array $args ['for','label','class']
 */
function render_offcanvas_trigger($args = [])
{
  $for = $args['for'] ?? '#offcanvasRight';
  $label = $args['label'] ?? 'Toggle Offcanvas';
  $class = $args['class'] ?? 'oc-toggle';

  echo '<button class="' . htmlspecialchars($class) . '" type="button" data-oc-target="' . htmlspecialchars($for) . '">' . htmlspecialchars($label) . '</button>';
}
