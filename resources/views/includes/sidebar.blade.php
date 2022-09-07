<aside class="menu-bar menu-sticky">
    <div class="menu-items">
        <div class="menu-header hidden">
            <a href="#" class="flex items-center mx-8 mt-8">
                <span class="avatar w-16 h-16">JD</span>
                <div class="ltr:ml-4 rtl:mr-4 ltr:text-left rtl:text-right">
                    <h5>John Doe</h5>
                    <p class="mt-2">Editor</p>
                </div>
            </a>
            <hr class="mx-8 my-4">
        </div>
        <a href="{{route('dashboard')}}" class="link" data-toggle="tooltip-menu" data-tippy-content="Dashboard">
            <span class="icon la la-laptop"></span>
            <span class="title">Dashboard</span>
        </a>
        <a href="#no-link" class="link" data-target="[data-menu=ui]" data-toggle="tooltip-menu" data-tippy-content="UI">
            <span class="icon la la-user-alt"></span>
            <span class="title">Employees</span>
        </a>
        <a href="#no-link" class="link" data-target="[data-menu=pages]" data-toggle="tooltip-menu"
            data-tippy-content="Pages">
            <span class="icon la la-book"></span>
            <span class="title">Reports</span>
        </a>
        <a href="#no-link" class="link" data-target="[data-menu=applications]" data-toggle="tooltip-menu"
            data-tippy-content="Applications">
            <span class="icon la la-warehouse"></span>
            <span class="title">Bank</span>
        </a>
        <a href="#no-link" class="link" data-target="[data-menu=menu]" data-toggle="tooltip-menu"
            data-tippy-content="Menu">
            <span class="icon la la-money-bill"></span>
            <span class="title">Payroll</span>
        </a>
        <a href="blank.html" class="link" data-toggle="tooltip-menu" data-tippy-content="Blank Page">
            <span class="icon la la-file"></span>
            <span class="title">Blank Page</span>
        </a>
    </div>

    <!-- Dashboard -->
    <!--
    <div class="menu-detail" data-menu="dashboard">
        <div class="menu-detail-wrapper">
            <a href="index.html">
                <span class="la la-cube"></span>
                Default
            </a>
            <a href="index.html">
                <span class="la la-file-alt"></span>
                Content
            </a>
            <a href="index.html">
                <span class="la la-shopping-bag"></span>
                Ecommerce
            </a>
        </div>
    </div>
    -->

    <!-- UI -->
    <div class="menu-detail" data-menu="ui">
        <div class="menu-detail-wrapper">
            <h6 class="uppercase">Management</h6>
            <a href="{{route('create-employee')}}">
                <span class="la la-user-plus"></span>
                New Employee
            </a>
            <a href="form-input-groups.html">
                <span class="la la-list-ul"></span>
                Employees List
            </a>
            <a href="form-layout.html">
                <span class="la la-user-tie"></span>
                Employee Profile
            </a>
            <hr>
            <h6 class="uppercase">Dependants</h6>
            <a href="components-alerts.html">
                <span class="la la-user-friends"></span>
                Spouses
            </a>
            <a href="components-avatars.html">
                <span class="la la-users"></span>
                Children
            </a>
            <a href="components-badges.html">
                <span class="la la-male"></span>
                Next of kins
            </a>
            <hr>
            <h6 class="uppercase">Extras</h6>
            <a href="extras-carousel.html">
                <span class="la la-certificate"></span>
                Certifications
            </a>
            <a href="extras-charts.html">
                <span class="la la-user-graduate"></span>
                Education
            </a>
            <a href="extras-editors.html">
                <span class="la la-history"></span>
                Employment History
            </a>
        </div>
    </div>

    <!-- Pages -->
    <div class="menu-detail" data-menu="pages">
        <div class="menu-detail-wrapper">
            <h6 class="uppercase">Reports</h6>
            <a href="auth-login.html">
                <span class="la la-user"></span>
                Staff
            </a>
            <a href="auth-forgot-password.html">
                <span class="la la-user-lock"></span>
                Labour
            </a>
            <a href="auth-register.html">
                <span class="la la-user-plus"></span>
                Leave
            </a>
            <a href="auth-register.html">
                <span class="la la-user-plus"></span>
                Certification
            </a>
            <a href="auth-register.html">
                <span class="la la-user-plus"></span>
                Daily Attendance
            </a>
            <a href="auth-register.html">
                <span class="la la-user-plus"></span>
                Daily Attendance
            </a>
            <a href="auth-register.html">
                <span class="la la-user-plus"></span>
                Employee
            </a>
            <hr>
            <h6 class="uppercase">Blog</h6>
            <a href="blog-list.html">
                <span class="la la-list"></span>
                List
            </a>
            <a href="blog-list-card-rows.html">
                <span class="la la-list"></span>
                List - Card Rows
            </a>
            <a href="blog-list-card-columns.html">
                <span class="la la-list"></span>
                List - Card Columns
            </a>
            <a href="blog-add.html">
                <span class="la la-layer-group"></span>
                Add Post
            </a>
            <hr>
            <h6 class="uppercase">Errors</h6>
            <a href="errors-403.html" target="_blank">
                <span class="la la-exclamation-circle"></span>
                403 Error
            </a>
            <a href="errors-404.html" target="_blank">
                <span class="la la-exclamation-circle"></span>
                404 Error
            </a>
            <a href="errors-500.html" target="_blank">
                <span class="la la-exclamation-circle"></span>
                500 Error
            </a>
            <a href="errors-under-maintenance.html" target="_blank">
                <span class="la la-exclamation-circle"></span>
                Under Maintenance
            </a>
            <hr>
            <a href="pages-pricing.html">
                <span class="la la-dollar"></span>
                Pricing
            </a>
            <a href="pages-faqs-layout-1.html">
                <span class="la la-question-circle"></span>
                FAQs - Layout 1
            </a>
            <a href="pages-faqs-layout-2.html">
                <span class="la la-question-circle"></span>
                FAQs - Layout 2
            </a>
            <a href="pages-invoice.html">
                <span class="la la-file-invoice-dollar"></span>
                Invoice
            </a>
        </div>
    </div>

    <!-- Applications -->
    <div class="menu-detail" data-menu="applications">
        <div class="menu-detail-wrapper">
            <a href="applications-media-library.html">
                <span class="la la-image"></span>
                Media Library
            </a>
            <a href="applications-point-of-sale.html">
                <span class="la la-shopping-bag"></span>
                Point Of Sale
            </a>
            <a href="applications-to-do.html">
                <span class="la la-check-circle"></span>
                To Do
            </a>
            <a href="applications-chat.html">
                <span class="la la-comment"></span>
                Chat
            </a>
        </div>
    </div>

    <!-- Menu -->
    <div class="menu-detail" data-menu="menu">
        <div class="menu-detail-wrapper">
            <a href="#no-link">
                <span class="la la-cube"></span>
                Default
            </a>
            <a href="#no-link">
                <span class="la la-file-alt"></span>
                Content
            </a>
            <a href="#no-link">
                <span class="la la-shopping-bag"></span>
                Ecommerce
            </a>
            <hr>
            <a href="#no-link">
                <span class="la la-layer-group"></span>
                Main Level
            </a>
            <a href="#no-link">
                <span class="la la-arrow-circle-right"></span>
                Grand Parent
            </a>
            <a href="#no-link" class="active" data-toggle="collapse" data-target="#menuGrandParentOpen">
                <span class="collapse-indicator la la-arrow-circle-down"></span>
                Grand Parent Open
            </a>
            <div id="menuGrandParentOpen" class="collapse open">
                <a href="#no-link">
                    <span class="la la-layer-group"></span>
                    Sub Level
                </a>
                <a href="#no-link">
                    <span class="la la-arrow-circle-right"></span>
                    Parent
                </a>
                <a href="#no-link" class="active" data-toggle="collapse" data-target="#menuParentOpen">
                    <span class="collapse-indicator la la-arrow-circle-down"></span>
                    Parent Open
                </a>
                <div id="menuParentOpen" class="collapse open">
                    <a href="#no-link">
                        <span class="la la-layer-group"></span>
                        Sub Level
                    </a>
                </div>
            </div>
            <hr>
            <h6 class="uppercase">Menu Types</h6>
            <a href="#no-link" data-toggle="menu-type" data-value="default">
                <span class="la la-hand-point-right"></span>
                Default
            </a>
            <a href="#no-link" data-toggle="menu-type" data-value="hidden">
                <span class="la la-hand-point-left"></span>
                Hidden
            </a>
            <a href="#no-link" data-toggle="menu-type" data-value="icon-only">
                <span class="la la-th-large"></span>
                Icons Only
            </a>
            <a href="#no-link" data-toggle="menu-type" data-value="wide">
                <span class="la la-arrows-alt-h"></span>
                Wide
            </a>
        </div>
    </div>
</aside>
