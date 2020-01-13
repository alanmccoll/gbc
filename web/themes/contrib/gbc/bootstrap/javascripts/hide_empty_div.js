//If div is empty or contains '...', hide
var divs = document.querySelectorAll(".carousel-caption");
Array.from(divs).forEach(function(div) {
  if (div.textContent.indexOf("<p>hideme</p>") >= 0 || div.textContent.indexOf("hideme") >= 0) {
    div.style.display = "none";
  }
});
