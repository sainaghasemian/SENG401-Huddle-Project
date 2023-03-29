<?php
    session_start();

    // Include the database connection file
    include_once("config.php");

    $team = $_POST['team'];

    if ($team == ""){
        $_SESSION["message"] .= " A team must be selected $team.";
        header("Location: index.php");
        exit;
    }

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
?>