        <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
            <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <nav class="vertnav navbar navbar-light">
                <!-- nav bar -->
                <div class="w-100 mb-4 d-flex">
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                        <svg version="1.1" id="logo" class="navbar-brand-img brand-sm"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                            y="0px" viewBox="0 0 120 120" xml:space="preserve">
                            <g>
                                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                            </g>
                        </svg>
                    </a>
                </div>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <x-tab-sidbar href="{{ route('admin.index') }}" icon="fe-home"
                        name="{{ __('keywords.home') }}"></x-tab-sidbar>
                </ul>
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>{{ __('keywords.components') }}</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <x-tab-sidbar href="{{ route('admin.services.index') }}" icon="fe fe-codesandbox"
                        name="{{ __('keywords.services') }}"></x-tab-sidbar>
                    <x-tab-sidbar href="{{ route('admin.features.index') }}" icon="fe fe-shopping-bag"
                        name="{{ __('keywords.features') }}"></x-tab-sidbar>
                    <x-tab-sidbar href="{{ route('admin.messages.index') }}" icon="fe fe-message-circle"
                        name="{{ __('keywords.messages') }}"></x-tab-sidbar>
                    <x-tab-sidbar href="{{ route('admin.subscribers.index') }}" icon="fe fe-twitter"
                        name="{{ __('keywords.subscribers') }}"></x-tab-sidbar>
                    <x-tab-sidbar href="{{ route('admin.testimonials.index') }}" icon="fe fe-users"
                        name="{{ __('keywords.testimonials') }}"></x-tab-sidbar>
                    <x-tab-sidbar href="{{ route('admin.companies.index') }}" icon="fa-solid fa-users-between-lines"
                        name="{{ __('keywords.companies') }}"></x-tab-sidbar>
                    <x-tab-sidbar href="{{ route('admin.ourteams.index') }}" icon="fas fa-user-group"
                        name="{{ __('keywords.ourteams') }}"></x-tab-sidbar>
                    <x-tab-sidbar href="{{ route('admin.settings.index') }}" icon="fe fe-settings"
                        name="{{ __('keywords.settings') }}"></x-tab-sidbar>
                </ul>
            </nav>
        </aside>
