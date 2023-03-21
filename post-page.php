<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PostPage - Huddle</title>
    <meta property="og:title" content="PostPage - Huddle" />
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
      <link href="./post-page.css" rel="stylesheet" />

      <div class="post-page-container">
        <div class="post-page-full-page-template">
          <img
            alt="PostBackgroundBox7446"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/25835f98-1bb5-4f25-9988-1b23b5f9c37d?org_if_sml=19917"
            class="post-page-post-background-box"
          />
          <img
            alt="PostBar7446"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/d01543fd-cbaa-4d88-8067-b10faf880eb1?org_if_sml=11943"
            class="post-page-post-bar"
          />
          <img
            alt="PostIcon7446"
            src="public/playground_assets/posticon7446-bmli.svg"
            class="post-page-post-icon"
          />
          <textarea
            placeholder="Your text goes here..."
            class="post-page-body-post-input textarea"
          ></textarea>
          <input
            type="text"
            placeholder="Title / Subject"
            class="post-page-title-subject-input input"
          />
          <img
            alt="ImageIcon7446"
            src="public/playground_assets/imageicon7446-9yt.svg"
            class="post-page-image-icon"
          />
          <img
            alt="LinkIcon7447"
            src="public/playground_assets/linkicon7447-r0fh.svg"
            class="post-page-link-icon"
          />
          <span class="post-page-text"><span>Post</span></span>
          <span class="post-page-text02"><span>Link</span></span>
          <span class="post-page-text04"><span>Image &amp; Video</span></span>
          <img
            alt="Line17447"
            src="public/playground_assets/line17447-sy7k.svg"
            class="post-page-line1"
          />
          <img
            alt="Rectangle147447"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/67e403a6-97df-4d1a-b32b-0897713429d7?org_if_sml=11125"
            class="post-page-rectangle14"
          />
          <div class="post-page-text-option-bar">
            <span class="post-page-text06">B</span>
            <span class="post-page-text07">i</span>
            <div class="post-page-underline-icon">
              <span class="post-page-text08">U</span>
              <img
                alt="Line27448"
                src="public/playground_assets/line27448-dbpw.svg"
                class="post-page-line2"
              />
            </div>
            <img
              alt="LeftSeparator7449"
              src="public/playground_assets/leftseparator7449-7u6.svg"
              class="post-page-left-separator"
            />
            <img
              alt="RightSeparator7449"
              src="public/playground_assets/rightseparator7449-ff38.svg"
              class="post-page-right-separator"
            />
          </div>
          <button class="post-page-post-button">
            <img
              alt="PostRec7449"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/b56aae9d-329c-4c8c-bea9-0aec0240743e?org_if_sml=11434"
              class="post-page-post-rec"
            />
            <span class="post-page-text09"><span>POST</span></span>
          </button>
          <img
            alt="TopBar7467"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/e446f15a-987e-4129-89ab-284a2ac1ea9d?org_if_sml=1886"
            class="post-page-top-bar"
          />
          <img
            alt="SearchIcon7468"
            src="public/playground_assets/searchicon7468-c8vf.svg"
            class="post-page-search-icon"
          />
          <a href="home-account-page.php" class="post-page-navlink">
            <img
              alt="AccountIcon7468"
              src="public/playground_assets/accounticon7468-2tdj.svg"
              class="post-page-account-icon"
            />
          </a>
          <span class="post-page-text11"><span>Huddle</span></span>
          <button class="post-page-save-as-draft-button">
            <img
              alt="Rectangle127470"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/30bfdc84-0ca7-41b7-9b9b-978f1cb8de45?org_if_sml=1123"
              class="post-page-rectangle12"
            />
            <span class="post-page-text13"><span>Save as Draft</span></span>
          </button>
          <span class="post-page-text15"><span>Create Post</span></span>
          <img
            alt="MenuIcon1205"
            src="public/playground_assets/menuicon1205-ncz.svg"
            class="post-page-menu-icon"
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