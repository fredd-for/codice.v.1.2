<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-30 08:06:22 --- ERROR: ErrorException [ 8 ]: Undefined index: documento ~ MODPATH\orm\classes\kohana\orm.php [ 1423 ]
2011-08-30 08:10:00 --- ERROR: ErrorException [ 8 ]: Undefined index: documentos ~ MODPATH\orm\classes\kohana\orm.php [ 1423 ]
2011-08-30 08:10:02 --- ERROR: ErrorException [ 8 ]: Undefined index: documentos ~ MODPATH\orm\classes\kohana\orm.php [ 1423 ]
2011-08-30 08:10:11 --- ERROR: ErrorException [ 8 ]: Undefined index: nurs ~ MODPATH\orm\classes\kohana\orm.php [ 1423 ]
2011-08-30 08:10:23 --- ERROR: ErrorException [ 8 ]: Undefined index: nur ~ MODPATH\orm\classes\kohana\orm.php [ 1423 ]
2011-08-30 08:11:12 --- ERROR: ErrorException [ 8 ]: Undefined index: documentos ~ MODPATH\orm\classes\kohana\orm.php [ 1423 ]
2011-08-30 08:11:13 --- ERROR: ErrorException [ 8 ]: Undefined index: documentos ~ MODPATH\orm\classes\kohana\orm.php [ 1423 ]
2011-08-30 08:11:13 --- ERROR: ErrorException [ 8 ]: Undefined index: documentos ~ MODPATH\orm\classes\kohana\orm.php [ 1423 ]
2011-08-30 08:12:28 --- ERROR: Database_Exception [ 0 ]: [1054] Unknown column 'documentos_id' in 'where clause' ( SELECT COUNT(*) AS `records_found` FROM `nurs_documentos` WHERE `documentos_id` = '158' AND `nur_id` IN (1) ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
2011-08-30 08:13:59 --- ERROR: Database_Exception [ 0 ]: [1054] Unknown column 'nur_id' in 'where clause' ( SELECT COUNT(*) AS `records_found` FROM `nurs_documentos` WHERE `id_documento` = '158' AND `nur_id` IN (1) ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
2011-08-30 08:27:13 --- ERROR: Database_Exception [ 0 ]: [1062] Duplicate entry '158-2' for key 'PRIMARY' ( INSERT INTO `nurs_documentos` (`id_documento`, `id_nur`) VALUES ('158', 2) ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
2011-08-30 08:27:37 --- ERROR: Database_Exception [ 0 ]: [1062] Duplicate entry '158-2' for key 'PRIMARY' ( INSERT INTO `nurs_documentos` (`id_documento`, `id_nur`) VALUES ('158', 2) ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
2011-08-30 10:29:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ APPPATH\classes\controller\documentos.php [ 135 ]
2011-08-30 13:34:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ APPPATH\classes\controller\documentos.php [ 135 ]