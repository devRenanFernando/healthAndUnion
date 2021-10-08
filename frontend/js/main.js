jQuery(document).ready(function ($) {
  // HEADER
  window.onscroll = function () {
    if (window.scrollY > 140) {
      $("#header").addClass("active");
      $("#header").removeClass("py-3");
    } else {
      $("#header").removeClass("active");
      $("#header").addClass("py-3");
    }
  };

  // ISOTOPE
  let btns = $("#posts .button-group button");

  btns.click(function (e) {
    $("#posts .button-group button").removeClass("active");
    e.target.classList.add("active");

    let selector = $(e.target).attr("data-filter");
    $("#posts .grid").isotope({
      filter: selector,
    });
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
    autoplay: true,
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
      1000: {
        items: 2,
      },
    },
  });
});
