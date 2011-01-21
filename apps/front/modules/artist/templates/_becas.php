<?php
echo dm_get_widget('beca', 'listByArtist', array(
  'orderField'  => 'year',
  'orderType'   => 'desc',
  'artistFilter' => $artist->id
));
