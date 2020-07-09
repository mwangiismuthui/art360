<!DOCTYPE html>
<html lang="en">
<head>
<title>Art360</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Specialists in Excavation, Land Seller / Real Estate, Construction & Wall Electric Fence.">
<meta name="description" content="Musti Investment Limited works with a wide spectrum of clients including: Institutions, Government agencies, County Governments, Private land owners, Charities and the house building industry. We have an exceptional understanding of the land market and our clients requirements. This means we can tailor strategies to maximize the value of any project or deal..">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="/images/logo2.png">
<link rel="shortcut icon" type="image/x-icon" href="/images/logo2.png">
<link rel="stylesheet" type="text/css" href="/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="/styles/responsive.css">

    <!-- begin olark code -->
    <script type="text/javascript" async> ;(function(o,l,a,r,k,y){if(o.olark)return; r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0]; y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r); y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)}; y.extend=function(i,j){y("extend",i,j)}; y.identify=function(i){y("identify",k.i=i)}; y.configure=function(i,j){y("configure",i,j);k.c[i]=j}; k=y._={s:[],t:[+new Date],c:{},l:a}; })(window,document,"static.olark.com/jsclient/loader.js");
        /* custom configuration goes here (www.olark.com/documentation) */
        olark.identify('7861-890-10-7884');</script>
    <!-- end olark code -->

</head>
<body>

<div class="super_container">
    @include('layouts.header')

    @yield('content')

	@include('layouts.footer')
</div>

<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/styles/bootstrap-4.1.2/popper.js"></script>
<script src="/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="/plugins/greensock/TweenMax.min.js"></script>
<script src="/plugins/greensock/TimelineMax.min.js"></script>
<script src="/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="/plugins/greensock/animation.gsap.min.js"></script>
<script src="/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="/plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="/plugins/easing/easing.js"></script>
<script src="/plugins/progressbar/progressbar.min.js"></script>
<script src="/js/about.js"></script>
<script src="js/single.js"></script>
<script src="js/listings.js"></script>
<script src="js/blog.js"></script>
<script src="/js/contact.js"></script>


<script src="/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="/plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="/js/custom.js"></script>
<script >
(function($) {
        $(document).ready(function() {
            $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                event.preventDefault();
                event.stopPropagation();
                $(this).parent().siblings().removeClass('open');
                $(this).parent().toggleClass('open');
            });
        });
    })(jQuery);

</script>

</body>
</html>
