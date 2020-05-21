@stack('scripts')

<div class="container" id="mySelection">
    <div class="row">
        <button class="btn btn-dark col-sm-6 rounded-0" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">@yield('option1')</button>
        <button class="btn btn-dark col-sm-6 rounded-0" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">@yield('option2')</button>
    </div>
    <div class="col">
        <div class="collapse show" id="collapseExample1" data-parent="#mySelection">
            <div class="card card-body">
            @yield('content1')
            </div>
        </div>
    </div>
    <div class="col">
        <div class="collapse" id="collapseExample2" data-parent="#mySelection">
            <div class="card card-body">
            @yield('content2')
            </div>
        </div>
    </div>
</div>