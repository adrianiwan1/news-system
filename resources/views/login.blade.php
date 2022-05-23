@extends('DefaultParts.site')
@section('news')
<div class="wrapper">
			<div class="inner">
				
				<form class="container-fluid bg-faded col-12" action="{{route('login')}}" method="POST">
					@csrf
					<h3>Panel logowania</h3>
					<div class="form-group">
                        
						<input type="text" placeholder="Login" name="login" class="form-control">

						<input type="password" placeholder="Hasło" name="password" class="form-control">
					</div>
						@if($errors->any())
    						{!! implode('', $errors->all('<div>:message</div>')) !!}
						@endif
					<button type="submit" >Zalogij się
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
                    <div>
                    </div>
				</form>
			</div>
		</div>
@endsection