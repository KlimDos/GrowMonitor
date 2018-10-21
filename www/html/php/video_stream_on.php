<?php
#!/usr/bin/php
$output = exec("/var/www/html/video_stream.py 1");
echo "<pre>$output</pre>"; 
?>
