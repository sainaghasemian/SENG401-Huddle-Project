<?php
require_once 'databaseQueries.php';
use PHPUnit\Framework\TestCase;

class PHPUnitTests extends TestCase
{
    public function testResetMessageVariable(): void
    {   
        databaseQueries::sessionStart();
        $_SESSION["message"] = "Test Message";
        

        databaseQueries::resetMessageVariable();

        $this->assertEquals("", $_SESSION["message"]);
    }

}

?>