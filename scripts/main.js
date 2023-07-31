$(document).ready(function(){

  $('#toggle').addClass('active');

  const btn = document.querySelector("#toggle-theme-colour");
  const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

  const currentTheme = localStorage.getItem("theme");
  if (currentTheme == "dark") {
    document.body.classList.toggle("dark-theme");
    $('#html').addClass("dark-theme");
  } else if (currentTheme == "light") {
    document.body.classList.toggle("light-theme");
  }

  btn.addEventListener("click", function () {
    if (prefersDarkScheme.matches) {
      document.body.classList.toggle("light-theme");
      var theme = document.body.classList.contains("light-theme")
        ? "light"
        : "dark";
    } else {
      document.body.classList.toggle("dark-theme");
      var theme = document.body.classList.contains("dark-theme")
        ? "dark"
        : "light";
    }
    localStorage.setItem("theme", theme);

    $('#toggle-change-type').html(theme);

    if ($("body").hasClass("dark-theme") == true) {
      $('#html').addClass("dark-theme");
    }else{
      $('#html').removeClass("dark-theme");
    }

  });


});


