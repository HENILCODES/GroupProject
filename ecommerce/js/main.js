$(window).on("scroll", function () {
  $(this).scrollTop() > 130
    ? $(".header-part").addClass("active")
    : $(".header-part").removeClass("active");
}),
  $(window).on("scroll", function () {
    $(this).scrollTop() > 700 ? $(".backtop").show() : $(".backtop").hide();
  }),
  $(function () {
    $(".dropdown-link").click(function () {
      $(this).next().toggle(),
        $(this).toggleClass("active"),
        $(".dropdown-list:visible").length > 1 &&
          ($(".dropdown-list:visible").hide(),
          $(this).next().show(),
          $(".dropdown-link").removeClass("active"),
          $(this).addClass("active"));
    });
  }),
  $(".nav-link").on("click", function () {
    $(".nav-list li a").removeClass("active"), $(this).addClass("active");
  }),
  $(".header-cate, .cate-btn").on("click", function () {
    $("body").css("overflow", "hidden"),
      $(".category-sidebar").addClass("active"),
      $(".category-close").on("click", function () {
        $("body").css("overflow", "inherit"),
          $(".category-sidebar").removeClass("active"),
          $(".backdrop").fadeOut();
      });
  }),
  $(".header-user").on("click", function () {
    $("body").css("overflow", "hidden"),
      $(".nav-sidebar").addClass("active"),
      $(".nav-close").on("click", function () {
        $("body").css("overflow", "inherit"),
          $(".nav-sidebar").removeClass("active"),
          $(".backdrop").fadeOut();
      });
  }),
  $(".header-cart, .cart-btn").on("click", function () {
    $("body").css("overflow", "hidden"),
      $(".cart-sidebar").addClass("active"),
      $(".cart-close").on("click", function () {
        $("body").css("overflow", "inherit"),
          $(".cart-sidebar").removeClass("active"),
          $(".backdrop").fadeOut();
      });
  }),
  $(".header-user, .header-cart, .header-cate, .cart-btn, .cate-btn").on(
    "click",
    function () {
      $(".backdrop").fadeIn(),
        $(".backdrop").on("click", function () {
          $(this).fadeOut(),
            $("body").css("overflow", "inherit"),
            $(".nav-sidebar").removeClass("active"),
            $(".cart-sidebar").removeClass("active"),
            $(".category-sidebar").removeClass("active");
        });
    }
  ),
  $(".coupon-btn").on("click", function () {
    $(this).hide(), $(".coupon-form").css("display", "flex");
  }),
  $(".header-src").on("click", function () {
    $(".header-form").toggleClass("active"),
      $(this).children(".fa-search").toggleClass("fa-times");
  }),
  $(".wish").on("click", function () {
    $(this).toggleClass("active");
  }),
  $(".product-add").on("click", function () {
    var e = $(this).next(".product-action");
    $(this).hide(), e.css("display", "flex");
  }),
  $(".action-plus").on("click", function () {
    var e = $(this).closest(".product-action").children(".action-input").get(0)
        .value++,
      c = $(this).closest(".product-action").children(".action-minus");
    e > 0 && c.removeAttr("disabled");
  }),
  $(".action-minus").on("click", function () {
    2 ==
      $(this).closest(".product-action").children(".action-input").get(0)
        .value-- && $(this).attr("disabled", "disabled");
  }),
  $(".review-widget-btn").on("click", function () {
    $(this).next(".review-widget-list").toggle();
  }),
  $(".offer-select").on("click", function () {
    $(this).text("Copied!");
  }),
  $(".modal").on("shown.bs.modal", function (e) {
    $(".preview-slider, .thumb-slider").slick("setPosition", 0);
  }),
  $(".profile-card.schedule").on("click", function () {
    $(".profile-card.schedule").removeClass("active"),
      $(this).addClass("active");
  }),
  $(".profile-card.contact").on("click", function () {
    $(".profile-card.contact").removeClass("active"),
      $(this).addClass("active");
  }),
  $(".profile-card.address").on("click", function () {
    $(".profile-card.address").removeClass("active"),
      $(this).addClass("active");
  }),
  $(".payment-card.payment").on("click", function () {
    $(".payment-card.payment").removeClass("active"),
      $(this).addClass("active");
  });

/* <-------------------------------------- Special Discount ---------------------------------------> */

function makeTimer() {
  var endTime = new Date("May 31, 2023 23:59:59 GMT+00:00"); // Set your desired end date and time
  var now = new Date();
  var timeLeft = endTime - now;

  if (timeLeft < 0) {
    // If the countdown has ended
    clearInterval(timer);
    $("#timer").html("<span class='countdown-time'>Countdown ended</span>");
    return;
  }

  var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
  var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

  if (days < 10) {
    days = "0" + days;
  }
  if (hours < 10) {
    hours = "0" + hours;
  }
  if (minutes < 10) {
    minutes = "0" + minutes;
  }
  if (seconds < 10) {
    seconds = "0" + seconds;
  }

  $("#days").html(days + "<span>Days</span>");
  $("#hours").html(hours + "<span>Hours</span>");
  $("#minutes").html(minutes + "<span>Minutes</span>");
  $("#seconds").html(seconds + "<span>Seconds</span>");
}

makeTimer(); // Call the function once initially to avoid delay in displaying the countdown

var timer = setInterval(function () {
  makeTimer();
}, 1000);
