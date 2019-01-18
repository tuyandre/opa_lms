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
            @can('course_access')
                <li class="nav-item ">
                    <a class="nav-link {{ $request->segment(2) == 'courses' ? 'active' : '' }}"
                       href="{{ route('admin.courses.index') }}">
                        <i class="nav-icon icon-puzzle"></i> <span
                                class="title">@lang('menus.backend.sidebar.courses.title')</span>
                    </a>
                </li>
            @endcan

            @can('lesson_access')
                <li class="nav-item ">
                    <a class="nav-link {{ $request->segment(2) == 'lessons' ? 'active' : '' }}"
                       href="{{ route('admin.lessons.index') }}">
                        <i class="nav-icon icon-grid"></i> <span
                                class="title">@lang('menus.backend.sidebar.lessons.title')</span>
                    </a>
                </li>
            @endcan

            @can('test_access')
                <li class="nav-item ">
                    <a class="nav-link {{ $request->segment(2) == 'tests' ? 'active' : '' }}"
                       href="{{ route('admin.tests.index') }}">
                        <i class="nav-icon icon-book-open"></i> <span
                                class="title">@lang('menus.backend.sidebar.tests.title')</span>
                    </a>
                </li>
            @endcan



            @can('question_access')
                <li class="nav-item">
                    <a class="nav-link {{ $request->segment(2) == 'questions' ? 'active' : '' }}"
                       href="{{ route('admin.questions.index') }}">
                        <i class="nav-icon icon-question"></i> <span
                                class="title">@lang('menus.backend.sidebar.questions.title')</span>
                    </a>
                </li>
            @endcan

            @can('questions_option_access')
                <li class="nav-item">
                    <a class="nav-link {{ $request->segment(2) == 'questions_options' ? 'active' : '' }}"
                       href="{{ route('admin.questions_options.index') }}">
                        <i class="nav-icon icon-note"></i> <span
                                class="title">@lang('menus.backend.sidebar.questions-options.title')</span>
                    </a>
                </li>
            @endcan


            <li class="nav-item ">
                <a class="nav-link {{ $request->segment(1) == 'account' ? 'active' : '' }}"
                   href="{{ route('admin.account') }}">
                    <i class="nav-icon icon-key"></i>
                    <span class="title">@lang('menus.backend.sidebar.account.title')</span>
                </a>
            </li>
            <!--==================================================================-->




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
                <li class="divider"></li>

                <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/log-viewer*'), 'open') }}">
                    <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/log-viewer*')) }}"
                       href="#">
                        <i class="nav-icon icon-list"></i> @lang('menus.backend.log-viewer.main')
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
