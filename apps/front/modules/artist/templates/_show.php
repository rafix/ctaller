<?php
use_helper('Date');
use_javascript('lib.ui-core');
use_javascript('lib.ui-widget');
use_javascript('lib.ui-tabs');
use_stylesheet('smoothness/jquery-ui-1.8.6.custom');


echo _open('div.clearfix');
echo _tag('h2', $artist);
echo _tag('div.tabs',
        _tag('ul',
    _tag('li', _tag('a href=#artist-biography', __('Biography'))).
    _tag('li', _tag('a href=#artist-cv', __('Curriculum Vitae'))).
    _tag('li', _tag('a href=#artist-works', __('Works'))).
    _tag('li', _tag('a href=#artist-becas', __('Becas')))
  ).
  _tag('div#artist-biography', get_partial('artist/biography', array('artist' => $artist))).
  _tag('div#artist-cv', get_partial('artist/cv', array('artist' => $artist))).
  _tag('div#artist-works', get_partial('artist/works', array('artist' => $artist))).
  _tag('div#artist-becas', get_partial('artist/becas', array('artist' => $artist)))
        
);

echo _close('div');