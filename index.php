?>

function () {
    include 'header.php';
}
?>
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
        <!-- Page content -->
        <!--getPostTitlesFromDatabase:
        <?php
        function getPostTitlesFromDatabase() {
          // TODO in Module 4
          // get this data from a database instead of hardcoding it
          $postTitles = array("Blog Post 1", "Blog Post 2", "Blog Post 3");
          return $postTitles;
          }
        ?>

        <ul>
        <?php
            $postTitles = getPostTitlesFromDatabase();

            foreach($postTitles as $postTitle) {
                echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . "</a></li>";
            }
          ?>
        </ul>

        <main>
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
        </section>
        
        </main>
        
        <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
                <p class="w3-medium">Website by: Josh Bell</p>
                 <p class="w3-medium">Contact me via email: <a href="mailto:jbell14@lesley.edu">jbell14@lesley.edu</a>.</p>
        </footer>
        
        </body>
        </html>