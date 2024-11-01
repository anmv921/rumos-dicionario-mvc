const dialog = document.querySelector("dialog");

let showButton = document.querySelector("#btn-show-dialog");

const closeButton = document.querySelector("dialog button");

if ( showButton ) {
  // "Show the dialog" button opens the dialog modally
  showButton.addEventListener( "click", () => {
    dialog.showModal();
  });
}

if ( closeButton ) {
  // "Close" button closes the dialog
  closeButton.addEventListener("click", () => {
    dialog.close();
  });
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
}

function openNav() {
  document.getElementById("mySidebar").style.width = "250px"
}

