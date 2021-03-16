<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.head')
</head>

<body>

    @include('layouts.partials.nav2')

    @include('layouts.partials.header')

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">@yield('title')</h3>
                    </div>
                </div>
            </div>
            @include('layouts.partials.message-alert')

            @yield('content')
        </div>
    </div>
    @include('layouts.partials.footer-scripts')

</body>

</html>
