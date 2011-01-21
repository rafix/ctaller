<?php // Vars: $artistPager
use_helper('Text');
use_javascript('lib.dataTable');
use_stylesheet('smoothness/jquery-ui-1.8.6.custom');
use_stylesheet('dataTable');

$table = _table('.data_table')->head(
  __('Photo'),
  __('Name'),
  __('Biography')
 );

foreach ($artistPager as $artist)
{
  $table->body(

    _media($artist->getPhoto())->size(100)->method('scale'),

    _link($artist),

    truncate_text($artist->getBiography(), 200)

  );
}

echo $table;