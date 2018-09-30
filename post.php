<?php
include 'nav.php';
?>

<?php
include 'header.php';
?>

<?php
    function getPostDetailsFromDatabase () {
      // Get the post title
      $postTitle = rawurldecode($_GET['title']);

      //Get the post that matches the postTitle
      include_once 'includes/db_connect.php';
      $sql = "SELECT * FROM posts WHERE title=" .$postTitle . "'";
      $result = mysqli_query($conn,$sql);

      //Get the first row from the result as an associative array
      $postDetails = mysqli_fetch_assoc($result);
      return $postDetails;
    }
?>

<?php
      // Post details contains all the data to generate the blog from
      $postDetails = getPostDetailsFromDatabase();
?>
<h1> <?php echo $postDetails["title"]; ?> </h1>
<div> <?php echo $postDetails["author"]; ?> </div>
<div> <?php echo $postDetails["date"]; ?> </div>
<div> <?php echo $postDetails["content"]; ?> </div>

<main>
        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
        <div class="w3-container w3-white">
                <h1 style="text-align:justify" id="title"><b>Post title</b></h1>
                <p style="text-align:justify"class="w3-opacity" id="date">November 27, 2016</p>
                <p style="text-align:justify"class="w3-opacity" id="author">Author Name</p>
                <p class="w3-justify" id="content">Content. Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                <p class="w3-justify">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        </div>
 </main>
 <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
        <p class="w3-medium">Website by: Josh Bell</p>
         <p class="w3-medium">Contact me via email: <a href="mailto:jbell14@lesley.edu">jbell14@lesley.edu</a>.</p>
</footer>

</body>
</html>