<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
  <head>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="shortcut icon" href="../../img/fav.png" />
    <meta name="author" content="codepixer" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta charset="UTF-8" />
    <title>Car Rentals</title>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="../../css/A.linearicons.css+font-awesome.min.css+bootstrap.css+magnific-popup.css+nice-select.css+animate.min.css,Mcc.BUoncfYbd_.css.pagespeed.cf.goumvgdXb-.css"
    />
    <link
      rel="stylesheet"
      href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"
    />
    <link
      rel="stylesheet"
      href="../../css/A.owl.carousel.css+main.css,Mcc.-z3jUV0v7B.css.pagespeed.cf.AXcunijNo-.css"
    />
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../css/style.css" />
  </head>

  <body>
    <header id="header" id="home">
      <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
          <!-- Logo Code -->
          <div id="logo">
            <div class="row">
              <h3 style="color: white; margin-right: 10px">ADMIN</h3>
              <a style="margin-top: 18px" href="index.html">
                <script data-pagespeed-no-defer>
                  (function () {
                    for (
                      var g =
                          "function" == typeof Object.defineProperties
                            ? Object.defineProperty
                            : function (b, c, a) {
                                if (a.get || a.set)
                                  throw new TypeError(
                                    "ES3 does not support getters and setters."
                                  );
                                b != Array.prototype &&
                                  b != Object.prototype &&
                                  (b[c] = a.value);
                              },
                        h =
                          "undefined" != typeof window && window === this
                            ? this
                            : "undefined" != typeof global && null != global
                            ? global
                            : this,
                        k = ["String", "prototype", "repeat"],
                        l = 0;
                      l < k.length - 1;
                      l++
                    ) {
                      var m = k[l];
                      m in h || (h[m] = {});
                      h = h[m];
                    }
                    var n = k[k.length - 1],
                      p = h[n],
                      q = p
                        ? p
                        : function (b) {
                            var c;
                            if (null == this)
                              throw new TypeError(
                                "The 'this' value for String.prototype.repeat must not be null or undefined"
                              );
                            c = this + "";
                            if (0 > b || 1342177279 < b)
                              throw new RangeError("Invalid count value");
                            b |= 0;
                            for (var a = ""; b; )
                              if ((b & 1 && (a += c), (b >>>= 1))) c += c;
                            return a;
                          };
                    q != p &&
                      null != q &&
                      g(h, n, { configurable: !0, writable: !0, value: q });
                    var t = this;
                    function u(b, c) {
                      var a = b.split("."),
                        d = t;
                      a[0] in d || !d.execScript || d.execScript("var " + a[0]);
                      for (var e; a.length && (e = a.shift()); )
                        a.length || void 0 === c
                          ? d[e]
                            ? (d = d[e])
                            : (d = d[e] = {})
                          : (d[e] = c);
                    }
                    function v(b) {
                      var c = b.length;
                      if (0 < c) {
                        for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                        return a;
                      }
                      return [];
                    }
                    function w(b) {
                      var c = window;
                      if (c.addEventListener) c.addEventListener("load", b, !1);
                      else if (c.attachEvent) c.attachEvent("onload", b);
                      else {
                        var a = c.onload;
                        c.onload = function () {
                          b.call(this);
                          a && a.call(this);
                        };
                      }
                    }
                    var x;
                    function y(b, c, a, d, e) {
                      this.h = b;
                      this.j = c;
                      this.l = a;
                      this.f = e;
                      this.g = {
                        height:
                          window.innerHeight ||
                          document.documentElement.clientHeight ||
                          document.body.clientHeight,
                        width:
                          window.innerWidth ||
                          document.documentElement.clientWidth ||
                          document.body.clientWidth,
                      };
                      this.i = d;
                      this.b = {};
                      this.a = [];
                      this.c = {};
                    }
                    function z(b, c) {
                      var a,
                        d,
                        e = c.getAttribute("data-pagespeed-url-hash");
                      if ((a = e && !(e in b.c)))
                        if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                        else {
                          d = c.getBoundingClientRect();
                          var f = document.body;
                          a =
                            d.top +
                            ("pageYOffset" in window
                              ? window.pageYOffset
                              : (document.documentElement || f.parentNode || f)
                                  .scrollTop);
                          d =
                            d.left +
                            ("pageXOffset" in window
                              ? window.pageXOffset
                              : (document.documentElement || f.parentNode || f)
                                  .scrollLeft);
                          f = a.toString() + "," + d;
                          b.b.hasOwnProperty(f)
                            ? (a = !1)
                            : ((b.b[f] = !0),
                              (a = a <= b.g.height && d <= b.g.width));
                        }
                      a && (b.a.push(e), (b.c[e] = !0));
                    }
                    y.prototype.checkImageForCriticality = function (b) {
                      b.getBoundingClientRect && z(this, b);
                    };
                    u(
                      "pagespeed.CriticalImages.checkImageForCriticality",
                      function (b) {
                        x.checkImageForCriticality(b);
                      }
                    );
                    u(
                      "pagespeed.CriticalImages.checkCriticalImages",
                      function () {
                        A(x);
                      }
                    );
                    function A(b) {
                      b.b = {};
                      for (
                        var c = ["IMG", "INPUT"], a = [], d = 0;
                        d < c.length;
                        ++d
                      )
                        a = a.concat(v(document.getElementsByTagName(c[d])));
                      if (a.length && a[0].getBoundingClientRect) {
                        for (d = 0; (c = a[d]); ++d) z(b, c);
                        a = "oh=" + b.l;
                        b.f && (a += "&n=" + b.f);
                        if ((c = !!b.a.length))
                          for (
                            a += "&ci=" + encodeURIComponent(b.a[0]), d = 1;
                            d < b.a.length;
                            ++d
                          ) {
                            var e = "," + encodeURIComponent(b.a[d]);
                            131072 >= a.length + e.length && (a += e);
                          }
                        b.i &&
                          ((e =
                            "&rd=" + encodeURIComponent(JSON.stringify(B()))),
                          131072 >= a.length + e.length && (a += e),
                          (c = !0));
                        C = a;
                        if (c) {
                          d = b.h;
                          b = b.j;
                          var f;
                          if (window.XMLHttpRequest) f = new XMLHttpRequest();
                          else if (window.ActiveXObject)
                            try {
                              f = new ActiveXObject("Msxml2.XMLHTTP");
                            } catch (r) {
                              try {
                                f = new ActiveXObject("Microsoft.XMLHTTP");
                              } catch (D) {}
                            }
                          f &&
                            (f.open(
                              "POST",
                              d +
                                (-1 == d.indexOf("?") ? "?" : "&") +
                                "url=" +
                                encodeURIComponent(b)
                            ),
                            f.setRequestHeader(
                              "Content-Type",
                              "application/x-www-form-urlencoded"
                            ),
                            f.send(a));
                        }
                      }
                    }
                    function B() {
                      var b = {},
                        c;
                      c = document.getElementsByTagName("IMG");
                      if (!c.length) return {};
                      var a = c[0];
                      if (!("naturalWidth" in a && "naturalHeight" in a))
                        return {};
                      for (var d = 0; (a = c[d]); ++d) {
                        var e = a.getAttribute("data-pagespeed-url-hash");
                        e &&
                          ((!(e in b) &&
                            0 < a.width &&
                            0 < a.height &&
                            0 < a.naturalWidth &&
                            0 < a.naturalHeight) ||
                            (e in b &&
                              a.width >= b[e].o &&
                              a.height >= b[e].m)) &&
                          (b[e] = {
                            rw: a.width,
                            rh: a.height,
                            ow: a.naturalWidth,
                            oh: a.naturalHeight,
                          });
                      }
                      return b;
                    }
                    var C = "";
                    u("pagespeed.CriticalImages.getBeaconData", function () {
                      return C;
                    });
                    u(
                      "pagespeed.CriticalImages.Run",
                      function (b, c, a, d, e, f) {
                        var r = new y(b, c, a, e, f);
                        x = r;
                        d &&
                          w(function () {
                            window.setTimeout(function () {
                              A(r);
                            }, 0);
                          });
                      }
                    );
                  })();

                  pagespeed.CriticalImages.Run(
                    "/mod_pagespeed_beacon",
                    "",
                    "-ilGEe-FWC",
                    true,
                    false,
                    "Q1T3AS9X19A"
                  );
                </script>
                <img
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAAAeCAMAAABNNuFqAAAAYFBMVEUAAAD////5twD////5twD////////82nv////////////////////////5twD////////////5twD5twD////////5ugv////////////////////////5twD/+u////+mHBOkAAAAHXRSTlMAAAEBEBARHyIzRFVmd4iIi4+Ql5eZnp6qu8zd7iXTZooAAAL8SURBVFjDzZjdepwgEEBptktFpLTdtRUh3fd/y8DwI8iA6U0/uMiuOEzOkQFJCMnb2+9X2e753duTlO3LAK3kf7x3BG7P1+AClr8jYPkHF3D8bQHHP7YA8DcFgH9oAc/fFAD+kQUCf0tAvkYX+PXeEwj8FwLkfzS6LDPS/f29JxD5PyEgdmP0xi4o5K5s29epH7YsvOrjNUbOjwok/ksBHgMV7ZKZGLf2olBW22k6/JjAwX8lMB+R+nMCr6UTNWOsmEDGjwhk/FcCQL7wLZEtu9aSLGqfyaTURoS9CgKSMZfZwVBhwxRUtlQ7Y0qbzc6ggKnc5zJPEJiV1vtS89cCOf+FwGIjNtfPApl/0O4nh3rQMYVxPYSsEBbnTfkb2l+xOE28ymNgJHTRM38lUPBfCOxpdoXRNrc6BvK4PEwuINw1TUFbXluGpCI75/FjjPZrqOQ/C/x8/YOACRMQ2uRGyEnmAnqPAoufKA0PcyHU4VAQWClzH9SVmGEzrfKYMA0SiL4W7VsJ/Ke8/FvKPmoBcdpEePrkr0zPZI80jooXKrjHaqnzGLhv92Ah5Hm3uxfAT9oTeLz1Z0AUBVPsiUlA+O/atijAk00QqPIYEsoLed8UAs/bvSPweDuXkGXwFULYKle6Ir/4ENigTMixBIzJBPIhWB6q0rJpCzxvpCNg+c8CMu3rsF64JwTEWmBm4T3m1wOhUkqGCmB5JjoxGR5BS8DydwQc/1kAHuY6Ue4yS9gezUQmgwpw2FzsWUL53XCLW2chYLuwPLOvx66A428LAH/1IhNZLM2XKipA/Qub5W/vQoAdyxzbRqXqCQB/U8Dz12ehLYUykqOhAuAr0kspOh8CRPuhSB7ROrHcC/6WQOBHTqPzDutRhrXsCMysGwLuA4ocQN3p4SRAN7+DInnmYwwmEPgbApEf/3uA0ixrcdE55F+FIQH4mHvBjwsk/vH+LxSIEz8qcPCPKvDjRjoCGf+gArJ5snACOf+YApL0BAr+IQUk6QmU/EMIfACS0t/79TVs2AAAAABJRU5ErkJggg=="
                  alt=""
                  title=""
                  data-pagespeed-url-hash="3737849312"
                  onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                />
              </a>
            </div>
          </div>
          <!-- Logo Code End -->

          <!-- NavBar -->
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a href="../index.php">Home</a></li>
              <?php
                if(isset($_SESSION["username"])){
                  echo '<li><a href="">'.$_SESSION["username"].'</a></li>';
                  echo '<li><a href="../php/logout.php">Logout</a></li>';
                }
              ?>
            </ul>
          </nav>
          <!-- NavBar End -->
        </div>
      </div>
    </header>

    <!-- Home Page -->
    <section class="banner-area relative" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div
          class="
            row
            fullscreen
            d-flex
            align-items-center
            justify-content-center
          "
        >
          <div
            style="margin-top: 20px"
            class="banner-content col-lg-5 col-md-5 header-right"
          >
            <h4 class="text-white text-center pb-30">Add a new Car for Rent</h4>
            <form
              action="../php/car/add-rent-car.php"
              method="post"
              class="form"
              role="form"
              autocomplete="off"
            >
              <div class="from-group">
                <input
                  class="form-control txt-field"
                  type="text"
                  name="car_name"
                  placeholder="Car Name"
                />
                <input
                  class="form-control txt-field"
                  type="text"
                  name="car_number"
                  placeholder="Car Number"
                />
                <input
                  class="form-control txt-field"
                  type="text"
                  name="location"
                  placeholder="Location"
                />
                <input
                  class="form-control txt-field"
                  type="text"
                  name="owner_name"
                  placeholder="Owner Name"
                />
                <input
                  class="form-control txt-field"
                  type="tel"
                  name="owner_phone"
                  placeholder="Owner Phone Number"
                />
              </div>
              <div class="form-group">
                <div class="default-select" id="default-select">
                  <select name="availability">
                    <option value="" disabled selected hidden>
                      Available or Not
                    </option>
                    <option>Available</option>
                    <option>Not Available</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <button
                    type="submit"
                    class="
                      btn btn-default btn-lg btn-block
                      text-center text-uppercase
                    "
                  >
                    Confirm Rent Car Adding
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Home Page End -->

    <!-- Cars -->
    <section class="feature-area section-gap" id="service">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8 pb-40 header-text">
            <h1>All the cars we have</h1>
            <p>Manage each and every car that we have.</p>
          </div>
        </div>
        <div class="row">
          <?php
            include '../php/db.php';
            $query = "SELECT * FROM car";
            $result = mysqli_query($connect, $query);
            while($row = mysqli_fetch_array($result)){
              echo '<div class="col-lg-4 col-md-6">
                      <div class="single-feature">
                        <h4>
                          <i class="fas fa-car-side" style="margin-right: 10px"></i>'.$row["car_name"].'
                        </h4>
                        <div class="row">
                          <div class="col">
                            <small>number:</small>
                            <h6>'.$row["car_number"].'</h6>
                          </div>
                          <div class="col">
                            <small>location:</small>
                            <h6>'.$row["location"].'</h6>
                          </div>
                          <div class="col">
                            <small>name:</small>
                            <h6>'.$row["owner_name"].'</h6>
                          </div>
                          <div class="col">
                            <small>phone:</small>
                            <h6>'.$row["owner_phone"].'</h6>
                          </div>
                          <div class="col">
                            <small>availability:</small>
                            <h6>'.$row["availability"].'</h6>
                          </div>
                          <div style="margin-left: 0px" class="row">
                            <div style="margin-top: 20px" class="col">
                              <form action="update-car.php" method="post">
                                <input name="id" hidden value="'.$row["id"].'" type="text" />
                                <input value="Update" type="submit" class="btn btn-primary">
                              </form>
                            </div>
                            <div style="margin-top: 20px" class="col">
                              <form action="../php/car/delete-car.php" method="post">
                                <input name="id" hidden value="'.$row["id"].'" type="text" />
                                <input value="Delete" type="submit" class="btn btn-danger">
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>';
            }
          ?>
        </div>
      </div>
    </section>
    <!-- Cars End -->

    <!-- Bookings -->
    <section class="feature-area section-gap" id="service">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8 pb-40 header-text">
            <h1>
              All the new Bookings<i
                style="margin-left: 15px"
                class="fas fa-calendar-plus"
              ></i>
            </h1>
            <p>Manage all the pending bookings made.</p>
          </div>
        </div>
        <div class="row">
          <?php
            include '../php/db.php';
            $query = "SELECT * FROM booking";
            $result = mysqli_query($connect, $query);
            while($row = mysqli_fetch_array($result)){
              echo '<div class="col-lg-4 col-md-6">
                      <div class="single-feature">
                        <h4>
                          <i style="margin-right: 8px" class="fas fa-user-plus"></i>'.$row["name"].'
                        </h4>
                        <div class="row">
                          <div class="col">
                            <small
                              ><i class="fas fa-car-side" style="margin-right: 8px"></i
                              >car:</small
                            >
                            <h6>'.$row["car"].'</h6>
                          </div>
                          <div class="col">
                            <small>pickup:</small>
                            <h6>'.$row["pickup"].'</h6>
                          </div>
                          <div class="col">
                            <small>dropoff:</small>
                            <h6>'.$row["dropoff"].'</h6>
                          </div>
                          <div class="col">
                            <small>phone:</small>
                            <h6>'.$row["phone"].'</h6>
                          </div>
                          <div class="row">
                            <div style="margin-top: 20px" class="col">
                              <form action="../php/booking/update-booking.php" method="post">
                                <input name="id" hidden value="'.$row["id"].'" type="text" />
                                <input value="Update" type="submit" class="btn btn-primary">
                              </form>
                            </div>
                            <div style="margin-top: 20px" class="col">
                              <form action="../php/booking/delete-booking.php" method="post">
                                <input name="id" hidden value="'.$row["id"].'" type="text" />
                                <input value="Delete" type="submit" class="btn btn-danger">
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>';
            }
          ?>
        </div>
      </div>
    </section>
    <!-- Bookings End -->

    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Quick links</h6>
              <ul>
                <li><a href="index.html#">Jobs</a></li>
                <li><a href="index.html#">Brand Assets</a></li>
                <li><a href="index.html#">Investor Relations</a></li>
                <li><a href="index.html#">Terms of Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Features</h6>
              <ul>
                <li><a href="index.html#">Jobs</a></li>
                <li><a href="index.html#">Brand Assets</a></li>
                <li><a href="index.html#">Investor Relations</a></li>
                <li><a href="index.html#">Terms of Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Resources</h6>
              <ul>
                <li><a href="index.html#">Jobs</a></li>
                <li><a href="index.html#">Brand Assets</a></li>
                <li><a href="index.html#">Investor Relations</a></li>
                <li><a href="index.html#">Terms of Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
            <div class="single-footer-widget">
              <h6>Follow Us</h6>
              <p>Let us be social</p>
              <div class="footer-social d-flex align-items-center">
                <a href="index.html#"><i class="foot-i fab fa-facebook"></i></a>
                <a href="index.html#"><i class="foot-i fab fa-twitter"></i></a>
                <a href="index.html#"><i class="foot-i fab fa-dribbble"></i></a>
                <a href="index.html#"><i class="foot-i fab fa-behance"></i></a>
              </div>
            </div>
          </div>

          <p class="mt-50 mx-auto footer-text col-lg-12">
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            All rights reserved | This website is made with
            <i class="far fa-heart" aria-hidden="true"></i> by
            <a href="https://anandh.xyz" target="_blank">Anandh</a>
          </p>
        </div>
      </div>
    </footer>

    <script src="../../js/vendor/jquery-2.2.4.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script src="../../js/vendor,_bootstrap.min.js+easing.min.js+hoverIntent.js+superfish.min.js+jquery.ajaxchimp.min.js+jquery.magnific-popup.min.js.pagespeed.jc.L2UtF7_cBk.js"></script>
    <script>
      eval(mod_pagespeed_ZBzz9mVSfI);
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      eval(mod_pagespeed_csg6op8kvf);
    </script>
    <script>
      eval(mod_pagespeed_uGhVb57OyI);
    </script>
    <script>
      eval(mod_pagespeed_GRyE0YjuS9);
    </script>
    <script>
      eval(mod_pagespeed_B7Y5Z1gu1E);
    </script>
    <script>
      eval(mod_pagespeed_KgeCRGEKTi);
    </script>
    <script src="../../js/owl.carousel.min.js+jquery.sticky.js+jquery.nice-select.min.js+waypoints.min.js+jquery.counterup.min.js+parallax.min.js+mail-script.js+main.js.pagespeed.jc.18biQAr73_.js"></script>
    <script>
      eval(mod_pagespeed_eRSrk2E6G_);
    </script>
    <script>
      eval(mod_pagespeed_YLJZ7PWWha);
    </script>
    <script>
      eval(mod_pagespeed_pL6$jUNZlb);
    </script>
    <script>
      eval(mod_pagespeed_y4QEXwVUEH);
    </script>
    <script>
      eval(mod_pagespeed_kRGreQS_JP);
    </script>
    <script>
      eval(mod_pagespeed_HZwGK4ecuv);
    </script>
    <script>
      eval(mod_pagespeed_fnHRxxjUuc);
    </script>
    <script>
      eval(mod_pagespeed_9V4hraYDpB);
    </script>

    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-23581568-13");
    </script>
    <script
      defer
      src="https://static.cloudflareinsights.com/beacon.min.js"
      data-cf-beacon='{"rayId":"668d254d5a4eddd3","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.6.0","si":10}'
    ></script>
  </body>
</html>
