<?php // Vars: $eventPager
use_helper('Date');

echo $eventPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($eventPager as $event)
{
  echo _open('li.element');
    
    echo _link($event) . ' - '.  format_date($event->getStart(), 'D');

  echo _close('li');
}

echo _close('ul');

echo $eventPager->renderNavigationBottom();