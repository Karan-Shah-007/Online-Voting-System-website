<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   <link rel="stylesheet" href="newlogin.css">
</head>
<body>
<script language="javascript" type="text/javascript">
window.history.forward();
</script>
<script language="JavaScript">
  /**
    * Disable right-click of mouse, F12 key, and save key combinations on page
    * By Arthur Gareginyan (https://www.arthurgareginyan.com)
    * For full source code, visit https://mycyberuniverse.com
    */
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
    // "C" key
      if (e.ctrlKey && e.keyCode == 67) {
        disabledEvent(e);
      }
    // "V" key
      if (e.ctrlKey && e.keyCode == 86) {
        disabledEvent(e);
      }
      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };
</script>
<div class="images">
<form method="post" action="logincheck.php">  
  
        <h1>Login</h1>
    <div class="login-box">

          <input type="text" name="voterid"  autocomplete="off" class="text-box" placeholder="Voter-Id number" required autofocus>
        <br><br>
           <input type="text" name="firstname" autocomplete="off" class="text-box" placeholder="First name" required>
     <br><br>

           <input type="text" name="lastname" autocomplete="off" class="text-box" placeholder="Last name" required>
<br><br>        
            <input class="btn" type="submit" name="submit" value="Submit">

</div>

</div>
</body>
</html>