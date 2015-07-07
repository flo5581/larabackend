@use(Flo\Backend\Classes\HTMLTranslator)
<div class="form">
	<form method="post" action="{{action($controller.'@postAdd', ['model' => class_replace($data['model'])])}}">
	@foreach($data['formfields'] as $column => $properties)
	<div class="formfields">
		<label for="{{$column}}">{{$properties['label'] ?: $type}}</label>
		{!! HTMLTranslator::make($properties['type'], $column) !!}
	</div>
	@endforeach
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="Save" class="submit-button">
	</form>
</div>