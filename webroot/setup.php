<?php
include(__DIR__.'/config.php');

$roo['title'] = "Setup";

$roo['header'] .= '<span class="siteslogan">Install and setup documentation.</span>';
$roo['headerNvp'] .= '<p class="sitesloganNvp">Ardeidae Setup</p>';

$roo['main'] = <<<EOD

<div class="articleSegment">
    <a href="#">
    <li data-src="img/node02.png" class="decoration"></li>
    </a>


    <!-- <img id="imgNode" class="decoration" data-src="img/node02.png"> -->
    <h3>The server</h3>
    <p>Integrating Ardeidae Server is quick and easy.</p>
    <p>There are three options for getting the service up and running. The first is using Node.js and its fantastic package manager "npm". You can also clone the source code from github, and lastly the Ardeidae package is available in zip archive format from this site with a direct download.</p>
</div>

<div class="articleSegment">
    <h3>The client</h3>
    <p></p>
    <p></p>

    <p>This is a raw version of the required HTML elements and their IDs.</p>
</div>

<pre class="brush: html; gutter: false;">

<button id='disconnect'>X</button>
<div id='status'>no connection</div>
</pre>

EOD;

$roo['footer'];

include(ROO_THEME_PATH);







