@include('partials.head')

<body class="alt-menu sidebar-noneoverflow">
@include('partials.header')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        @include('partials.navbar')
        
        

               @yield('content')

                @include('partials.copyright')

    </div>
    <!-- END MAIN CONTAINER -->
@include('partials.footer')