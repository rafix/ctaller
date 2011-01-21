<?php
echo dm_get_widget('work', 'listByArtist', array(
  'orderField'  => 'year',
  'orderType'   => 'desc',
  'artistFilter' => $artist->id
));
