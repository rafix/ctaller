<?php
use_javascript('lib.dataTable');
use_stylesheet('smoothness/jquery-ui-1.8.6.custom');
use_stylesheet('dataTable');

// Beca : List
// Vars: $becaPager
$table = _table('.data_table')->head(
  __('Año'),
  __('Artista'),
  __('Obra')
 );

foreach ($becaPager as $beca)
{
  $table->body(

    $beca->year,

    _link($beca->getArtist()),

    $beca->work

  );
}

echo $table;

