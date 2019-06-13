<header class="l-header">
    <div class="s-header fixed">
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
                            <!-- <li class="c-lists__list"><a href="{{ $page->baseUrl }}" class="c-lists__link">Home</a></li> -->
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
</header>