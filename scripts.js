var body = document.querySelector("body");
var localStorage = window.localStorage;

document.addEventListener("click", function (clickEvent) {
  if (clickEvent.target.matches("[data-change-theme]")) {
    setTheme(clickEvent.target.dataset.changeTheme);
    console.log(clickEvent.target.dataset.changeTheme);
  }
});

function setTheme(themeClicked) {
  body.dataset.theme = themeClicked;
  localStorage.setItem("theme", themeClicked);
}

if (!localStorage.getItem("theme")) {
  changeTheme("old");
} else {
  body.dataset.theme = localStorage.getItem("theme");
}

function redditColors() {
  var colors = [
    "#D8BFD8",
    "#A0522D",
    "#483D8B",
    "#66CDAA",
    "#DEB887",
    "#FFE4E1",
    "#2E8B57",
    "#7B68EE",
    "#90EE90",
    "#228B22",
    "#FF7F50",
    "#EE82EE",
    "#A52A2A",
    "#4B0082",
    "#000000",
    "#AFEEEE",
    "#D3D3D3",
    "#9370DB",
    "#7FFFD4",
    "#7CFC00",
    "#40E0D0",
    "#FF6347",
    "#FFE4B5",
    "#20B2AA",
    "#FFF0F5",
    "#FF8C00",
    "#800000",
    "#98FB98",
    "#F08080",
    "#FFDAB9",
  ];

  colors.forEach(function (color) {});
}
