<?php // Vars: $workPager
use_stylesheet('/dmCorePlugin/lib/colorbox/theme3/colorbox.css');
use_javascript('/dmWidgetGalleryPlugin/js/cycle/jquery.cycle.lite-1.0.min.js'); // for a Gallery
use_javascript('/dmCorePlugin/lib/colorbox/jquery.colorbox.min.js'); // for a Grid

echo _open('div.gallery');
//echo $workPager->renderNavigationTop();

echo _open('ol.pictures');

foreach ($workPager as $work)
{
  echo _open('li');

    echo _link($work->getImage())->set('.colorBox rel=team')->text(
            _media($work->getImage())->size(150, 150)
          );
    echo _tag('div.p', $work->getTitle() . ' (' . $work->getDimensions() . ')<br />'.
            $work->getTechnique(). '<br />'. $work->getYear());

  echo _close('li');
}

echo _close('ol');

echo _open('div.clearfix');
//echo $workPager->renderNavigationBottom();
echo _close('div');
echo _close('div');