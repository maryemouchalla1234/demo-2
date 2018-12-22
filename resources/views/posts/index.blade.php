
@section('content')

<div class="container
<div class="row">
<div class="col-md-12">

<h1> liste de etudiants </h1>
<table class="table">
<head>
<tr>
<th>id </th>
<th>nom </th>
<th> prenom</th>
<th> actions</th>
<body>
@foreach(&cvs  as &etud )
<tr>
<td> {{&etud->&id }}</td> 
<td>  {{&etud->&nom }} </td>
 <td> {{&etud->&prenom}}</td> 
 <td> <a href="" class="btn btn-primary"> details </a>
 <a href="" class="btn btn-default  "> Editer </a>
 <a href="" class="btn btn-danger">supprimer </a>
 
 </tr>
@endforeach

</div>
</div>
</div>




<h3> etudiants </h3>



@endsection
