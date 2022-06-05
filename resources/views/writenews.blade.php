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
			
				
				<form class="container-fluid bg-faded col-12" action="{{route('zapiszartykul')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<h3>Dodawanie artykułu</h3>
					<div class="form-wrapper">
						Tytuł
						<input type="text" placeholder="Tytuł" name="tytul" class="form-control">
					</div>
					<div>
						Data publikacji
					<input type="datetime-local" name="date" class="form-control" value="{{now()}}">
					</div>
					<div class="form-wrapper">
						Zdjęcie
						<input type="file" name="image" class="form-control" accept="image/*">
					</div>
					Treść
                    <div class="form-wrapper">
                        <textarea class="form-control" id='myeditorinstance' placeholder="Treść" rows="10" name="text"></textarea>
                        <br>
					</div>
					
						@if($errors->any())
    						{!! implode('', $errors->all('<div>:message</div>')) !!}
						@endif
					<button type="submit">Utwórz artykuł
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
</body>
@endsection