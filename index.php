<?php
    session_start();

    // Include the database connection file
    include_once("config.php");

    //Verify username and password from login page
    if (count($_POST) && isset($_POST["username"]) && isset($_POST["password"]))
    {
      $username = $_POST["username"];
      $password = $_POST["password"];
      
      $result = $pdo->query("SELECT 1 FROM User WHERE UserID = '$username' AND Password = '$password'");
      $success = $result->fetch(PDO::FETCH_ASSOC);
      if($success == null)
      {
        $_SESSION["message"] = "The username or password is incorrect. Please try again.";
        header("Location: login-page.php");
      }
      else
      {
        if (!isset($_SESSION["authenticated_username"])){
          $_SESSION["authenticated_username"] = $username;
        }
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Mobile device compatability -->
    <title>Huddle</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="og:title" content="Huddle" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <!--This is the head section-->
    <!-- <style> ... </style> -->
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./index.css" rel="stylesheet" />

      <div class="index-container">
        <div class="index-full-page-template">
          <img
            alt="TopBar1224"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/d9a678dc-2593-4226-8391-de5b2bad1158?org_if_sml=1887"
            class="index-top-bar"
          />
          <img
            alt="RightBar1224"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/0b229d4d-325e-407f-b8c5-ba6cf0523929?org_if_sml=14699"
            class="index-right-bar"
          />

          <div class = "index-middle-bar-container">
          <img
              alt="MiddleBar1224"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/62e3b6c0-216b-4f2b-9101-7bff224e0d07?org_if_sml=16661"
              class="index-middle-bar"
            />
            <div class = "scrollable-list">
              <ul>
                <?php
                if($_SESSION["authenticated_username"] == "")
                {
                  $result = $pdo->query("SELECT * FROM  post ORDER BY DatePosted DESC LIMIT 20;");
                }
                else
                {
                  $loggedInUser = $_SESSION["authenticated_username"];
                  $result = $pdo->query("SELECT * FROM team JOIN usersubscription ON team.teamID = usersubscription.Team_TeamID JOIN post ON usersubscription.Team_TeamID = post.Team_TeamID WHERE usersubscription.User_UserID = '$loggedInUser';");
                }

                $posts = $result->fetchAll(PDO::FETCH_DEFAULT);

                foreach($posts as $post)
                {
                  ?>
                  <li class = "post-list">
                    <span class='posted-by'>Posted by: <?php echo $post['User_UserID']?></span>
                    <h2> <?php echo $post['Title'] ?></h2>
                    <p><?php echo $post['Content'] ?></p>
                    <div class='likes'>
                      <form method='POST' action='increment-likes.php'>
                        <input type='hidden' name='post_id' value='<?php echo $post['PostID'] ?>'>
                        <button class='like-button'>Like</button>
                      </form>
                      <span class='like-count'><?php echo $post['NumberOfLikes'] ?></span>
                    </div>
                    <span class='team-label'><?php echo $post['Team_Name'] ?></span>
                  </li>
                <?php
                }
                ?>
              </ul>
            </div>
          </div>

          <div class = "index-left-bar-container">
            <img
              alt="LeftBar1224"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/37134d5d-04b3-4a0c-a6d4-fd1a05284852?org_if_sml=14699"
              class="index-left-bar"
            />
              <ul class ="list">
              <?php
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
                $result = $pdo->query("SELECT * FROM team JOIN usersubscription ON team.teamID = usersubscription.Team_TeamID WHERE usersubscription.User_UserID = '$loggedInUser';");
              }
              

              $teams = $result->fetchAll(PDO::FETCH_DEFAULT);

              foreach($teams as $team)
              {
              ?>
              
              <html>
              <li>
                <div class='index-huddle-user'>
                  <span class='index-text08'><span><?php echo $team['Name']?></span></span>
                  <div class='index-huddle-pic'>
                    <img
                      alt='<?php echo $team['Name']?> logo'
                      src='logos/<?php $str = str_replace(' ','',$team['Name']); echo $str . ".png"?>'
                      class='index-ellipse6'
                    />
                  </div>
                </div>
              </li>
              </html>

              <?php
              }
              $pdo = null;
            ?>
            </ul>
          </div>
          <span class="index-text"><span>Huddle</span></span>
          <span class="index-text02"><span>Upcoming Matches</span></span>
          <?php
              if($_SESSION["authenticated_username"] == "")
              {
                ?>
                <span class="index-text04"><span>Feed</span></span>
                <span class="index-text06"><span>Top 5 Huddle Teams</span></span>
              <?php
              }
              else
              {
              ?>
                <span class="index-text04"><span>My Feed</span></span>
                <span class="index-text06"><span>My Teams</span></span>
                <div class="index-add-new-teams-button-container">
                  <a href="add-new-teams.php" class="index-add-new-teams-button">Add New Teams</a>
                </div>

              <?php
              }
              ?>
          <select class="hamburger-drop-down" id="go-to-pg">
            <option value="">Menu</option>
            <option value="./index.php">Home Page</option>
            <option value="./schedule-page.php">Schedule Page</option>
            <option value="./stats-page.php">Stats Page</option>
            <option value="./new-team-page.php">Team Page</option>
          </select>

          <script> 
            const menuIcon = document.querySelector('.hamburger-drop-down');
            const selectElement = document.querySelector('#go-to-pg');

            menuIcon.addEventListener('change', () => {
              const selectedValue = selectElement.value;
              if (selectedValue !== '') {
                window.location.href = selectedValue;
              }
            });
          </script>
          <?php
            if (!$_SESSION["authenticated_username"] == ""){
              
              echo "<form action='post-page.php' method='get'>
                      <button class='index-page-post-icon' type='submit'>
                        <span style='font-family: Work Sans; font-style: ExtraBold; font-weight: 800; font-size: 21px; color: rgb(32,92,252);'>
                          Post
                        </span>
                      </button>
                    </form>";
              echo "<form action='login-page.php' method='get'>
                <button class='index-log-icon' type='submit'>
                <span style='font-family: Work Sans; font-style: ExtraBold; font-weight: 800; font-size: 21px; color: rgb(32,92,252);'>
                  Log Out
                </span>
                </button>
            </form>";
            } else {
              echo "<form action='login-page.php' method='get'>
                <button class='index-log-icon' type='submit'>
                <span style='font-family: Work Sans; font-style: ExtraBold; font-weight: 800; font-size: 21px; color: rgb(32,92,252);'>
                  Log In
                </span>
                </button>
              </form>";
            }
          ?>
        </div>
      </div>
    </div>
    <script
      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>

