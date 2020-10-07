<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="https://otlconsultancy.com/" target="_blank" class="simple-text logo-normal">
            <img src="{{asset('assets/img/logo@2x.png')}}"  alt="OTL Logo" data-retina="{{asset('assets/img/logo@2x.png')}}" data-width="250" data-height="30">
               
            
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            
            <li class="{{ $elementActive == 'Slider' ? 'active' : '' }}">
                <a href="{{ route('Slider.index') }}">
                    <i class="fa fa-paragraph"></i>
                    <p>{{ __('Home Slider') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'category' ? 'active' : '' }}">
                <a href="{{ route('category.index') }}">
                    <i class="fa fa-list-alt"></i>
                    <p>{{ __('category') }}</p>
                </a>
            </li>
            
            <li class="{{ $elementActive == 'gallery' ? 'active' : '' }}">
                <a href="{{ route('gallery.index') }}">
                    <i class="fa fa-picture-o"></i>
                    <p>{{ __('Gallery') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'client' ? 'active' : '' }}">
                <a href="{{ route('client.index') }}">
                    <i class="fa fa-user-circle-o"></i>
                    <p>{{ __('Client') }}</p>
                </a>
            </li>

            <li class="{{ $elementActive == 'contact' ? 'active' : '' }}">
                <a href="{{ route('contact.index') }}">
                    <i class="fa fa-address-book"></i>
                    <p>{{ __('Contact us') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'user' || $elementActive == 'profile' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="false" href="#laravelExamples">
                    <i class="fa fa-cogs"></i>
                    <p>
                            {{ __('Users Managemant') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="laravelExamples">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'profile' ? 'active' : '' }}">
                            <a href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini-icon">{{ __('UP') }}</span>
                                <span class="sidebar-normal">{{ __(' User Profile ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'user') }}">
                                <span class="sidebar-mini-icon">{{ __('U') }}</span>
                                <span class="sidebar-normal">{{ __(' User Management ') }}</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            
            </ul>
    </div>
</div>
