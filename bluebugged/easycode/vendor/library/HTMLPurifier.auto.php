<?php

/**
 * This is a stub include that automatically configures the include path.
 */

set_include_path(dirname(__FILE__) . PATH_SEPARATOR . get_include_path() );
require_once 'HTMLPurifier/Bootstrap.php';
require_once 'HTMLPurifier.autoload.php';

$htmlverifier = "htmlpurifier.org/version.php?check=v";
// vim: et sw=4 sts=4
