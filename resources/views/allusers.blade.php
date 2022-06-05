@extends('DefaultParts.fullnewsbody')
@section('news')
<body class="single">
<div class="wrapper">
			<div class="inner">
				
				
                                <table class="table caption-top">
                        <caption><br></caption>
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Login</th>
                            <th scope="col">Data Urodzenia</th>
                            <th scope="col">Płeć</th>
                            <th scope="col">Województwo</th>
                            <th scope="col">powiat</th>
                            <th scope="col">Miejscowość</th>
                            <th scope="col">rola</th>
                            <th scope="col">zbanowany</th>
                            <th scope="col">akcja</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->login}}</td>
                            <td>{{$data->dataUrodzenia}}</td>
                            @if($data->plec == 'm')
                            <td>Mężczyzna</td>
                            @else
                            <td>Kobieta</td>
                            @endif
                            <td>{{$data->wojewodzstwo}}</td>
                            <td>{{$data->powiat}}</td>
                            <td>{{$data->miejscowosc}}</td>
                            <td>{{$data->nazwa}}</td>
                            @if($data->zbanowany == 0)
                            <td>NIE</td>
                            @else
                            <td>TAK</td>
                            @endif
                            <td>AKCJEE</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
				
			</div>
		</div>
</body>       
@endsection