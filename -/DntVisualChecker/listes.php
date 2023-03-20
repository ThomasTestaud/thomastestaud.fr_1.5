<?php

$openedDTN = array("<dnt>", '&lt;dnt&gt;');
$closedDTN = array("</dnt>", '&lt;/dnt&gt;');
$validateItems = array("<dnt>", "</dnt>", '&lt;dnt&gt;', '&lt;/dnt&gt;');
$unValidateItems = array(
'<dtn>', '</dtn>', '&lt;dtn&gt;', '&lt;/dtn&gt;',
'<ndt>', '</ndt>', '&lt;ndt&gt;', '&lt;/ndt&gt;',
'<tnd>', '</tnd>', '&lt;tnd&gt;', '&lt;/tnd&gt;',
'<ndt>', '</ndt>', '&lt;ndt&gt;', '&lt;/ndt&gt;',
'<ddt>', '</ddt>', '&lt;ddt&gt;', '&lt;/ddt&gt;',
'<nnt>', '</nnt>', '&lt;nnt&gt;', '&lt;/nnt&gt;'
);