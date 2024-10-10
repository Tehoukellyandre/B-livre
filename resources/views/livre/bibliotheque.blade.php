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
        #paire_Button{
             margin-top:30px ;
             /* padding-right :150px ; */
        }
        #magie{
             margin-right:65px ;
        }
        #util{

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
        #user{
            margin-left: 57vh ;
        }
        footer{
               margin-top : 56vh
           }
    </style>
</div>


    {{-- <body >
        class="d-flex h-100 text-center text-bg-dark" --}}



      <div class="container" id="user">
           <font color="orange"> {{ Auth::user()->name }}</font>   - Bienvenue sur B-Livre , choissisez la bibliothèque que vous souhaitez consulter :
      </div>

    <div class="text-center" id="paire_Button">

        <button  id="communaute" style="margin-right:80px ;" class="btn btn-dark">Les livre de la communautés B-Livre </button>
        <button  id="utilisateur"  class="btn btn-dark"> Les livres  ajouté  par nos utilisateurs</button><br><br>
        <button id="magie" class="btn btn-secondary"> <a href="{{ route('livre.magie') }}">Découvrez la magie de B-Livre</a></button>

   </div><br><br>

     <main id='contenu' >
            <div id='util'>

                 <div class="alert alert-primary d-flex align-items-center" role="alert" id="util-1" >
                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                    <div>
                        <h4 id="util-1-1">Découvrez une bibliothèque vivante où chaque livre ajouté par nos utilisateurs raconte une histoire unique,
                            invitant chacun à plonger dans un univers de découvertes et d'émotions</h4>
                    </div>
                  </div>

                <ul id="util-1-2">
                    <li> <a href="">Fiction </a></li>
                    <li> <a href="">Aventure </a>/li>
                    <li> <a href="">Fantastique</a></li>
                    <li> <a href="">Policier </a></li>
                    <li><a href="">Science-fiction</a></li>

                </ul>

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
                        $('#util').fadeIn(2000)  ;
            });


   </script>
@endsection






































