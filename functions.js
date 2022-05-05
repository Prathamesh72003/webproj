const sendToast = (msg) => {
  const div = document.createElement("div");
  div.classList.add("snackbar");

  div.id = "emailToast";
  div.innerHTML = msg;
  document.body.appendChild(div);
  var x = document.getElementById("emailToast");
  x.className = "show";
  setTimeout(function () {
    x.className = x.className.replace("show", "");
    document.body.removeChild(div);
  }, 3000);
};

function performOnCart(cust_id, p_id) {
  if (cust_id == 0) {
    sendToast("Please sign in or sign up to add to cart");
    return false;
  }
  var data = new FormData();
  data.append("performOnCart", "performOnCart");
  data.append("cust_id", cust_id);
  data.append("p_id", p_id);

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "functions.php", true);
  xhr.onload = function () {
    // do something to response
    console.log(this.responseText);
    if (this.responseText == "added") {
      // sendToast
      sendToast("Added item to cart");
      // location.reload();
    } else if (this.responseText == "remove") {
      sendToast("Removed item from cart");
    } else {
      sendToast("Something went wrong. Please try again");
    }
  };
  xhr.send(data);
}
