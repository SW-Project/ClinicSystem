
function showTime(str,r) {
    if (str == "") {
      document.getElementById("txtHint").innerHTML = "";
      return;
    } else { 
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txt").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET","getClinic.php?q="+str,true);
      xmlhttp.send();
    }
  }




