@extends('DefaultParts.fullnewsbody')
@section('news')
<body class="single">
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">

                <!--
                    // TODO: Form do tworzenia artykułu
                    !-->
			<div class="inner">
				
				<form class="container-fluid bg-faded col-12" action="" method="POST">
					@csrf
					<h3>Dodawanie artykułu</h3>
					<div class="form-group">
						<input type="text" placeholder="Tytuł" name="tytul" class="form-control">

						<input type="date" name="date" class="form-control" value="{{gmdate('Y-m-d H:i:s', time())}}">
					</div>
					<div class="form-wrapper">
						<input type="file" name="image" class="form-control">
					</div>
                    <div class="form-wrapper">
                        <textarea class="form-control" placeholder="Treść" rows="10" name="text"></textarea>
                        <br>
					</div>
					
						@if($errors->any())
    						{!! implode('', $errors->all('<div>:message</div>')) !!}
						@endif
					<button type="submit" >Utwórz artykuł
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
                    <div>
                    </div>
				</form>
			</div>
		</div>
                        
                        
                    

            </div>
        </div>
    </div>
</div>
</body>
@endsection