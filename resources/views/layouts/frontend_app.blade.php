<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{URL::to('/')}}" />
    <script>
        window.laravel = {
            csrfToken: '{{ csrf_token() }}',
            baseurl: '{{URL::to("/")}}'
        }
    </script>
    <title>Oshit Sutra Dar</title>
    <!-- Styles -->
    <link href="{{ asset('assets/frontend/css/frontend.css') }}" rel="stylesheet">

</head>

<body>
    <div>
        <div id="triangles"></div>

        <header>
            <a href="{{ asset('assets/frontend')}}/images/totbd.png">
                <img class="logo" src="{{ asset('assets/frontend')}}/images/totbd.png" />
            </a>
        </header>

        <div class="content">
            <div id="countdown" data-time="2020/6/30 07:03:27"></div><!-- change data-time -->
            <h2>OSHIT SIUTRA DAR!</h2>
            <a class="btn" href="{{ url('admin/loginme') }}">
                Admin Login</a>
        </div>

        <!--PhotoSwipe Popup-->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">

                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>

                <div class="pswp__ui pswp__ui--hidden">

                    <div class="pswp__top-bar">

                        <div class="pswp__counter"></div>

                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                        <button class="pswp__button pswp__button--share" title="Share"></button>

                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>

                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                    </button>

                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                    </button>

                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>

                </div>

            </div>
        </div>
        <!--/PhotoSwipe Popup-->

    </div>


    <script src="{{ asset('assets/frontend')}}/js/jquery.min.js"></script>
    <!-- theme js -->
    <script src="{{ asset('assets/frontend')}}/js/prefixfree.min.js"></script>
    <script src="{{ asset('assets/frontend')}}/js/three.min.js"></script>
    <script src="{{ asset('assets/frontend')}}/js/ThreeCSG.js"></script>
    <script src="{{ asset('assets/frontend')}}/js/OrbitControls.js"></script>
    <script src="{{ asset('assets/frontend')}}/js/Tween.js"></script>
    <script src="{{ asset('assets/frontend')}}/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('assets/frontend')}}/js/anime.min.js"></script>
    <script src="{{ asset('assets/frontend')}}/js/reveal.js"></script>
    <script src="{{ asset('assets/frontend')}}/js/photoswipe.min.js"></script>
    <script src="{{ asset('assets/frontend')}}/js/photoswipe-ui-default.min.js"></script>
    <script src="{{ asset('assets/frontend')}}/js/index.js"></script>
    <!-- App js -->
    <!-- <script src="{{ asset('js/frontend_app.js') }}"></script> -->
</body>

</html>