<?php require "home.php" ?>
<script>
  $(".boxClass").hide();
  $("footer").insertAfter($("body"));
</script>
<style >
<style >

  #newAlbumBox{
    width:15%;
    margin-top:30px;
    height: 160px;
    padding:10px;
    padding-left:20px;
  }
  h2{
    padding-bottom:10px;
    margin-left:0px;
    padding-left: 0px;
  }
  .btn{
    padding-top: 18px;
    padding-bottom:2px;
    width:50%;
    height:20px;
  }
  a:hover{
    border-bottom: 1px;
  }


</style>

<form style="margin-bottom:0px" class="" action="album.php" method="post">
  <div class="boxClass" id = "newAlbumBox">
    <h2>New Album:</h2>
    <input style = "width:50%; height:20px; padding-left:5px"type="text" name="newAlbumName" value="" placeholder="Name:">
    <input type="submit" name="save2" value="Save">
    <div id = 'back' class='btn'><a href = "album.php">Back</a></div>
  </div>
</form>
