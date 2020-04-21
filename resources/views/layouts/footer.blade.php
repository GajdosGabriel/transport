{{--Footer--}}

@include('modals.rdModal')
@include('modals.ppModal')

<div class="container-fluid navBackground" style="color: whitesmoke">
    <div class="container">

{{--         Terms--}}
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <p style="cursor: pointer; color: #e0e0e0" class="text-center mt-4" >
                   <span data-toggle="modal" data-target="#rdModal">@lang('legal/rd.title')</span> |
                    <span data-toggle="modal" data-target="#ppModal">@lang('legal/pp.title')</span>
                </p>
            </div>
        </div>


        <div class="row align-items-center">
            {{--  Part A--}}
            <div class="col-lg-12">
                <div class="mt-4 text-center pb-3" style="color: silver">
                    <strong>LD Transport LTD</strong>
                    <span>71-75 Shelton Street, Covent Garden, WC2H 9JQ London, UK</span>
                    <span>+44 (0)20 3 905 5498</span>
                    <span>info@ld-transport.com</span>
                </div>
            </div>

            {{--  Part B--}}
            <div class="col-lg-6">

            </div>
        </div>
    </div>
</div>
