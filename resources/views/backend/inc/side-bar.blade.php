<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ areActiveRoutes(['business-setting']) }}">
                <a href="{{ route('business-setting') }}">
                    <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                    <span class="pcoded-mtext">{{ __('Business Settings') }}</span>
                </a>
            </li>
            <li class="{{ areActiveRoutes(['pages.index','pages.create','pages.edit']) }}">
                <a href="{{ route('admin.pages.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __('Pages') }}</span>
                </a>
            </li>

            <li class="{{ areActiveRoutes(['pagemanager.index','pagemanager.create','pagemanager.edit']) }}">
                <a href="{{ route('pagemanager.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __('Page Manager') }}</span>
                </a>
            </li>

            <li class="{{ areActiveRoutes(['sliders.index','sliders.create','sliders.edit']) }}">
                <a href="{{ route('sliders.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __('Silders') }}</span>
                </a>
            </li>
            <li class="{{ areActiveRoutes(['banner.index','banner.create','banner.edit']) }}">
                <a href="{{ route('banner.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __('Pdf Manager') }}</span>
                </a>
            </li>


            <li class="{{ areActiveRoutes(['categories.index','categories.create','categories.edit']) }}">
                <a href="{{ route('categories.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __('Manage Top Menu') }}</span>
                </a>
            </li>
            <li class="{{ areActiveRoutes(['news.index','news.create','news.edit']) }}">
                <a href="{{ route('news.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __('Add Event') }}</span>
                </a>
            </li>
            <li class="{{ areActiveRoutes(['galleries.index','galleries.create','galleries.edit']) }}">
                <a href="{{ route('galleries.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __('Gallery') }}</span>
                </a>
            </li>
            <li class="{{ areActiveRoutes(['bottombanner.index','bottombanner.create','bottombanner.edit']) }}">
                <a href="{{ route('bottombanner.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __('Banner') }}</span>
                </a>
            </li>

            <li class="{{ areActiveRoutes(['ourservices.index','ourservices.create','ourservices.edit']) }}">
                <a href="{{ route('ourservices.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __('Our Services') }}</span>
                </a>
            </li>

            {{-- <li class="{{ areActiveRoutes(['tenderservice.index','tenderservice.create','tenderservice.edit']) }}">
                <a href="{{ route('tenderservice.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __('Tender') }}</span>
                </a>
            </li>
            <li class="{{ areActiveRoutes(['trainingevent.index','trainingevent.create','trainingevent.edit']) }}">
                <a href="{{ route('trainingevent.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __('Tranining') }}</span>
                </a>
            </li>
            <li class="{{ areActiveRoutes(['study.index','study.create','study.edit']) }}">
                <a href="{{ route('study.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __('Study Matirials') }}</span>
                </a>
            </li>
            <li class="{{ areActiveRoutes(['relieve.index','relieve.create','relieve.edit']) }}">
                <a href="{{ route('relieve.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __('Reliving Orders') }}</span>
                </a>
            </li>
            <li class="{{ areActiveRoutes(['training.index','training.create','training.edit']) }}">
                <a href="{{ route('training.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __('Training & Events Held') }}</span>
                </a>
            </li>

            <li class="{{ areActiveRoutes(['upcoming.index','upcoming.create','upcoming.edit']) }}">
                <a href="{{ route('upcoming.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                    <span class="pcoded-mtext">{{ __(' Upcoming Training Programmers') }}</span>
                </a>
            </li>
 --}}
{{--
            <li class="{{ areActiveRoutes(['contact.index']) }}">
                <a href="{{ route('contact.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                    <span class="pcoded-mtext">{{ __('Contact Table') }}</span>
                </a>
            </li>
            <li class="pcoded-hasmenu {{ areActiveRoutes(['boardofdirectories.index','boardofdirectories.create','boardofdirectories.edit','teammembers.index','teammembers.create','teammembers.edit'])}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                    <span class="pcoded-mtext">{{ __('Our team') }}</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{ areActiveRoutes(['boardofdirectories.index','boardofdirectories.create','boardofdirectories.edit']) }}">
                         <a href="{{ route('boardofdirectories.index') }}">
                            <span class="pcoded-mtext">{{ __('Board Of Directories') }}</span>
                        </a>
                    </li>
                    <li class="{{ areActiveRoutes(['teammembers.index','teammembers.create','teammembers.edit']) }}">
                         <a href="{{ route('teammembers.index') }}">
                            <span class="pcoded-mtext">{{ __('Team Member') }}</span>
                        </a>
                    </li> --}} --}}
                </ul>
            </li>
        </ul>
    </div>
</nav>
