@extends('base')

@section('title', 'B-Livre blibliotheque')



@section('content')

<div>
    <style>
        a{
            margin-right :15px ;
            color: orange ;
            text-decoration: none;

        }
        .nav-link {
             color: orange ;
        }
        #foot{
            margin-top:80vh;
             margin-left: 80vh;
        }
        #triplle_Button{
             margin-top:30px ;
             /* padding-right :150px ; */
        }

        #contenu-util{

             display:none;
        }
        #contenu-comm{

            display:none;
        }
        #util-1-2{
            margin-left: 20% ;
        }
        #util-1{
             margin-right:40px ;
             margin-left:40px;

        }
        #util-1-1{
            padding-right:70px ;
        }

        footer{
               margin-top : 56vh
           }
        li{
             list-style-type:none ;
        }

    </style>
</div>


    {{-- <body >
        class="d-flex h-100 text-center text-bg-dark" --}}



      <div class="container" id="user" >
           <font color="orange"> {{ Auth::user()->name }}</font>   - Bienvenue sur B-Livre , choissisez la bibliothèque que vous souhaitez consulter :
      </div>

    <div class="text-center" id="tripple_Button" class="magie">

        <button  id="communaute" style="margin-right:80px ;" class="btn btn-dark"  >Les livres de la communautés B-Livre </button>
        <button  id="utilisateur"  class="btn btn-dark"  > Les livres  ajouté  par nos utilisateurs</button><br><br>
        <button  id="utilisateur"  class="btn btn-dark"  ><a href="{{ route('livre.publication',[
                'userId' => $userId ]) }}">Découvrez la magie de B-Livre</a></button>

   </div><br><br>

     <main id='contenu'  >
        <div id="contenant">
                    <div id='contenu-util'>

                        <div class="btn btn-outline-warning  d-flex align-items-center" role="warning" id="util-1" >
                        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                        <div>
                            <h4 id="util-1-1">Découvrez une bibliothèque vivante où chaque livre ajouté par nos utilisateurs raconte une histoire unique,
                                invitant chacun à plonger dans un univers de découvertes et d'émotions</h4>
                        </div>
                        </div><br>
                                <h5 class="text-center">Liser selon vos envie</h5>
                    <ul id="util-1-2">
                        <li> <a href="{{ route('livre.lecture',['slug'=>'Fiction']) }}">Fiction </a></li>
                        <li> <a href="{{ route('livre.lecture',['slug'=>'Aventure']) }}">Aventure </a></li>
                        <li> <a href="{{ route('livre.lecture',['slug'=>'Fantastique']) }}">Fantastique</a></li>
                        <li> <a href="{{ route('livre.lecture',['slug'=>'Policier']) }}">Policier </a></li>
                        <li><a href="{{ route('livre.lecture',['slug'=>'Science-fiction']) }}">Science-fiction</a></li>

                    </ul>

                </div>

                <div id='contenu-comm'>

                        <div class="btn btn-outline-danger d-flex align-items-center" role="danger" id="util-1" >
                        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                        <div>
                            <h4 id="util-1-1">page toujours en cours de préparation ! .
                                </h4>
                        </div>
                        </div>



                </div>


        </div>




     </main>









  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script type="text/javascript">


                // $('button').click(function(){
                //         $('this').addClass('btn btn-info');

                // })
        let currentButton = null;

        $('button').click(function() {
            if (currentButton) {
                currentButton.removeClass("btn btn-info").addClass("btn btn-dark");
            }
            $(this).removeClass("btn btn-dark").addClass("btn btn-info");
            currentButton = $(this);
        });


            $('#utilisateur').click(function(){
                        $('#contenu-comm').fadeOut(2000)  ;
                        $('#contenu-util').fadeIn(2000)  ;
            });

            $('#communaute').click(function(){

                        $('#contenu-util').fadeOut(2000)  ;

                        $('#contenu-comm').fadeIn(2000)  ;

            });

            // $('#magic').click(function(){
            //         $('#communaute').hide() ;
            //         $('#utilisateur').hide() ;
            //         $('#contenant').hide() ;
            //         $('#magic').hide() ;
            //         $("#circleButtons").show();
            // })


   </script>
@endsection






































