<?php // Vars: $medias
  use_stylesheet('/dmCorePlugin/lib/colorbox/theme3/colorbox.css');
  use_javascript('/dmWidgetGalleryPlugin/js/cycle/jquery.cycle.lite-1.0.min.js'); // for a Gallery
  use_javascript('/dmCorePlugin/lib/colorbox/jquery.colorbox.min.js'); // for a Grid


 if ($medias) {
     echo _open('div.gallery');
        echo _open('ol.pictures');
            foreach($medias as $media) {
                echo _open('li');
                    echo _link($media->getImage())->set('.colorBox rel=gallery')->text(
                        _media($media->getImage())->size(150, 150)
                    );
                    echo _tag('div.p', _link($media->getArtist()) . ' <br /> ' . $media->getTitle() . ' (' . $media->getDimensions() . ')<br />'.
                        $media->getTechnique(). '<br />'. $media->getYear());
                echo _close('li');
            }
        echo _close('lo');
     echo _close('div');
 }

echo _tag('div.clearfix');