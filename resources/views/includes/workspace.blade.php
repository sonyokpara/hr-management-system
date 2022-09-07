<main class="workspace">

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>@yield('page')</h1>
        <ul>
            <li><a href="#">@yield('from')</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>@yield('to')</li>
        </ul>
    </section>

    @yield('content')

    <!-- Footer -->
    <footer class="mt-auto">
        <div class="footer">
            <span class='uppercase'>&copy; 2022 Rocksure International</span>
        </div>
    </footer>

</main>
