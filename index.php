<?php
    // Include the database connection file
    include_once("config.php");
    include_once("databaseQueries.php");
    
    sessionStart();
?>
<span class="error-message-pass"><span><?php echo $_SESSION["message"]?></span></span>
<?php
    resetMessageVariable();
    verifyLogin($pdo);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="script.js"></script>
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

      
        
          <img
            alt="TopBar1224"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/d9a678dc-2593-4226-8391-de5b2bad1158?org_if_sml=1887"
            class="index-top-bar"
          />
              
            <?php
              getHomePageGameSchedules($pdo);
            ?>

          <div class = "index-middle-bar-container">
          <img
              alt="MiddleBar1224"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/62e3b6c0-216b-4f2b-9101-7bff224e0d07?org_if_sml=16661"
              class="index-middle-bar"
            />
            <div class = "scrollable-list">
              <ul>
                <?php
                  $posts = getPosts($pdo);

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
              $teams = getTheTop5Teams($pdo);

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
                <form id = post action = "add-new-teams.php" method="post">
                  <div class="index-add-new-teams-container">
                    <select class = "index-page-teams" name = "team">
                      <option value="">Add/Remove Team</option>
                      <option value="Anaheim Ducks">Anaheim Ducks</option>
                      <option value="Arizona Coyotes">Arizona Coyotes</option>
                      <option value="Boston Bruins">Boston Bruins</option>
                      <option value="Buffalo Sabres">Buffalo Sabres</option>
                      <option value="Calgary Flames">Calgary Flames</option>
                      <option value="Carolina Hurricanes">Carolina Hurricanes</option>
                      <option value="Chicago Blackhawks">Chicago Blackhawks</option>
                      <option value="Colorado Avalanche">Colorado Avalanche</option>
                      <option value="Columbus Blue Jackets">Columbus Blue Jackets</option>
                      <option value="Dallas Stars">Dallas Stars</option>
                      <option value="Detroit Red Wings">Detroit Red Wings</option>
                      <option value="Edmonton Oilers">Edmonton Oilers</option>
                      <option value="Florida Panthers">Florida Panthers</option>
                      <option value="Los Angeles Kings">Los Angeles Kings</option>
                      <option value="Minnesota Wild">Minnesota Wild</option>
                      <option value="Montreal Canadiens">Montreal Canadiens</option>
                      <option value="Nashville Predators">Nashville Predators</option>
                      <option value="New Jersey Devils">New Jersey Devils</option>
                      <option value="New York Islanders">New York Islanders</option>
                      <option value="New York Rangers">New York Rangers</option>
                      <option value="Ottawa Senators">Ottawa Senators</option>
                      <option value="Philadelphia Flyers">Philadelphia Flyers</option>
                      <option value="Pittsburgh Penguins">Pittsburgh Penguins</option>
                      <option value="San Jose Sharks">San Jose Sharks</option>
                      <option value="Seattle Kraken">Seattle Kraken</option>
                      <option value="St. Louis Blues">St. Louis Blues</option>
                      <option value="Tampa Bay Lightning">Tampa Bay Lightning</option>
                      <option value="Toronto Maple Leafs">Toronto Maple Leafs</option>
                      <option value="Vancouver Canucks">Vancouver Canucks</option>
                      <option value="Vegas Golden Knights">Vegas Golden Knights</option>
                      <option value="Washington Capitals">Washington Capitals</option>
                      <option value="Winnipeg Jets">Winnipeg Jets</option>
                    </select>
                    <button type="submit" class="index-add-new-teams-button">Add/Remove</button>
                  </div>
                </form>
              <?php
              }
              ?>
          <select class="menu-drop-down" id="go-to-pg">
            <option value="">Menu</option>
            <option value="./index.php">Home Page</option>
            <option value="./schedule-page.php">Schedule Page</option>
            <option value="./stats-page.php">Stats Page</option>
            <option value="./new-team-page.php">Team Page</option>
          </select>

          <script> 
            const menuIcon = document.querySelector('.menu-drop-down');
            const selectElement = document.querySelector('#go-to-pg');

            menuIcon.addEventListener('change', () => {
              const selectedValue = selectElement.value;
              if (selectedValue !== '') {
                window.location.href = selectedValue;
              }
            });
          </script>
          <?php
            if (checkAuthentication()){
              
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
    <script
      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
    
  </body>
</html>

