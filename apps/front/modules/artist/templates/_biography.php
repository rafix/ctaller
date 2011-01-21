<?php
use_helper('Date');

echo _open('div.clearfix');

echo _media($artist->Photo)->size(200, 200)->set('.image')->method('scale');
echo _tag('h3.personal_data', $artist);
echo _tag('br');

echo _tag('p.artist_infos',

  _tag('span', format_date($artist->dob, 'D'))
);

echo _tag('h4.cv', __('Biography'));
echo markdown($artist->biography);

echo _close('div');