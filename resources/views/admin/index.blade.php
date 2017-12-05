@extends('admin.master')

@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/waitme/waitMe.css') }}">
@endsection

@section('list-home')
class="active"
@endsection

@section('content')
	<div class="container-fluid">
	    <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Basic Card Title <small>Description text here...</small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li>
                            <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse">
                                <i class="material-icons">loop</i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                </div>
            </div>
        </div>
	</div>
@endsection

@section('custom-js')
<script src="{{ asset('plugins/waitme/waitMe.js') }}"></script>
<script>
$(function () {
    initLoading();
});

//Init Loading
function initLoading() {
    $('[data-toggle="cardloading"]').on('click', function () {
        var effect = $(this).data('loadingEffect');
        var $loading = $(this).parents('.card').waitMe({
            effect: effect,
            text: 'Loading...',
            bg: 'rgba(255,255,255,0.90)',
            color: '#555'
        });

        setTimeout(function () {
            //Loading hide
            $loading.waitMe('hide');
        }, 3200);
    });
}
</script>
@endsection