
<!DOCTYPE html>
<html lang="en">
<head>
<script language="javascript" type="text/javascript">
window.history.forward();
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="vote.css">
</head>
<body>
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
<div class="voteimages">
<form method="post" action="savevote.php">
<div class="bjp">
<button type="submit"  class="button" name="BJP" value="bjp">
<img src="bjpsymbol.png" width="20%" height="10%">
<div class="text">
Bhartiya Janta Party
</div>
</button>
</div>

<div class="cong">
                <button class="button" type="submit" name="Congress" value="congress">
                    <img src="congsymbol.png" width="15%" height="10%">
                    <div class="text">
                        Congress
                    </div>
                </button>
            </div>


            <div class="aap">
                <button class="button" type="submit" name="AAP" value="aap">
                    <img src="aapsymbol.jpg" width="18%" height="10%">
                    <div class="text">
                        Aam Aadmi Party
                    </div>
                </button>
            </div>

<div class="shiv">
                <button class="button" type="submit" name="ShivSena" value="Shiv">
                    <img src="shivsymbol.jpg" width="18%" height="10%">
                    <div class="text">
                        Shiv Sena
                    </div>
                </button>
            </div>

</form>
</div>

</body>
</html>