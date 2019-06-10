@extends('_layouts.master')

@section('body')

<div class="c-wrapper">
    <header class="l-header">
        <section class="s-banner js-banner" style="background-image: url({{ $page->baseUrl }}/assets/images/banner.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="c-logo z-10 relative mt-6">
                            <a href="#/" class="block outline-none no-underline"><img class="c-logo__img js-logo" src="{{ $page->baseUrl }}/assets/images/icon-2.png" alt="VIBHGYAR"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="c-banner">
                            <!-- <div class="c-stripe">
                                <img src="{{ $page->baseUrl }}/assets/images/stripe.jpg" alt="">
                            </div> -->
                            <div class="c-stripe js-stripe"></div>
                            <div class="c-banner__content js-banner-content">
                                <h2 class="c-title font-spl3 js-banner-items">Creativeness</h2>
                                <h2 class="c-title my-16 font-spl3 js-banner-items">Uniqueness</h2>
                                <h2 class="c-title font-spl3 js-banner-items">Crispness</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="s-header">
            <div class="container">
                <div class="row items-center">
                    <div class="col-md-4">
                        <div class="c-logo">
                            <a href="#/" class="block outline-none no-underline"><img class="c-logo__img js-logo" src="{{ $page->baseUrl }}/assets/images/icon-2.png" alt="VIBHGYAR"></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="c-nav">
                            <ul class="c-lists">
                                <li class="c-lists__list"><a href="#/" class="c-lists__link">Printing</a></li>
                                <li class="c-lists__list"><a href="#/" class="c-lists__link">Pre Press</a></li>
                                <li class="c-lists__list"><a href="#/" class="c-lists__link">Design</a></li>
                                <li class="c-lists__list"><a href="#/" class="c-lists__link">Packaging</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="s-about">
            <div class="container">
                <div class="row items-center">
                    <div class="col-md-4">
                        <div class="c-about-title">
                            <h1 class="c-title-main">About Us</h1>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="c-about">
                            <h2 class="c-about__title">Portray Your Business Brand Effectively with Spectacular Graphics</h2>
                            <p class="c-about__para">We are pioneering company married to creativeness, uniqueness, and crispness to cater the digital experience necessary for the success of any business. Modern day technology and dynamic graphic designs build strong brands with lasting identity. According to us enticing graphical design and an innovative outcome can only create solid foundation required for a noteworthy brand. We are a passionate team of artisans providing outstanding solutions that not only increases customer retention rate, but also increases customer recommendation rate too.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <main class="l-main">
        <section class="s-printing">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="c-print-banner">
                            <img src="{{ $page->baseUrl }}/assets/images/uv-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="c-print">
                            <p class="c-print__para">Printing We are pioneering company married to creativeness, uniqueness, and crispness to cater the digital experience necessary for the success of any business. Modern-day technology and dynamic graphic designs build strong brands with lasting identity. According to us enticing graphical design and an innovative outcome can only create solid foundation required for a noteworthy brand. We are a passionate team of artisans providing outstanding solutions that not only increases customer retention rate, but also increases customer recommendation rate too.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

@endsection

<!--  #51c3c3 -->
<!--  #89d46d -->
<!--  #c2d521 -->
<!--  #d21684 -->
<!--  #c5192f -->
<!--  #fdc70b -->
<!--  #b7389f -->
<!--  #0d84c8 -->
<!--  #3db6c1 -->