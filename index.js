// Function to handle route selection
function route() {
  var i = document.getElementById("fm").value.toUpperCase();
  var j = document.getElementById("to").value.toUpperCase();

  if (i === 'SIRKALI' && j === 'MAYILADUTHURAI') {
    window.location.href = "bus0.php";
  } else if (i === 'MAYILADUTHURAI' && j === 'SIRKALI') {
    window.location.href = "bus1.html";
  } else if (i === 'SIRKALI' && j === 'CHIDAMBARAM') {
    window.location.href = "bus2.html";
  } else if (i === 'CHIDAMBARAM' && j === 'SIRKALI') {
    window.location.href = "bus3.html";
  }
    else {
    document.getElementById("modalMessage").innerHTML = "<p>Please Enter Place Name Correctly</p>";
    modal.style.display = "block";
  }
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("busInfoBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
