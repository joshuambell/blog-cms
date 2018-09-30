<?php

function () {
    include 'header.php';
}
?>

<?php

function () {
    include 'nav.php';
}
?>

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
                               <form action="submit-post.php" method='POST'>...</form>
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
        
                        <?php
                          include 'footer.php';
                          ?>
                        
                        </body>
                        </html>
