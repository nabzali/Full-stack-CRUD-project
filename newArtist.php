  <?php require "home.php" ?>
  <script>
    $(".boxClass").hide();
    $("footer").insertAfter($("body"));
  </script>
  <style >

    #newArtistBox{
      width:20%;
      margin-top:30px;
      height: 160px;
      padding:10px;
      padding-left:20px;
    }
    h2{

      margin-left:0px;
      padding-left: 0px;
    }
    .btn{
      font-size: 13px;
      color: white;
      vertical-align: center;
      border-radius: 4px;
      text-align: center;
      font-weight: bold;
      background-color: #6EB6D7;
      height: 10px;
      width: 40px;
      margin-top:15px;
      padding:10px;
      padding-top:5px;
    }
    a:hover{
      border-bottom: 1px;
    }
    .btn:hover{
      box-shadow: inset 0 0 100px 100px rgba(255, 255, 255, 0.5);
    }


  </style>

  <form style="margin-bottom:0px" class = "" action="newArtist.php" method="post">
    <div class="boxClass" id = "newArtistBox">
      <h2>New Artist:</h2>
      <input style = "width:90%; height:20px; padding-left:5px"type="text" name="newArtistName" placeholder="Enter new Artist name:">
      <input style = "display:block; margin-top:15px; width:60px" type="submit" name="save1" value="Save" class = "">
      <div style = id = 'back' class='btn'><a style = "color:white; text-decoration:none" href = "artist.php">Back</a></div>

    </div>
</form>

<?php
if (isset ($_POST['save1'])){
  if ($_POST['newArtistName'] != ""){
    $s = $_POST['newArtistName'];
    $newsql = "INSERT INTO artist (artName) VALUES ('$s');";
    $result = mysqli_query($conn, $newsql);
    echo "<p style = 'color:#00e600; border:1px dotted #00e600; text-align:center; padding:10px'>Database updated successfully!</p>";
  }else{
    echo "<p style = 'color:#ff4d4d; border:1px dotted #ff4d4d; text-align:center; padding:10px'>Cannot leave artist name empty.</p>";
  }

}
?>
