
<table border="0" width="100%">
	<tr>
		<td>
<fieldset>
	<legend>État Civil</legend>
	<div class="form-group">
		{!! Form::label('nom','nom')!!}<br/>
		{!! Form::text('nom','', ['class' => 'form-control upCase', 'placeholder' => 'Entrez le nom' ] ) !!}
	</div>
	<div class="form-group">
		{!! Form::label('prenom','Prénom')!!}<br/>
		{!! Form::text('prenom','', ['class' => 'form-control', 'placeholder' => 'Entrez le prénom' ] ) !!}
	</div>
</fieldset></td>
		<td>
<fieldset>
	<legend>Coordonnées</legend>
	<div class="form-group">
		{!! Form::label('adresse','Adresse')!!}<br/>
		{!! Form::text('adresse','', ['class' => 'form-control', 'placeholder' => 'Entrez une adresse' ] ) !!}
	</div>
	<div class="form-group">
		{!! Form::label('ville','Ville')!!}<br/>
		{!! Form::text('ville','', ['class' => 'form-control', 'placeholder' => 'Entrez la ville' ] ) !!}
	</div>
</fieldset></td>
	</tr>
</table>

<fieldset>
	<legend>Scolarité</legend>
	<div class="form-group">
		{!! Form::label('dernierdiplome','Dernier diplôme obtenu')!!}<br/>
		{!! Form::text('dernierdiplome','', ['class' => 'form-control', 'placeholder' => 'Entrez le diplôme' ] ) !!}
	</div>
</fieldset>
