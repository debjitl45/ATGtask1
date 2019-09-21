
{{ Form::label('name', 'Name', ['class' => 'control-label mt-3']) }}
{{ Form::text('name', null,['class'=>'form-control form-control-lg','placeholder'=>'Name']) }}

{{ Form::label('email', 'Email', ['class' => 'control-label mt-3']) }}
{{ Form::text('email', 'example@gmail.com',['class'=>'form-control form-control-lg','placeholder'=>'Email']) }} 

{{ Form::label('pincode', 'Pincode', ['class' => 'control-label mt-3']) }}
{{ Form::text('pincode', null,['class'=>'form-control form-control-lg','placeholder'=>'Pincode']) }}

<div class="row justify-center mt-3">
	<div class="col-sm-4">
		<a href="{{route('task.index')}}" class="btn btn-block btn-secondary">Go to Home</a>
	</div>
	<div class="col-sm-4">
		<button class="btn btn-block btn-success" type="submit">Save User!</button>
	</div>
</div>

