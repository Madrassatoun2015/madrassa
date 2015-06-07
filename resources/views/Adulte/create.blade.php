@extends('app')

@section('content')

	<div class="panel" >
		<div class="panel-heading" >INSCRIPTION ADULTE</div>
		<div class="panel-body" >
			@include('adulte.partials.messages')
			<hr/>
			{!! Form::open(['route' => 'adulte.store','method' => 'POST'])!!}
				@include('adulte.partials.fields')
				<hr/>
				<button type="submit" class="Button1">Envoyer</button>
			{!! Form::close() !!}
		</div>
	</div>

@endsection
