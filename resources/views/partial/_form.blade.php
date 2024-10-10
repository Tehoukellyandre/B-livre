

<style>
       a{
          color:orange ;
          text-decoration: none ;
       }

</style>
<div class="container">
    <form action="" method="POST">
        @csrf

        

        <button class="btn btn-outline-warning"> <a href="{{ route('livre.publication',[ 'userId'=> $userId  ]) }}"> Voir mes publications</a></button>
        <br><br>
        <div class="form-group">
            <label for="titre"  class="form-label">Titre:  <span><font  color="red">*</font></span></label>
            <input type="text"  class="form-control" id="titre" name="title" required="required" value="{{ old('title',$livre->title  ) }}">

        </div><br><br>
        <div class="form-group">
            <label for="auteur"  class="form-label">Auteur: <span><font  color="red">*</font></span></label>
            <input type="text"  class="form-control" id="auteur" name="auteur" required="required"  value="{{ old('auteur',$livre->auteur ) }}">

        </div><br><br>
        <div class="form-group">
            <label for="date_pub"  class="form-label">Date de publication: <span><font  color="red">*</font></span></label>
            <input type="datetime"  class="form-control" id="date_pub" name="date_pub" required="required" value="{{ old('date_pub',$livre->date_pub  ) }}">

        </div><br><br>
        <div class="form-group">
            <label for="genre"  class="form-label"> Genre: <span><font  color="red">*</font></span></label>
            <input type="text"  class="form-control" id="genre" name="genre"  required="required" value="{{ old('genre',$livre->genre  ) }}">

        </div><br><br>
        {{-- <div class="form-group">
            <label for="mdp"  class="form-label">: <span><font  color="red">*</font></span></label>
            <input type="password"  class="form-control" id="mdp" name="password" required="required">
        </div><br><br> --}}
         <button   type="submit" class="btn btn-success">@if($livre->id)
                                                                 Modifier Livre
                                                         @else
                                                          Ajouter Livre
                                                         @endif
         </button>


    </form>

  </div>
