@extends('DefaultParts.site')
@section('news')
<div class="wrapper">
			<div class="inner">
				
				<form class="container-fluid bg-faded col-12" action="{{route('register')}}" method="POST">
					@csrf
					<h3>Rejestracja</h3>
					<div class="form-group">
                        
						<input type="text" placeholder="Login" name="login" class="form-control">
                        
                        
                        
						<input type="password" placeholder="Hasło" name="password" class="form-control">
					</div>
					<div class="form-wrapper">
						<input type="date" name="date" class="form-control">
					</div>
					<div class="form-wrapper">
						<select name="plec" class="form-control">
							<option value="" disabled selected>Płeć</option>
							<option value="m">Mężczyzna</option>
							<option value="k">Kobieta</option>
						</select>
                        <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
                    <div class="form-wrapper">
						<select name="wojewodzstwo" id="" class="form-control">
							<option value="" disabled selected>Województwo</option>
							<option value="1">Małopolskie</option>
							<option value="2">Śląskie</option>
                            <option value="3">Podkarpackie</option>
                            <option value="4">Świętokrzyskie</option>
                            <option value="5">Mazowieckie</option>
                            <option value="6">Dolnośląskie</option>
                            <option value="7">Kujawsko-pomorskie</option>
                            <option value="8">Lubelskie</option>
                            <option value="9">Lubuskie</option>
                            <option value="1">Łódzkie</option>
                            <option value="11">Opolskie</option>
                            <option value="12">Podlaskie</option>
                            <option value="13">Pomorskie</option>
                            <option value="14">Warmińsko-mazurskie</option>
                            <option value="15">Wielkopolskie</option>
                            <option value="16">Zachodniopomorskie</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
                    <div class="form-wrapper">
						<input type="text" name="powiat" placeholder="Powiat" class="form-control">
						<i class="zmdi zmdi-pin"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" name="miejscowosc" placeholder="Miejscowość" class="form-control">
						<i class="zmdi zmdi-gps-dot"></i>
					</div>
					
						@if($errors->any())
    						{!! implode('', $errors->all('<div>:message</div>')) !!}
						@endif
					<button type="submit" >Zarejestruj
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
                    <div>
                    </div>
				</form>
			</div>
		</div>
@endsection