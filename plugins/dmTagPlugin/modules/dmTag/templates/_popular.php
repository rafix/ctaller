<?php // Vars: $dmTagPager

//echo _open('ul.elements');

echo _open('div.tagcloud');

$maximum = $dmTags->count();

foreach ($dmTags as $dmTag)
{
//  echo _open('li.element');

    $percent = floor(($dmTag->total_num / $maximum)*100);

    if ($percent <20)
    {
        $class = 'smallest';
    } elseif ($percent>= 20 and $percent <40) {
        $class = 'small';
    } elseif ($percent>= 40 and $percent <60) {
        $class = 'medium';
    } elseif ($percent>= 60 and $percent <80) {
        $class = 'large';
    } else {
        $class = 'largest';
    }

    $tagText = $dmTag->name; //.' ('.$dmTag->total_num.')';

    if($dmTag->hasDmPage())
    {
      echo _link($dmTag)->set('span.'.$class)->text($tagText);
    }
    else
    {
      echo $tagText;
    }

//  echo _close('li');
}

echo _close('div');