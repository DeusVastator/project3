function validation() {
    var title = document.forms["notebookForm"]["title"].value;
    var body = document.forms["notebookForm"]["body"].value;
    if (title == "" || body == "") { document.querySelector(".notify").textContent = "You must fill out all required fields.";
    return false;
    }
}

function alphanumeric(inputtxt)  
{ 
    var title = document.forms["notebookForm"]["title"].value;
    var body = document.forms["notebookForm"]["body"].value;
 var letterNumber = /^[0-9a-zA-Z]+$/;  
 if (inputtxt.value.match(letterNumber)) { 
 return true;
 } else {
     document.querySelector(".notify").textContent = "You must write in only letters and numbers.";
     return false
 }
 
 
 
 
  }  

























