"undefined" != typeof jQuery ? ("undefined" == typeof jQuery.fn.hoverIntent && !function (a) {
    a.fn.hoverIntent = function (b, c, d) {
        var e = {interval: 100, sensitivity: 6, timeout: 0};
        e = "object" == typeof b ? a.extend(e, b) : a.isFunction(c) ? a.extend(e, {
            over: b,
            out: c,
            selector: d
        }) : a.extend(e, {over: b, out: b, selector: c});
        var f, g, h, i, j = function (a) {
            f = a.pageX, g = a.pageY
        }, k = function (b, c) {
            return c.hoverIntent_t = clearTimeout(c.hoverIntent_t), Math.sqrt((h - f) * (h - f) + (i - g) * (i - g)) < e.sensitivity ? (a(c).off("mousemove.hoverIntent", j), c.hoverIntent_s = !0, e.over.apply(c, [b])) : (h = f, i = g, void(c.hoverIntent_t = setTimeout(function () {
                k(b, c)
            }, e.interval)))
        }, l = function (a, b) {
            return b.hoverIntent_t = clearTimeout(b.hoverIntent_t), b.hoverIntent_s = !1, e.out.apply(b, [a])
        }, m = function (b) {
            var c = a.extend({}, b), d = this;
            d.hoverIntent_t && (d.hoverIntent_t = clearTimeout(d.hoverIntent_t)), "mouseenter" === b.type ? (h = c.pageX, i = c.pageY, a(d).on("mousemove.hoverIntent", j), d.hoverIntent_s || (d.hoverIntent_t = setTimeout(function () {
                k(c, d)
            }, e.interval))) : (a(d).off("mousemove.hoverIntent", j), d.hoverIntent_s && (d.hoverIntent_t = setTimeout(function () {
                l(c, d)
            }, e.timeout)))
        };
        return this.on({"mouseenter.hoverIntent": m, "mouseleave.hoverIntent": m}, e.selector)
    }
}(jQuery), jQuery(document).ready(function (a) {
    if ( a( "#lradminbar").length ) {
        a( "body").addClass('adminbar');
    }
    var b, c, d, e = a("#lradminbar"), f = !1;
    b = function (b, c) {
        var d = a(c), e = d.attr("tabindex");
        e && d.attr("tabindex", "0").attr("tabindex", e)
    }, c = function (b) {
        e.find("li.menupop").on("click.lr-mobile-hover", function (c) {
            var d = a(this);
            d.parent().is("#lr-admin-bar-root-default") && !d.hasClass("hover") ? (c.preventDefault(), e.find("li.menupop.hover").removeClass("hover"), d.addClass("hover")) : d.hasClass("hover") ? a(c.target).closest("div").hasClass("ab-sub-wrapper") || (c.stopPropagation(), c.preventDefault(), d.removeClass("hover")) : (c.stopPropagation(), c.preventDefault(), d.addClass("hover")), b && (a("li.menupop").off("click.lr-mobile-hover"), f = !1)
        })
    }, d = function () {
        var b = /Mobile\/.+Safari/.test(navigator.userAgent) ? "touchstart" : "click";
        a(document.body).on(b + ".lr-mobile-hover", function (b) {
            a(b.target).closest("#lradminbar").length || e.find("li.menupop.hover").removeClass("hover")
        })
    }, e.removeClass("nojq").removeClass("nojs"), "ontouchstart" in window ? (e.on("touchstart", function () {
        c(!0), f = !0
    }), d()) : /IEMobile\/[1-9]/.test(navigator.userAgent) && (c(), d()), e.find("li.menupop").hoverIntent({
        over: function () {
            f || a(this).addClass("hover")
        }, out: function () {
            f || a(this).removeClass("hover")
        }, timeout: 180, sensitivity: 7, interval: 100
    }), window.location.hash && window.scrollBy(0, -32), a("#lr-admin-bar-get-shortlink").click(function (b) {
        b.preventDefault(), a(this).addClass("selected").children(".shortlink-input").blur(function () {
            a(this).parents("#lr-admin-bar-get-shortlink").removeClass("selected")
        }).focus().select()
    }), a("#lradminbar li.menupop > .ab-item").bind("keydown.adminbar", function (c) {
        if (13 == c.which) {
            var d = a(c.target), e = d.closest(".ab-sub-wrapper"), f = d.parent().hasClass("hover");
            c.stopPropagation(), c.preventDefault(), e.length || (e = a("#lradminbar .quicklinks")), e.find(".menupop").removeClass("hover"), f || d.parent().toggleClass("hover"), d.siblings(".ab-sub-wrapper").find(".ab-item").each(b)
        }
    }).each(b), a("#lradminbar .ab-item").bind("keydown.adminbar", function (c) {
        if (27 == c.which) {
            var d = a(c.target);
            c.stopPropagation(), c.preventDefault(), d.closest(".hover").removeClass("hover").children(".ab-item").focus(), d.siblings(".ab-sub-wrapper").find(".ab-item").each(b)
        }
    }), e.click(function (b) {
        "lradminbar" != b.target.id && "lr-admin-bar-top-secondary" != b.target.id || (e.find("li.menupop.hover").removeClass("hover"), a("html, body").animate({scrollTop: 0}, "fast"), b.preventDefault())
    }), a(".screen-reader-shortcut").keydown(function (b) {
        var c, d;
        13 == b.which && (c = a(this).attr("href"), d = navigator.userAgent.toLowerCase(), d.indexOf("applewebkit") != -1 && c && "#" == c.charAt(0) && setTimeout(function () {
            a(c).focus()
        }, 100))
    }), a("#adminbar-search").on({
        focus: function () {
            a("#adminbarsearch").addClass("adminbar-focused")
        }, blur: function () {
            a("#adminbarsearch").removeClass("adminbar-focused")
        }
    }), "sessionStorage" in window && a("#lr-admin-bar-logout a").click(function () {
        try {
            for (var a in sessionStorage) a.indexOf("lr-autosave-") != -1 && sessionStorage.removeItem(a)
        } catch (b) {
        }
    }), navigator.userAgent && document.body.className.indexOf("no-font-face") === -1 && /Android (1.0|1.1|1.5|1.6|2.0|2.1)|Nokia|Opera Mini|w(eb)?OSBrowser|webOS|UCWEB|Windows Phone OS 7|XBLlr7|Zunelr7|MSIE 7/.test(navigator.userAgent) && (document.body.className += " no-font-face")
})) : !function (a, b) {
    var c, d = function (a, b, c) {
        a.addEventListener ? a.addEventListener(b, c, !1) : a.attachEvent && a.attachEvent("on" + b, function () {
            return c.call(a, window.event)
        })
    }, e = new RegExp("\\bhover\\b", "g"), f = [], g = new RegExp("\\bselected\\b", "g"), h = function (a) {
        for (var b = f.length; b--;) if (f[b] && a == f[b][1]) return f[b][0];
        return !1
    }, i = function (b) {
        for (var d, i, j, k, l, m, n = [], o = 0; b && b != c && b != a;) "LI" == b.nodeName.toUpperCase() && (n[n.length] = b, i = h(b), i && clearTimeout(i), b.className = b.className ? b.className.replace(e, "") + " hover" : "hover", k = b), b = b.parentNode;
        if (k && k.parentNode && (l = k.parentNode, l && "UL" == l.nodeName.toUpperCase())) for (d = l.childNodes.length; d--;) m = l.childNodes[d], m != k && (m.className = m.className ? m.className.replace(g, "") : "");
        for (d = f.length; d--;) {
            for (j = !1, o = n.length; o--;) n[o] == f[d][1] && (j = !0);
            j || (f[d][1].className = f[d][1].className ? f[d][1].className.replace(e, "") : "")
        }
    }, j = function (b) {
        for (; b && b != c && b != a;) "LI" == b.nodeName.toUpperCase() && !function (a) {
            var b = setTimeout(function () {
                a.className = a.className ? a.className.replace(e, "") : ""
            }, 500);
            f[f.length] = [b, a]
        }(b), b = b.parentNode
    }, k = function (b) {
        for (var d, e, f, h = b.target || b.srcElement; ;) {
            if (!h || h == a || h == c) return;
            if (h.id && "lr-admin-bar-get-shortlink" == h.id) break;
            h = h.parentNode
        }
        for (b.preventDefault && b.preventDefault(), b.returnValue = !1, -1 == h.className.indexOf("selected") && (h.className += " selected"), d = 0, e = h.childNodes.length; d < e; d++) if (f = h.childNodes[d], f.className && -1 != f.className.indexOf("shortlink-input")) {
            f.focus(), f.select(), f.onblur = function () {
                h.className = h.className ? h.className.replace(g, "") : ""
            };
            break
        }
        return !1
    }, l = function (a) {
        var b, c, d, e, f, g;
        if (!("lradminbar" != a.id && "lr-admin-bar-top-secondary" != a.id || (b = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0, b < 1))) for (g = b > 800 ? 130 : 100, c = Math.min(12, Math.round(b / g)), d = b > 800 ? Math.round(b / 30) : Math.round(b / 20), e = [], f = 0; b;) b -= d, b < 0 && (b = 0), e.push(b), setTimeout(function () {
            window.scrollTo(0, e.shift())
        }, f * c), f++
    };
    d(b, "load", function () {
        c = a.getElementById("lradminbar"), a.body && c && (a.body.appendChild(c), c.className && (c.className = c.className.replace(/nojs/, "")), d(c, "mouseover", function (a) {
            i(a.target || a.srcElement)
        }), d(c, "mouseout", function (a) {
            j(a.target || a.srcElement)
        }), d(c, "click", k), d(c, "click", function (a) {
            l(a.target || a.srcElement)
        }), d(document.getElementById("lr-admin-bar-logout"), "click", function () {
            if ("sessionStorage" in window) try {
                for (var a in sessionStorage) a.indexOf("lr-autosave-") != -1 && sessionStorage.removeItem(a)
            } catch (b) {
            }
        })), b.location.hash && b.scrollBy(0, -32), navigator.userAgent && document.body.className.indexOf("no-font-face") === -1 && /Android (1.0|1.1|1.5|1.6|2.0|2.1)|Nokia|Opera Mini|w(eb)?OSBrowser|webOS|UCWEB|Windows Phone OS 7|XBLlr7|Zunelr7|MSIE 7/.test(navigator.userAgent) && (document.body.className += " no-font-face")
    })
}(document, window);