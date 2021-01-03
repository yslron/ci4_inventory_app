
// Get the container element
var btnContainer = document.getElementById("myDIV");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("nav-button");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}

//change color of Status Selector
changeFunc = () => {
    let val = document.getElementById("selection").value;
    let x = val;

    if (x == "Available") { 
        $('#selection').addClass("text-primaryv2");
        $('#selection').removeClass("text-danger");
    }else{
        $('#selection').removeClass("text-primaryv2");
        $('#selection').addClass("text-danger");
    }
}



getVal = () => {

    var z = $("#statusGet").text();
    var c = z;
    if (c == "Available") {
        $("#statusGet").addClass( 'text-primaryv2');
        $("#my_id").attr("class", "my_new_class_name");
      }else{
        $("#statusGet").addClass( 'text-danger');
      }

    
}
//td color
$('td').each(function() {
    var $this = $(this)
      if ($this.text() == "Unavailable") {
        $this.addClass('text-danger');
      }else if($this.text() == "Available"){
        $this.addClass('text-primaryv2');
      }
    });


getVal();
