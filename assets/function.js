function validate() {
  var x=document.forms["sign"]["user"].value;
  var y=document.forms["sign"]["password"].value;
  var q=document.forms["sign"]["email"].value;
  var r=document.forms["sign"]["country"].value;
  if(x==""||y==""||q==""||r=="")
  {
    alert("All fields are required!");
    return false;
  }
  else return true;
}
function validatelog() {
  var x=document.forms["sign"]["user"].value;
  var y=document.forms["sign"]["password"].value;
  var q=document.forms["sign"]["email"].value;
  var r=document.forms["sign"]["country"].value;
  if(x==""||y==""||q==""||r=="")
  {
    alert("All fields are required!");
    return false;
  }
  else return true;
}

function al() {
alert("afsf");
}
