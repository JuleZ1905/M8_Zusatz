let new_button = document.getElementById("random-button");
let message = document.getElementById("message-text");

new_button.addEventListener("click", function () {
  $.post("/index.php", { action: "new" }).done(function (data) {
    message.innerHTML = "\"" + data + "\"";
  });
});
