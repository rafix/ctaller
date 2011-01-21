<?php
echo _open('div.clearfix');

echo _tag('h4.cv', __('Curriculum Vitae'));
echo markdown($artist->curriculum_vitae);

echo _close('div');
