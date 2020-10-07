<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li>
                        <a href="https://www.mavensdesk.com" target="_blank">{{ __('Mavensdesk Consultancy Services') }}</a>
                    </li>
                  </ul>
            </nav>
            <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>{{ __(', made with ') }}<i class="fa fa-heart heart"></i>{{ __(' by ') }}<a class="@if(Auth::guest()) text-white @endif" href="https://www.mavensdesk.com" target="_blank">{{ __('Mavensdesk Consultancy Services') }}</a>
                </span>
            </div>
        </div>
    </div>
</footer>