/*
 Theme Name: Event4
 Theme URI: http://demo.newtemplate.net/event4/index.html
 Author: NewTemplate
 Author URI: https://themeforest.net/user/newtemplete
 Version: 0.1.1
 Description:  Event4 One Page HTML5 Theme comes out with tons of powerful features. Its modern, attractive and clean design.
 */
! function(e) {
    "use strict";

    function t(t) {
        var r = e(document).scrollTop();
        e("ul.ntNavbar li a").each(function() {
            var t = e(this),
                a = e(t.attr("href"));
            a.position().top <= r && a.position().top + a.height() > r ? (e("ul.ntNavbar li a").removeClass("active"), t.addClass("active")) : t.removeClass("active")
        })
    }
    e(window).on("load", function() {
        e(".preloader").delay(100).fadeOut(500)
    }), e(window).on("scroll", function() {
        e(window).scrollTop() >= 5 ? (e("header.ntHeader").addClass("ntStickyHeader fixed"), e(".ntStickyHeader.fixed").addClass("slideDown"), e(".cd-nav-trigger").addClass("fixed")) : (e(".ntStickyHeader.fixed").removeClass("slideDown"), e("header.ntHeader").removeClass("ntStickyHeader fixed"), e(".cd-nav-trigger").removeClass("fixed"))
    }), e(".ntOurSpeakersItem").on("mouseenter mouseleave", function() {
        e(this).find(".caption").slideToggle(150), e(this).find(".overlay").slideToggle(150)
    }), e(document).on("scroll", t), e(".scroll").on("click", function(r) {
        r.preventDefault(), e(document).off("scroll"), e("a").each(function() {
            e(this).removeClass("active")
        }), e(this).addClass("active");
        var a = this.hash,
            i = e(a);
        e("html, body").stop().animate({
            scrollTop: i.offset().top + 2
        }, 1e3, "swing", function() {
            e(document).on("scroll", t)
        })
    }), e(".tnEventInfo .ntCaption:not(.tnSpeakerName)").hide(), e(".ntEvent.extend span").html("<i class='fa fa-angle-down'></i>"), e(".ntEvent.extend span").on("click", function(t) {
        var r = e(this),
            a = r.parent().parent();
        "<i class='fa fa-angle-up'></i>" == r.html() ? r.html("<i class='fa fa-angle-down'></i>") : r.html("<i class='fa fa-angle-up'></i>"), a.find(".tnEventInfo .ntCaption:not(.tnSpeakerName)").slideToggle(150)
    }), e(function() {
        e(".ntCounterNumber").countimator()
    });
    var r = function(t, r, a) {
        "Disable" == t ? e("#" + r).attr("disabled", "disabled") : e("#" + r).removeAttr("disabled"), e("#" + r).val(a)
    };
    e("#registerForm").validate({
        errorElement: "span",
        rules: {
            reg_name: {
                required: !0
            },
            reg_jobtitle: {
                required: !0
            },
            reg_email: {
                required: !0
            },
            reg_company: {
                required: !0
            },
            reg_contact: {
                required: !0
            },
            reg_quantity: {
                required: !0
            },
            reg_attend: {
                required: !0
            }
        },
        messages: {
            reg_name: {
                required: "Required."
            },
            reg_jobtitle: {
                required: "Required."
            },
            reg_email: {
                required: "Required."
            },
            reg_company: {
                required: "Required."
            },
            reg_contact: {
                required: "Required."
            },
            reg_quantity: {
                required: "Required."
            },
            reg_attend: {
                required: "Required."
            }
        },
        submitHandler: function(t) {
            var a, i, n;
            return r("Disable"), a = "submit", n = {
                complete: function(t) {
                    e("#registerForm").append("<div class='alert alert-success animated fadeInRight' id='success'><strong>Success!</strong> Your registration has been successfully submitted</div>"), setTimeout(function() {
                        e("#success").addClass("animated fadeOutRight"), e("#success").removeClass("fadeInRight")
                    }, 5e3), e("#registerForm")[0].reset(), r("Enabled", a, i)
                },
                error: function(e) {
                    var t = e.responseText;
                    console.log(t)
                }
            }, e("#" + "registerForm").ajaxSubmit(n), !1
        }
    })
}(jQuery);