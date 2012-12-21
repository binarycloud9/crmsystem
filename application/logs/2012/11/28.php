<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-28 02:35:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-11-28 02:35:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/u720720072/public_html/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/u720720072/public_html/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/u720720072/public_html/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-28 05:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: design/css/design/img/bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-28 05:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: design/css/design/img/bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/u720720072/public_html/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-28 05:59:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: design/css/design/img/bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-28 05:59:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: design/css/design/img/bg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/u720720072/public_html/index.php(109): Kohana_Request->execute()
#1 {main}