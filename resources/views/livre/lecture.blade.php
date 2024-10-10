@extends('base')

@section('title', 'Lecture ')



@section('content')
       <div>
             <style>
                    footer{
                        margin-top : 56vh
                    }

             </style>

       </div>

        <section class="text-center">
            <h1 > <font color="orange">Rubrique {{ $slug }}</font></h1><br><br>
                @foreach($slugLivre as $slug)


                         <div class= row>

                             <div col='6'>
                                <p>Image couverture livre</p>
                             </div>
                              <div col='6'>
                                <span> {{ $slug->title}}   , <font color="orange">Auteur :  </font>  {{ $slug->auteur}}</span>
                              </div>
                                <hr>
                         </div>

                @endforeach
        </section>



@endsection
