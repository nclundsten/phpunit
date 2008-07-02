--TEST--
phpunit Calculator ../_files/Calculator.php
--FILE--
<?php
$_SERVER['argv'][1] = 'Calculator';
$_SERVER['argv'][2] = dirname(dirname(__FILE__)) . '/_files/Calculator.php';

require_once dirname(dirname(dirname(__FILE__))) . '/TextUI/Command.php';

PHPUnit_TextUI_Command::main();
?>
--EXPECT--
PHPUnit @package_version@ by Sebastian Bergmann.

....

Time: 0 seconds

OK (4 tests, 4 assertions)
