<footer>
    @yield('top-footer')
    <div class="centerFooter container">
        @foreach (config('DC.footer-list') as $el)
            <div class="list">
                @foreach ($el as $el2)
                    <div>
                        <h3> {{ $el2['title'] }} </h3>
                        <ul>
                            @foreach ($el2['list'] as $el3)
                                <li>
                                    <a href="{{ $el3['href'] }}">{{ $el3['content'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        @endforeach

        <div class="ms-auto">
            <img class="logo-footer" src="{{asset('./img/dc-logo-bg.png')}}" alt="dc logo bg">
        </div>
    </div>

    <div class="bottom">
        <div class="container">
            <div>
                <button>SIGN-UP NOW!</button>
            </div>

            <div class="right">
                <a href="#">FOLLOW US</a>
                @foreach (config('DC.footerBottom') as $el)
                    <a href="#">
                        <img src="{{ asset($el['src']) }}" alt="{{ $el['alt'] }}" title="{{ $el['alt'] }}">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</footer>
