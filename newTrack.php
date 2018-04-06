<?php require "home.php" ?>
<script>
  $(".boxClass").hide();
  $("footer").insertAfter($("body"));
</script>
<style >
<style >

  #newTrackBox{
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

<form style="margin-bottom:0px" class="" action="track.php" method="post">
  <div class="boxClass" id = "newTrackBox">
    <h2>New Track:</h2>
    <input style = "width:50%; height:20px; padding-left:5px"type="text" name="newTrackName" value="" placeholder="Name:">
    <input type="submit" name="save3" value="Save">
    <div id = 'back' class='btn'><a href = "track.php">Back</a></div>
  </div>
</form>
