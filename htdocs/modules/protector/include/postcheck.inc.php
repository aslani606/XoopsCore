<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Protector
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         protector
 * @author          trabis <lusopoemas@gmail.com>
 * @version         $Id$
 */

defined('XOOPS_ROOT_PATH') or die('Restricted access');

require_once dirname(__FILE__) . '/postcheck_functions.php';

if (!defined('PROTECTOR_PRECHECK_INCLUDED')) {
    require dirname(__FILE__) . '/precheck.inc.php';
    return;
}

define('PROTECTOR_POSTCHECK_INCLUDED', 1);
if (!class_exists('XoopsConnection', false)) {
    return;
}
protector_postcheck();