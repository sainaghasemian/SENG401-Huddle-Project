<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SchedulePage - Huddle</title>
    <meta property="og:title" content="SchedulePage - Huddle" />
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
      <link href="./schedule-page.css" rel="stylesheet" />

      <div class="schedule-page-container">
        <div class="schedule-page-full-page-template">
          <div class="schedule-page-first-schedule-table">
            <img
              alt="Rectangle116656"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/e17f0e3c-709b-496a-884e-60471994cf1b?org_if_sml=14366"
              class="schedule-page-rectangle11"
            />
            <img
              alt="Rectangle106654"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/46280a91-2cd4-49c1-80d5-5c4152b5c027?org_if_sml=11375"
              class="schedule-page-rectangle10"
            />
            <img
              alt="Line26662"
              src="public/playground_assets/line26662-lvbj.svg"
              class="schedule-page-line2"
            />
            <img
              alt="Line36663"
              src="public/playground_assets/line36663-nn5.svg"
              class="schedule-page-line3"
            />
            <img
              alt="Line46664"
              src="public/playground_assets/line46664-44n.svg"
              class="schedule-page-line4"
            />
            <img
              alt="Line56665"
              src="public/playground_assets/line56665-gbzw.svg"
              class="schedule-page-line5"
            />
            <span class="schedule-page-text"><span>Matchup</span></span>
            <span class="schedule-page-text02"><span>Time</span></span>
            <span class="schedule-page-text04"><span>Networks</span></span>
          </div>
          <span class="schedule-page-text06"><span>Schedule</span></span>
          <span class="schedule-page-text08"><span>Date</span></span>
          <img
            alt="Separator6645"
            src="public/playground_assets/separator6645-yji4.svg"
            class="schedule-page-separator"
          />
          <button class="schedule-page-select-team-button">
            <img
              alt="Rectangle126650"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/06fa1261-2387-44ba-9610-e5147933c0a5?org_if_sml=11235"
              class="schedule-page-rectangle12"
            />
            <span class="schedule-page-text10"><span>Select Team</span></span>
            <img
              alt="Polygon16652"
              src="public/playground_assets/polygon16652-pzcb.svg"
              class="schedule-page-polygon1"
            />
          </button>
          <span class="schedule-page-text12">Date</span>
          <div class="schedule-page-second-schedule-table">
            <img
              alt="Rectangle136611"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/46dbe902-32fb-41ba-a04b-02fc20f75c06?org_if_sml=11375"
              class="schedule-page-rectangle13"
            />
            <img
              alt="Rectangle126611"
              src="public/playground_assets/rectangle126611-fsef-200h.png"
              class="schedule-page-rectangle121"
            />
            <span class="schedule-page-text13"><span>Matchup</span></span>
            <span class="schedule-page-text15"><span>Time</span></span>
            <span class="schedule-page-text17"><span>Networks</span></span>
          </div>
          <img
            alt="TopBar7468"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/2cd18f47-7237-4b4f-9e67-e38cbb971201?org_if_sml=1886"
            class="schedule-page-top-bar"
          />
          <img
            alt="SearchBar7468"
            src="public/playground_assets/searchbar7468-l9i.svg"
            class="schedule-page-search-bar"
          />
          <a href="home-account-page.php" class="schedule-page-navlink">
            <img
              alt="AccountIcon7469"
              src="public/playground_assets/accounticon7469-3mjm.svg"
              class="schedule-page-account-icon"
            />
          </a>
          <span class="schedule-page-text19"><span>Huddle</span></span>
          <img
            alt="MenuIcon1206"
            src="public/playground_assets/menuicon1206-29e7.svg"
            class="schedule-page-menu-icon"
          />
        </div>
      </div>
    </div>
    <script
      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>