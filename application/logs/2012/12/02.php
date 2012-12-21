<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-02 03:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-12-02 03:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\VirtualServer\domains\testproject\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-02 03:59:57 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: php_network_getaddresses: getaddrinfo failed: No such host is known.  ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-12-02 03:59:57 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: php_network_getaddresses: getaddrinfo failed: No such host is known.  ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\VirtualServer\domains\testproject\public_html\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\VirtualServer\domains\testproject\public_html\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\VirtualServer\domains\testproject\public_html\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('projects')
#3 C:\VirtualServer\domains\testproject\public_html\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#4 C:\VirtualServer\domains\testproject\public_html\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\VirtualServer\domains\testproject\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\VirtualServer\domains\testproject\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\VirtualServer\domains\testproject\public_html\application\classes\controller\project.php(5): Kohana_ORM::factory('project')
#8 [internal function]: Controller_Project->action_show()
#9 C:\VirtualServer\domains\testproject\public_html\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Project))
#10 C:\VirtualServer\domains\testproject\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\VirtualServer\domains\testproject\public_html\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 C:\VirtualServer\domains\testproject\public_html\index.php(109): Kohana_Request->execute()
#13 {main}