<?php
include 'nav.php';
?>

<?php
include 'header.php';
?>

<?php
  include_once 'includes/db_connect.php';
?>
        <!-- Page content -->
        <main>
        <!--getPostTitlesFromDatabase:
        
        $conn;

        <?php
           function getPostTitlesFromDatabase () {
            // Get all the post titles from posts table
          include'includes/db_connect.php';
          $sql = "SELECT title FROM posts";
          $result = mysqli_query($conn, $sql);

          //Get each result row as an assoc array, then add title to $postTitles
          $postTitles = array ();
          while($row = mysqli_fetch_assoc($result)){
            array_push($postTitles, $row['title']);
          }
            return $postTitles;
           }
        ?>

        <div class="w3-content" style="max-width:2000px;margin-top:46px">
        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">
            <h2 class="w3-wide">Hello World</h2>
            <p class="w3-opacity"><i>Dipiscing elit</i></p>
            <p class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        
        <section>
        <div class="w3-row w3-padding-32">
         <h2 class="w3-wide">Posts</h2>
            
          <div class="w3-third">
             <p>Title #1</p>
                <img src="https://www.w3schools.com/w3images/bandmember.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
              </div>
             
              <div class="w3-third">
                <p>Title #2</p>
                <img src="https://www.w3schools.com/w3images/bandmember.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
              </div>

              <div class="w3-third">
                <p>Title #3</p>
                <img src="https://www.w3schools.com/w3images/bandmember.jpg" class="w3-round" alt="Random Name" style="width:60%">
              </div>
              
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