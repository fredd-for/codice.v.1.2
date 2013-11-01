<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-08-16 10:35:56 --- ERROR: Database_Exception [ 0 ]: [1049] Unknown database 'correspondencia_vacio' ~ MODPATH/database/classes/kohana/database/mysql.php [ 96 ]
2013-08-16 10:36:08 --- ERROR: Database_Exception [ 0 ]: [1049] Unknown database 'correspondencia_vacio' ~ MODPATH/database/classes/kohana/database/mysql.php [ 96 ]
2013-08-16 10:36:22 --- ERROR: Database_Exception [ 0 ]: [1049] Unknown database 'correspondencia_vacio' ~ MODPATH/database/classes/kohana/database/mysql.php [ 96 ]
2013-08-16 10:36:55 --- ERROR: Kohana_Exception [ 0 ]: Invalid method listaGeneral called in Model_Users ~ MODPATH/orm/classes/kohana/orm.php [ 606 ]
2013-08-16 10:36:59 --- ERROR: Kohana_Exception [ 0 ]: Invalid method listaGeneral called in Model_Users ~ MODPATH/orm/classes/kohana/orm.php [ 606 ]
2013-08-16 10:37:03 --- ERROR: Database_Exception [ 0 ]: [1064] You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') GROUP BY u.id' at line 4 ( SELECT u.id, u.nombre,u.cargo,COUNT(*) as  pendientes FROM users u
    INNER JOIN seguimiento s ON s.derivado_a=u.id
    WHERE s.estado='2'
    AND s.derivado_a IN  ) GROUP BY u.id ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2013-08-16 10:38:24 --- ERROR: Database_Exception [ 0 ]: [1064] You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') GROUP BY u.id' at line 4 ( SELECT u.id, u.nombre,u.cargo,COUNT(*) as  pendientes FROM users u
    INNER JOIN seguimiento s ON s.derivado_a=u.id
    WHERE s.estado='2'
    AND s.derivado_a IN  ) GROUP BY u.id ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]