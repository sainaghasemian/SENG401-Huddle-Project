<?php
    class databaseQueries
    {
        static function sessionStart()
        {
            session_start();
        }

        static function resetMessageVariable()
        {
            $_SESSION["message"] = "";
        }

        static function resetAuthenticatedUsernameVariable()
        {
            $_SESSION["authenticated_username"] = null;
        }

        static function resetLikedPostsVariable()
        {
            $_SESSION["liked_posts"] = null;
        }

        static function checkAuthentication()
        {
            if($_SESSION["authenticated_username"] == "")
            {
                return false;
            }
            else return true;
        }

        static function verifyLogin($pdo) : void
        {

            //Verify username and password from login page
            if (count($_POST) && isset($_POST["username"]) && isset($_POST["password"]))
            {
                $username = $_POST["username"];
                $password = $_POST["password"];
                $result = $pdo->query("SELECT 1 FROM User WHERE UserID = '$username' AND Password = '$password'");
                $success = $result->fetch(PDO::FETCH_ASSOC);
            }
            if($success == null)
            {
                $_SESSION["message"] = "The username or password is incorrect. Please try again.";
                header("Location: login-page.php");
            }
            else
            {
                if ($_SESSION["authenticated_username"]==""){
                $_SESSION["authenticated_username"] = $username;
                }
            }
        }

        static function getHomePageGameSchedules($pdo)
        {
            if(!databaseQueries::checkAuthentication())
            {   ?>
                    </div>
                    <script>homePageGameSchedule("96k2kff6f9rxmh33j80j95h0f95ku1j26jgoxs2h028j1i7gjk")</script>
                    <div id="home-page-div"></div>
                <?php
            }
            else
            {
                $loggedInUser = $_SESSION["authenticated_username"];
                $result = $pdo->query("SELECT * FROM team JOIN usersubscription ON team.teamID = usersubscription.Team_TeamID WHERE usersubscription.User_UserID = '$loggedInUser' ORDER BY team.Name;");
                $teams = $result->fetchAll(PDO::FETCH_DEFAULT);
                $teamNames = array();
                foreach ($teams as $team)
                {
                    array_push($teamNames, $team['Name']);
                }

                $teamNamesJS = json_encode($teamNames);
                ?>
                    </div>
                    <script>homePageGameScheduleLoggedIn(<?php echo $teamNamesJS?>, "96k2kff6f9rxmh33j80j95h0f95ku1j26jgoxs2h028j1i7gjk")</script>
                    <div id="home-page-div"></div>
                <?php
            }
        }

        static function getPosts($pdo)
        {
            if($_SESSION["authenticated_username"] == "")
            {
                $result = $pdo->query("SELECT * FROM  post ORDER BY DatePosted DESC LIMIT 20;");
            }
            else
            {
                $loggedInUser = $_SESSION["authenticated_username"];
                $result = $pdo->query("SELECT * FROM team JOIN usersubscription ON team.teamID = usersubscription.Team_TeamID JOIN post ON usersubscription.Team_TeamID = post.Team_TeamID WHERE usersubscription.User_UserID = '$loggedInUser' ORDER BY post.DatePosted DESC;");
            }

            return $result->fetchAll(PDO::FETCH_DEFAULT);
        }

        static function getTheTop5Teams($pdo)
        {
            if($_SESSION["authenticated_username"] == "")
            {
            //Get the top 5 teams in Huddle based on subscriber count
            $result = $pdo->query("SELECT *, COUNT(usersubscription.User_UserID) AS count_subscribers
            FROM team
            JOIN usersubscription ON team.TeamID = usersubscription.Team_TeamID
            GROUP BY team.TeamID
            ORDER BY count_subscribers DESC
            LIMIT 5;");
            }
            else
            {
            $loggedInUser = $_SESSION["authenticated_username"];
            $result = $pdo->query("SELECT * FROM team JOIN usersubscription ON team.teamID = usersubscription.Team_TeamID WHERE usersubscription.User_UserID = '$loggedInUser' ORDER BY team.Name;");
            }
            

            return $result->fetchAll(PDO::FETCH_DEFAULT);
        }

        static function subscribeUnsubscribe($pdo)
        {
            $team = $_POST['team'];
            if ($team == ""){
                $_SESSION["message"] .= " A team must be selected $team.";
                header("Location: index.php");
                exit;
            }
        
            $teamID = null;
        
            if ($team == "Anaheim Ducks"){ $teamID = 670; }
            else if ($team == "Arizona Coyotes"){ $teamID = 1460; }
            else if ($team == "Boston Bruins"){ $teamID = 673; }
            else if ($team == "Buffalo Sabres"){ $teamID = 674; }
            else if ($team == "Calgary Flames"){ $teamID = 675; }
            else if ($team == "Carolina Hurricanes"){ $teamID = 676; }
            else if ($team == "Chicago Blackhawks"){ $teamID = 678; }
            else if ($team == "Colorado Avalanche"){ $teamID = 679; }
            else if ($team == "Columbus Blue Jackets"){ $teamID = 680; }
            else if ($team == "Dallas Stars"){ $teamID = 681; }
            else if ($team == "Detroit Red Wings"){ $teamID = 682; }
            else if ($team == "Edmonton Oilers"){ $teamID = 683; }
            else if ($team == "Florida Panthers"){ $teamID = 684; }
            else if ($team == "Los Angeles Kings"){ $teamID = 685; }
            else if ($team == "Minnesota Wild"){ $teamID = 687; }
            else if ($team == "Montreal Canadiens"){ $teamID = 688; }
            else if ($team == "Nashville Predators"){ $teamID = 689; }
            else if ($team == "New Jersey Devils"){ $teamID = 690; }
            else if ($team == "New York Islanders"){ $teamID = 691; }
            else if ($team == "New York Rangers"){ $teamID = 692; }
            else if ($team == "Ottawa Senators"){ $teamID = 693; }
            else if ($team == "Philadelphia Flyers"){ $teamID = 695; }
            else if ($team == "Pittsburgh Penguins"){ $teamID = 696; }
            else if ($team == "San Jose Sharks"){ $teamID = 697; }
            else if ($team == "Seattle Kraken"){ $teamID = 1436; }
            else if ($team == "St. Louis Blues"){ $teamID = 698; }
            else if ($team == "Tampa Bay Lightning"){ $teamID = 699; }
            else if ($team == "Toronto Maple Leafs"){ $teamID = 700; }
            else if ($team == "Vancouver Canucks"){ $teamID = 701; }
            else if ($team == "Vegas Golden Knights"){ $teamID = 702; }
            else if ($team == "Washington Capitals"){ $teamID = 703; }
            else if ($team == "Winnipeg Jets"){ $teamID = 704; }
            
            $result = $pdo->query("SELECT * FROM usersubscription WHERE Team_TeamID = $teamID AND User_UserID ='{$_SESSION["authenticated_username"]}'");
            $success = $result->fetch(PDO::FETCH_ASSOC);
            if($success != null)
            {   
                $pdo->query("DELETE FROM `usersubscription` WHERE `User_UserID` = '{$_SESSION["authenticated_username"]}' AND `Team_TeamID` = '$teamID'");
            }
            else{
                $pdo->query("INSERT INTO `usersubscription` (`User_UserID`, `Team_TeamID`) VALUES
                ('{$_SESSION["authenticated_username"]}', $teamID);");
            }
            header("Location: index.php");
        }

        static function incrementLikes($pdo)
        {
            $post_id = $_POST['post_id'];

            if(isset($_SESSION['liked_posts']) && in_array($post_id, $_SESSION['liked_posts'])){
                header("Location: index.php");
                exit;
            }
            
            $pdo->query("UPDATE post SET NumberOfLikes = NumberOfLikes + 1 WHERE PostID = $post_id");
            
            if(isset($_SESSION['liked_posts'])){
                $_SESSION['liked_posts'][] = $post_id;
            } else {
                $_SESSION['liked_posts'] = array($post_id);
            }
            
            header("Location: index.php");
        }

        static function post($pdo)
        {
            $title = $_POST["title"];
            $body = $_POST["body"];
            $team = $_POST["team"];
        
            if ($team == ""){
                $_SESSION["message"] .= " A team that the post is related to must be selected.";
            }
        
            if ($title == ""){
                $_SESSION["message"] .= " Title of post must be entered.";
            }
            else{
                $titleLength = strlen($title);
        
                if ($titleLength > 50){
                    $_SESSION["message"] .= " Title of post must be less than 50 characters long (currently $titleLength).\n";
                }
            }
        
            if ($body  == ""){
                $_SESSION["message"] .= " Body of post must be entered.";
            }
            else{
                $bodyLength = strlen($body);
        
                if ($bodyLength > 2000){
                    $_SESSION["message"] .= " Body of post must be less than 2000 characters long (currently $bodyLength).\n";
                }
            }
        
            $profanities = array("fuck", "shit", " ass ", " cunt", "pussy", " dick", " cock", "butthole", " kms ", "kill myself", "suicide", "bitch", "asshole", " die ", " dies ", " kill ", " murder ");
            
            foreach ($profanities as $profanity){
                if (str_contains($title, $profanity)){
                    $_SESSION["message"] .= " Title of post may not contain any profanities or hurtful messages. \n";
                    break;
                }
                if (str_contains($body, $profanity)){
                    $_SESSION["message"] .= " Body of post may not contain any profanities or hurtful messages. \n";
                    break;
                }
            } 
        
            if ($_SESSION["message"] != ""){
                header("Location: post-page.php");
            }
            else{
                date_default_timezone_set('MST');
                $date = date("Y.m.d G:i:s");
        
                $teamID = null;
        
                if ($team == "Anaheim Ducks"){ $teamID = 670; }
                else if ($team == "Arizona Coyotes"){ $teamID = 1460; }
                else if ($team == "Boston Bruins"){ $teamID = 673; }
                else if ($team == "Buffalo Sabres"){ $teamID = 674; }
                else if ($team == "Calgary Flames"){ $teamID = 675; }
                else if ($team == "Carolina Hurricanes"){ $teamID = 676; }
                else if ($team == "Chicago Blackhawks"){ $teamID = 678; }
                else if ($team == "Colorado Avalanche"){ $teamID = 679; }
                else if ($team == "Columbus Blue Jackets"){ $teamID = 680; }
                else if ($team == "Dallas Stars"){ $teamID = 681; }
                else if ($team == "Detroit Red Wings"){ $teamID = 682; }
                else if ($team == "Edmonton Oilers"){ $teamID = 683; }
                else if ($team == "Florida Panthers"){ $teamID = 684; }
                else if ($team == "Los Angeles Kings"){ $teamID = 685; }
                else if ($team == "Minnesota Wild"){ $teamID = 687; }
                else if ($team == "Montreal Canadiens"){ $teamID = 688; }
                else if ($team == "Nashville Predators"){ $teamID = 689; }
                else if ($team == "New Jersey Devils"){ $teamID = 690; }
                else if ($team == "New York Islanders"){ $teamID = 691; }
                else if ($team == "New York Rangers"){ $teamID = 692; }
                else if ($team == "Ottawa Senators"){ $teamID = 693; }
                else if ($team == "Philadelphia Flyers"){ $teamID = 695; }
                else if ($team == "Pittsburgh Penguins"){ $teamID = 696; }
                else if ($team == "San Jose Sharks"){ $teamID = 697; }
                else if ($team == "Seattle Kraken"){ $teamID = 1436; }
                else if ($team == "St. Louis Blues"){ $teamID = 698; }
                else if ($team == "Tampa Bay Lightning"){ $teamID = 699; }
                else if ($team == "Toronto Maple Leafs"){ $teamID = 700; }
                else if ($team == "Vancouver Canucks"){ $teamID = 701; }
                else if ($team == "Vegas Golden Knights"){ $teamID = 702; }
                else if ($team == "Washington Capitals"){ $teamID = 703; }
                else if ($team == "Winnipeg Jets"){ $teamID = 704; }
        
                $bodyText = '"' . $body . '"';
                $titleText = '"' . $title . '"';
                
        
                $pdo->query("INSERT INTO `post` (`Content`, `User_UserID`, `Team_TeamID`, `Team_Name`, `Post_PostID`, `DatePosted`, `Title`) VALUES
                ($bodyText, '{$_SESSION["authenticated_username"]}', $teamID, '$team', NULL, '$date', $titleText)");
                
                header("Location: index.php");
            }
        }

        static function verifyRegistration($pdo)
        {
            if (count($_POST) && isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["confirmed"]))
            {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $confirmed = $_POST["confirmed"];

            if ($username == ""){
                $_SESSION["message"] .= " Username must be entered.";
            }

            if ($password == ""){
                $_SESSION["message"] .= " Password must be entered.";
            }

            if ($confirmed == ""){
                $_SESSION["message"] .= " Confirm Password must be entered.";
            }

            if ($_SESSION["message"] == ""){
                $userLength = strlen($username);
                $passLength = strlen($password);

                if ($userLength > 11){
                    $_SESSION["message"] .= " Username must be less than 12 characters (currently $userLength).";
                }

                if ($passLength > 45){
                    $_SESSION["message"] .= " Password must be less than 46 characters (currently $passLength).";
                }

                if ($_SESSION["message"] == ""){
                    $result = $pdo->query("SELECT * FROM User WHERE UserID = '$username'");
                    $success = $result->fetch(PDO::FETCH_ASSOC);
                    if($success == null)
                    {
                        if ($password == $confirmed){
                            $pdo->query("INSERT INTO `user` (`UserID`, `Password`) VALUES ('$username', '$password');");
                            header("Location: login-page.php");
                        }
                        else {
                            $_SESSION["message"] = " Passwords do not match. Re-submit with matching passwords.";
                            header("Location: register-page.php");
                        }
                    }
                    else
                    {
                        $_SESSION["message"] = "That username is already taken. Re-submit using a different username.";
                        header("Location: register-page.php");
                    }
                }
                else{
                    header("Location: register-page.php");
                }
            }
            else{
                header("Location: register-page.php");
            }
            }
        }
    }
?>
