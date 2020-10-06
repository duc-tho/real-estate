/******/ (function (modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if (installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
               /******/
          }
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
               /******/
          };
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
          /******/
     }
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function (exports, name, getter) {
/******/ 		if (!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
               /******/
          }
          /******/
     };
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function (exports) {
/******/ 		if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
               /******/
          }
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
          /******/
     };
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function (value, mode) {
/******/ 		if (mode & 1) value = __webpack_require__(value);
/******/ 		if (mode & 8) return value;
/******/ 		if ((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if (mode & 2 && typeof value != 'string') for (var key in value) __webpack_require__.d(ns, key, function (key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
          /******/
     };
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function (module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
          /******/
     };
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function (object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
     /******/
})
/************************************************************************/
/******/({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function (module, exports) {

               function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

               !function (e) {
                    var t = {};

                    function o(s) {
                         if (t[s]) return t[s].exports;
                         var n = t[s] = {
                              i: s,
                              l: !1,
                              exports: {}
                         };
                         return e[s].call(n.exports, n, n.exports, o), n.l = !0, n.exports;
                    }

                    o.m = e, o.c = t, o.d = function (e, t, s) {
                         o.o(e, t) || Object.defineProperty(e, t, {
                              enumerable: !0,
                              get: s
                         });
                    }, o.r = function (e) {
                         "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                              value: "Module"
                         }), Object.defineProperty(e, "__esModule", {
                              value: !0
                         });
                    }, o.t = function (e, t) {
                         if (1 & t && (e = o(e)), 8 & t) return e;
                         if (4 & t && "object" == _typeof(e) && e && e.__esModule) return e;
                         var s = Object.create(null);
                         if (o.r(s), Object.defineProperty(s, "default", {
                              enumerable: !0,
                              value: e
                         }), 2 & t && "string" != typeof e) for (var n in e) {
                              o.d(s, n, function (t) {
                                   return e[t];
                              }.bind(null, n));
                         }
                         return s;
                    }, o.n = function (e) {
                         var t = e && e.__esModule ? function () {
                              return e["default"];
                         } : function () {
                              return e;
                         };
                         return o.d(t, "a", t), t;
                    }, o.o = function (e, t) {
                         return Object.prototype.hasOwnProperty.call(e, t);
                    }, o.p = "/", o(o.s = 342);
               }({
                    342: function _(e, t, o) {
                         e.exports = o(343);
                    },
                    343: function (_2) {
                         function _(_x, _x2) {
                              return _2.apply(this, arguments);
                         }

                         _.toString = function () {
                              return _2.toString();
                         };

                         return _;
                    }(function (e, t) {
                         !function (e) {
                              "use strict";

                              e(document).ready(function () {
                                   e.ajaxSetup({
                                        headers: {
                                             "X-CSRF-TOKEN": e('meta[name="csrf-token"]').attr("content")
                                        }
                                   }), e(document).on("click", ".generic-form button[type=submit]", function (o) {
                                        var s = this;
                                        o.preventDefault(), o.stopPropagation();
                                        var n = e(this).text();
                                        e(this).prop("disabled", !0).html('<i class="fa fa-spin fa-spinner"></i>'), e.ajax({
                                             type: "POST",
                                             cache: !1,
                                             url: e(this).closest("form").prop("action"),
                                             data: new FormData(e(this).closest("form")[0]),
                                             contentType: !1,
                                             processData: !1,
                                             success: function success(t) {
                                                  e(s).closest("form").find(".text-success").html("").hide(), e(s).closest("form").find(".text-danger").html("").hide(), t.error ? (e(s).closest("form").find(".text-danger").html(t.message).show(), setTimeout(function () {
                                                       e(this).closest("form").find(".text-danger").html("").hide();
                                                  }, 5e3)) : (e(s).closest("form").find("input[type=text]:not([readonly])").val(""), e(s).closest("form").find("input[type=email]").val(""), e(s).closest("form").find("input[type=url]").val(""), e(s).closest("form").find("input[type=tel]").val(""), e(s).closest("form").find("select").val(""), e(s).closest("form").find("textarea").val(""), e(s).closest("form").find(".text-success").html(t.message).show(), t.data && t.data.next_page && (window.location.href = t.data.next_page), setTimeout(function () {
                                                       e(this).closest("form").find(".text-success").html("").hide();
                                                  }, 5e3)), e(s).prop("disabled", !1).html(n);
                                             },
                                             error: function error(o) {
                                                  e(s).prop("disabled", !1).html(n), t(o, e(s).closest("form"));
                                             }
                                        });
                                   });

                                   var t = function t(_t, s) {
                                        if (void 0 === _t.errors || _.isArray(_t.errors)) {
                                             if (void 0 !== _t.responseJSON) {
                                                  if (void 0 !== _t.responseJSON.errors) 422 === _t.status && o(_t.responseJSON.errors, s); else if (void 0 !== _t.responseJSON.message) e(s).find(".text-danger").html(_t.responseJSON.message).show(); else {
                                                       var n = "";
                                                       e.each(_t.responseJSON, function (t, o) {
                                                            e.each(o, function (e, t) {
                                                                 n += t + "<br />";
                                                            });
                                                       }), e(s).find(".text-danger").html(n).show();
                                                  }
                                             } else e(s).find(".text-danger").html(_t.statusText).show();
                                        } else o(_t.errors, s);
                                   },
                                        o = function o(t, _o) {
                                             var s = "";
                                             e.each(t, function (e, t) {
                                                  s += t + "<br />";
                                             }), e(_o).find(".text-success").html("").hide(), e(_o).find(".text-danger").html("").hide(), e(_o).find(".text-danger").html(s).show();
                                        };

                                   e("#cityslide").owlCarousel({
                                        margin: 20,
                                        dots: !1,
                                        nav: !0,
                                        navText: [e(".am-prev"), e(".am-next")],
                                        loop: !0,
                                        responsive: {
                                             0: {
                                                  items: 1
                                             },
                                             400: {
                                                  items: 2
                                             },
                                             800: {
                                                  items: 3
                                             },
                                             1e3: {
                                                  items: 4
                                             },
                                             1300: {
                                                  items: 5
                                             }
                                        }
                                   }), e("#project-city-slides").owlCarousel({
                                        margin: 20,
                                        dots: !1,
                                        nav: !0,
                                        navText: [e(".am-prev"), e(".am-next")],
                                        loop: !0,
                                        responsive: {
                                             0: {
                                                  items: 1
                                             },
                                             400: {
                                                  items: 2
                                             },
                                             800: {
                                                  items: 3
                                             },
                                             1e3: {
                                                  items: 4
                                             },
                                             1300: {
                                                  items: 5
                                             }
                                        }
                                   }), e("#listcarousel").owlCarousel({
                                        margin: 0,
                                        loop: !0,
                                        autoplay: !0,
                                        lazyLoad: !0,
                                        dots: !1,
                                        nav: !1,
                                        center: !0,
                                        responsive: {
                                             300: {
                                                  items: 1
                                             },
                                             900: {
                                                  items: 2
                                             },
                                             1100: {
                                                  items: 3
                                             }
                                        }
                                   }), e("#listcarouselthumb").owlCarousel({
                                        margin: 0,
                                        dots: !1,
                                        loop: !0,
                                        autoplay: !0,
                                        lazyLoad: !0,
                                        nav: !0,
                                        navText: [e(".ar-prev"), e(".ar-next")],
                                        responsive: {
                                             300: {
                                                  items: 3
                                             },
                                             900: {
                                                  items: 6
                                             },
                                             1100: {
                                                  items: 8
                                             }
                                        }
                                   }), e(".showfullimg").on("click", function () {
                                        var t = e(this).attr("rel"),
                                             o = e("#gallery");
                                        o.imagesGrid({
                                             images: o.data("images"),
                                             align: !0,
                                             onModalClose: function onModalClose() {
                                                  e("#gallery").imagesGrid("destroy");
                                             }
                                        }), o.imagesGrid("modal.open", t);
                                   });
                                   var s = "project",
                                        n = e("#txtkey"),
                                        r = e("#hometypesearch");
                                   r.find("a").on("click", function () {
                                        e(".listsuggest").html("").hide(), n.val(""), s = e(this).attr("rel"), r.find("a").removeClass("active"), e(this).addClass("active"), e("#txttypesearch").val(s), e("#frmhomesearch").prop("action", e(this).data("url"));
                                   });
                                   var i = null;
                                   n.on("keydown", function () {
                                        e(".listsuggest").html("").hide();
                                   }), n.on("keyup", function () {
                                        var t = e(this).val();
                                        clearTimeout(i), i = setTimeout(function () {
                                             e.get(e("#frmhomesearch").prop("action") + "?type=" + s + "&k=" + t, function (t) {
                                                  t.error || "" === t.data ? e(".listsuggest").html("").hide() : e(".listsuggest").html(t.data).show();
                                             });
                                        }, 500);
                                   });
                                   var a,
                                        l = document.querySelectorAll("img.lazy");
                                   !function e() {
                                        a && clearTimeout(a), a = setTimeout(function () {
                                             var t = window.pageYOffset;
                                             l.forEach(function (e) {
                                                  e.offsetTop < window.innerHeight + t && (e.src = e.dataset.src, e.classList.remove("lazy"));
                                             }), 0 == l.length && (document.removeEventListener("scroll", e), window.removeEventListener("resize", e), window.removeEventListener("orientationChange", e));
                                        }, 200);
                                   }(), e(document).scroll(function () {
                                        window.pageYOffset > 0 ? e(".cd-top").find(".fas").attr("class", "fas fa-arrow-up") : e(".cd-top").find(".fas").attr("class", "fas fa-arrow-down");
                                   }), e(".pagination").addClass("pagination-sm"), e('[data-toggle="tooltip"]').tooltip(), e(document).on("click", ".cd-top", function (t) {
                                        return t.preventDefault(), e("html").scrollTop() > 0 ? e("body,html").animate({
                                             scrollTop: 0
                                        }, 800) : e("body,html").animate({
                                             scrollTop: e("html").height()
                                        }, 800), !1;
                                   });
                              });
                         }(jQuery);
                    })
               });

               /***/
          }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function (module, exports) {

               // removed by extract-text-webpack-plugin

               /***/
          }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

               __webpack_require__(/*! C:\xampp\htdocs\bds\resources\js\app.js */"./resources/js/app.js");
               module.exports = __webpack_require__(/*! C:\xampp\htdocs\bds\resources\sass\app.scss */"./resources/sass/app.scss");


               /***/
          })

     /******/
});
