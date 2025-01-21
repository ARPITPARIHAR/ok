
<header class="header">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="main_head" id="myHeader">
					<div class="row align-items-center">
						<div class="col-lg-12 no_padding">
							<div class="logo">

                                    <a href="{{ route('home') }}"><img src="{{businessSetting(1)->header_logo}}" alt="logo"></a>


							</div>
						</div>
						<div class="col-lg-12 no_padding">
                            <div class="menus">
                                <nav class="navbar navbar-expand-lg navbar-light">
                                    <button class="navbar-toggler" type="button" onclick="sdbr_open()">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="mySidebar">
                                        <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                                            <button onclick="sdbr_close()" class="close">&times;</button>

                                            {{-- @foreach (App\Models\Page::where('parent_id', 0)->get() as $page)
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link @if($page->count() > 0) dropdown-toggle @endif" href="#"
                                                    id="navbarDropdown{{ $page->id }}"
                                                    role="button"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                        {{ $page->name }}
                                                    </a>

                                                    <!-- Dynamic Subcategories -->
                                                    {{-- @if ($category->subcategories->count() > 0)
                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown{{ $category->id }}">
                                                            @foreach ($category->subcategories as $subcategory)
                                                                <li><a class="dropdown-item" href="#">{{ $subcategory->name }}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    @endif --}}
                                                <
                                            {{-- @endforeach --}} --
                                            <!-- Dynamic Categories -->
                                            <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                                            @foreach (\App\Models\Page::with('children')->where('parent_id', 0)->get() as $parentPage)
                                            <div class="page-item">
                                                <h3>{{ $parentPage->name }}</h3>

                                                <!-- Check if there are child pages (subcategories) for the parent page -->
                                                @if ($parentPage->children->count() > 0)
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton{{ $parentPage->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Subcategories
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $parentPage->id }}">
                                                            @foreach ($parentPage->children as $child)
                                                                <li>
                                                                    <a class="dropdown-item" href="">
                                                                        {{ $child->name }}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @else
                                                    <p>No subcategories available.</p>
                                                @endif
                                            </div>
                                        @endforeach



                                        @foreach (\App\Models\Category::with(['subcategories', 'subcategories.banners'])->get() as $category)
                                        <li class="nav-item dropdown">
                                            <a class="nav-link @if($category->subcategories->count() > 0) dropdown-toggle @endif" href="#"
                                               id="navbarDropdown{{ $category->id }}"
                                               role="button"
                                               data-bs-toggle="dropdown"
                                               aria-expanded="false">
                                                {{ $category->name }}
                                            </a>

                                            <!-- Dynamic Subcategories -->
                                            @if ($category->subcategories->count() > 0)
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown{{ $category->id }}">
                                                    @foreach ($category->subcategories as $subcategory)
                                                        <li>
                                                            @foreach ($subcategory->banners as $banner)
                                                                @if ($banner->thumbnail_img) <!-- Check if there's a PDF or image -->
                                                                    <a class="dropdown-item" href="{{ Storage::url($banner->thumbnail_img) }}" target="_blank">
                                                                        {{ $subcategory->name }}
                                                                    </a>
                                                                @else
                                                                    <span class="dropdown-item text-muted">
                                                                        {{ $subcategory->name }} (No PDF)
                                                                    </span>
                                                                @endif
                                                            @endforeach
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach



                                            <li class="nav-item"><a class="nav-link" href="/gallery">Photo Gallery</a></li>

											<li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>


</header>

<style>
/* Submenu visibility */
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu:hover > .dropdown-menu {
  display: block;
  position: absolute;
  top: 0;
  left: 100%;
}

.dropdown-menu {
  display: none;
  position: absolute;
  top: 0;
  left: 100%;
}
</style>
