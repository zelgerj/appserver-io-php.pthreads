--TEST--
Test global constants
--DESCRIPTION--
This test verifies that global constants are inherited
--FILE--
<?php
class Server extends Thread {
    public function run() {
        $callback = array($this, 'test');
        $a = require dirname(__FILE__) . '/requireme.php';
        $application = new Application();
        $application->start(PTHREADS_INHERIT_ALL | PTHREADS_ALLOW_GLOBALS);
        $application->join();
    }
}
class Application extends Thread {
    public function run() {
        var_dump(isset($GLOBALS['this']));
        if (isset($GLOBALS['this'])) {
            var_dump($GLOBALS['this']);
            var_dump($this);
        }
    }
}
$server = new Server();
$server->start(PTHREADS_INHERIT_ALL | PTHREADS_ALLOW_GLOBALS);
$server->join();
var_dump($server);
?>
--EXPECT--
bool(false)
