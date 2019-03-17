@section('mensagens')
    @if ($message = Session::get('error'))
        <div class="m-alert m-alert--outline alert alert-danger "  style="font-weight: bold; width:100%;
        text-align:center;">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message}}</strong>
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="m-alert m-alert--outline alert alert-danger" style="font-weight: bold; width:100%;
        text-align:center; ">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <!-- <ul> -->
                @foreach($errors->all() as $error)
                {{ $error }}<br>
                @endforeach
            <!-- </ul> -->
        </div>
    @endif
    @if ($message = Session::get('sucesso'))
				<div class="m-alert m-alert--outline alert alert-success" style="font-weight: bold; width:100%;
                text-align:center; " role="alert">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>{{ $message }}</strong>
				</div>
        @endif
@endsection