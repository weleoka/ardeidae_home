<?php

include(__DIR__.'/config.php');

$roo['title'] = "About";

$roo['header'] .= '<span class="siteslogan">About the developer.</span>';
$roo['headerNvp'] .= '<p class="sitesloganNvp">Ardeidae About</p>';

$roo['main'] = <<<EOD

<p>...</p>
<p>...</p>

<p></p>
<p></p>
<p>Questions please contact kawe14@eee.se</p>
<p>.: :.</p>
EOD;

$roo['footer'];

include(ROO_THEME_PATH);