<?php
/**
 * runtime tests
 *
 * PHP Version 5
 *
 * @category  Test
 * @package   Test
 * @author    Lucas S. Bickel <hairmare@purplehaze.ch>
 * @copyright 2013 - Alle Rechte vorbehalten
 * @license   GPL http://www.gnu.org/licenses/gpl-3.0.txt
 * @link      http://hairmare.ch
 */

require_once __DIR__.'/../src/MyClass.php';

/**
 * Test class for MyClass
 *
 * @category Test
 * @package  Test
 * @author   Lucas S. Bickel <hairmare@purplehaze.ch>
 * @license  GPL http://www.gnu.org/licenses/gpl-3.0.txt
 * @link     http://hairmare.ch
 */
class MyClassTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Mp3Indexer
     */
    protected $_object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     *
     * @return void
     */
    protected function setUp()
    {
    }

    /**
     * test object creation
     *
     * @covers MyClass::__construct
     *
     * @return void
     */
    public function testConstructor()
    {
        new MyClass;
    }
}
