@extends('admin.master')

@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/waitme/waitMe.css') }}">
@endsection

@section('list-tambah-kelas')
class="active"
@endsection

@section('content')
	<div class="container-fluid">
	    <div class="col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        <b>Tambah Kelas SMK</b><small></small>
                    </h2>
                </div>
                <div class="body">
                    <form method="POST" action="{{ route('/tambah-kelas') }}">
                    	{{ csrf_field() }}
                        <label for="kelas">Kelas</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" id="kelas" class="form-control" placeholder="Masukkan Kelas" name="kelas">
                            </div>
                        </div>
                        <label for="nm_kelas">Nama Kelas</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="nm_kelas" class="form-control" placeholder="Nama Kelas" name="nm_kelas">
                            </div>
                        </div>

                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Submit">
                    </form>
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