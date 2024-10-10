@extends('base')



@section('title','Mes publications')

@section('content')

<div>
    <style>
          a{
              color :orange ;
              text-decoration: none ;
          }
    </style>
</div>
<br><br>
    <h1>Les ajouts de livre éffectuer par {{ $userId->name }}</h1><br><br>
   <div class="container">
        <button class="btn btn-outline-warning"> <a href="{{ route('livre.ajout',['userId' => $userId ]) }}"> Ajouter livre</a></button><br><br>
    <table class="table table-striped table-bordered table-hover table-responsive">


        <thead>
        <tr>
            <th>Id</th>
            <th>Titre </th>
            <th>Auteur</th>
            <th>Date publication</th>
            <th>Genre</th>
            <th>Modifier</th>
            <th>Supprimer</th>

        </tr>
        </thead>
              @foreach($livres as $livre)
              {{-- {{ dd($livre) }} --}}

        <tbody>

            <td>{{ $livre->id }}</td>
            <td>{{ $livre->title }} </td>
            <td>{{ $livre->auteur}}</td>
            <td>{{ $livre->date_pub}}</td>
            <td>{{ $livre->genre}}</td>
            <td ><a href="{{ route('livre.modif',[ 'livre' => $livre->id , 'userId' => $userId->id ])}}">Modifier</a></td>
            <td ><a href="{{route('livre.delete',['livre' => $livre->id , 'userId' => $userId->id ]) }}">Supprimer</a></td>

            @endforeach
        </tbody>
    </table>
   </div>


    <div>
        <style>
           footer{
               margin-top : 60vh
           }
        </style>
  </div>


@endsection
