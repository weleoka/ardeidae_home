<?php

include(__DIR__.'/config.php');

$roo['title'] = "Welcome";

$roo['header'] .= '<span class="siteslogan">Website framework.</span>';
$roo['headerNvp'] .= '<p class="sitesloganNvp">Ardeidae Home</p>';

$roo['main'] = <<<EOD

<div class="articleSegment">
<p></p>
<p></p>
<p></p>
<p></p>
</div>

<div class="vid-wrapper">
  <iframe><a id="video" href="htpp://www.youtube.com">example vid.</a></iframe>
</div>

EOD;

$roo['footer'];

include(ROO_THEME_PATH);