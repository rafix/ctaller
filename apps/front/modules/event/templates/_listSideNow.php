<?php // Vars: $eventPager

echo $eventPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($eventPager as $event)
{

  echo _open('li.element');

    echo _link($event);

  echo _close('li');
  

}

echo _close('ul');

echo $eventPager->renderNavigationBottom();
