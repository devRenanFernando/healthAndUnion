jQuery(document).ready(function ($) {
  // HEADER
  window.onscroll = function () {
    if (window.scrollY > 140) {
      $("#header").addClass("active");
      $("#header").addClass("fixed-top");
      $("#header").removeClass("py-3");
    } else {
      $("#header").removeClass("active");
      $("#header").removeClass("fixed-top");
      $("#header").addClass("py-3");
    }
  };

  // ISOTOPE
  let btns = $("#posts .button-group button");
  let active_a = $("#header .navbar-nav a");

  btns.click(function (e) {
    $("#posts .button-group button").removeClass("active");
    e.target.classList.add("active");

    let selector = $(e.target).attr("data-filter");
    $("#posts .grid").isotope({
      filter: selector,
    });
  });

  active_a.click(function (e) {
    $("#header .navbar-nav a").removeClass("active_a");
    e.target.classList.add("active_a");
  });

  $(window).on("load", function () {
    $("#posts .grid").isotope({
      filter: "*",
    });
  });

  // MAGNIFY
  $(".grid .popup-link").magnificPopup({
    type: "image",
    gallery: {
      enabled: true,
      tPrev: "Anterior",
      tNext: "Próxima",
      tCounter: "%curr% de %total%",
    },
  });

  //OWL
  $(".owl-carousel").owlCarousel({
    loop: false,
    margin: 30,
    autoHeight: true,
    autoplay: true,
    loop: true,
    autoplayTimeout: 6000,
    dots: true,
    lazyLoad: true,
    nav: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1199.98: {
        items: 1,
      },
    },
  });

  // DELETE
  $("a.delete").click(function (e) {
    if (!confirm("Você tem certeza que deseja excluir?")) {
      e.preventDefault();
      return false;
    }
    return true;
  });
});
