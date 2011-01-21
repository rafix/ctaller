<?php // Vars: $becaPager

echo $becaPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($becaPager as $beca)
{
  echo _open('li.element');

    echo $beca;

  echo _close('li');
}

echo _close('ul');

echo $becaPager->renderNavigationBottom();