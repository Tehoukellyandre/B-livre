@extends('base')



@section('title','Mes publications')

@section('content')


<br><br>
   <div class="container">
    <table class="table table-striped table-bordered table-hover table-responsive">
        <thead>
        <tr>
            <th>Id</th>
            <th>Titre </th>
            <th>Auteur</th>
            <th>Date publication</th>
            <th>Genre</th>
        </tr>
        </thead>
              @foreach($livres as $livre)
        <tbody>

            <td>{{ $livre->id }}</td>
            <td>{{ $livre->title }} </td>
            <td>{{ $livre->auteur}}</td>
            <td>{{ $livre->date_pub}}</td>
            <td>{{ $livre->genre}}</td>

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
