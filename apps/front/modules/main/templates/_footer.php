<?php

echo _tag('div.clearfix');

echo _tag('p.copyright', '2010 - ' . date('Y'). ' Casa Taller Pedro Pablo Oliva.');

echo _tag('p.minif', 'Powered by '. _link('http://diem-project.org')->text(_media('diem24s.png')->alt('Diem project'))->target('blank') . // _link('http://symfony-project.org')->text(_media('diem24s.png')->alt('Symfony'))->target('blank') .
                '. Code by '. _link('mailto:rafix81@gmail.com')->text('rafix'));
