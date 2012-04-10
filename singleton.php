<?php
class Example
{
    private static $instance;
    private $count = 0; 

    private function __construct()
    {
    }

    public static function singleton()
    {
        if (!isset(self::$instance)) {
            echo 'Creating new instance.';
            $className = __CLASS__;
            self::$instance = new $className;
        }
        return self::$instance;
    }

    public function increment()
    {
        return $this->count++;
    }

    public function __clone()
    {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }

    public function __wakeup()
    {
        trigger_error('Unserializing is not allowed.', E_USER_ERROR);
    }
}



$singleton = Example::singleton(); // prints "Creating new instance."
var_dump($singleton);
echo $singleton->increment(); // 0
echo $singleton->increment(); // 1



$singleton2 = Example::singleton(); // reuses existing instance now

var_dump($singleton2);
echo $singleton->increment(); // 2
echo $singleton->increment(); // 3

/* all of these will raise a Fatal Error
$singleton2 = new Example;
$singleton3 = clone $singleton;
$singleton4 = unserialize(serialize($singleton));
*/
?>