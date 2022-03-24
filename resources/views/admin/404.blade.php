@extends ('layouts.app')
 
@section('title','Admin -Erreur 404 non trouvé')

@section ('content') 

<h1>Admin - erreur 404 non trouvé </h1>
@if ($message)
<p>{{$message}}</p>
@endif
<p>desole:(</p>
@endsection