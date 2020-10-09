function showModal(card) {
			  $("#" + card).show();
			  $(".modal").addClass("show");
			}

function closeModal() {
  $(".modal").removeClass("show");
  setTimeout(function () {
    $(".modal .modal-card").hide();
  }, 300);
}

function loading(status, tag) {
  if (status) {
    $("#loading .tag").text(tag);
    showModal("loading");
  }
  else {
    closeModal();
  }
}

function showMessage(message) {
  $("#Message .tag").text(message);
  showModal("Message");
}

//Genera una cadena aleatoria según la longitud dada
function getRandomString(length) {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for (var i = 0; i < length; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}