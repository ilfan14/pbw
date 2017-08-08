$(document).ready(function() {
                var autoplaySlider = $('#autoplay').lightSlider({
                    item:4,
                    auto:true,
                    loop:true,
                    speed:1000,
                    pauseOnHover: true,
                    onBeforeSlide: function (el) {
                        $('#current').text(el.getCurrentSlideCount());
                    },
                    responsive : [
                        {
                            breakpoint:1199,
                            settings: {
                                item:3,
                                slideMove:1,
                                slideMargin:6,
                              }
                        },
                        {
                            breakpoint:762,
                            settings: {
                                item:1,
                                slideMove:1
                              }
                        }
                    ]
                });
                $('#total').text(autoplaySlider.getTotalSlideCount());
            });