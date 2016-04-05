
<div id="user">
<p><strong><u>Submitted information</strong></u></p>

<p>Name: <?php echo $_POST["name"]; ?></p>
<p>Dojo Location: <?php echo $_POST["location"]; ?></p>
<p>Favorite Language: <?php echo $_POST["language"]; ?>!!!</p>
<p>Comment: <?php echo $_POST["comment"]; ?></p>
<div id="go_back"><a href="index.html">Go back!</a></div>
<!-- <button id="btn_back">Go back!</button> -->
</div>

<!-- <script>
$(document).ready( function() {
  $('#btn_back').on('click', function() {
    window.location='index.html';
  });

  });

</script> -->

<style>

#go_back {
  width: 80px;
  height: 30px;
  background-color: blue;
  border-radius: 5px;
  margin-left: 300px;
  margin-top: 80px;
}

#go_back a {
  color: #fff;
  text-decoration: none;
  padding: 5px;
}

#user {
  border: 2px solid #5887d6;
  background: rgba(44, 205, 221, 0.4);
  width: 400px;
  height: 300px;
}

p {
  margin-left: 30px;
}
</style>
