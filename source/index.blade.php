@extends('_layouts.master')

@section('body')

<div class="c-wrapper">
    <!-- @include('_partials.header') -->
    <div class="c-banner-wrap">
        <section class="s-banner js-banner" style="background-image: url({{ $page->baseUrl }}/assets/images/banner.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="c-logo z-10 relative mt-6">
                            <a href="{{ $page->baseUrl }}" class="block outline-none no-underline"><img class="c-logo__img js-logo" src="{{ $page->baseUrl }}/assets/images/icon-2.png" alt="VIBHGYAR"></a>
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
    </div>
    <main class="l-main">
        <div class="s-header">
            <div class="container">
                <div class="row items-center">
                    <div class="col-md-4">
                        <div class="c-logo c-logo--main">
                            <a href="{{ $page->baseUrl }}" class="block outline-none no-underline flex items-center">
                                <img class="c-logo__img js-logo" src="{{ $page->baseUrl }}/assets/images/icon-11.png" alt="VIBHGYAR">
                                <img class="c-logo__img-text" src="{{ $page->baseUrl }}/assets/images/icon-text.png" alt="VIBHGYAR">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="c-nav">
                            <ul class="c-lists">
                                <li class="c-lists__list {{ $page->selected('printing') }}"><a href="{{ $page->baseUrl }}/printing" class="c-lists__link">Printing</a></li>
                                <li class="c-lists__list {{ $page->selected('press') }}"><a href="{{ $page->baseUrl }}/press" class="c-lists__link">Pre Press</a></li>
                                <li class="c-lists__list {{ $page->selected('design') }}"><a href="{{ $page->baseUrl }}/design" class="c-lists__link">Design</a></li>
                                <li class="c-lists__list {{ $page->selected('packaging') }}"><a href="{{ $page->baseUrl }}/packaging" class="c-lists__link">Packaging</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="s-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="c-about-title c-about-title--about">
                            <h1 class="c-title-main">About Us</h1>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="c-about">
                            <h2 class="c-about__title">Portray Your Business Brand Effectively with Spectacular Graphics</h2>
                            <p class="c-about__para">We are pioneering company married to creativeness, uniqueness, and crispness to cater the digital experience necessary for the success of any business. Modern day technology and dynamic graphic designs build strong brands with lasting identity. According to us enticing graphical design and an innovative outcome can only create solid foundation required for a noteworthy brand. We are a passionate team of artisans providing outstanding solutions that not only increases customer retention rate, but also increases customer recommendation rate too.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="c-line"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="s-process">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="c-about-title mb-12 text-center">
                            <h1 class="c-title-main">The Process</h1>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="c-process-wrapper">
                            <div class="c-process-banner js-process-print">
                                <div class="c-img-wrap is-shown">
                                    <img src="{{ $page->baseUrl }}/assets/images/print-1.jpg" alt="">
                                </div>
                                <div class="c-img-wrap">
                                    <img src="{{ $page->baseUrl }}/assets/images/uv-1.jpg" alt="">
                                </div>
                                <ul class="c-process-link js-process-print-link">
                                    <li class="c-process-link__list is-active"><a href="" data-id='1' class="c-process-link__link js-process-anchor">Printing</a></li>
                                    <li class="c-process-link__list"><a href="" data-id='2' class="c-process-link__link js-process-anchor">UV Texture</a></li>
                                </ul>
                            </div>
                            <div class="c-process js-process-print-cont">
                                <div class="c-process__para is-shown">
                                    <p class="c-process__cont">Printing We are pioneering company married to creativeness, uniqueness, and crispness to cater the digital experience necessary for the success of any business. Modern-day technology and dynamic graphic designs build strong brands with lasting identity. According to us enticing graphical design and an innovative outcome can only create solid foundation required for a noteworthy brand. We are a passionate team of artisans providing outstanding solutions that not only increases customer retention rate, but also increases customer recommendation rate too.</p>
                                    <a href="{{ $page->baseUrl }}/printing" class="c-process__link">Explore <span class="fas fa-box-open"></span></a>
                                </div>
                                <div class="c-process__para">
                                    <p class="c-process__cont">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita placeat reiciendis rem autem nemo enim. Magnam, minus aperiam. Vitae a amet illum nostrum culpa, tempora sequi recusandae! Facilis, sint amet.</p>
                                    <a href="{{ $page->baseUrl }}/printing" class="c-process__link">Explore <span class="fas fa-box-open"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="c-process-wrapper">
                            <div class="c-process-banner js-process-press">
                                <div class="c-img-wrap is-shown">
                                    <img src="{{ $page->baseUrl }}/assets/images/pre-press-1.jpg" alt="">
                                </div>
                                <div class="c-img-wrap">
                                    <img src="{{ $page->baseUrl }}/assets/images/img-retouch.jpg" alt="">
                                </div>
                                <div class="c-img-wrap">
                                    <img src="{{ $page->baseUrl }}/assets/images/img-man.jpg" alt="">
                                </div>
                                <ul class="c-process-link js-process-press-link">
                                    <li class="c-process-link__list is-active"><a href="" data-id='1' class="c-process-link__link js-process-anchor">Pre Press</a></li>
                                    <li class="c-process-link__list"><a href="" data-id='2' class="c-process-link__link js-process-anchor">Image Retouch</a></li>
                                    <li class="c-process-link__list"><a href="" data-id='3' class="c-process-link__link js-process-anchor">Image Manipulation</a></li>
                                </ul>
                            </div>
                            <div class="c-process js-process-press-cont">
                                <div class="c-process__para is-shown">
                                    <p class="c-process__cont">Printing We are pioneering company married to creativeness, uniqueness, and crispness to cater the digital experience necessary for the success of any business. Modern-day technology and dynamic graphic designs build strong brands with lasting identity. According to us enticing graphical design and an innovative outcome can only create solid foundation required for a noteworthy brand. We are a passionate team of artisans providing outstanding solutions that not only increases customer retention rate, but also increases customer recommendation rate too.</p>
                                    <a href="{{ $page->baseUrl }}/press" class="c-process__link">Explore <span class="fas fa-box-open"></span></a>
                                </div>
                                <div class="c-process__para">
                                    <p class="c-process__cont">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita placeat reiciendis rem autem nemo enim. Magnam, minus aperiam. Vitae a amet illum nostrum culpa, tempora sequi recusandae! Facilis, sint amet.</p>
                                    <a href="{{ $page->baseUrl }}/press" class="c-process__link">Explore <span class="fas fa-box-open"></span></a>
                                </div>
                                <div class="c-process__para">
                                    <p class="c-process__cont">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita placeat reiciendis rem autem nemo enim. Magnam, minus aperiam. Vitae a amet illum nostrum culpa, tempora sequi recusandae! Facilis, sint amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, sint officiis. Voluptas consectetur laboriosam animi id ipsum aliquam, harum ea cum. Corporis quidem tempore eum hic, quisquam alias iure obcaecati.</p>
                                    <a href="{{ $page->baseUrl }}/press" class="c-process__link">Explore <span class="fas fa-box-open"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="c-process-wrapper">
                            <div class="c-process-banner js-process-design">
                                <div class="c-img-wrap is-shown">
                                    <img src="{{ $page->baseUrl }}/assets/images/design-11.jpg" alt="">
                                </div>
                                <div class="c-img-wrap">
                                    <img src="{{ $page->baseUrl }}/assets/images/design.jpg" alt="">
                                </div>
                                <ul class="c-process-link js-process-design-link">
                                    <li class="c-process-link__list is-active"><a href="" data-id='1' class="c-process-link__link js-process-anchor">Design</a></li>
                                    <li class="c-process-link__list"><a href="" data-id='2' class="c-process-link__link js-process-anchor">Logos & Identity</a></li>
                                </ul>
                            </div>
                            <div class="c-process js-process-design-cont">
                                <div class="c-process__para is-shown">
                                    <p class="c-process__cont">Printing We are pioneering company married to creativeness, uniqueness, and crispness to cater the digital experience necessary for the success of any business. Modern-day technology and dynamic graphic designs build strong brands with lasting identity. According to us enticing graphical design and an innovative outcome can only create solid foundation required for a noteworthy brand. We are a passionate team of artisans providing outstanding solutions that not only increases customer retention rate, but also increases customer recommendation rate too.</p>
                                    <a href="{{ $page->baseUrl }}/design" class="c-process__link">Explore <span class="fas fa-box-open"></span></a>
                                </div>
                                <div class="c-process__para">
                                    <p class="c-process__cont">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita placeat reiciendis rem autem nemo enim. Magnam, minus aperiam. Vitae a amet illum nostrum culpa, tempora sequi recusandae! Facilis, sint amet.</p>
                                    <a href="{{ $page->baseUrl }}/design" class="c-process__link">Explore <span class="fas fa-box-open"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="c-process-wrapper">
                            <div class="c-process-banner js-process-pkg">
                                <div class="c-img-wrap is-shown">
                                    <img src="{{ $page->baseUrl }}/assets/images/pkg.jpg" alt="">
                                </div>
                                <div class="c-img-wrap">
                                    <img src="{{ $page->baseUrl }}/assets/images/gift.jpg" alt="">
                                </div>
                                <ul class="c-process-link js-process-pkg-link">
                                    <li class="c-process-link__list is-active"><a href="" data-id='1' class="c-process-link__link js-process-anchor">Packaging</a></li>
                                    <li class="c-process-link__list"><a href="" data-id='2' class="c-process-link__link js-process-anchor">Gift Articles</a></li>
                                </ul>
                            </div>
                            <div class="c-process js-process-pkg-cont">
                                <div class="c-process__para is-shown">
                                    <p class="c-process__cont">Printing We are pioneering company married to creativeness, uniqueness, and crispness to cater the digital experience necessary for the success of any business. Modern-day technology and dynamic graphic designs build strong brands with lasting identity. According to us enticing graphical design and an innovative outcome can only create solid foundation required for a noteworthy brand. We are a passionate team of artisans providing outstanding solutions that not only increases customer retention rate, but also increases customer recommendation rate too.</p>
                                    <a href="{{ $page->baseUrl }}/packaging" class="c-process__link">Explore <span class="fas fa-box-open"></span></a>
                                </div>
                                <div class="c-process__para">
                                    <p class="c-process__cont">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita placeat reiciendis rem autem nemo enim. Magnam, minus aperiam. Vitae a amet illum nostrum culpa, tempora sequi recusandae! Facilis, sint amet.</p>
                                    <a href="{{ $page->baseUrl }}/packaging" class="c-process__link">Explore <span class="fas fa-box-open"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('_partials.footer')
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