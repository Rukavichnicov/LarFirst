@php /** @var \Illuminate\Support\ViewErrorBag $errors */ @endphp
@if($errors->any())
    <div class="row justify-content-center mt-2">
        <div class="col-md-11">
            <div class="alert alert-danger" role="alert">
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
                {{ $errors->first() }}
            </div>
        </div>
    </div>
@endif
@if(session('success'))
    <div class="row justify-content-center mt-2">
        <div class="col-md-11">
            <div class="alert alert-success" role="alert">
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
                {{ session()->get('success') }}
            </div>
        </div>
    </div>
@endif