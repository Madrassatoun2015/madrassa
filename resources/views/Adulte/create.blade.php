@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Adulte</div>
				<div class="panel-body">
					@include('adulte.partials.messages')
					{!! Form::open(['route' => 'adulte.store','method' => 'POST'])!!}
						@include('adulte.partials.fields')
						<button type="submit" class="btn btn-info">Envoyer</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
