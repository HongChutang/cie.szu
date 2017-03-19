
 $(function(){
    //从底部上升的遮罩效果开始
    $(".con").hover(function(){
        $(this).find(".txt").stop().animate({height:"198px"},200);
        $(this).find(".txt h3").stop().animate({paddingTop:"60px"},200);
    },function(){
        $(this).find(".txt").stop().animate({height:"45px"},200);
        $(this).find(".txt h3").stop().animate({paddingTop:"0px"},200);
    })
});
(function (e) {
    'use strict';
    e.fn.bjqs = function (t) {               /* jQuery.fn.extend(object);给jQuery对象添加方法。为类添加新的方法*/
        var n = {
            width: 700,
            height: 300,
            animtype: 'fade',
            animduration: 400,
            animspeed: 4000,
            automatic: !0,                       /*是否自动变换*/
            showcontrols: !0,                  /*是否显示控制按钮*/
            centercontrols: !0,                /*是否显示下面的数字显示*/
            nexttext: '>',                          /*下一张的图标*/
            prevtext: '<',                          /*上一张的图标*/
            showmarkers: 0,
            centermarkers: !0,
            keyboardnav: !0,
            hoverpause: !0,
            usecaptions: !0,
            randomstart: 1,
            responsive: 1
        },
        r = e.extend({
        }, n, t),
        i = this,
        s = i.find('ul.bjqs'), /* find() 方法获得当前元素集合中每个元素的后代，通过选择器、jQuery 对象或元素来筛选。*/
        o = s.children('li'),
        u = null,
        a = null,
        f = null,
        l = null,
        c = null,
        h = null,
        p = null,
        d = null,
        v = {
            slidecount: o.length,      /* length 属性包含 jQuery 对象中元素的数目。*/
            animating: !1,
            paused: !1,
            currentslide: 1,
            nextslide: 0,
            currentindex: 0,
            nextindex: 0,
            interval: null
        },
        m = {
            width: null,
            height: null,
            ratio: null
        },
        g = {
            fwd: 'forward',
            prev: 'previous'
        },
        y = function () {
            o.addClass('bjqs-slide');
            r.responsive ? b()  : E();
            if (v.slidecount > 1) {            /*当照片超过一张时候才执行下面的语句*/
                r.randomstart && L();
                r.showcontrols && x();
                r.showmarkers && T();
                r.keyboardnav && N();
                r.hoverpause && r.automatic && C();   /*&&仅在必要时才计算第二个操作数。*/
                r.animtype === 'slide' && S()
            }
            r.usecaptions && k();
            if (r.animtype === 'slide' && !r.randomstart) {
                v.currentindex = 1;
                v.currentslide = 2
            }
            s.show();
            o.eq(v.currentindex).show();
            r.automatic && (v.interval = setInterval(function () {
                O(g.fwd, !1)
            }, r.animspeed))
        },
        b = function () {
            m.width = i.outerWidth();
            m.ratio = m.width / r.width,
            m.height = r.height * m.ratio;
            if (r.animtype === 'fade') {
                o.css({
                    height: r.height,
                    width: '100%'
                });
                o.children('img').css({
                    height: r.height,
                    width: '100%'
                });
                s.css({
                    height: r.height,
                    width: '100%'
                });
                i.css({
                    height: r.height,
                    'max-width': r.width,
                    position: 'relative'
                });
                if (m.width < r.width) {
                    o.css({
                        height: m.height
                    });
                    o.children('img').css({
                        height: m.height
                    });
                    s.css({
                        height: m.height
                    });
                    i.css({
                        height: m.height
                    })
                }
                e(window).resize(function () {
                    m.width = i.outerWidth();
                    m.ratio = m.width / r.width,
                    m.height = r.height * m.ratio;
                    o.css({
                        height: m.height
                    });
                    o.children('img').css({
                        height: m.height
                    });
                    s.css({
                        height: m.height
                    });
                    i.css({
                        height: m.height
                    })
                })
            }
            if (r.animtype === 'slide') {
                o.css({
                    height: r.height,
                    width: r.width
                });
                o.children('img').css({
                    height: r.height,
                    width: r.width
                });
                s.css({
                    height: r.height,
                    width: r.width * r.slidecount        /*ul的总长度*/
                });
                i.css({
                    height: r.height,
                    'max-width': r.width,
                    position: 'relative'
                });
                if (m.width < r.width) {
                    o.css({
                        height: m.height
                    });
                    o.children('img').css({
                        height: m.height
                    });
                    s.css({
                        height: m.height
                    });
                    i.css({
                        height: m.height
                    })
                }
                e(window).resize(function () {
                    m.width = i.outerWidth(),
                    m.ratio = m.width / r.width,
                    m.height = r.height * m.ratio;
                    o.css({
                        height: m.height,
                        width: m.width
                    });
                    o.children('img').css({
                        height: m.height,
                        width: m.width
                    });
                    s.css({
                        height: m.height,
                        width: m.width * r.slidecount
                    });
                    i.css({
                        height: m.height
                    });
                    h.css({
                        height: m.height,
                        width: m.width
                    });
                    w(function () {
                        O(!1, v.currentslide)
                    }, 200, 'some unique string')
                })
            }
        },
        w = function () {
            var e = {
            };
            return function (t, n, r) {
                r || (r = 'Don\'t call this twice without a uniqueId');
                e[r] && clearTimeout(e[r]);
                e[r] = setTimeout(t, n)
            }
        }(),
        E = function () {
            o.css({
                height: r.height,
                width: r.width
            });
            s.css({
                height: r.height,
                width: r.width
            });
            i.css({
                height: r.height,
                width: r.width,
                position: 'relative'
            })
        },
        S = function () {
            p = o.eq(0).clone();          /*clone() 方法生成被选元素的副本，包含子节点、文本和属性。*/
            d = o.eq(v.slidecount - 1).clone();
            p.attr({
                'data-clone': 'last',
                'data-slide': 0
            }).appendTo(s).show();
            d.attr({
                'data-clone': 'first',
                'data-slide': 0
            }).prependTo(s).show();
            o = s.children('li');
            v.slidecount = o.length;
            h = e('<div class="bjqs-wrapper"></div>');
            if (r.responsive && m.width < r.width) {
                h.css({
                    width: m.width,
                    height: m.height,
                    overflow: 'hidden',
                    position: 'relative'
                });
                s.css({
                    width: m.width * (v.slidecount + 2),
                    left: - m.width * v.currentslide
                })
            } else {
                h.css({
                    width: r.width,
                    height: r.height,
                    overflow: 'hidden',
                    position: 'relative'
                });
                s.css({
                    width: r.width * (v.slidecount + 2),
                    left: - r.width * v.currentslide
                })
            }
            o.css({
                'float': 'left',
                position: 'relative',
                display: 'list-item'
            });
            h.prependTo(i);
            s.appendTo(h)
        },
        x = function () {       /*showcontrols*/
            u = e('<ul class="bjqs-controls"></ul>');
            a = e('<li class="bjqs-next"><a href="#" data-direction="' + g.fwd + '">' + r.nexttext + '</a></li>');
            f = e('<li class="bjqs-prev"><a href="#" data-direction="' + g.prev + '">' + r.prevtext + '</a></li>');
            u.on('click', 'a', function (t) {
                t.preventDefault();
                var n = e(this).attr('data-direction');
                if (!v.animating) {
                    n === g.fwd && O(g.fwd, !1);
                    n === g.prev && O(g.prev, !1)
                }
            });
            f.appendTo(u);
            a.appendTo(u);
            u.appendTo(i);
            if (r.centercontrols) {
                u.addClass('v-centered');
                var t = (i.height() - a.children('a').outerHeight()) / 2,
                n = t / r.height * 100,
                s = n + '%';
                a.find('a').css('top', s);
                f.find('a').css('top', s)
            }
        },
        T = function () {
            l = e('<ol class="bjqs-markers"></ol>');
            e.each(o, function (t, n) {
                var i = t + 1,
                s = t + 1;
                r.animtype === 'slide' && (s = t + 2);
                var o = e('<li><a href="#">' + i + '</a></li>');
                i === v.currentslide && o.addClass('active-marker');
                o.on('click', 'a', function (e) {
                    e.preventDefault();
                    !v.animating && v.currentslide !== s && O(!1, s)
                });
                o.appendTo(l)
            });
            l.appendTo(i);
            c = l.find('li');
            if (r.centermarkers) {
                l.addClass('h-centered');
                var t = (r.width - l.width()) / 2;
                l.css('left', t)
            }
        },
        N = function () {
            e(document).keyup(function (e) {
                if (!v.paused) {
                    clearInterval(v.interval);
                    v.paused = !0
                }
                if (!v.animating) if (e.keyCode === 39) {
                    e.preventDefault();
                    O(g.fwd, !1)
                } else if (e.keyCode === 37) {
                    e.preventDefault();
                    O(g.prev, !1)
                }
                if (v.paused && r.automatic) {
                    v.interval = setInterval(function () {
                        O(g.fwd)
                    }, r.animspeed);
                    v.paused = !1
                }
            })
        },
        C = function () {
            i.hover(function () {
                if (!v.paused) {
                    clearInterval(v.interval);
                    v.paused = !0
                }
            }, function () {
                if (v.paused) {
                    v.interval = setInterval(function () {
                        O(g.fwd, !1)
                    }, r.animspeed);
                    v.paused = !1
                }
            })
        },
        k = function () {
            e.each(o, function (t, n) {
                var r = e(n).children('img:first-child').attr('title');
                r || (r = e(n).children('a').find('img:first-child').attr('title'));
                if (r) {
                    r = e('<p class="bjqs-caption" style="font-size:18px;">' + r + '</p>');
                    r.appendTo(e(n))
                }
            })
        },
        L = function () {               /*randomstart函数*/
            var e = Math.floor(Math.random() * v.slidecount) + 1;  /*Math.floor小于等于 x，且与 x 最接近的整数*/
            v.currentslide = e;               /*下一张照片*/
            v.currentindex = e - 1          /*当前照片*/
        },
        A = function (e) {
            if (e === g.fwd) if (o.eq(v.currentindex).next().length) {
                v.nextindex = v.currentindex + 1;
                v.nextslide = v.currentslide + 1
            } else {
                v.nextindex = 0;
                v.nextslide = 1
            } else if (o.eq(v.currentindex).prev().length) {
                v.nextindex = v.currentindex - 1;
                v.nextslide = v.currentslide - 1
            } else {
                v.nextindex = v.slidecount - 1;
                v.nextslide = v.slidecount
            }
        },
        O = function (e, t) {
            if (!v.animating) {
                v.animating = !0;
                if (t) {
                    v.nextslide = t;
                    v.nextindex = t - 1
                } else A(e);
                if (r.animtype === 'fade') {
                    if (r.showmarkers) {
                        c.removeClass('active-marker');
                        c.eq(v.nextindex).addClass('active-marker')
                    }
                    o.eq(v.currentindex).fadeOut(r.animduration);
                    o.eq(v.nextindex).fadeIn(r.animduration, function () {
                        v.animating = !1;
                        v.currentslide = v.nextslide;
                        v.currentindex = v.nextindex
                    })
                }
                if (r.animtype === 'slide') {
                    if (r.showmarkers) {
                        var n = v.nextindex - 1;
                        n === v.slidecount - 2 ? n = 0 : n === - 1 && (n = v.slidecount - 3);
                        c.removeClass('active-marker');
                        c.eq(n).addClass('active-marker')
                    }
                    r.responsive && m.width < r.width ? v.slidewidth = m.width : v.slidewidth = r.width;
                    s.animate({
                        left: - v.nextindex * v.slidewidth
                    }, r.animduration, function () {
                        v.currentslide = v.nextslide;
                        v.currentindex = v.nextindex;
                        if (o.eq(v.currentindex).attr('data-clone') === 'last') {
                            s.css({
                                left: - v.slidewidth
                            });
                            v.currentslide = 2;
                            v.currentindex = 1
                        } else if (o.eq(v.currentindex).attr('data-clone') === 'first') {
                            s.css({
                                left: - v.slidewidth * (v.slidecount - 2)
                            });
                            v.currentslide = v.slidecount - 1;
                            v.currentindex = v.slidecount - 2
                        }
                        v.animating = !1
                    })
                }
            }
        };
        y()
    }
}) (jQuery);