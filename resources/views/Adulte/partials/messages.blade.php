@if($errors->any())
	<div class="alert alert-danger" role="alert">
		<p>Corrigez les erreurs suivantes SVP </p>
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif