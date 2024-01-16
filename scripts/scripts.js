  //mobile logic
  function myFunction() {
    var x = document.getElementById("myLinks");
    $("#overlay").fadeToggle(200); // Toggle overlay on every click
    x.style.display = x.style.display === "block" ? "none" : "block"; // Toggle menu visibility
  }

  function toggleButtonText() {
    const buttonText = document.querySelector(".button-text"); // Select the text within the button
    // Toggle the text visibility
    buttonText.style.opacity = buttonText.style.opacity == 0 ? 1 : 0;
  }
  
  // Toggle the text visibility every 20 seconds
  setInterval(toggleButtonText, 20000);
  
window.onload = function() {

  $(function overlayX() {
    $("#overlay").hide(); // Start hidden
    // On hover over dropdown links:
    $(".topnav").hover(function() {
      $("#overlay").fadeIn(200);
    }, function() {
      $("#overlay").fadeOut(200);
    });
  });

  document.addEventListener('click', function(e) {
    if(e.target && e.target.nodeName == "BUTTON" && e.target.classList.contains('share-button')) {
        showSnackbar();
        share(e.target);
    }
  });

  function share(button) {
    // Get the associated input field
    var copyText = button.querySelector(".shareLink");

    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);
  }

  function showSnackbar() {
    // Get the snackbar DIV
    var x = document.getElementById("snackbar");

    // Add the "show" class to DIV
    x.className = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
  }

  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var btn = document.getElementById("modalBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  document.addEventListener('click', function(e) {
    if ((e.target.nodeName == "BUTTON" && e.target.classList.contains('modalBtn')) || 
        (e.target.nodeName == "BUTTON" && e.target.classList.contains('BtnCarrito'))) {
      modal.style.display = "block";
    }
  });
  

  mostrarCarrito();

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

  const counterValue = document.getElementById('counter-value');
  const incrementBtn = document.getElementById('increment-btn');
  const decrementBtn = document.getElementById('decrement-btn');
  
  if (counterValue && incrementBtn && decrementBtn) {
    let counter = 1;

    // To increment the value of counter
    incrementBtn.addEventListener('click', () => {
        counter++;
        counterValue.innerHTML = counter;
    });
  
    // To decrement the value of counter
    decrementBtn.addEventListener('click', () => {
      if (counter > 1) { // Only decrement if counter is greater than 1
          counter--;
          counterValue.innerHTML = counter;
      }
    });
  }
}