@php
    $metatag = \App\Models\MetaTag::find(1);
    $slider = \App\Models\Slider::find(1);
    $homeAbout = \App\Models\HomeAbout::find(1);
    $achievement = \App\Models\Achievement::find(1);
    $research = \App\Models\Research::find(1);
    $innovative = \App\Models\Innovative::find(1);
    $notable = \App\Models\NotableAchievement::find(1);
    $seed = \App\Models\SeedTesting::find(1);
    $future = \App\Models\FutureProspect::find(1);
    $plant = \App\Models\ProcessingPlant::find(1);
    $commitment = \App\Models\Commitment::find(1);
    $area = \App\Models\ProductionArea::find(1);
    $overview = \App\Models\Overview::find(1);
    $mission = \App\Models\Mission::find(1);
    $award = \App\Models\Award::find(1);
    $mile = \App\Models\MileStone::find(1);
    $contactDetail = \App\Models\ContactDetail::find(1);
    $siteSetting = \App\Models\SiteSetting::find(1);
    $home = \App\Models\HomeFeature::find(1);
    $work = \App\Models\WorkProcess::find(1);
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $siteSetting->site_name }} | @yield('title') </title>
    <!-- Meta -->
    <meta name="description" content="Navbharat Seeds
">
    <meta name="keywords" content="Navbharat Seeds
">
    <meta property="og:title" content="Navbharat Seeds
">
    <meta property="og:description" content="Navbharat Seeds
">
    <meta property="og:type" content="Website">
    <link rel="shortcut icon" href="{{ asset('assets/dynamics/'.$siteSetting->favicon) }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <!-- *************
         ************ CSS Files *************
         ************* -->
    <link rel="stylesheet" href="{{ asset('dash_assets/fonts/remix/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('dash_assets/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dash_assets/vendor/datatables/dataTables.bs5.css') }}">
    <link rel="stylesheet" href="{{ asset('dash_assets/vendor/datatables/dataTables.bs5-custom.css') }}">
    <link rel="stylesheet" href="{{ asset('dash_assets/vendor/datatables/buttons/dataTables.bs5-custom.css') }}">
    <!-- *************
         ************ Vendor Css Files *************
         ************ -->
    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('dash_assets/vendor/overlay-scroll/OverlayScrollbars.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body>
    <!-- Loading starts -->
    <div id="loading-wrapper">
        <div class='spin-wrapper'>
            <div class='spin'>
                <div class='inner'></div>
            </div>
            <div class='spin'>
                <div class='inner'></div>
            </div>
            <div class='spin'>
                <div class='inner'></div>
            </div>
            <div class='spin'>
                <div class='inner'></div>
            </div>
            <div class='spin'>
                <div class='inner'></div>
            </div>
            <div class='spin'>
                <div class='inner'></div>
            </div>
        </div>
    </div>
    <!-- Loading ends -->
    <!-- Page wrapper starts -->
    <div class="page-wrapper">
        <!-- App header starts -->
        <div class="app-header d-flex align-items-center">
            <!-- Toggle buttons starts -->
            <div class="d-flex">
                <button class="toggle-sidebar">
                    <i class="ri-menu-line"></i>
                </button>
                <button class="pin-sidebar">
                    <i class="ri-menu-line"></i>
                </button>
            </div>
            <!-- Toggle buttons ends -->
            <!-- App brand starts -->
            <div class="app-brand ms-3">
                <a href="{{ route('admin.dashboard') }}" class="d-lg-block d-none bg-white p-1">
                    <img src="{{ asset('assets/dynamics/'.$siteSetting->header_logo) }}" class="logo" alt="logo ">
                </a>
                <a href="{{ route('admin.dashboard') }}" class="d-lg-none d-md-block bg-white p-1">
                    <img src="{{ asset('assets/dynamics/'.$siteSetting->header_logo) }}" class="logo" alt="logo"
                        style="
               max-width: 141px;
               max-height: 53px;
               ">
                </a>
            </div>
            <!-- App brand ends -->
            <!-- App header actions starts -->
            <div class="header-actions">
                <!-- Header user settings starts -->
                <div class="dropdown ms-2">
                    <a id="userSettings" class="dropdown-toggle d-flex align-items-center" href="#!" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="avatar-box">Admin</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end shadow-lg">
                        <div class="px-3 py-2">
                        </div>
                        {{-- 
                  <div class="mx-2 my-2 d-grid">
                     <a href="" class="btn btn-danger">Change-password</a>
                  </div>
                  --}}
                        <div class="mx-3 my-2 d-grid">
                            <a href="{{ route('admin.logout') }}" class="btn btn-danger">Logout</a>
                        </div>
                    </div>
                </div>
                <!-- Header user settings ends -->
            </div>
            <!-- App header actions ends -->
        </div>
        <!-- App header ends -->
        <!-- Main container starts -->
        <div class="main-container">
            <!-- Sidebar wrapper starts -->
            <nav id="sidebar" class="sidebar-wrapper">
                <!-- Sidebar profile starts -->
                <div class="sidebar-profile">
                    <img src="{{ asset('dash_assets/admin_icon.png') }}" class="img-shadow img-3x me-3 rounded-5"
                        alt="vizag bikes cars">
                    <div class="m-0">
                        <h5 class="mb-1 profile-name text-nowrap text-truncate">Admin</h5>
                    </div>
                </div>
                <!-- Sidebar profile ends -->
                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <ul class="sidebar-menu">
                        <li class="{{ request()->routeIs('admin.dashboard') ? 'current-page' : '' }}">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="ri-home-6-line"></i>
                                <span class="menu-text"> Dashboard</span>
                            </a>
                        </li>
                        <li
                            class="treeview {{ request()->routeIs('sliders.*', 'home-abouts.*', 'achievements.*', 'home-features.*', 'work-process.*', 'announcement.*') ? 'current-page active' : '' }}">
                            <a href="#!">
                                <i class="ri-home-5-line"></i>
                                <span class="menu-text">Home</span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a class="{{ request()->routeIs('sliders.*') ? ' active-sub' : '' }}"
                                        href="{{ route('sliders.edit', $slider->id) }}">Slider</a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('home-abouts.*') ? ' active-sub' : '' }}"
                                        href="{{ route('home-abouts.edit', $homeAbout->id) }}">Home About</a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('achievements.*') ? ' active-sub' : '' }}"
                                        href="{{ route('achievements.edit', $achievement->id) }}">Achievements</a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('home-features.*') ? ' active-sub' : '' }}"
                                        href="{{ route('home-features.edit', $home->id) }}">Home Features</a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('work-process.*') ? ' active-sub' : '' }}"
                                        href="{{ route('work-process.edit', $work->id) }}">Work Process</a>
                                </li>

                            </ul>
                        </li>
                        <li
                            class="treeview {{ request()->routeIs('cottons.*', 'field-crops.*', 'field-crops-categories.*', 'vegetable-crops.index', 'vegetable-crop-categories.*') ? 'current-page active' : '' }}">
                            <a href="#!">
                                <i class="ri-font-family"></i>
                                <span class="menu-text">Seeds</span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a class="{{ request()->routeIs('cottons.*') ? ' active-sub' : '' }}"
                                        href="{{ route('cottons.index') }}">Cotton</a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('field-crops.*') ? ' active-sub' : '' }}"
                                        href="{{ route('field-crops.index') }}">Field Crop Category </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('field-crops-categories.*') ? ' active-sub' : '' }}"
                                        href="{{ route('field-crops-categories.index') }}">Field Crop Product </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('vegetable-crops.*') ? ' active-sub' : '' }}"
                                        href="{{ route('vegetable-crops.index') }}">Vegetables Crop Category </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('vegetable-crop-categories.*') ? ' active-sub' : '' }}"
                                        href="{{ route('vegetable-crop-categories.index') }}">Vegetables Crop Product
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="treeview {{ request()->routeIs('head-corporates.*', 'research.*','innovatives.*','notable-achievements.*','seed-testing.*','future-prospects.*','state-of-centers.*') ? 'current-page active' : '' }}">
                            <a href="#!">
                                <i class="ri-honour-line"></i>
                                <span class="menu-text">InfraStructure</span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a class="{{ request()->routeIs('head-corporates.*') ? ' active-sub' : '' }}"
                                        href="{{ route('head-corporates.index') }}">Head Office & Corporate </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('research.*') ? ' active-sub' : '' }}"
                                        href="{{ route('research.edit', $research->id) }}">Research Details </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('innovatives.*') ? ' active-sub' : '' }}"
                                        href="{{ route('innovatives.edit', $innovative->id) }}">Innovative Research
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('notable-achievements.*') ? ' active-sub' : '' }}"
                                        href="{{ route('notable-achievements.edit', $notable->id) }}">Notable-Achievements
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('seed-testing.*') ? ' active-sub' : '' }}"
                                        href="{{ route('seed-testing.edit', $seed->id) }}">Seed Testing </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('future-prospects.*') ? ' active-sub' : '' }}"
                                        href="{{ route('future-prospects.edit', $future->id) }}">Future- Prospects
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('state-of-centers.*') ? ' active-sub' : '' }}"
                                        href="{{ route('state-of-centers.index') }}">State of Center </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="treeview {{ request()->routeIs('processing-plant.*', 'seed-productions.*','advance-seeds','commitments.*','production-areas.*','quality-testings.*') ? 'current-page active' : '' }}">
                            <a href="#!">
                                <i class="ri-honour-line"></i>
                                <span class="menu-text">Processing Plant</span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a class="{{ request()->routeIs('processing-plant.*') ? ' active-sub' : '' }}"
                                        href="{{ route('processing-plant.edit', $plant->id) }}">Processing Plant </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('seed-productions.*') ? ' active-sub' : '' }}"
                                        href="{{ route('seed-productions.index') }}">Seed Production </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('advance-seeds.*') ? ' active-sub' : '' }}"
                                        href="{{ route('advance-seeds.index') }}">Advance Seed </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('commitments.*') ? ' active-sub' : '' }}"
                                        href="{{ route('commitments.edit', $commitment->id) }}">Commitment to
                                        Excellence </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('production-areas.*') ? ' active-sub' : '' }}"
                                        href="{{ route('production-areas.edit', $area->id) }}">Production Areas</a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('quality-testings.*') ? ' active-sub' : '' }}"
                                        href="{{ route('quality-testings.index') }}">Quality Assurance & Testing</a>
                                </li>

                            </ul>
                        </li>
                        <li
                            class="treeview {{ request()->routeIs('outrich-farmers.*', 'farmer-images.*','our-communities.*','community-images.*','exports.*','export-images.*') ? 'current-page active' : '' }}">
                            <a href="#!">
                                <i class="ri-honour-line"></i>
                                <span class="menu-text">Out Rich</span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a class="{{ request()->routeIs('outrich-farmers.*') ? ' active-sub' : '' }}"
                                        href="{{ route('outrich-farmers.index') }}">Farmers OutRich </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('farmer-images.*') ? ' active-sub' : '' }}"
                                        href="{{ route('farmer-images.index') }}">Farmers OutRich Images </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('our-communities.*') ? ' active-sub' : '' }}"
                                        href="{{ route('our-communities.index') }}">Our Community </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('community-images.*') ? ' active-sub' : '' }}"
                                        href="{{ route('community-images.index') }}">Our Community Images</a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('exports.*') ? ' active-sub' : '' }}"
                                        href="{{ route('exports.index') }}">Exports </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('export-images.*') ? ' active-sub' : '' }}"
                                        href="{{ route('export-images.index') }}">Exports Images </a>
                                </li>

                            </ul>
                        </li>
                        <li
                            class="treeview {{ request()->routeIs('leadeships.*', 'overviews.*','missions.*','awards.*','mile-stones.*','award-images.*') ? 'current-page active' : '' }}">
                            <a href="#!">
                                <i class="ri-honour-line"></i>
                                <span class="menu-text">About</span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a class="{{ request()->routeIs('leaderships.*') ? ' active-sub' : '' }}"
                                        href="{{ route('leaderships.index') }}">Leadership </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('overviews.*') ? ' active-sub' : '' }}"
                                        href="{{ route('overviews.edit', $overview->id) }}">Overviews </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('missions.*') ? ' active-sub' : '' }}"
                                        href="{{ route('missions.edit', $mission->id) }}">Missions & Vision </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('awards.*') ? ' active-sub' : '' }}"
                                        href="{{ route('awards.edit', $award->id) }}">Awards & Acolades </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('mile-stones.*') ? ' active-sub' : '' }}"
                                        href="{{ route('mile-stones.edit', $mile->id) }}">Mile Stone </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('award-images.*') ? ' active-sub' : '' }}"
                                        href="{{ route('award-images.index') }}">Award Images </a>
                                </li>

                            </ul>
                        </li>
                        <li class=" {{ request()->routeIs('testimonials.*') ? 'current-page' : '' }}">
                            <a href="{{ route('testimonials.index') }}">
                                <i class="ri-projector-fill"></i>
                                <span class="menu-text">Testimonials Details
                                </span>
                            </a>
                        </li>
                        <li class=" {{ request()->routeIs('galleries.*') ? 'current-page' : '' }}">
                            <a href="{{ route('galleries.index') }}">
                                <i class="ri-contacts-book-3-line "></i>
                                <span class="menu-text">Galleries
                                </span>
                            </a>
                        </li>
                        <li class="{{ request()->routeIs('blogs.*') ? 'current-page' : '' }}">
                            <a href="{{ route('blogs.index') }}">
                                <i class="ri-product-hunt-fill"></i>
                                <span class="menu-text">Blogs Details</span>
                            </a>
                        </li>
                       
                        <li class=" {{ request()->routeIs('contact-details.*') ? 'current-page' : '' }}">
                            <a href="{{ route('contact-details.edit', $contactDetail->id) }}">
                                <i class="ri-contacts-fill"></i>
                                <span class="menu-text"> Contact Details
                                </span>
                            </a>
                        </li>
                        <li class=" {{ request()->routeIs('admin.enquiry-details') ? 'current-page' : '' }}">
                            <a href="{{ route('admin.enquiry-details') }}">
                                <i class="ri-folder-image-line"></i>
                                <span class="menu-text"> Enquiry Message
                                </span>
                            </a>
                        </li>
                        
                        <li
                            class="treeview {{ request()->routeIs('seosettings.*', 'site-settings.*', 'admin.change-password', 'sociallinks.*', 'metatags.*') ? 'current-page active' : '' }}">
                            <a href="#!">
                                <i class="ri-settings-fill"></i>
                                <span class="menu-text">Settings</span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a class="{{ request()->routeIs('seosettings.*') ? ' active-sub' : '' }}"
                                        href="{{ route('seosettings.index') }}">SEO Setting</a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('site-settings.*') ? ' active-sub' : '' }}"
                                        href="{{ route('site-settings.edit', $siteSetting->id) }}">Site Settings</a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('metatags.*') ? ' active-sub' : '' }}"
                                        href="{{ route('metatags.edit', $metatag->id) }}">Meta Tags </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('admin.change-password') ? ' active-sub' : '' }}"
                                        href="{{ route('admin.change-password') }}">Change Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ request()->routeIs('admin.logs-details') ? 'current-page' : '' }}">
                            <a href="{{ route('admin.logs-details') }}">
                                <i class="ri-logout-circle-r-fill"></i>
                                <span class="menu-text">Admin Logs</span>
                            </a>
                        </li>
                        <li class="{{ request()->routeIs('admin.logout') ? 'current-page' : '' }}">
                            <a href="{{ route('admin.logout') }}">
                                <i class="ri-arrow-left-circle-fill"></i>
                                <span class="menu-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar menu ends -->
            </nav>
            <!-- Sidebar wrapper ends -->
            <div class="app-container">
