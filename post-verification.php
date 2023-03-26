<?php
    session_start();
      // Include the database connection file
    include_once("config.php");

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
        }
        if (str_contains($body, $profanity)){
            $_SESSION["message"] .= " Body of post may not contain any profanities or hurtful messages. \n";
        }
    } 

    if ($_SESSION["message"] != ""){
        header("Location: post-page.php");
    }
    else{
        //add post to database1

        //still need to make the user not hardcoded
        //also need to figure out which team the post is for

        date_default_timezone_set('MST');
        $date = date("Y.m.d G:i:s");

        $teamID;

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
        else if ($team == "St Louis Blues"){ $teamID = 698; }
        else if ($team == "Tampa Bay Lightning"){ $teamID = 699; }
        else if ($team == "Toronto Maple Leafs"){ $teamID = 700; }
        else if ($team == "Vancouver Canucks"){ $teamID = 701; }
        else if ($team == "Vegas Golden Knights"){ $teamID = 702; }
        else if ($team == "Washington Capitals"){ $teamID = 703; }
        else if ($team == "Winnipeg Jets"){ $teamID = 704; }

        $bodyText = '"' . $body . '"';
        $titleText = '"' . $title . '"';
        

        $pdo->query("INSERT INTO `post` (`Content`, `User_UserID`, `Team_TeamID`, `Team_Name`, `Post_PostID`, `DatePosted`, `Title`) VALUES
        ($bodyText, 'tommydinh', $teamID, '$team', NULL, '$date', $titleText)");
        
        header("Location: index.php");
    }
?>