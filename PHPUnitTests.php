<?php
require_once 'databaseQueries.php';
use PHPUnit\Framework\TestCase;

class PHPUnitTests extends TestCase
{
    public function testSessionStart(): void {
        session_destroy();
        databaseQueries::sessionStart();

        $this->assertNotEquals(PHP_SESSION_NONE, session_status());
    }

    public function testResetMessageVariable(): void {
        session_destroy();   
        databaseQueries::sessionStart();
        $_SESSION["message"] = "Test Message";
        

        databaseQueries::resetMessageVariable();

        $this->assertEquals("", $_SESSION["message"]);
    }

    public function testResetAuthenticatedUsernameVariable(): void {
        session_destroy();   
        databaseQueries::sessionStart();
        $_SESSION["authenticated_username"] = "Test";

        databaseQueries::resetAuthenticatedUsernameVariable();

        $this->assertEquals(null, $_SESSION["authenticated_username"]);
    }

    public function testResetLikedPostsVariable(): void {
        session_destroy();   
        databaseQueries::sessionStart();
        $_SESSION["liked_posts"] = array(1, 2, 3);
        

        databaseQueries::resetLikedPostsVariable();

        $this->assertEquals(null, $_SESSION["liked_posts"]);
    }

    public function testCheckAuthenticationFalse(): void {
        session_destroy();
        databaseQueries::sessionStart();

        $_SESSION["authenticated_username"] = "";

        $this->assertFalse(databaseQueries::checkAuthentication());
    }

    public function testCheckAuthenticationTrue(): void {
        session_destroy();
        databaseQueries::sessionStart();

        $_SESSION["authenticated_username"] = "not_empty";

        $this->assertTrue(databaseQueries::checkAuthentication());
    }

    public function testVerifyLoginValid(): void {
        $dsn = "mysql:host=localhost;dbname=huddledatabase";

        $options = [
        PDO::ATTR_EMULATE_PREPARES   => false, // Disable emulation mode for "real" prepared statements
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Disable errors in the form of exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Make the default fetch be an associative array
        ];

        try {
        $pdo = new PDO($dsn, "root", "");
        } 
        catch (Exception $e) {
        error_log($e->getMessage());
        exit('Unable to connect to PDO.'); 
        }

        session_destroy();
        databaseQueries::sessionStart();

        $_POST["username"] = "ilemieux";
        $_POST["password"] = "password";

        databaseQueries::verifyLogin($pdo);

        $this->assertEquals("ilemieux", $_SESSION["authenticated_username"]);
    }

    public function testVerifyLoginInvalidUsername(): void {
        $dsn = "mysql:host=localhost;dbname=huddledatabase";

        $options = [
        PDO::ATTR_EMULATE_PREPARES   => false, // Disable emulation mode for "real" prepared statements
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Disable errors in the form of exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Make the default fetch be an associative array
        ];

        try {
        $pdo = new PDO($dsn, "root", "");
        } 
        catch (Exception $e) {
        error_log($e->getMessage());
        exit('Unable to connect to PDO.'); 
        }

        session_destroy();
        databaseQueries::sessionStart();

        $_POST["username"] = "NotAnAccount";
        $_POST["password"] = "aydf4";

        databaseQueries::verifyLogin($pdo);

        $this->assertEquals(null, $_SESSION["authenticated_username"]);
    }

    public function testVerifyLoginInvalidPassword(): void {
        $dsn = "mysql:host=localhost;dbname=huddledatabase";

        $options = [
        PDO::ATTR_EMULATE_PREPARES   => false, // Disable emulation mode for "real" prepared statements
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Disable errors in the form of exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Make the default fetch be an associative array
        ];

        try {
        $pdo = new PDO($dsn, "root", "");
        } 
        catch (Exception $e) {
        error_log($e->getMessage());
        exit('Unable to connect to PDO.'); 
        }

        session_destroy();
        databaseQueries::sessionStart();

        $_POST["username"] = "ilemieux";
        $_POST["password"] = "notthepassword";

        databaseQueries::verifyLogin($pdo);

        $this->assertEquals(null, $_SESSION["authenticated_username"]);
    }

   
    
    //dont know how to test getHomePageGameSchedules()

    public function testGetPosts(): void {
        $dsn = "mysql:host=localhost;dbname=huddledatabase";

        $options = [
        PDO::ATTR_EMULATE_PREPARES   => false, // Disable emulation mode for "real" prepared statements
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Disable errors in the form of exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Make the default fetch be an associative array
        ];

        try {
        $pdo = new PDO($dsn, "root", "");
        } 
        catch (Exception $e) {
        error_log($e->getMessage());
        exit('Unable to connect to PDO.'); 
        }

        session_destroy();
        databaseQueries::sessionStart();

        $result = databaseQueries::getPosts($pdo);

        $this->assertNotNull($result);
    }

    public function testGetTheTop5Teams(): void {
        $dsn = "mysql:host=localhost;dbname=huddledatabase";

        $options = [
        PDO::ATTR_EMULATE_PREPARES   => false, // Disable emulation mode for "real" prepared statements
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Disable errors in the form of exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Make the default fetch be an associative array
        ];

        try {
        $pdo = new PDO($dsn, "root", "");
        } 
        catch (Exception $e) {
        error_log($e->getMessage());
        exit('Unable to connect to PDO.'); 
        }

        session_destroy();
        databaseQueries::sessionStart();

        $result = databaseQueries::getTheTop5Teams($pdo);

        $this->assertNotNull($result);
    }

    public function testSubscribe(): void {
        $dsn = "mysql:host=localhost;dbname=huddledatabase";

        $options = [
        PDO::ATTR_EMULATE_PREPARES   => false, // Disable emulation mode for "real" prepared statements
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Disable errors in the form of exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Make the default fetch be an associative array
        ];

        try {
        $pdo = new PDO($dsn, "root", "");
        } 
        catch (Exception $e) {
        error_log($e->getMessage());
        exit('Unable to connect to PDO.'); 
        }

        $_SESSION["authenticated_username"] = "ilemieux";

        $pdo->query("DELETE FROM `usersubscription` WHERE `User_UserID` = '{$_SESSION["authenticated_username"]}' AND `Team_TeamID` = 700");

        session_destroy();
        databaseQueries::sessionStart();

        $_POST["team"] = "Toronto Maple Leafs";

        databaseQueries::subscribeUnsubscribe($pdo);
        $result = $pdo->query("SELECT * FROM usersubscription WHERE Team_TeamID = 700 AND User_UserID ='{$_SESSION["authenticated_username"]}'");
        $success = $result->fetch(PDO::FETCH_ASSOC);

        $this->assertNotEmpty($result);
    }

    public function testUnsubscribe(): void {
        $success = null;
        $dsn = "mysql:host=localhost;dbname=huddledatabase";

        $options = [
        PDO::ATTR_EMULATE_PREPARES   => false, // Disable emulation mode for "real" prepared statements
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Disable errors in the form of exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Make the default fetch be an associative array
        ];

        try {
        $pdo = new PDO($dsn, "root", "");
        } 
        catch (Exception $e) {
        error_log($e->getMessage());
        exit('Unable to connect to PDO.'); 
        }

        $_SESSION["authenticated_username"] = "ilemieux";

        $pdo->query("DELETE FROM `usersubscription` WHERE `User_UserID` = '{$_SESSION["authenticated_username"]}' AND `Team_TeamID` = 700");
        $pdo->query("INSERT INTO `usersubscription` (`User_UserID`, `Team_TeamID`) VALUES
                ('{$_SESSION["authenticated_username"]}', 700);");

        session_destroy();
        databaseQueries::sessionStart();

        $_POST["team"] = "Toronto Maple Leafs";

        databaseQueries::subscribeUnsubscribe($pdo);
        $result = $pdo->query("SELECT * FROM usersubscription WHERE Team_TeamID = 700 AND User_UserID ='{$_SESSION["authenticated_username"]}'");
        $success = $result->fetch(PDO::FETCH_ASSOC);

        $this->assertEmpty($success);
    }

    public function testIncrementLikes(): void {
        $dsn = "mysql:host=localhost;dbname=huddledatabase";

        $options = [
        PDO::ATTR_EMULATE_PREPARES   => false, // Disable emulation mode for "real" prepared statements
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Disable errors in the form of exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Make the default fetch be an associative array
        ];

        try {
        $pdo = new PDO($dsn, "root", "");
        } 
        catch (Exception $e) {
        error_log($e->getMessage());
        exit('Unable to connect to PDO.'); 
        }

        $pdo->query("DELETE FROM post WHERE PostID = 700");
        $pdo->query("INSERT INTO `post` (`PostID`) VALUES (700)");

        session_destroy();
        databaseQueries::sessionStart();

        $_POST['post_id'] = 700;

        databaseQueries::incrementLikes($pdo);

        $result = $pdo->query("SELECT NumberOfLikes FROM post WHERE PostID = 700");
        $success = $result->fetch(PDO::FETCH_ASSOC);

        $pdo->query("DELETE FROM post WHERE PostID = 700");

        $this->assertEquals(1, $success[0]);
    }
}

?>