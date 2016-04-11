{!! Form::open(array('url'=>'change','method'=>'POST', 'files'=>true )) !!}

<div class="row">
	<p>
		<input type="checkbox" id="ra1" name="ra1" />
			      <label for="ra1">If results are not announced,click </label>
	</p>
</div>

 {!! Form::submit('Submit', array('class'=>'teal darken-1 send-btn btn waves-effect waves-light' )) !!}
	 	
	      {!! Form::close() !!}