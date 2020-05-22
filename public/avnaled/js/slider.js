    (function ($) {
        $.fn.sliderr = function (settings) {
            var defaults = {
                duration:800, //动画时长
                easing:'swing', //动画效果 linear || swing
                autorun:true, //自动运行
                interval:4000 //间隔时长
            }
            var options = $.extend(defaults, settings);

            function repeat(n) {
                var arr = new Array();
                for (var i = 0; i < n; i++) {
                    arr[i] = '<span></span>';
                }
                return arr.join('');
            }

            return this.each(function () {
                var slide = $(this),
					items = $('.slide-item', slide),
					itemsLen = items.length;

                if (itemsLen < 2) {
                    return;
                }

                var paging = $(repeat(itemsLen)).appendTo($('.slide-paging', slide)),
					index = 0;

                paging.eq(0).addClass('current');
                items.hide().eq(0).show();

                function transform(i) {
                    paging.eq(index).removeClass('current').end().eq(i).addClass('current');
                    items.eq(index).stop(true, true).fadeOut(options.duration, options.easing);
                    items.eq(i).stop(true, true).fadeIn(options.duration, options.easing);
                    index = i;
                }

                function toPrev() {
                    var nextIndex = index - 1;
                    if (nextIndex < 0) {
                        nextIndex = itemsLen - 1;
                    }
                    transform(nextIndex);
                }

                function toNext() {
                    var nextIndex = index + 1;
                    if (nextIndex >= itemsLen) {
                        nextIndex = 0;
                    }
                    transform(nextIndex);
                }

                $('.slide-prev', slide).show().on('click', toPrev);
                $('.slide-next', slide).show().on('click', toNext);

                paging.on('click', function () {
                    var currentIndex = $(this).index();
                    if (currentIndex == index) {
                        return;
                    }
                    transform(currentIndex);
                });

                if (options.autorun) {
                    var interval = setInterval(toNext, options.interval);
                    slide.hover(function () {
                        clearInterval(interval);
                    }, function () {
                        interval = setInterval(toNext, options.interval);
                    });
                }
            })
        }
    })(jQuery);

    $('#slide').sliderr();
