<!DOCTYPE html>
<html>
<title>Impressionism</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#index" class="w3-bar-item w3-button w3-padding-large w3-hide-small">HOME</a>
    <a href="#post-submission" class="w3-bar-item w3-button w3-padding-large w3-hide-small">POST SUBMISSION</a>
<!--    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">Merchandise</a>
        <a href="#" class="w3-bar-item w3-button">Extras</a>
        <a href="#" class="w3-bar-item w3-button">Media</a>
      </div>-->
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#index" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
  <a href="#post-submission" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">POST SUBMISSION</a>
</div>

<header>
        <div class="w3-display-container w3-center">
            <img src="/w3images/la.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
              <h3>Content</h3>
              <p><b>nostrud exercitation ullamco laboris nisi ut aliquip</b></p>   
            </div>
        </header>
        <!-- Page content -->
        <main>
                <div class="w3-content" style="max-width:2000px;margin-top:46px">
                <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">
                    <h2 class="w3-wide">Hello World</h2>
                    <p class="w3-opacity"><i>Dipiscing elit</i></p>
                    <p class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                    <section>
                            <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
                               <h2 class="w3-wide w3-center">POST</h2>
                               <div class="w3-col m6">
                                   <form action="/action_page.php" target="_blank">
                                     <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                                       <div class="w3-half">
                                         <input class="w3-input w3-border" type="text" placeholder="Title" required name="Title">
                                       </div>
                                       <div class="w3-half">
                                         <input class="w3-input w3-border" type="text" placeholder="Author" required name="Author">
                                       </div>
                                       <div class="w3-half">
                                            <input class="w3-input w3-border" type="datetime-local" placeholder="Date" required name="Date">
                                          </div>
                                     </div>
                                     <textarea rows="6" cols="60" type="text" placeholder="Post" required name="Post"></textarea>
                                     <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
                                   </form>
                                 </div>
                               </div>
                             </div>           
                            </section>
                        </main>
        
                        <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
                                <p class="w3-medium">Website by: Josh Bell</p>
                                 <p class="w3-medium">Contact me via email: <a href="mailto:jbell14@lesley.edu">jbell14@lesley.edu</a>.</p>
                        </footer>
                        
                        </body>
                        </html>
