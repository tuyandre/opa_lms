@inject('request', 'Illuminate\Http\Request')

<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                @lang('menus.backend.sidebar.general')
            </li>
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/dashboard')) }}"
                   href="{{ route('admin.dashboard') }}">
                    <i class="nav-icon icon-speedometer"></i> @lang('menus.backend.sidebar.dashboard')
                </a>
            </li>


            <!--=======================Custom menus===============================-->
            @can('order_access')
                <li class="nav-item ">
                    <a class="nav-link {{ $request->segment(1) == 'orders' ? 'active' : '' }}"
                       href="{{ route('admin.orders.index') }}">
                        <i class="nav-icon icon-bag"></i>
                        <span class="title">@lang('menus.backend.sidebar.orders.title')</span>
                    </a>
                </li>
            @endcan
            @if ($logged_in_user->isAdmin())
                <li class="nav-item ">
                    <a class="nav-link {{ $request->segment(2) == 'teachers' ? 'active' : '' }}"
                       href="{{ route('admin.teachers.index') }}">
                        <i class="nav-icon icon-directions"></i>
                        <span class="title">@lang('menus.backend.sidebar.teachers.title')</span>
                    </a>
                </li>
            @endif

            @can('category_access')
                <li class="nav-item ">
                    <a class="nav-link {{ $request->segment(2) == 'categories' ? 'active' : '' }}"
                       href="{{ route('admin.categories.index') }}">
                        <i class="nav-icon icon-folder-alt"></i>
                        <span class="title">@lang('menus.backend.sidebar.categories.title')</span>
                    </a>
                </li>
            @endcan
            @if($logged_in_user->hasRole('teacher') || $logged_in_user->isAdmin())

                <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern(['user/courses*','user/lessons*','user/tests*','user/questions*']), 'open') }}">
                    <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/*')) }}"
                       href="#">
                        <i class="nav-icon icon-puzzle"></i> @lang('menus.backend.sidebar.courses.management')


                    </a>

                    <ul class="nav-dropdown-items">

                        @can('course_access')
                            <li class="nav-item ">
                                <a class="nav-link {{ $request->segment(2) == 'courses' ? 'active' : '' }}"
                                   href="{{ route('admin.courses.index') }}">
                                    <span class="title">@lang('menus.backend.sidebar.courses.title')</span>
                                </a>
                            </li>
                        @endcan

                        @can('lesson_access')
                            <li class="nav-item ">
                                <a class="nav-link {{ $request->segment(2) == 'lessons' ? 'active' : '' }}"
                                   href="{{ route('admin.lessons.index') }}">
                                    <span class="title">@lang('menus.backend.sidebar.lessons.title')</span>
                                </a>
                            </li>
                        @endcan

                        @can('test_access')
                            <li class="nav-item ">
                                <a class="nav-link {{ $request->segment(2) == 'tests' ? 'active' : '' }}"
                                   href="{{ route('admin.tests.index') }}">
                                    <span class="title">@lang('menus.backend.sidebar.tests.title')</span>
                                </a>
                            </li>
                        @endcan


                        @can('question_access')
                            <li class="nav-item">
                                <a class="nav-link {{ $request->segment(2) == 'questions' ? 'active' : '' }}"
                                   href="{{ route('admin.questions.index') }}">
                                    <span class="title">@lang('menus.backend.sidebar.questions.title')</span>
                                </a>
                            </li>
                        @endcan


                    </ul>
                </li>
            @endif


            @if ($logged_in_user->isAdmin())
                <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern(['user/contact*','user/sponsors*','user/testimonials*','user/faqs*','user/footer*','user/blogs']), 'open') }}">
                    <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/*')) }}"
                       href="#">
                        <i class="nav-icon icon-note"></i> @lang('menus.backend.sidebar.site-management.title')
                    </a>

                    <ul class="nav-dropdown-items">
                        @can('blog_access')
                            <li class="nav-item ">
                                <a class="nav-link {{ $request->segment(2) == 'blogs' ? 'active' : '' }}"
                                   href="{{ route('admin.blogs.index') }}">
                                    <span class="title">@lang('menus.backend.sidebar.blogs.title')</span>
                                </a>
                            </li>
                        @endcan
                        @can('reason_access')
                            <li class="nav-item">
                                <a class="nav-link {{ $request->segment(2) == 'reasons' ? 'active' : '' }}"
                                   href="{{ route('admin.reasons.index') }}">
                                    <span class="title">@lang('menus.backend.sidebar.reasons.title')</span>
                                </a>
                            </li>
                        @endcan
                        @if ($logged_in_user->isAdmin())
                            <li class="nav-item">
                                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/menu-manager')) }}"
                                   href="{{ route('admin.menu-manager') }}"> {{ __('menus.backend.sidebar.menu-manager.title') }}</a>
                            </li>


                            <li class="nav-item ">
                                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/sliders*')) }}"
                                   href="{{ route('admin.sliders.index') }}">
                                    <span class="title">@lang('menus.backend.sidebar.hero-slider.title')</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ $request->segment(2) == 'sponsors' ? 'active' : '' }}"
                                   href="{{ route('admin.sponsors.index') }}">
                                    <span class="title">@lang('menus.backend.sidebar.sponsors.title')</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ $request->segment(2) == 'testimonials' ? 'active' : '' }}"
                                   href="{{ route('admin.testimonials.index') }}">
                                    <span class="title">@lang('menus.backend.sidebar.testimonials.title')</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ $request->segment(2) == 'faqs' ? 'active' : '' }}"
                                   href="{{ route('admin.faqs.index') }}">
                                    <span class="title">@lang('menus.backend.sidebar.faqs.title')</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ $request->segment(2) == 'contact' ? 'active' : '' }}"
                                   href="{{ route('admin.contact-settings') }}">
                                    <span class="title">@lang('menus.backend.sidebar.contact.title')</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ $request->segment(2) == 'newsletter' ? 'active' : '' }}"
                                   href="{{ route('admin.newsletter-settings') }}">
                                    <span class="title">@lang('menus.backend.sidebar.newsletter-configuration.title')</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ $request->segment(2) == 'footer' ? 'active' : '' }}"
                                   href="{{ route('admin.footer-settings') }}">
                                    <span class="title">@lang('menus.backend.sidebar.footer.title')</span>
                                </a>
                            </li>
                        @endif

                    </ul>


                </li>
            @else
                @can('blog_access')
                    <li class="nav-item ">
                        <a class="nav-link {{ $request->segment(2) == 'blogs' ? 'active' : '' }}"
                           href="{{ route('admin.blogs.index') }}">
                            <i class="nav-icon icon-note"></i>
                            <span class="title">@lang('menus.backend.sidebar.blogs.title')</span>
                        </a>
                    </li>
                @endcan
                @can('reason_access')
                    <li class="nav-item">
                        <a class="nav-link {{ $request->segment(2) == 'reasons' ? 'active' : '' }}"
                           href="{{ route('admin.reasons.index') }}">
                            <i class="nav-icon icon-layers"></i>
                            <span class="title">@lang('menus.backend.sidebar.reasons.title')</span>
                        </a>
                    </li>
                @endcan
            @endif






            {{--@can('questions_option_access')--}}
            {{--<li class="nav-item">--}}
            {{--<a class="nav-link {{ $request->segment(2) == 'questions_options' ? 'active' : '' }}"--}}
            {{--href="{{ route('admin.questions_options.index') }}">--}}
            {{--<i class="nav-icon icon-note"></i> <span--}}
            {{--class="title">@lang('menus.backend.sidebar.questions-options.title')</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--@endcan--}}

            <li class="nav-item ">
                <a class="nav-link {{ $request->segment(1) == 'messages' ? 'active' : '' }}"
                   href="{{ route('admin.messages') }}">
                    <i class="nav-icon icon-envelope-open"></i> <span
                            class="title">@lang('menus.backend.sidebar.messages.title')</span>
                </a>
            </li>
            @if (!$logged_in_user->isAdmin())
                <li class="nav-item ">
                    <a class="nav-link {{ $request->segment(1) == 'invoices' ? 'active' : '' }}"
                       href="{{ route('admin.invoices.index') }}">
                        <i class="nav-icon icon-notebook"></i> <span
                                class="title">@lang('menus.backend.sidebar.invoices.title')</span>
                    </a>
                </li>
            @endif

            <li class="nav-item ">
                <a class="nav-link {{ $request->segment(1) == 'account' ? 'active' : '' }}"
                   href="{{ route('admin.account') }}">
                    <i class="nav-icon icon-key"></i>
                    <span class="title">@lang('menus.backend.sidebar.account.title')</span>
                </a>
            </li>
            @if ($logged_in_user->isAdmin())

                <li class="nav-title">
                    @lang('menus.backend.sidebar.system')
                </li>

                <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/auth*'), 'open') }}">
                    <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/auth*')) }}"
                       href="#">
                        <i class="nav-icon icon-user"></i> @lang('menus.backend.access.title')

                        @if ($pending_approval > 0)
                            <span class="badge badge-danger">{{ $pending_approval }}</span>
                        @endif
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Active::checkUriPattern('admin/auth/user*')) }}"
                               href="{{ route('admin.auth.user.index') }}">
                                @lang('labels.backend.access.users.management')

                                @if ($pending_approval > 0)
                                    <span class="badge badge-danger">{{ $pending_approval }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Active::checkUriPattern('admin/auth/role*')) }}"
                               href="{{ route('admin.auth.role.index') }}">
                                @lang('labels.backend.access.roles.management')
                            </a>
                        </li>
                    </ul>
                </li>


                <!--==================================================================-->
                <li class="divider"></li>

                <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/*'), 'open') }}">
                    <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/settings*')) }}"
                       href="#">
                        <i class="nav-icon icon-settings"></i> @lang('menus.backend.sidebar.settings.title')
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Active::checkUriPattern('admin/settings')) }}"
                               href="{{ route('admin.general-settings') }}">
                                @lang('menus.backend.sidebar.settings.general')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Active::checkUriPattern('admin/log-viewer/logs*')) }}"
                               href="{{ route('admin.social-settings') }}">
                                @lang('menus.backend.sidebar.settings.social-login')
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/log-viewer*'), 'open') }}">
                    <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/log-viewer*')) }}"
                       href="#">
                        <i class="nav-icon icon-list"></i> @lang('menus.backend.sidebar.debug-site.title')
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Active::checkUriPattern('admin/log-viewer')) }}"
                               href="{{ route('log-viewer::dashboard') }}">
                                @lang('menus.backend.log-viewer.dashboard')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Active::checkUriPattern('admin/log-viewer/logs*')) }}"
                               href="{{ route('log-viewer::logs.list') }}">
                                @lang('menus.backend.log-viewer.logs')
                            </a>
                        </li>
                    </ul>
                </li>


            @endif


        </ul>
    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><!--sidebar-->
