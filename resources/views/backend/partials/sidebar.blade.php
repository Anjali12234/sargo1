<div class="left-side-bar">
    <div class="brand-logo bg-white border-neutral-600">
        <a href="{{ route('admin.dashboard') }}">
            <img src="" alt="" />
            <h5>{{ systemSetting()?->name }}</h5>

        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="{{route('admin.dashboard')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house"></span><span class="mtext">Dashboard</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{ route('admin.systemSetting.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-textarea-resize"></span><span class="mtext">System Setting</span>
                    </a>

                </li>
                {{-- <li class="dropdown">
                    <a href="{{ route('admin.slider.create') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-table"></span><span class="mtext">Slider</span>
                    </a>

                </li> --}}
                <li class="dropdown">
                    <a href="{{ route('admin.about.create') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-table"></span><span class="mtext">About</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Product</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.productCategory.index') }}">Product Category </a>
                        </li>
                        <li><a href="{{ route('admin.product.index') }}">Product</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Color</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.colorCategory.create') }}">Color Category </a>
                        </li>
                        <li><a href="{{ route('admin.color.create') }}">Color List</a></li>

                    </ul>
                </li>
                @foreach (categories() as $sharedCategory)
                    <li class="dropdown">

                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-calendar4-week"></span><span
                                class="mtext">{{ $sharedCategory->title }}</span>
                        </a>

                        <ul class="submenu">

                            <li><a href="{{ route('admin.category.superCategory.index', $sharedCategory) }}">
                                    Category
                                </a>
                            </li>
                            <li><a href="{{ route('admin.category.categoryList.index', $sharedCategory) }}">
                                    {{ $sharedCategory->title }}
                                    List
                                </a>

                            </li>
                        </ul>
                    </li>
                @endforeach


                {{-- <li class="dropdown">
                    <a href="{{ route('admin.service.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-archive"></span><span class="mtext">Services</span>
                    </a>

                </li> --}}
                <li class="dropdown">
                    <a href="{{ route('admin.enquiry.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-archive"></span><span class="mtext">Enquiry Messages</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{ route('admin.whyChoose.create') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-archive"></span><span class="mtext">Why Choose Us</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{ route('admin.menu.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-archive"></span><span class="mtext">Menu</span>
                    </a>

                </li>




            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
