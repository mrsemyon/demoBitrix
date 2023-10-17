<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
$asset = Bitrix\Main\Page\Asset::getInstance();

$asset->addCss(ASSETS . 'css/tilda-animation-2.0.min.css');
$asset->addCss(ASSETS . 'css/tilda-blocks-page37929735.min.css');
$asset->addCss(ASSETS . 'css/tilda-cards-1.0.min.css');
$asset->addCss(ASSETS . 'css/tilda-grid-3.0.min.css');

$asset->addJs(ASSETS . 'js/tilda-blocks-page37929735.min.js');
$asset->addJs(ASSETS . 'js/tilda-menu-1.0.min.js');
?>
<html>
  <head>
    <?$APPLICATION->ShowHead();?>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--metatextblock-->
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta
      name="description"
      content="Уникальная возможность проверить свои силы на реальных задачах, которые встречаются в работе IT-компаний. Для студентов высших и средних специальных учебных заведений Ханты-Мансийского автономного округа — Югры. Участие бесплатно. 13-22 октября 2023. Открытие регистрации 1 октября 2023"
    />
    <meta
      name="keywords"
      content="Студенческое Диджитал Многоборье, Студенческое Диджитал Многоборье Югры, Многоборье, Рецифра"
    />
    <meta property="og:url" content="https://recifra.ru/sdm2023" />
    <meta property="og:title" content="Студенческое Диджитал Многоборье Югры" />
    <meta
      property="og:description"
      content="Уникальная возможность проверить свои силы на реальных задачах, которые встречаются в работе IT-компаний. Для студентов высших и средних специальных учебных заведений Ханты-Мансийского автономного округа — Югры. Участие бесплатно. 13-22 октября 2023. Открытие регистрации 1 октября 2023"
    />
    <meta property="og:type" content="website" />
    <meta
      property="og:image"
      content="images/tild3033-3536-4837-b435-376166303834____.jpg"
    />
    <link rel="canonical" href="" />
    <!--/metatextblock-->
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="x-dns-prefetch-control" content="on" />
    <link rel="dns-prefetch" href="https://ws.tildacdn.com" />
    <link rel="dns-prefetch" href="https://fonts.tildacdn.com" />
    <meta name="robots" content="noindex,nofollow" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link
      rel="apple-touch-icon"
      href="images/tild3637-3966-4231-b830-643263306338__152.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="images/tild3637-3966-4231-b830-643263306338__152.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="152x152"
      href="images/tild3637-3966-4231-b830-643263306338__152.png"
    />
    <link
      rel="apple-touch-startup-image"
      href="images/tild3637-3966-4231-b830-643263306338__152.png"
    />
    <meta name="msapplication-TileColor" content="#000000" />
    <meta
      name="msapplication-TileImage"
      content="images/tild6666-6663-4230-a130-303763633961__270.png"
    />
    <!-- Assets -->
    <script
      src="https://neo.tildacdn.com/js/tilda-fallback-1.0.min.js"
      async
      charset="utf-8"
    ></script>
    <link
      rel="stylesheet"
      href="css/tilda-grid-3.0.min.css"
      type="text/css"
      media="all"
      onerror="this.loaderr='y';"
    />
    <link
      rel="stylesheet"
      href="css/tilda-blocks-page37929735.min.css?t=1697093881"
      type="text/css"
      media="all"
      onerror="this.loaderr='y';"
    />
    <link
      rel="stylesheet"
      href="css/tilda-animation-2.0.min.css"
      type="text/css"
      media="all"
      onerror="this.loaderr='y';"
    />
    <link
      rel="stylesheet"
      href="css/tilda-cards-1.0.min.css"
      type="text/css"
      media="all"
      onerror="this.loaderr='y';"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Russo+One:wght@400&family=Manrope:wght@300;400;600;700"
      type="text/css"
    />
    <script type="text/javascript">
      TildaFonts = ["167", "168", "169", "170"];
    </script>
    <script
      type="text/javascript"
      src="js/tilda-fonts.min.js"
      charset="utf-8"
      onerror="this.loaderr='y';"
    ></script>
    <script
      nomodule
      src="js/tilda-polyfill-1.0.min.js"
      charset="utf-8"
    ></script>
    <script type="text/javascript">
      function t_onReady(func) {
        if (document.readyState != "loading") {
          func();
        } else {
          document.addEventListener("DOMContentLoaded", func);
        }
      }
      function t_onFuncLoad(funcName, okFunc, time) {
        if (typeof window[funcName] === "function") {
          okFunc();
        } else {
          setTimeout(function () {
            t_onFuncLoad(funcName, okFunc, time);
          }, time || 100);
        }
      }
      function t_throttle(fn, threshhold, scope) {
        return function () {
          fn.apply(scope || this, arguments);
        };
      }
      function t396_initialScale(t) {
        var e = document.getElementById("rec" + t);
        if (e) {
          var r = e.querySelector(".t396__artboard");
          if (r) {
            var a,
              i = document.documentElement.clientWidth,
              l = [],
              d = r.getAttribute("data-artboard-screens");
            if (d) {
              d = d.split(",");
              for (var o = 0; o < d.length; o++) l[o] = parseInt(d[o], 10);
            } else l = [320, 480, 640, 960, 1200];
            for (o = 0; o < l.length; o++) {
              var n = l[o];
              n <= i && (a = n);
            }
            var g =
                "edit" === window.allrecords.getAttribute("data-tilda-mode"),
              u = "center" === t396_getFieldValue(r, "valign", a, l),
              c = "grid" === t396_getFieldValue(r, "upscale", a, l),
              t = t396_getFieldValue(r, "height_vh", a, l),
              f = t396_getFieldValue(r, "height", a, l),
              e =
                (!!window.opr && !!window.opr.addons) ||
                !!window.opera ||
                -1 !== navigator.userAgent.indexOf(" OPR/");
            if (!g && u && !c && !t && f && !e) {
              for (
                var s = parseFloat((i / a).toFixed(3)),
                  _ = [
                    r,
                    r.querySelector(".t396__carrier"),
                    r.querySelector(".t396__filter"),
                  ],
                  o = 0;
                o < _.length;
                o++
              )
                _[o].style.height = parseInt(f, 10) * s + "px";
              for (
                var h = r.querySelectorAll(".t396__elem"), o = 0;
                o < h.length;
                o++
              )
                h[o].style.zoom = s;
            }
          }
        }
      }
      function t396_getFieldValue(t, e, r, a) {
        var i = a[a.length - 1],
          l =
            r === i
              ? t.getAttribute("data-artboard-" + e)
              : t.getAttribute("data-artboard-" + e + "-res-" + r);
        if (!l)
          for (var d = 0; d < a.length; d++) {
            var o = a[d];
            if (
              !(o <= r) &&
              (l =
                o === i
                  ? t.getAttribute("data-artboard-" + e)
                  : t.getAttribute("data-artboard-" + e + "-res-" + o))
            )
              break;
          }
        return l;
      }
    </script>
    <script
      src="js/jquery-1.10.2.min.js"
      charset="utf-8"
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-scripts-3.0.min.js"
      charset="utf-8"
      defer
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-blocks-page37929735.min.js?t=1697093881"
      charset="utf-8"
      async
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/lazyload-1.3.min.js"
      charset="utf-8"
      async
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-animation-2.0.min.js"
      charset="utf-8"
      async
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-menu-1.0.min.js"
      charset="utf-8"
      async
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-zero-1.1.min.js"
      charset="utf-8"
      async
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-cards-1.0.min.js"
      charset="utf-8"
      async
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-animation-sbs-1.0.min.js"
      charset="utf-8"
      async
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-zero-scale-1.0.min.js"
      charset="utf-8"
      async
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-zero-fixed-1.0.min.js"
      charset="utf-8"
      async
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-skiplink-1.0.min.js"
      charset="utf-8"
      async
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-events-1.0.min.js"
      charset="utf-8"
      async
      onerror="this.loaderr='y';"
    ></script>
    <meta name="mailru-domain" content="6jGuyTZfg9HAX7hs" />
    <script type="text/javascript">
      window.dataLayer = window.dataLayer || [];
    </script>
    <script type="text/javascript">
      (function () {
        if (
          /bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i.test(
            navigator.userAgent
          ) === false &&
          typeof sessionStorage != "undefined" &&
          sessionStorage.getItem("visited") !== "y" &&
          document.visibilityState
        ) {
          var style = document.createElement("style");
          style.type = "text/css";
          style.innerHTML =
            "@media screen and (min-width: 980px) {.t-records {opacity: 0;}.t-records_animated {-webkit-transition: opacity ease-in-out .2s;-moz-transition: opacity ease-in-out .2s;-o-transition: opacity ease-in-out .2s;transition: opacity ease-in-out .2s;}.t-records.t-records_visible {opacity: 1;}}";
          document.getElementsByTagName("head")[0].appendChild(style);
          function t_setvisRecs() {
            var alr = document.querySelectorAll(".t-records");
            Array.prototype.forEach.call(alr, function (el) {
              el.classList.add("t-records_animated");
            });
            setTimeout(function () {
              Array.prototype.forEach.call(alr, function (el) {
                el.classList.add("t-records_visible");
              });
              sessionStorage.setItem("visited", "y");
            }, 400);
          }
          document.addEventListener("DOMContentLoaded", t_setvisRecs);
        }
      })();
    </script>
  </head>
  <body class="t-body" style="margin: 0">
    <?$APPLICATION->ShowPanel()?>
    <!--allrecords-->
    <div
      id="allrecords"
      data-tilda-export="yes"
      class="t-records"
      data-hook="blocks-collection-content-node"
      data-tilda-project-id="7048371"
      data-tilda-page-id="37929735"
      data-tilda-page-alias="sdm2023"
      data-tilda-formskey="1fdfb8c7ab860107f35ce02be7048371"
      data-tilda-lazy="yes"
      data-tilda-project-headcode="yes"
    >
      <div
        id="rec639572482"
        class="r t-rec t-screenmin-980px"
        style="background-color: #2e2d2c"
        data-record-type="257"
        data-screen-min="980px"
        data-bg-color="#2e2d2c"
      >
        <!-- T228 -->
        <div id="nav639572482marker"></div>
        <div class="tmenu-mobile tmenu-mobile_positionfixed">
          <div class="tmenu-mobile__container">
            <div
              class="tmenu-mobile__text t-name t-name_md"
              field="menu_mob_title"
            >
              &nbsp;
            </div>
            <button
              type="button"
              class="t-menuburger t-menuburger_first"
              aria-label="Навигационное меню"
              aria-expanded="false"
            >
              <span style="background-color: #fff"></span
              ><span style="background-color: #fff"></span
              ><span style="background-color: #fff"></span
              ><span style="background-color: #fff"></span>
            </button>
            <script>
              function t_menuburger_init(recid) {
                var rec = document.querySelector("#rec" + recid);
                if (!rec) return;
                var burger = rec.querySelector(".t-menuburger");
                if (!burger) return;
                var isSecondStyle = burger.classList.contains(
                  "t-menuburger_second"
                );
                if (
                  isSecondStyle &&
                  !window.isMobile &&
                  !("ontouchend" in document)
                ) {
                  burger.addEventListener("mouseenter", function () {
                    if (burger.classList.contains("t-menuburger-opened"))
                      return;
                    burger.classList.remove("t-menuburger-unhovered");
                    burger.classList.add("t-menuburger-hovered");
                  });
                  burger.addEventListener("mouseleave", function () {
                    if (burger.classList.contains("t-menuburger-opened"))
                      return;
                    burger.classList.remove("t-menuburger-hovered");
                    burger.classList.add("t-menuburger-unhovered");
                    setTimeout(function () {
                      burger.classList.remove("t-menuburger-unhovered");
                    }, 300);
                  });
                }
                burger.addEventListener("click", function () {
                  if (
                    !burger.closest(".tmenu-mobile") &&
                    !burger.closest(".t450__burger_container") &&
                    !burger.closest(".t466__container") &&
                    !burger.closest(".t204__burger") &&
                    !burger.closest(".t199__js__menu-toggler")
                  ) {
                    burger.classList.toggle("t-menuburger-opened");
                    burger.classList.remove("t-menuburger-unhovered");
                  }
                });
                var menu = rec.querySelector('[data-menu="yes"]');
                if (!menu) return;
                var menuLinks = menu.querySelectorAll(".t-menu__link-item");
                var submenuClassList = [
                  "t978__menu-link_hook",
                  "t978__tm-link",
                  "t966__tm-link",
                  "t794__tm-link",
                  "t-menusub__target-link",
                ];
                Array.prototype.forEach.call(menuLinks, function (link) {
                  link.addEventListener("click", function () {
                    var isSubmenuHook = submenuClassList.some(function (
                      submenuClass
                    ) {
                      return link.classList.contains(submenuClass);
                    });
                    if (isSubmenuHook) return;
                    burger.classList.remove("t-menuburger-opened");
                  });
                });
                menu.addEventListener(
                  "clickedAnchorInTooltipMenu",
                  function () {
                    burger.classList.remove("t-menuburger-opened");
                  }
                );
              }
              t_onReady(function () {
                t_onFuncLoad("t_menuburger_init", function () {
                  t_menuburger_init("639572482");
                });
              });
            </script>
            <style>
              .t-menuburger {
                position: relative;
                flex-shrink: 0;
                width: 28px;
                height: 20px;
                padding: 0;
                border: none;
                background-color: transparent;
                outline: none;
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transition: transform 0.5s ease-in-out;
                cursor: pointer;
                z-index: 999;
              }
              /*---menu burger lines---*/
              .t-menuburger span {
                display: block;
                position: absolute;
                width: 100%;
                opacity: 1;
                left: 0;
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transition: 0.25s ease-in-out;
                height: 3px;
                background-color: #000;
              }
              .t-menuburger span:nth-child(1) {
                top: 0px;
              }
              .t-menuburger span:nth-child(2),
              .t-menuburger span:nth-child(3) {
                top: 8px;
              }
              .t-menuburger span:nth-child(4) {
                top: 16px;
              }
              /*menu burger big*/
              .t-menuburger__big {
                width: 42px;
                height: 32px;
              }
              .t-menuburger__big span {
                height: 5px;
              }
              .t-menuburger__big span:nth-child(2),
              .t-menuburger__big span:nth-child(3) {
                top: 13px;
              }
              .t-menuburger__big span:nth-child(4) {
                top: 26px;
              }
              /*menu burger small*/
              .t-menuburger__small {
                width: 22px;
                height: 14px;
              }
              .t-menuburger__small span {
                height: 2px;
              }
              .t-menuburger__small span:nth-child(2),
              .t-menuburger__small span:nth-child(3) {
                top: 6px;
              }
              .t-menuburger__small span:nth-child(4) {
                top: 12px;
              }
              /*menu burger opened*/
              .t-menuburger-opened span:nth-child(1) {
                top: 8px;
                width: 0%;
                left: 50%;
              }
              .t-menuburger-opened span:nth-child(2) {
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
              }
              .t-menuburger-opened span:nth-child(3) {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
              }
              .t-menuburger-opened span:nth-child(4) {
                top: 8px;
                width: 0%;
                left: 50%;
              }
              .t-menuburger-opened.t-menuburger__big span:nth-child(1) {
                top: 6px;
              }
              .t-menuburger-opened.t-menuburger__big span:nth-child(4) {
                top: 18px;
              }
              .t-menuburger-opened.t-menuburger__small span:nth-child(1),
              .t-menuburger-opened.t-menuburger__small span:nth-child(4) {
                top: 6px;
              }
              /*---menu burger first style---*/
              @media (hover), (min-width: 0\0) {
                .t-menuburger_first:hover span:nth-child(1) {
                  transform: translateY(1px);
                }
                .t-menuburger_first:hover span:nth-child(4) {
                  transform: translateY(-1px);
                }
                .t-menuburger_first.t-menuburger__big:hover span:nth-child(1) {
                  transform: translateY(3px);
                }
                .t-menuburger_first.t-menuburger__big:hover span:nth-child(4) {
                  transform: translateY(-3px);
                }
              }
              /*---menu burger second style---*/
              .t-menuburger_second span:nth-child(2),
              .t-menuburger_second span:nth-child(3) {
                width: 80%;
                left: 20%;
                right: 0;
              }
              @media (hover), (min-width: 0\0) {
                .t-menuburger_second.t-menuburger-hovered span:nth-child(2),
                .t-menuburger_second.t-menuburger-hovered span:nth-child(3) {
                  animation: t-menuburger-anim 0.3s ease-out normal forwards;
                }
                .t-menuburger_second.t-menuburger-unhovered span:nth-child(2),
                .t-menuburger_second.t-menuburger-unhovered span:nth-child(3) {
                  animation: t-menuburger-anim2 0.3s ease-out normal forwards;
                }
              }
              .t-menuburger_second.t-menuburger-opened span:nth-child(2),
              .t-menuburger_second.t-menuburger-opened span:nth-child(3) {
                left: 0;
                right: 0;
                width: 100% !important;
              }
              /*---menu burger third style---*/
              .t-menuburger_third span:nth-child(4) {
                width: 70%;
                left: unset;
                right: 0;
              }
              @media (hover), (min-width: 0\0) {
                .t-menuburger_third:not(.t-menuburger-opened):hover
                  span:nth-child(4) {
                  width: 100%;
                }
              }
              .t-menuburger_third.t-menuburger-opened span:nth-child(4) {
                width: 0 !important;
                right: 50%;
              }
              /*---menu burger fourth style---*/
              .t-menuburger_fourth {
                height: 12px;
              }
              .t-menuburger_fourth.t-menuburger__small {
                height: 8px;
              }
              .t-menuburger_fourth.t-menuburger__big {
                height: 18px;
              }
              .t-menuburger_fourth span:nth-child(2),
              .t-menuburger_fourth span:nth-child(3) {
                top: 4px;
                opacity: 0;
              }
              .t-menuburger_fourth span:nth-child(4) {
                top: 8px;
              }
              .t-menuburger_fourth.t-menuburger__small span:nth-child(2),
              .t-menuburger_fourth.t-menuburger__small span:nth-child(3) {
                top: 3px;
              }
              .t-menuburger_fourth.t-menuburger__small span:nth-child(4) {
                top: 6px;
              }
              .t-menuburger_fourth.t-menuburger__small span:nth-child(2),
              .t-menuburger_fourth.t-menuburger__small span:nth-child(3) {
                top: 3px;
              }
              .t-menuburger_fourth.t-menuburger__small span:nth-child(4) {
                top: 6px;
              }
              .t-menuburger_fourth.t-menuburger__big span:nth-child(2),
              .t-menuburger_fourth.t-menuburger__big span:nth-child(3) {
                top: 6px;
              }
              .t-menuburger_fourth.t-menuburger__big span:nth-child(4) {
                top: 12px;
              }
              @media (hover), (min-width: 0\0) {
                .t-menuburger_fourth:not(.t-menuburger-opened):hover
                  span:nth-child(1) {
                  transform: translateY(1px);
                }
                .t-menuburger_fourth:not(.t-menuburger-opened):hover
                  span:nth-child(4) {
                  transform: translateY(-1px);
                }
                .t-menuburger_fourth.t-menuburger__big:not(
                    .t-menuburger-opened
                  ):hover
                  span:nth-child(1) {
                  transform: translateY(3px);
                }
                .t-menuburger_fourth.t-menuburger__big:not(
                    .t-menuburger-opened
                  ):hover
                  span:nth-child(4) {
                  transform: translateY(-3px);
                }
              }
              .t-menuburger_fourth.t-menuburger-opened span:nth-child(1),
              .t-menuburger_fourth.t-menuburger-opened span:nth-child(4) {
                top: 4px;
              }
              .t-menuburger_fourth.t-menuburger-opened span:nth-child(2),
              .t-menuburger_fourth.t-menuburger-opened span:nth-child(3) {
                opacity: 1;
              }
              /*---menu burger animations---*/
              @keyframes t-menuburger-anim {
                0% {
                  width: 80%;
                  left: 20%;
                  right: 0;
                }
                50% {
                  width: 100%;
                  left: 0;
                  right: 0;
                }
                100% {
                  width: 80%;
                  left: 0;
                  right: 20%;
                }
              }
              @keyframes t-menuburger-anim2 {
                0% {
                  width: 80%;
                  left: 0;
                }
                50% {
                  width: 100%;
                  right: 0;
                  left: 0;
                }
                100% {
                  width: 80%;
                  left: 20%;
                  right: 0;
                }
              }
            </style>
          </div>
        </div>
        <style>
          .tmenu-mobile {
            background-color: #111;
            display: none;
            width: 100%;
            top: 0;
            z-index: 990;
          }
          .tmenu-mobile_positionfixed {
            position: fixed;
          }
          .tmenu-mobile__text {
            color: #fff;
          }
          .tmenu-mobile__container {
            min-height: 64px;
            padding: 20px;
            position: relative;
            box-sizing: border-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
          }
          .tmenu-mobile__list {
            display: block;
          }
          .tmenu-mobile__burgerlogo {
            display: inline-block;
            font-size: 24px;
            font-weight: 400;
            white-space: nowrap;
            vertical-align: middle;
          }
          .tmenu-mobile__imglogo {
            height: auto;
            display: block;
            max-width: 300px !important;
            box-sizing: border-box;
            padding: 0;
            margin: 0 auto;
          }
          @media screen and (max-width: 980px) {
            .tmenu-mobile__menucontent_hidden {
              display: none;
              height: 100%;
            }
            .tmenu-mobile {
              display: block;
            }
          }
          @media screen and (max-width: 980px) {
            #rec639572482 .tmenu-mobile {
              background-color: #2e2d2c;
            }
            #rec639572482 .tmenu-mobile__menucontent_fixed {
              position: fixed;
              top: 64px;
            }
            #rec639572482 .t-menuburger {
              -webkit-order: 1;
              -ms-flex-order: 1;
              order: 1;
            }
          }
        </style>
        <div
          id="nav639572482"
          class="t228 t228__positionfixed tmenu-mobile__menucontent_hidden tmenu-mobile__menucontent_fixed"
          style="background-color: rgba(46, 45, 44, 1)"
          data-bgcolor-hex="#2e2d2c"
          data-bgcolor-rgba="rgba(46,45,44,1)"
          data-navmarker="nav639572482marker"
          data-appearoffset=""
          data-bgopacity-two="100"
          data-menushadow=""
          data-bgopacity="1"
          data-bgcolor-rgba-afterscroll="rgba(46,45,44,1)"
          data-menu-items-align="center"
          data-menu="yes"
        >
          <div class="t228__maincontainer" style="">
            <div class="t228__padding40px"></div>
            <div class="t228__leftside">
              <div class="t228__leftcontainer">
                <a
                  href="https://recifra.ru/sdm2023"
                  class="t228__imgwrapper"
                  style="color: #ffffff"
                  ><img
                    class="t228__imglogo"
                    src="images/tild6464-3938-4739-b833-636430623066______.png"
                    imgfield="img"
                    style="max-height: 80px"
                    alt=""
                /></a>
              </div>
            </div>
            <div class="t228__centerside">
              <nav class="t228__centercontainer">
                <ul
                  role="list"
                  class="t228__list t-menu__list t228__list_hidden"
                >
                  <li class="t228__list_item" style="padding: 0 15px 0 0">
                    <a
                      class="t-menu__link-item"
                      href="https://recifra.ru/"
                      target="_blank"
                      data-menu-submenu-hook=""
                      data-menu-item-number="1"
                      style="color: #ffffff; font-weight: 600"
                      >Рецифра</a
                    >
                  </li>
                  <li class="t228__list_item" style="padding: 0 15px">
                    <a
                      class="t-menu__link-item"
                      href="#rec612848408"
                      data-menu-submenu-hook=""
                      data-menu-item-number="2"
                      style="color: #ffffff; font-weight: 600"
                      >О мероприятии
                    </a>
                  </li>
                  <li class="t228__list_item" style="padding: 0 15px">
                    <a
                      class="t-menu__link-item"
                      href="#rec640354140"
                      data-menu-submenu-hook=""
                      data-menu-item-number="3"
                      style="color: #ffffff; font-weight: 600"
                      >За неделю ты...</a
                    >
                  </li>
                  <li class="t228__list_item" style="padding: 0 15px">
                    <a
                      class="t-menu__link-item"
                      href="#rec612845875"
                      data-menu-submenu-hook=""
                      data-menu-item-number="4"
                      style="color: #ffffff; font-weight: 600"
                      >Направления</a
                    >
                  </li>
                  <li class="t228__list_item" style="padding: 0 15px">
                    <a
                      class="t-menu__link-item"
                      href="#rec640354140"
                      data-menu-submenu-hook=""
                      data-menu-item-number="5"
                      style="color: #ffffff; font-weight: 600"
                      >Организаторы</a
                    >
                  </li>
                  <li class="t228__list_item" style="padding: 0 15px">
                    <a
                      class="t-menu__link-item"
                      href="#rec612845880"
                      data-menu-submenu-hook=""
                      data-menu-item-number="6"
                      style="color: #ffffff; font-weight: 600"
                      >Кураторы</a
                    >
                  </li>
                  <li class="t228__list_item" style="padding: 0 0 0 15px">
                    <a
                      class="t-menu__link-item"
                      href="#rec651105777"
                      data-menu-submenu-hook=""
                      data-menu-item-number="7"
                      style="color: #ffffff; font-weight: 600"
                      >Партнеры</a
                    >
                  </li>
                </ul>
              </nav>
            </div>
            <div class="t228__rightside">
              <div class="t228__rightcontainer">
                <div class="t-sociallinks">
                  <ul
                    role="list"
                    class="t-sociallinks__wrapper"
                    aria-label="Соц. сети"
                  >
                    <!-- new soclinks -->
                    <li
                      class="t-sociallinks__item t-sociallinks__item_telegram"
                    >
                      <a
                        href="https://t.me/recifra_sdm"
                        target="_blank"
                        rel="nofollow"
                        aria-label="telegram"
                        style="width: 30px; height: 30px"
                        ><svg
                          class="t-sociallinks__svg"
                          role="presentation"
                          width="30px"
                          height="30px"
                          viewBox="0 0 100 100"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm21.977-68.056c.386-4.38-4.24-2.576-4.24-2.576-3.415 1.414-6.937 2.85-10.497 4.302-11.04 4.503-22.444 9.155-32.159 13.734-5.268 1.932-2.184 3.864-2.184 3.864l8.351 2.577c3.855 1.16 5.91-.129 5.91-.129l17.988-12.238c6.424-4.38 4.882-.773 3.34.773l-13.49 12.882c-2.056 1.804-1.028 3.35-.129 4.123 2.55 2.249 8.82 6.364 11.557 8.16.712.467 1.185.778 1.292.858.642.515 4.111 2.834 6.424 2.319 2.313-.516 2.57-3.479 2.57-3.479l3.083-20.226c.462-3.511.993-6.886 1.417-9.582.4-2.546.705-4.485.767-5.362Z"
                            fill="#ffffff"
                          /></svg
                      ></a>
                    </li>
                    <li
                      class="t-sociallinks__item t-sociallinks__item_vkmessenger"
                    >
                      <a
                        href="https://vk.com/recifradigital"
                        target="_blank"
                        rel="nofollow"
                        aria-label="vkmessenger"
                        style="width: 30px; height: 30px"
                        ><svg
                          class="t-sociallinks__svg"
                          role="presentation"
                          width="30px"
                          height="30px"
                          viewBox="0 0 100 100"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm-5.08-76.414a48.135 48.135 0 0 0 2.187-.422c.324-.08 1.735-.153 3.134-.163 2.047-.013 3.002.067 4.89.41 7.843 1.428 13.918 5.42 18.472 12.135 1.99 2.934 3.603 7.076 4.066 10.44.313 2.276.265 7.758-.084 9.632-.373 2.006-1.503 5.362-2.424 7.2-2.132 4.25-5.556 8.135-9.378 10.638-1.183.774-3.108 1.843-3.838 2.13-.324.127-.669.291-.766.364-.387.29-3.382 1.191-5.337 1.604-1.807.382-2.488.44-5.279.445-2.862.007-3.437-.042-5.395-.455-3.863-.814-7.02-2.082-9.589-3.85-.587-.404-1.059-.363-4.407.381-3.654.812-4.57.94-4.88.682-.382-.316-.335-.8.4-4.153.749-3.409.938-4.215.702-4.867-.082-.227-.216-.436-.397-.731-2.693-4.394-3.984-9.062-3.997-14.46-.012-4.75.867-8.55 2.898-12.526.727-1.424 2.002-3.481 2.66-4.293.753-.927 4.735-4.855 5.312-5.24 2.412-1.604 2.967-1.933 4.722-2.79 1.91-.934 4.466-1.787 6.329-2.11Zm-4.47 22.33c-.949-2.514-1.303-3.314-1.605-3.615-.316-.317-.585-.352-3.088-.4-2.973-.058-3.103-.022-3.396.94-.119.39.636 3.353.932 3.657a.624.624 0 0 1 .156.375c0 .21.655 1.726 1.42 3.283.396.807 2.79 4.884 2.955 5.034.051.047.547.692 1.102 1.433 1.524 2.037 3.773 4.03 5.762 5.105 1.877 1.015 4.904 1.58 7.043 1.312 1.52-.19 1.615-.358 1.615-2.881 0-3.283.375-3.786 2.166-2.903.73.36 3.253 2.726 4.916 4.61.417.473.924.947 1.127 1.054.385.204 5.693.285 6.19.094.496-.19.516-1.17.043-2.138-.546-1.117-2.396-3.43-4.437-5.55-1.08-1.121-1.575-1.76-1.575-2.033 0-.34.841-1.897 1.161-2.15.107-.084.956-1.339 1.282-1.893.094-.16.636-1.07 1.204-2.023 1.464-2.455 1.755-3.08 1.864-4.002.088-.74.057-.84-.335-1.097-.367-.24-.822-.275-3.044-.228-2.49.051-2.631.073-3.043.46-.237.223-.479.565-.536.758-.168.565-1.947 4.025-2.2 4.278-.127.127-.23.305-.23.397 0 .281-1.514 2.377-2.339 3.24-.903.943-1.416 1.2-1.888.947-.31-.165-.326-.399-.329-4.679-.002-3.293-.06-4.617-.216-4.926l-.213-.421H45.35l-.25.447c-.24.425-.219.501.414 1.518l.666 1.07v4.3c0 4.29 0 4.3-.367 4.352-.5.07-1.505-.864-2.465-2.296-.797-1.188-2.506-4.389-2.898-5.429Z"
                            fill="#ffffff"
                          /></svg
                      ></a>
                    </li>
                    <li class="t-sociallinks__item t-sociallinks__item_email">
                      <a
                        href="mailto:sdm@recifra.ru"
                        target="_blank"
                        rel="nofollow"
                        aria-label="Электронная почта"
                        style="width: 30px; height: 30px"
                        ><svg
                          class="t-sociallinks__svg"
                          role="presentation"
                          width="30px"
                          height="30px"
                          viewBox="0 0 100 100"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM51.8276 49.2076L74.191 33.6901C73.4347 32.6649 72.2183 32 70.8466 32H29.1534C27.8336 32 26.6576 32.6156 25.8968 33.5752L47.5881 49.172C48.8512 50.0802 50.5494 50.0945 51.8276 49.2076ZM75 63.6709V37.6286L53.4668 52.57C51.1883 54.151 48.1611 54.1256 45.9095 52.5066L25 37.4719V63.6709C25 65.9648 26.8595 67.8243 29.1534 67.8243H70.8466C73.1405 67.8243 75 65.9648 75 63.6709Z"
                            fill="#ffffff"
                          /></svg
                      ></a>
                    </li>
                    <!-- /new soclinks -->
                  </ul>
                </div>
              </div>
            </div>
            <div class="t228__padding40px"></div>
          </div>
        </div>
        <style>
          @media screen and (max-width: 980px) {
            #rec639572482 .t228 {
            }
          }
        </style>
        <script>
          window.addEventListener("load", function () {
            t_onFuncLoad("t228_setWidth", function () {
              t228_setWidth("639572482");
            });
          });
          window.addEventListener(
            "resize",
            t_throttle(function () {
              t_onFuncLoad("t228_setWidth", function () {
                t228_setWidth("639572482");
              });
              t_onFuncLoad("t_menu__setBGcolor", function () {
                t_menu__setBGcolor("639572482", ".t228");
              });
            })
          );
          t_onReady(function () {
            t_onFuncLoad("t_menu__highlightActiveLinks", function () {
              t_menu__highlightActiveLinks(".t228__list_item a");
            });
            t_onFuncLoad("t_menu__findAnchorLinks", function () {
              t_menu__findAnchorLinks("639572482", ".t228__list_item a");
            });
            t_onFuncLoad("t228__init", function () {
              t228__init("639572482");
            });
            t_onFuncLoad("t_menu__setBGcolor", function () {
              t_menu__setBGcolor("639572482", ".t228");
            });
            t_onFuncLoad("t_menu__interactFromKeyboard", function () {
              t_menu__interactFromKeyboard("639572482");
            });
            t_onFuncLoad("t228_setWidth", function () {
              t228_setWidth("639572482");
            });
            t_onFuncLoad("t_menu__changeBgOpacity", function () {
              t_menu__changeBgOpacity("639572482", ".t228");
              window.addEventListener(
                "scroll",
                t_throttle(function () {
                  t_menu__changeBgOpacity("639572482", ".t228");
                })
              );
            });
            t_onFuncLoad("t_menu__createMobileMenu", function () {
              t_menu__createMobileMenu("639572482", ".t228");
            });
          });
        </script>
        <!--[if IE 8
          ]><style>
            #rec639572482 .t228 {
              filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D92e2d2c', endColorstr='#D92e2d2c');
            }
          </style><!
        [endif]--><style>
          @media (hover: hover), (min-width: 0\0) {
            #rec639572482 .t-btn:not(.t-animate_no-hover):hover {
              background-color: #2ce817 !important;
            }
            #rec639572482 .t-btn:not(.t-animate_no-hover):focus-visible {
              background-color: #2ce817 !important;
            }
          }</style
        ><style>
          #rec639572482 .t-menu__link-item {
            -webkit-transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
            transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
          }
          #rec639572482 .t-menu__link-item.t-active:not(.t978__menu-link) {
            color: #2ce817 !important;
          }
          #rec639572482
            .t-menu__link-item:not(.t-active):not(.tooltipstered):hover {
            color: #2ce817 !important;
          }
          #rec639572482
            .t-menu__link-item:not(.t-active):not(
              .tooltipstered
            ):focus-visible {
            color: #2ce817 !important;
          }
          @supports (overflow: -webkit-marquee) and (justify-content: inherit) {
            #rec639572482 .t-menu__link-item,
            #rec639572482 .t-menu__link-item.t-active {
              opacity: 1 !important;
            }
          }
        </style>
      </div>
      <div
        id="rec640498715"
        class="r t-rec t-screenmin-640px t-screenmax-1200px"
        style="background-color: #2e2d2c"
        data-record-type="257"
        data-screen-min="640px"
        data-screen-max="1200px"
        data-bg-color="#2e2d2c"
      >
        <!-- T228 -->
        <div id="nav640498715marker"></div>
        <div class="tmenu-mobile tmenu-mobile_positionfixed">
          <div class="tmenu-mobile__container">
            <div class="tmenu-mobile__burgerlogo">
              <a href="https://recifra.ru/sdm2023" style="color: #ffffff"
                ><img
                  src="images/tild3331-3539-4530-b865-303837656339__image.png"
                  class="tmenu-mobile__imglogo"
                  imgfield="img"
                  style="max-width: 280px; width: 280px"
                  alt=""
              /></a>
            </div>
            <button
              type="button"
              class="t-menuburger t-menuburger_first"
              aria-label="Навигационное меню"
              aria-expanded="false"
            >
              <span style="background-color: #fff"></span
              ><span style="background-color: #fff"></span
              ><span style="background-color: #fff"></span
              ><span style="background-color: #fff"></span>
            </button>
            <script>
              function t_menuburger_init(recid) {
                var rec = document.querySelector("#rec" + recid);
                if (!rec) return;
                var burger = rec.querySelector(".t-menuburger");
                if (!burger) return;
                var isSecondStyle = burger.classList.contains(
                  "t-menuburger_second"
                );
                if (
                  isSecondStyle &&
                  !window.isMobile &&
                  !("ontouchend" in document)
                ) {
                  burger.addEventListener("mouseenter", function () {
                    if (burger.classList.contains("t-menuburger-opened"))
                      return;
                    burger.classList.remove("t-menuburger-unhovered");
                    burger.classList.add("t-menuburger-hovered");
                  });
                  burger.addEventListener("mouseleave", function () {
                    if (burger.classList.contains("t-menuburger-opened"))
                      return;
                    burger.classList.remove("t-menuburger-hovered");
                    burger.classList.add("t-menuburger-unhovered");
                    setTimeout(function () {
                      burger.classList.remove("t-menuburger-unhovered");
                    }, 300);
                  });
                }
                burger.addEventListener("click", function () {
                  if (
                    !burger.closest(".tmenu-mobile") &&
                    !burger.closest(".t450__burger_container") &&
                    !burger.closest(".t466__container") &&
                    !burger.closest(".t204__burger") &&
                    !burger.closest(".t199__js__menu-toggler")
                  ) {
                    burger.classList.toggle("t-menuburger-opened");
                    burger.classList.remove("t-menuburger-unhovered");
                  }
                });
                var menu = rec.querySelector('[data-menu="yes"]');
                if (!menu) return;
                var menuLinks = menu.querySelectorAll(".t-menu__link-item");
                var submenuClassList = [
                  "t978__menu-link_hook",
                  "t978__tm-link",
                  "t966__tm-link",
                  "t794__tm-link",
                  "t-menusub__target-link",
                ];
                Array.prototype.forEach.call(menuLinks, function (link) {
                  link.addEventListener("click", function () {
                    var isSubmenuHook = submenuClassList.some(function (
                      submenuClass
                    ) {
                      return link.classList.contains(submenuClass);
                    });
                    if (isSubmenuHook) return;
                    burger.classList.remove("t-menuburger-opened");
                  });
                });
                menu.addEventListener(
                  "clickedAnchorInTooltipMenu",
                  function () {
                    burger.classList.remove("t-menuburger-opened");
                  }
                );
              }
              t_onReady(function () {
                t_onFuncLoad("t_menuburger_init", function () {
                  t_menuburger_init("640498715");
                });
              });
            </script>
            <style>
              .t-menuburger {
                position: relative;
                flex-shrink: 0;
                width: 28px;
                height: 20px;
                padding: 0;
                border: none;
                background-color: transparent;
                outline: none;
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transition: transform 0.5s ease-in-out;
                cursor: pointer;
                z-index: 999;
              }
              /*---menu burger lines---*/
              .t-menuburger span {
                display: block;
                position: absolute;
                width: 100%;
                opacity: 1;
                left: 0;
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transition: 0.25s ease-in-out;
                height: 3px;
                background-color: #000;
              }
              .t-menuburger span:nth-child(1) {
                top: 0px;
              }
              .t-menuburger span:nth-child(2),
              .t-menuburger span:nth-child(3) {
                top: 8px;
              }
              .t-menuburger span:nth-child(4) {
                top: 16px;
              }
              /*menu burger big*/
              .t-menuburger__big {
                width: 42px;
                height: 32px;
              }
              .t-menuburger__big span {
                height: 5px;
              }
              .t-menuburger__big span:nth-child(2),
              .t-menuburger__big span:nth-child(3) {
                top: 13px;
              }
              .t-menuburger__big span:nth-child(4) {
                top: 26px;
              }
              /*menu burger small*/
              .t-menuburger__small {
                width: 22px;
                height: 14px;
              }
              .t-menuburger__small span {
                height: 2px;
              }
              .t-menuburger__small span:nth-child(2),
              .t-menuburger__small span:nth-child(3) {
                top: 6px;
              }
              .t-menuburger__small span:nth-child(4) {
                top: 12px;
              }
              /*menu burger opened*/
              .t-menuburger-opened span:nth-child(1) {
                top: 8px;
                width: 0%;
                left: 50%;
              }
              .t-menuburger-opened span:nth-child(2) {
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
              }
              .t-menuburger-opened span:nth-child(3) {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
              }
              .t-menuburger-opened span:nth-child(4) {
                top: 8px;
                width: 0%;
                left: 50%;
              }
              .t-menuburger-opened.t-menuburger__big span:nth-child(1) {
                top: 6px;
              }
              .t-menuburger-opened.t-menuburger__big span:nth-child(4) {
                top: 18px;
              }
              .t-menuburger-opened.t-menuburger__small span:nth-child(1),
              .t-menuburger-opened.t-menuburger__small span:nth-child(4) {
                top: 6px;
              }
              /*---menu burger first style---*/
              @media (hover), (min-width: 0\0) {
                .t-menuburger_first:hover span:nth-child(1) {
                  transform: translateY(1px);
                }
                .t-menuburger_first:hover span:nth-child(4) {
                  transform: translateY(-1px);
                }
                .t-menuburger_first.t-menuburger__big:hover span:nth-child(1) {
                  transform: translateY(3px);
                }
                .t-menuburger_first.t-menuburger__big:hover span:nth-child(4) {
                  transform: translateY(-3px);
                }
              }
              /*---menu burger second style---*/
              .t-menuburger_second span:nth-child(2),
              .t-menuburger_second span:nth-child(3) {
                width: 80%;
                left: 20%;
                right: 0;
              }
              @media (hover), (min-width: 0\0) {
                .t-menuburger_second.t-menuburger-hovered span:nth-child(2),
                .t-menuburger_second.t-menuburger-hovered span:nth-child(3) {
                  animation: t-menuburger-anim 0.3s ease-out normal forwards;
                }
                .t-menuburger_second.t-menuburger-unhovered span:nth-child(2),
                .t-menuburger_second.t-menuburger-unhovered span:nth-child(3) {
                  animation: t-menuburger-anim2 0.3s ease-out normal forwards;
                }
              }
              .t-menuburger_second.t-menuburger-opened span:nth-child(2),
              .t-menuburger_second.t-menuburger-opened span:nth-child(3) {
                left: 0;
                right: 0;
                width: 100% !important;
              }
              /*---menu burger third style---*/
              .t-menuburger_third span:nth-child(4) {
                width: 70%;
                left: unset;
                right: 0;
              }
              @media (hover), (min-width: 0\0) {
                .t-menuburger_third:not(.t-menuburger-opened):hover
                  span:nth-child(4) {
                  width: 100%;
                }
              }
              .t-menuburger_third.t-menuburger-opened span:nth-child(4) {
                width: 0 !important;
                right: 50%;
              }
              /*---menu burger fourth style---*/
              .t-menuburger_fourth {
                height: 12px;
              }
              .t-menuburger_fourth.t-menuburger__small {
                height: 8px;
              }
              .t-menuburger_fourth.t-menuburger__big {
                height: 18px;
              }
              .t-menuburger_fourth span:nth-child(2),
              .t-menuburger_fourth span:nth-child(3) {
                top: 4px;
                opacity: 0;
              }
              .t-menuburger_fourth span:nth-child(4) {
                top: 8px;
              }
              .t-menuburger_fourth.t-menuburger__small span:nth-child(2),
              .t-menuburger_fourth.t-menuburger__small span:nth-child(3) {
                top: 3px;
              }
              .t-menuburger_fourth.t-menuburger__small span:nth-child(4) {
                top: 6px;
              }
              .t-menuburger_fourth.t-menuburger__small span:nth-child(2),
              .t-menuburger_fourth.t-menuburger__small span:nth-child(3) {
                top: 3px;
              }
              .t-menuburger_fourth.t-menuburger__small span:nth-child(4) {
                top: 6px;
              }
              .t-menuburger_fourth.t-menuburger__big span:nth-child(2),
              .t-menuburger_fourth.t-menuburger__big span:nth-child(3) {
                top: 6px;
              }
              .t-menuburger_fourth.t-menuburger__big span:nth-child(4) {
                top: 12px;
              }
              @media (hover), (min-width: 0\0) {
                .t-menuburger_fourth:not(.t-menuburger-opened):hover
                  span:nth-child(1) {
                  transform: translateY(1px);
                }
                .t-menuburger_fourth:not(.t-menuburger-opened):hover
                  span:nth-child(4) {
                  transform: translateY(-1px);
                }
                .t-menuburger_fourth.t-menuburger__big:not(
                    .t-menuburger-opened
                  ):hover
                  span:nth-child(1) {
                  transform: translateY(3px);
                }
                .t-menuburger_fourth.t-menuburger__big:not(
                    .t-menuburger-opened
                  ):hover
                  span:nth-child(4) {
                  transform: translateY(-3px);
                }
              }
              .t-menuburger_fourth.t-menuburger-opened span:nth-child(1),
              .t-menuburger_fourth.t-menuburger-opened span:nth-child(4) {
                top: 4px;
              }
              .t-menuburger_fourth.t-menuburger-opened span:nth-child(2),
              .t-menuburger_fourth.t-menuburger-opened span:nth-child(3) {
                opacity: 1;
              }
              /*---menu burger animations---*/
              @keyframes t-menuburger-anim {
                0% {
                  width: 80%;
                  left: 20%;
                  right: 0;
                }
                50% {
                  width: 100%;
                  left: 0;
                  right: 0;
                }
                100% {
                  width: 80%;
                  left: 0;
                  right: 20%;
                }
              }
              @keyframes t-menuburger-anim2 {
                0% {
                  width: 80%;
                  left: 0;
                }
                50% {
                  width: 100%;
                  right: 0;
                  left: 0;
                }
                100% {
                  width: 80%;
                  left: 20%;
                  right: 0;
                }
              }
            </style>
          </div>
        </div>
        <style>
          .tmenu-mobile {
            background-color: #111;
            display: none;
            width: 100%;
            top: 0;
            z-index: 990;
          }
          .tmenu-mobile_positionfixed {
            position: fixed;
          }
          .tmenu-mobile__text {
            color: #fff;
          }
          .tmenu-mobile__container {
            min-height: 64px;
            padding: 20px;
            position: relative;
            box-sizing: border-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
          }
          .tmenu-mobile__list {
            display: block;
          }
          .tmenu-mobile__burgerlogo {
            display: inline-block;
            font-size: 24px;
            font-weight: 400;
            white-space: nowrap;
            vertical-align: middle;
          }
          .tmenu-mobile__imglogo {
            height: auto;
            display: block;
            max-width: 300px !important;
            box-sizing: border-box;
            padding: 0;
            margin: 0 auto;
          }
          @media screen and (max-width: 980px) {
            .tmenu-mobile__menucontent_hidden {
              display: none;
              height: 100%;
            }
            .tmenu-mobile {
              display: block;
            }
          }
          @media screen and (max-width: 980px) {
            #rec640498715 .tmenu-mobile {
              background-color: #2e2d2c;
            }
            #rec640498715 .tmenu-mobile__menucontent_fixed {
              position: fixed;
              top: 64px;
            }
            #rec640498715 .t-menuburger {
              -webkit-order: 1;
              -ms-flex-order: 1;
              order: 1;
            }
          }
        </style>
        <div
          id="nav640498715"
          class="t228 t228__positionfixed tmenu-mobile__menucontent_hidden tmenu-mobile__menucontent_fixed"
          style="background-color: rgba(46, 45, 44, 1); height: 70px"
          data-bgcolor-hex="#2e2d2c"
          data-bgcolor-rgba="rgba(46,45,44,1)"
          data-navmarker="nav640498715marker"
          data-appearoffset=""
          data-bgopacity-two="100"
          data-menushadow=""
          data-bgopacity="1"
          data-bgcolor-rgba-afterscroll="rgba(46,45,44,1)"
          data-menu-items-align="center"
          data-menu="yes"
        >
          <div class="t228__maincontainer" style="height: 70px">
            <div class="t228__padding40px"></div>
            <div class="t228__leftside">
              <div class="t228__leftcontainer">
                <a
                  href="https://recifra.ru/sdm2023"
                  class="t228__imgwrapper"
                  style="color: #ffffff"
                  ><img
                    class="t228__imglogo t228__imglogomobile"
                    src="images/tild3331-3539-4530-b865-303837656339__image.png"
                    imgfield="img"
                    style="
                      max-width: 280px;
                      width: 280px;
                      min-width: 280px;
                      height: auto;
                      display: block;
                    "
                    alt=""
                /></a>
              </div>
            </div>
            <div class="t228__centerside">
              <nav class="t228__centercontainer">
                <ul
                  role="list"
                  class="t228__list t-menu__list t228__list_hidden"
                >
                  <li class="t228__list_item" style="padding: 0 15px 0 0">
                    <a
                      class="t-menu__link-item"
                      href="https://recifra.ru/"
                      target="_blank"
                      data-menu-submenu-hook=""
                      data-menu-item-number="1"
                      style="color: #ffffff; font-size: 15px; font-weight: 600"
                      >Рецифра</a
                    >
                  </li>
                  <li class="t228__list_item" style="padding: 0 15px">
                    <a
                      class="t-menu__link-item"
                      href="#rec640354140"
                      data-menu-submenu-hook=""
                      data-menu-item-number="2"
                      style="color: #ffffff; font-size: 15px; font-weight: 600"
                      >За неделю ты...</a
                    >
                  </li>
                  <li class="t228__list_item" style="padding: 0 15px">
                    <a
                      class="t-menu__link-item"
                      href="#rec612848408"
                      data-menu-submenu-hook=""
                      data-menu-item-number="3"
                      style="color: #ffffff; font-size: 15px; font-weight: 600"
                      >О мероприятии
                    </a>
                  </li>
                  <li class="t228__list_item" style="padding: 0 15px">
                    <a
                      class="t-menu__link-item"
                      href="#rec612845875"
                      data-menu-submenu-hook=""
                      data-menu-item-number="4"
                      style="color: #ffffff; font-size: 15px; font-weight: 600"
                      >Направления</a
                    >
                  </li>
                  <li class="t228__list_item" style="padding: 0 15px">
                    <a
                      class="t-menu__link-item"
                      href="#rec640354140"
                      data-menu-submenu-hook=""
                      data-menu-item-number="5"
                      style="color: #ffffff; font-size: 15px; font-weight: 600"
                      >Организаторы</a
                    >
                  </li>
                  <li class="t228__list_item" style="padding: 0 15px">
                    <a
                      class="t-menu__link-item"
                      href="#rec612845880"
                      data-menu-submenu-hook=""
                      data-menu-item-number="6"
                      style="color: #ffffff; font-size: 15px; font-weight: 600"
                      >Кураторы</a
                    >
                  </li>
                  <li class="t228__list_item" style="padding: 0 0 0 15px">
                    <a
                      class="t-menu__link-item"
                      href="#rec651105777"
                      data-menu-submenu-hook=""
                      data-menu-item-number="7"
                      style="color: #ffffff; font-size: 15px; font-weight: 600"
                      >Партнеры</a
                    >
                  </li>
                </ul>
              </nav>
            </div>
            <div class="t228__rightside">
              <div class="t228__rightcontainer">
                <div class="t-sociallinks">
                  <ul
                    role="list"
                    class="t-sociallinks__wrapper"
                    aria-label="Соц. сети"
                  >
                    <!-- new soclinks -->
                    <li
                      class="t-sociallinks__item t-sociallinks__item_telegram"
                    >
                      <a
                        href="https://t.me/recifra_sdm"
                        target="_blank"
                        rel="nofollow"
                        aria-label="telegram"
                        style="width: 30px; height: 30px"
                        ><svg
                          class="t-sociallinks__svg"
                          role="presentation"
                          width="30px"
                          height="30px"
                          viewBox="0 0 100 100"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm21.977-68.056c.386-4.38-4.24-2.576-4.24-2.576-3.415 1.414-6.937 2.85-10.497 4.302-11.04 4.503-22.444 9.155-32.159 13.734-5.268 1.932-2.184 3.864-2.184 3.864l8.351 2.577c3.855 1.16 5.91-.129 5.91-.129l17.988-12.238c6.424-4.38 4.882-.773 3.34.773l-13.49 12.882c-2.056 1.804-1.028 3.35-.129 4.123 2.55 2.249 8.82 6.364 11.557 8.16.712.467 1.185.778 1.292.858.642.515 4.111 2.834 6.424 2.319 2.313-.516 2.57-3.479 2.57-3.479l3.083-20.226c.462-3.511.993-6.886 1.417-9.582.4-2.546.705-4.485.767-5.362Z"
                            fill="#ffffff"
                          /></svg
                      ></a>
                    </li>
                    <li
                      class="t-sociallinks__item t-sociallinks__item_vkmessenger"
                    >
                      <a
                        href="https://vk.com/recifradigital"
                        target="_blank"
                        rel="nofollow"
                        aria-label="vkmessenger"
                        style="width: 30px; height: 30px"
                        ><svg
                          class="t-sociallinks__svg"
                          role="presentation"
                          width="30px"
                          height="30px"
                          viewBox="0 0 100 100"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm-5.08-76.414a48.135 48.135 0 0 0 2.187-.422c.324-.08 1.735-.153 3.134-.163 2.047-.013 3.002.067 4.89.41 7.843 1.428 13.918 5.42 18.472 12.135 1.99 2.934 3.603 7.076 4.066 10.44.313 2.276.265 7.758-.084 9.632-.373 2.006-1.503 5.362-2.424 7.2-2.132 4.25-5.556 8.135-9.378 10.638-1.183.774-3.108 1.843-3.838 2.13-.324.127-.669.291-.766.364-.387.29-3.382 1.191-5.337 1.604-1.807.382-2.488.44-5.279.445-2.862.007-3.437-.042-5.395-.455-3.863-.814-7.02-2.082-9.589-3.85-.587-.404-1.059-.363-4.407.381-3.654.812-4.57.94-4.88.682-.382-.316-.335-.8.4-4.153.749-3.409.938-4.215.702-4.867-.082-.227-.216-.436-.397-.731-2.693-4.394-3.984-9.062-3.997-14.46-.012-4.75.867-8.55 2.898-12.526.727-1.424 2.002-3.481 2.66-4.293.753-.927 4.735-4.855 5.312-5.24 2.412-1.604 2.967-1.933 4.722-2.79 1.91-.934 4.466-1.787 6.329-2.11Zm-4.47 22.33c-.949-2.514-1.303-3.314-1.605-3.615-.316-.317-.585-.352-3.088-.4-2.973-.058-3.103-.022-3.396.94-.119.39.636 3.353.932 3.657a.624.624 0 0 1 .156.375c0 .21.655 1.726 1.42 3.283.396.807 2.79 4.884 2.955 5.034.051.047.547.692 1.102 1.433 1.524 2.037 3.773 4.03 5.762 5.105 1.877 1.015 4.904 1.58 7.043 1.312 1.52-.19 1.615-.358 1.615-2.881 0-3.283.375-3.786 2.166-2.903.73.36 3.253 2.726 4.916 4.61.417.473.924.947 1.127 1.054.385.204 5.693.285 6.19.094.496-.19.516-1.17.043-2.138-.546-1.117-2.396-3.43-4.437-5.55-1.08-1.121-1.575-1.76-1.575-2.033 0-.34.841-1.897 1.161-2.15.107-.084.956-1.339 1.282-1.893.094-.16.636-1.07 1.204-2.023 1.464-2.455 1.755-3.08 1.864-4.002.088-.74.057-.84-.335-1.097-.367-.24-.822-.275-3.044-.228-2.49.051-2.631.073-3.043.46-.237.223-.479.565-.536.758-.168.565-1.947 4.025-2.2 4.278-.127.127-.23.305-.23.397 0 .281-1.514 2.377-2.339 3.24-.903.943-1.416 1.2-1.888.947-.31-.165-.326-.399-.329-4.679-.002-3.293-.06-4.617-.216-4.926l-.213-.421H45.35l-.25.447c-.24.425-.219.501.414 1.518l.666 1.07v4.3c0 4.29 0 4.3-.367 4.352-.5.07-1.505-.864-2.465-2.296-.797-1.188-2.506-4.389-2.898-5.429Z"
                            fill="#ffffff"
                          /></svg
                      ></a>
                    </li>
                    <li class="t-sociallinks__item t-sociallinks__item_email">
                      <a
                        href="mailto:sdm@recifra.ru"
                        target="_blank"
                        rel="nofollow"
                        aria-label="Электронная почта"
                        style="width: 30px; height: 30px"
                        ><svg
                          class="t-sociallinks__svg"
                          role="presentation"
                          width="30px"
                          height="30px"
                          viewBox="0 0 100 100"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM51.8276 49.2076L74.191 33.6901C73.4347 32.6649 72.2183 32 70.8466 32H29.1534C27.8336 32 26.6576 32.6156 25.8968 33.5752L47.5881 49.172C48.8512 50.0802 50.5494 50.0945 51.8276 49.2076ZM75 63.6709V37.6286L53.4668 52.57C51.1883 54.151 48.1611 54.1256 45.9095 52.5066L25 37.4719V63.6709C25 65.9648 26.8595 67.8243 29.1534 67.8243H70.8466C73.1405 67.8243 75 65.9648 75 63.6709Z"
                            fill="#ffffff"
                          /></svg
                      ></a>
                    </li>
                    <!-- /new soclinks -->
                  </ul>
                </div>
              </div>
            </div>
            <div class="t228__padding40px"></div>
          </div>
        </div>
        <style>
          @media screen and (max-width: 980px) {
            #rec640498715 .t228__leftcontainer {
              display: none;
            }
          }</style
        ><style>
          @media screen and (max-width: 980px) {
            #rec640498715 .t228__leftcontainer {
              padding: 20px;
            }
            #rec640498715 .t228__imglogo {
              padding: 20px 0;
            }
            #rec640498715 .t228 {
            }
          }
        </style>
        <script>
          window.addEventListener("load", function () {
            t_onFuncLoad("t228_setWidth", function () {
              t228_setWidth("640498715");
            });
          });
          window.addEventListener(
            "resize",
            t_throttle(function () {
              t_onFuncLoad("t228_setWidth", function () {
                t228_setWidth("640498715");
              });
              t_onFuncLoad("t_menu__setBGcolor", function () {
                t_menu__setBGcolor("640498715", ".t228");
              });
            })
          );
          t_onReady(function () {
            t_onFuncLoad("t_menu__highlightActiveLinks", function () {
              t_menu__highlightActiveLinks(".t228__list_item a");
            });
            t_onFuncLoad("t_menu__findAnchorLinks", function () {
              t_menu__findAnchorLinks("640498715", ".t228__list_item a");
            });
            t_onFuncLoad("t228__init", function () {
              t228__init("640498715");
            });
            t_onFuncLoad("t_menu__setBGcolor", function () {
              t_menu__setBGcolor("640498715", ".t228");
            });
            t_onFuncLoad("t_menu__interactFromKeyboard", function () {
              t_menu__interactFromKeyboard("640498715");
            });
            t_onFuncLoad("t228_setWidth", function () {
              t228_setWidth("640498715");
            });
            t_onFuncLoad("t_menu__changeBgOpacity", function () {
              t_menu__changeBgOpacity("640498715", ".t228");
              window.addEventListener(
                "scroll",
                t_throttle(function () {
                  t_menu__changeBgOpacity("640498715", ".t228");
                })
              );
            });
            t_onFuncLoad("t_menu__createMobileMenu", function () {
              t_menu__createMobileMenu("640498715", ".t228");
            });
          });
        </script>
        <!--[if IE 8
          ]><style>
            #rec640498715 .t228 {
              filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D92e2d2c', endColorstr='#D92e2d2c');
            }
          </style><!
        [endif]--><style>
          @media (hover: hover), (min-width: 0\0) {
            #rec640498715 .t-btn:not(.t-animate_no-hover):hover {
              background-color: #2ce817 !important;
            }
            #rec640498715 .t-btn:not(.t-animate_no-hover):focus-visible {
              background-color: #2ce817 !important;
            }
          }</style
        ><style>
          #rec640498715 .t-menu__link-item {
            -webkit-transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
            transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
          }
          #rec640498715 .t-menu__link-item.t-active:not(.t978__menu-link) {
            color: #2ce817 !important;
          }
          #rec640498715
            .t-menu__link-item:not(.t-active):not(.tooltipstered):hover {
            color: #2ce817 !important;
          }
          #rec640498715
            .t-menu__link-item:not(.t-active):not(
              .tooltipstered
            ):focus-visible {
            color: #2ce817 !important;
          }
          @supports (overflow: -webkit-marquee) and (justify-content: inherit) {
            #rec640498715 .t-menu__link-item,
            #rec640498715 .t-menu__link-item.t-active {
              opacity: 1 !important;
            }
          }
        </style>
      </div>
      <div
        id="rec651287069"
        class="r t-rec t-screenmax-640px"
        style="background-color: #2e2d2c"
        data-record-type="257"
        data-screen-max="640px"
        data-bg-color="#2e2d2c"
      >
        <!-- T228 -->
        <div id="nav651287069marker"></div>
        <div class="tmenu-mobile tmenu-mobile_positionfixed">
          <div class="tmenu-mobile__container">
            <div class="tmenu-mobile__burgerlogo">
              <a href="https://recifra.ru/sdm2023" style="color: #ffffff"
                ><img
                  src="images/tild6437-3162-4966-b831-363463636237__image.png"
                  class="tmenu-mobile__imglogo"
                  imgfield="img"
                  style="max-width: 280px; width: 280px"
                  alt=""
              /></a>
            </div>
            <button
              type="button"
              class="t-menuburger t-menuburger_first"
              aria-label="Навигационное меню"
              aria-expanded="false"
            >
              <span style="background-color: #fff"></span
              ><span style="background-color: #fff"></span
              ><span style="background-color: #fff"></span
              ><span style="background-color: #fff"></span>
            </button>
            <script>
              function t_menuburger_init(recid) {
                var rec = document.querySelector("#rec" + recid);
                if (!rec) return;
                var burger = rec.querySelector(".t-menuburger");
                if (!burger) return;
                var isSecondStyle = burger.classList.contains(
                  "t-menuburger_second"
                );
                if (
                  isSecondStyle &&
                  !window.isMobile &&
                  !("ontouchend" in document)
                ) {
                  burger.addEventListener("mouseenter", function () {
                    if (burger.classList.contains("t-menuburger-opened"))
                      return;
                    burger.classList.remove("t-menuburger-unhovered");
                    burger.classList.add("t-menuburger-hovered");
                  });
                  burger.addEventListener("mouseleave", function () {
                    if (burger.classList.contains("t-menuburger-opened"))
                      return;
                    burger.classList.remove("t-menuburger-hovered");
                    burger.classList.add("t-menuburger-unhovered");
                    setTimeout(function () {
                      burger.classList.remove("t-menuburger-unhovered");
                    }, 300);
                  });
                }
                burger.addEventListener("click", function () {
                  if (
                    !burger.closest(".tmenu-mobile") &&
                    !burger.closest(".t450__burger_container") &&
                    !burger.closest(".t466__container") &&
                    !burger.closest(".t204__burger") &&
                    !burger.closest(".t199__js__menu-toggler")
                  ) {
                    burger.classList.toggle("t-menuburger-opened");
                    burger.classList.remove("t-menuburger-unhovered");
                  }
                });
                var menu = rec.querySelector('[data-menu="yes"]');
                if (!menu) return;
                var menuLinks = menu.querySelectorAll(".t-menu__link-item");
                var submenuClassList = [
                  "t978__menu-link_hook",
                  "t978__tm-link",
                  "t966__tm-link",
                  "t794__tm-link",
                  "t-menusub__target-link",
                ];
                Array.prototype.forEach.call(menuLinks, function (link) {
                  link.addEventListener("click", function () {
                    var isSubmenuHook = submenuClassList.some(function (
                      submenuClass
                    ) {
                      return link.classList.contains(submenuClass);
                    });
                    if (isSubmenuHook) return;
                    burger.classList.remove("t-menuburger-opened");
                  });
                });
                menu.addEventListener(
                  "clickedAnchorInTooltipMenu",
                  function () {
                    burger.classList.remove("t-menuburger-opened");
                  }
                );
              }
              t_onReady(function () {
                t_onFuncLoad("t_menuburger_init", function () {
                  t_menuburger_init("651287069");
                });
              });
            </script>
            <style>
              .t-menuburger {
                position: relative;
                flex-shrink: 0;
                width: 28px;
                height: 20px;
                padding: 0;
                border: none;
                background-color: transparent;
                outline: none;
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transition: transform 0.5s ease-in-out;
                cursor: pointer;
                z-index: 999;
              }
              /*---menu burger lines---*/
              .t-menuburger span {
                display: block;
                position: absolute;
                width: 100%;
                opacity: 1;
                left: 0;
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transition: 0.25s ease-in-out;
                height: 3px;
                background-color: #000;
              }
              .t-menuburger span:nth-child(1) {
                top: 0px;
              }
              .t-menuburger span:nth-child(2),
              .t-menuburger span:nth-child(3) {
                top: 8px;
              }
              .t-menuburger span:nth-child(4) {
                top: 16px;
              }
              /*menu burger big*/
              .t-menuburger__big {
                width: 42px;
                height: 32px;
              }
              .t-menuburger__big span {
                height: 5px;
              }
              .t-menuburger__big span:nth-child(2),
              .t-menuburger__big span:nth-child(3) {
                top: 13px;
              }
              .t-menuburger__big span:nth-child(4) {
                top: 26px;
              }
              /*menu burger small*/
              .t-menuburger__small {
                width: 22px;
                height: 14px;
              }
              .t-menuburger__small span {
                height: 2px;
              }
              .t-menuburger__small span:nth-child(2),
              .t-menuburger__small span:nth-child(3) {
                top: 6px;
              }
              .t-menuburger__small span:nth-child(4) {
                top: 12px;
              }
              /*menu burger opened*/
              .t-menuburger-opened span:nth-child(1) {
                top: 8px;
                width: 0%;
                left: 50%;
              }
              .t-menuburger-opened span:nth-child(2) {
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
              }
              .t-menuburger-opened span:nth-child(3) {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
              }
              .t-menuburger-opened span:nth-child(4) {
                top: 8px;
                width: 0%;
                left: 50%;
              }
              .t-menuburger-opened.t-menuburger__big span:nth-child(1) {
                top: 6px;
              }
              .t-menuburger-opened.t-menuburger__big span:nth-child(4) {
                top: 18px;
              }
              .t-menuburger-opened.t-menuburger__small span:nth-child(1),
              .t-menuburger-opened.t-menuburger__small span:nth-child(4) {
                top: 6px;
              }
              /*---menu burger first style---*/
              @media (hover), (min-width: 0\0) {
                .t-menuburger_first:hover span:nth-child(1) {
                  transform: translateY(1px);
                }
                .t-menuburger_first:hover span:nth-child(4) {
                  transform: translateY(-1px);
                }
                .t-menuburger_first.t-menuburger__big:hover span:nth-child(1) {
                  transform: translateY(3px);
                }
                .t-menuburger_first.t-menuburger__big:hover span:nth-child(4) {
                  transform: translateY(-3px);
                }
              }
              /*---menu burger second style---*/
              .t-menuburger_second span:nth-child(2),
              .t-menuburger_second span:nth-child(3) {
                width: 80%;
                left: 20%;
                right: 0;
              }
              @media (hover), (min-width: 0\0) {
                .t-menuburger_second.t-menuburger-hovered span:nth-child(2),
                .t-menuburger_second.t-menuburger-hovered span:nth-child(3) {
                  animation: t-menuburger-anim 0.3s ease-out normal forwards;
                }
                .t-menuburger_second.t-menuburger-unhovered span:nth-child(2),
                .t-menuburger_second.t-menuburger-unhovered span:nth-child(3) {
                  animation: t-menuburger-anim2 0.3s ease-out normal forwards;
                }
              }
              .t-menuburger_second.t-menuburger-opened span:nth-child(2),
              .t-menuburger_second.t-menuburger-opened span:nth-child(3) {
                left: 0;
                right: 0;
                width: 100% !important;
              }
              /*---menu burger third style---*/
              .t-menuburger_third span:nth-child(4) {
                width: 70%;
                left: unset;
                right: 0;
              }
              @media (hover), (min-width: 0\0) {
                .t-menuburger_third:not(.t-menuburger-opened):hover
                  span:nth-child(4) {
                  width: 100%;
                }
              }
              .t-menuburger_third.t-menuburger-opened span:nth-child(4) {
                width: 0 !important;
                right: 50%;
              }
              /*---menu burger fourth style---*/
              .t-menuburger_fourth {
                height: 12px;
              }
              .t-menuburger_fourth.t-menuburger__small {
                height: 8px;
              }
              .t-menuburger_fourth.t-menuburger__big {
                height: 18px;
              }
              .t-menuburger_fourth span:nth-child(2),
              .t-menuburger_fourth span:nth-child(3) {
                top: 4px;
                opacity: 0;
              }
              .t-menuburger_fourth span:nth-child(4) {
                top: 8px;
              }
              .t-menuburger_fourth.t-menuburger__small span:nth-child(2),
              .t-menuburger_fourth.t-menuburger__small span:nth-child(3) {
                top: 3px;
              }
              .t-menuburger_fourth.t-menuburger__small span:nth-child(4) {
                top: 6px;
              }
              .t-menuburger_fourth.t-menuburger__small span:nth-child(2),
              .t-menuburger_fourth.t-menuburger__small span:nth-child(3) {
                top: 3px;
              }
              .t-menuburger_fourth.t-menuburger__small span:nth-child(4) {
                top: 6px;
              }
              .t-menuburger_fourth.t-menuburger__big span:nth-child(2),
              .t-menuburger_fourth.t-menuburger__big span:nth-child(3) {
                top: 6px;
              }
              .t-menuburger_fourth.t-menuburger__big span:nth-child(4) {
                top: 12px;
              }
              @media (hover), (min-width: 0\0) {
                .t-menuburger_fourth:not(.t-menuburger-opened):hover
                  span:nth-child(1) {
                  transform: translateY(1px);
                }
                .t-menuburger_fourth:not(.t-menuburger-opened):hover
                  span:nth-child(4) {
                  transform: translateY(-1px);
                }
                .t-menuburger_fourth.t-menuburger__big:not(
                    .t-menuburger-opened
                  ):hover
                  span:nth-child(1) {
                  transform: translateY(3px);
                }
                .t-menuburger_fourth.t-menuburger__big:not(
                    .t-menuburger-opened
                  ):hover
                  span:nth-child(4) {
                  transform: translateY(-3px);
                }
              }
              .t-menuburger_fourth.t-menuburger-opened span:nth-child(1),
              .t-menuburger_fourth.t-menuburger-opened span:nth-child(4) {
                top: 4px;
              }
              .t-menuburger_fourth.t-menuburger-opened span:nth-child(2),
              .t-menuburger_fourth.t-menuburger-opened span:nth-child(3) {
                opacity: 1;
              }
              /*---menu burger animations---*/
              @keyframes t-menuburger-anim {
                0% {
                  width: 80%;
                  left: 20%;
                  right: 0;
                }
                50% {
                  width: 100%;
                  left: 0;
                  right: 0;
                }
                100% {
                  width: 80%;
                  left: 0;
                  right: 20%;
                }
              }
              @keyframes t-menuburger-anim2 {
                0% {
                  width: 80%;
                  left: 0;
                }
                50% {
                  width: 100%;
                  right: 0;
                  left: 0;
                }
                100% {
                  width: 80%;
                  left: 20%;
                  right: 0;
                }
              }
            </style>
          </div>
        </div>
        <style>
          .tmenu-mobile {
            background-color: #111;
            display: none;
            width: 100%;
            top: 0;
            z-index: 990;
          }
          .tmenu-mobile_positionfixed {
            position: fixed;
          }
          .tmenu-mobile__text {
            color: #fff;
          }
          .tmenu-mobile__container {
            min-height: 64px;
            padding: 20px;
            position: relative;
            box-sizing: border-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
          }
          .tmenu-mobile__list {
            display: block;
          }
          .tmenu-mobile__burgerlogo {
            display: inline-block;
            font-size: 24px;
            font-weight: 400;
            white-space: nowrap;
            vertical-align: middle;
          }
          .tmenu-mobile__imglogo {
            height: auto;
            display: block;
            max-width: 300px !important;
            box-sizing: border-box;
            padding: 0;
            margin: 0 auto;
          }
          @media screen and (max-width: 980px) {
            .tmenu-mobile__menucontent_hidden {
              display: none;
              height: 100%;
            }
            .tmenu-mobile {
              display: block;
            }
          }
          @media screen and (max-width: 980px) {
            #rec651287069 .tmenu-mobile {
              background-color: #2e2d2c;
            }
            #rec651287069 .tmenu-mobile__menucontent_fixed {
              position: fixed;
              top: 64px;
            }
            #rec651287069 .t-menuburger {
              -webkit-order: 1;
              -ms-flex-order: 1;
              order: 1;
            }
          }
        </style>
        <div
          id="nav651287069"
          class="t228 t228__positionfixed tmenu-mobile__menucontent_hidden tmenu-mobile__menucontent_fixed"
          style="background-color: rgba(46, 45, 44, 1); height: 60px"
          data-bgcolor-hex="#2e2d2c"
          data-bgcolor-rgba="rgba(46,45,44,1)"
          data-navmarker="nav651287069marker"
          data-appearoffset=""
          data-bgopacity-two="100"
          data-menushadow=""
          data-bgopacity="1"
          data-bgcolor-rgba-afterscroll="rgba(46,45,44,1)"
          data-menu-items-align="center"
          data-menu="yes"
        >
          <div class="t228__maincontainer" style="height: 60px">
            <div class="t228__padding40px"></div>
            <div class="t228__leftside">
              <div class="t228__leftcontainer">
                <a
                  href="https://recifra.ru/sdm2023"
                  class="t228__imgwrapper"
                  style="color: #ffffff"
                  ><img
                    class="t228__imglogo t228__imglogomobile"
                    src="images/tild6437-3162-4966-b831-363463636237__image.png"
                    imgfield="img"
                    style="
                      max-width: 280px;
                      width: 280px;
                      min-width: 280px;
                      height: auto;
                      display: block;
                    "
                    alt=""
                /></a>
              </div>
            </div>
            <div class="t228__centerside">
              <nav class="t228__centercontainer">
                <ul
                  role="list"
                  class="t228__list t-menu__list t228__list_hidden"
                >
                  <li class="t228__list_item" style="padding: 0 15px 0 0">
                    <a
                      class="t-menu__link-item"
                      href="https://recifra.ru/"
                      target="_blank"
                      data-menu-submenu-hook=""
                      data-menu-item-number="1"
                      style="color: #ffffff; font-size: 15px; font-weight: 600"
                      >Рецифра</a
                    >
                  </li>
                  <li class="t228__list_item" style="padding: 0 15px">
                    <a
                      class="t-menu__link-item"
                      href="#rec640354140"
                      data-menu-submenu-hook=""
                      data-menu-item-number="2"
                      style="color: #ffffff; font-size: 15px; font-weight: 600"
                      >За неделю ты...</a
                    >
                  </li>
                  <li class="t228__list_item" style="padding: 0 15px">
                    <a
                      class="t-menu__link-item"
                      href="#rec612848408"
                      data-menu-submenu-hook=""
                      data-menu-item-number="3"
                      style="color: #ffffff; font-size: 15px; font-weight: 600"
                      >О мероприятии
                    </a>
                  </li>
                  <li class="t228__list_item" style="padding: 0 15px">
                    <a
                      class="t-menu__link-item"
                      href="#rec612845875"
                      data-menu-submenu-hook=""
                      data-menu-item-number="4"
                      style="color: #ffffff; font-size: 15px; font-weight: 600"
                      >Направления</a
                    >
                  </li>
                  <li class="t228__list_item" style="padding: 0 15px">
                    <a
                      class="t-menu__link-item"
                      href="#rec640354140"
                      data-menu-submenu-hook=""
                      data-menu-item-number="5"
                      style="color: #ffffff; font-size: 15px; font-weight: 600"
                      >Организаторы</a
                    >
                  </li>
                  <li class="t228__list_item" style="padding: 0 15px">
                    <a
                      class="t-menu__link-item"
                      href="#rec612845880"
                      data-menu-submenu-hook=""
                      data-menu-item-number="6"
                      style="color: #ffffff; font-size: 15px; font-weight: 600"
                      >Кураторы</a
                    >
                  </li>
                  <li class="t228__list_item" style="padding: 0 0 0 15px">
                    <a
                      class="t-menu__link-item"
                      href="#rec651130485"
                      data-menu-submenu-hook=""
                      data-menu-item-number="7"
                      style="color: #ffffff; font-size: 15px; font-weight: 600"
                      >Партнеры</a
                    >
                  </li>
                </ul>
              </nav>
            </div>
            <div class="t228__rightside">
              <div class="t228__rightcontainer">
                <div class="t-sociallinks">
                  <ul
                    role="list"
                    class="t-sociallinks__wrapper"
                    aria-label="Соц. сети"
                  >
                    <!-- new soclinks -->
                    <li
                      class="t-sociallinks__item t-sociallinks__item_telegram"
                    >
                      <a
                        href="https://t.me/recifra_sdm"
                        target="_blank"
                        rel="nofollow"
                        aria-label="telegram"
                        style="width: 30px; height: 30px"
                        ><svg
                          class="t-sociallinks__svg"
                          role="presentation"
                          width="30px"
                          height="30px"
                          viewBox="0 0 100 100"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm21.977-68.056c.386-4.38-4.24-2.576-4.24-2.576-3.415 1.414-6.937 2.85-10.497 4.302-11.04 4.503-22.444 9.155-32.159 13.734-5.268 1.932-2.184 3.864-2.184 3.864l8.351 2.577c3.855 1.16 5.91-.129 5.91-.129l17.988-12.238c6.424-4.38 4.882-.773 3.34.773l-13.49 12.882c-2.056 1.804-1.028 3.35-.129 4.123 2.55 2.249 8.82 6.364 11.557 8.16.712.467 1.185.778 1.292.858.642.515 4.111 2.834 6.424 2.319 2.313-.516 2.57-3.479 2.57-3.479l3.083-20.226c.462-3.511.993-6.886 1.417-9.582.4-2.546.705-4.485.767-5.362Z"
                            fill="#ffffff"
                          /></svg
                      ></a>
                    </li>
                    <li
                      class="t-sociallinks__item t-sociallinks__item_vkmessenger"
                    >
                      <a
                        href="https://vk.com/recifradigital"
                        target="_blank"
                        rel="nofollow"
                        aria-label="vkmessenger"
                        style="width: 30px; height: 30px"
                        ><svg
                          class="t-sociallinks__svg"
                          role="presentation"
                          width="30px"
                          height="30px"
                          viewBox="0 0 100 100"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm-5.08-76.414a48.135 48.135 0 0 0 2.187-.422c.324-.08 1.735-.153 3.134-.163 2.047-.013 3.002.067 4.89.41 7.843 1.428 13.918 5.42 18.472 12.135 1.99 2.934 3.603 7.076 4.066 10.44.313 2.276.265 7.758-.084 9.632-.373 2.006-1.503 5.362-2.424 7.2-2.132 4.25-5.556 8.135-9.378 10.638-1.183.774-3.108 1.843-3.838 2.13-.324.127-.669.291-.766.364-.387.29-3.382 1.191-5.337 1.604-1.807.382-2.488.44-5.279.445-2.862.007-3.437-.042-5.395-.455-3.863-.814-7.02-2.082-9.589-3.85-.587-.404-1.059-.363-4.407.381-3.654.812-4.57.94-4.88.682-.382-.316-.335-.8.4-4.153.749-3.409.938-4.215.702-4.867-.082-.227-.216-.436-.397-.731-2.693-4.394-3.984-9.062-3.997-14.46-.012-4.75.867-8.55 2.898-12.526.727-1.424 2.002-3.481 2.66-4.293.753-.927 4.735-4.855 5.312-5.24 2.412-1.604 2.967-1.933 4.722-2.79 1.91-.934 4.466-1.787 6.329-2.11Zm-4.47 22.33c-.949-2.514-1.303-3.314-1.605-3.615-.316-.317-.585-.352-3.088-.4-2.973-.058-3.103-.022-3.396.94-.119.39.636 3.353.932 3.657a.624.624 0 0 1 .156.375c0 .21.655 1.726 1.42 3.283.396.807 2.79 4.884 2.955 5.034.051.047.547.692 1.102 1.433 1.524 2.037 3.773 4.03 5.762 5.105 1.877 1.015 4.904 1.58 7.043 1.312 1.52-.19 1.615-.358 1.615-2.881 0-3.283.375-3.786 2.166-2.903.73.36 3.253 2.726 4.916 4.61.417.473.924.947 1.127 1.054.385.204 5.693.285 6.19.094.496-.19.516-1.17.043-2.138-.546-1.117-2.396-3.43-4.437-5.55-1.08-1.121-1.575-1.76-1.575-2.033 0-.34.841-1.897 1.161-2.15.107-.084.956-1.339 1.282-1.893.094-.16.636-1.07 1.204-2.023 1.464-2.455 1.755-3.08 1.864-4.002.088-.74.057-.84-.335-1.097-.367-.24-.822-.275-3.044-.228-2.49.051-2.631.073-3.043.46-.237.223-.479.565-.536.758-.168.565-1.947 4.025-2.2 4.278-.127.127-.23.305-.23.397 0 .281-1.514 2.377-2.339 3.24-.903.943-1.416 1.2-1.888.947-.31-.165-.326-.399-.329-4.679-.002-3.293-.06-4.617-.216-4.926l-.213-.421H45.35l-.25.447c-.24.425-.219.501.414 1.518l.666 1.07v4.3c0 4.29 0 4.3-.367 4.352-.5.07-1.505-.864-2.465-2.296-.797-1.188-2.506-4.389-2.898-5.429Z"
                            fill="#ffffff"
                          /></svg
                      ></a>
                    </li>
                    <li class="t-sociallinks__item t-sociallinks__item_email">
                      <a
                        href="mailto:sdm@recifra.ru"
                        target="_blank"
                        rel="nofollow"
                        aria-label="Электронная почта"
                        style="width: 30px; height: 30px"
                        ><svg
                          class="t-sociallinks__svg"
                          role="presentation"
                          width="30px"
                          height="30px"
                          viewBox="0 0 100 100"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM51.8276 49.2076L74.191 33.6901C73.4347 32.6649 72.2183 32 70.8466 32H29.1534C27.8336 32 26.6576 32.6156 25.8968 33.5752L47.5881 49.172C48.8512 50.0802 50.5494 50.0945 51.8276 49.2076ZM75 63.6709V37.6286L53.4668 52.57C51.1883 54.151 48.1611 54.1256 45.9095 52.5066L25 37.4719V63.6709C25 65.9648 26.8595 67.8243 29.1534 67.8243H70.8466C73.1405 67.8243 75 65.9648 75 63.6709Z"
                            fill="#ffffff"
                          /></svg
                      ></a>
                    </li>
                    <!-- /new soclinks -->
                  </ul>
                </div>
              </div>
            </div>
            <div class="t228__padding40px"></div>
          </div>
        </div>
        <style>
          @media screen and (max-width: 980px) {
            #rec651287069 .t228__leftcontainer {
              display: none;
            }
          }</style
        ><style>
          @media screen and (max-width: 980px) {
            #rec651287069 .t228__leftcontainer {
              padding: 20px;
            }
            #rec651287069 .t228__imglogo {
              padding: 20px 0;
            }
            #rec651287069 .t228 {
            }
          }
        </style>
        <script>
          window.addEventListener("load", function () {
            t_onFuncLoad("t228_setWidth", function () {
              t228_setWidth("651287069");
            });
          });
          window.addEventListener(
            "resize",
            t_throttle(function () {
              t_onFuncLoad("t228_setWidth", function () {
                t228_setWidth("651287069");
              });
              t_onFuncLoad("t_menu__setBGcolor", function () {
                t_menu__setBGcolor("651287069", ".t228");
              });
            })
          );
          t_onReady(function () {
            t_onFuncLoad("t_menu__highlightActiveLinks", function () {
              t_menu__highlightActiveLinks(".t228__list_item a");
            });
            t_onFuncLoad("t_menu__findAnchorLinks", function () {
              t_menu__findAnchorLinks("651287069", ".t228__list_item a");
            });
            t_onFuncLoad("t228__init", function () {
              t228__init("651287069");
            });
            t_onFuncLoad("t_menu__setBGcolor", function () {
              t_menu__setBGcolor("651287069", ".t228");
            });
            t_onFuncLoad("t_menu__interactFromKeyboard", function () {
              t_menu__interactFromKeyboard("651287069");
            });
            t_onFuncLoad("t228_setWidth", function () {
              t228_setWidth("651287069");
            });
            t_onFuncLoad("t_menu__changeBgOpacity", function () {
              t_menu__changeBgOpacity("651287069", ".t228");
              window.addEventListener(
                "scroll",
                t_throttle(function () {
                  t_menu__changeBgOpacity("651287069", ".t228");
                })
              );
            });
            t_onFuncLoad("t_menu__createMobileMenu", function () {
              t_menu__createMobileMenu("651287069", ".t228");
            });
          });
        </script>
        <!--[if IE 8
          ]><style>
            #rec651287069 .t228 {
              filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D92e2d2c', endColorstr='#D92e2d2c');
            }
          </style><!
        [endif]--><style>
          @media (hover: hover), (min-width: 0\0) {
            #rec651287069 .t-btn:not(.t-animate_no-hover):hover {
              background-color: #2ce817 !important;
            }
            #rec651287069 .t-btn:not(.t-animate_no-hover):focus-visible {
              background-color: #2ce817 !important;
            }
          }</style
        ><style>
          #rec651287069 .t-menu__link-item {
            -webkit-transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
            transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
          }
          #rec651287069 .t-menu__link-item.t-active:not(.t978__menu-link) {
            color: #2ce817 !important;
          }
          #rec651287069
            .t-menu__link-item:not(.t-active):not(.tooltipstered):hover {
            color: #2ce817 !important;
          }
          #rec651287069
            .t-menu__link-item:not(.t-active):not(
              .tooltipstered
            ):focus-visible {
            color: #2ce817 !important;
          }
          @supports (overflow: -webkit-marquee) and (justify-content: inherit) {
            #rec651287069 .t-menu__link-item,
            #rec651287069 .t-menu__link-item.t-active {
              opacity: 1 !important;
            }
          }
        </style>
      </div>