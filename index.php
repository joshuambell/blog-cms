<?php
include 'nav.php';
?>

<?php
include 'header.php';
?>

<script>
    alert("Hello World");
</script>

<body>
<main>
 <!--getPostTitlesFromDatabase:-->

<?php
    function getPostTitlesFromDatabase() {

  // Get all the post titles from the posts table
  include_once 'db_connect.php';

  $sql = "SELECT title FROM posts";
  $result = mysqli_query($conn, $sql);
  

  // Get each result row as an assoc array, then add title to $postTitles
  $postTitles = array();
  while($row = mysqli_fetch_assoc($result)){
      array_push($postTitles, $row['title']);
  }
  return $postTitles;
}
?>
</main>
        
        <?php
  include 'footer.php';
?>
     
        </body>
        </html>