<?php // Vars: $workPager

echo $workPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($workPager as $work)
{
  echo _open('li.element');

    echo $work;

  echo _close('li');
}

echo _close('ul');

echo $workPager->renderNavigationBottom();