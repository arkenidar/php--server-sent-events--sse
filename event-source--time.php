<?php
// server-endpoint for event-source
header("Content-Type: text/event-stream");
header("Cache-Control: no-cache");
header('Connection: keep-alive');

set_time_limit(0);

while (true) {
    print ("event: sse_event_time\n"); // custom event
    $data = date('h:i:s');
    print ("data: $data\n\n");
    ob_flush();
    flush();
    if (connection_aborted())
        break;
    sleep(1);
}
