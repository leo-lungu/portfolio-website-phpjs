function confirmClear() {
    var x = confirm("Are you sure you want to delete?");
    if (x) {
        document.getElementById("title").reset();
        return true; }
    else {
      return false; }
}

function defaultPrevention() {
        if (document.getElementsByName("title")[0].value == "" && document.getElementsByName("comment")[0].value == "" )
        {
            document.getElementById("title").style.backgroundColor = "blue";
            document.getElementById("comment").style.backgroundColor = "blue";
            alert("Title and comment missing!");
        }
        else if (document.getElementsByName("title")[0].value == "") {
            document.getElementById("title").style.backgroundColor = "blue";
            document.getElementById("comment").style.backgroundColor = null;
            alert("Title missing!");
        }
        else if (document.getElementsByName("comment")[0].value == "") {
            document.getElementById("comment").style.backgroundColor = "blue";
            document.getElementById("title").style.backgroundColor = null;
            alert("Comment missing!");
        } else 
        {
            var form= document.getElementsByName("addblog")[0];
            form.submit();        
        }
    }