@extends('base')

@section('title', 'inscription à B-livre')



@section('content')

        <div class="container">
            <form action="" method= "post">
                @csrf
                <div class="form-group">
                    <label for="nom"  class="form-label">Nom:  <span><font  color="red">*</font></span></label>
                    <input type="text"  class="form-control" id="nom" name="name" required="required">
                </div><br><br>
                <div class="form-group">
                    <label for="mail"  class="form-label"> Email: <span><font  color="red">*</font></span></label>
                    <input type="email"  class="form-control" id="mail" name="email"  required="required">
                </div><br><br>
                <div class="form-group">
                    <label for="mdp"  class="form-label">Mot de passe: <span><font  color="red">*</font></span></label>
                    <input type="password"  class="form-control" id="mdp" name="password" required="required">
                </div><br><br>
                <div class="form-group">
                    <label for="cmdp"  class="form-label"> Confirmer Mot de passe: <span><font  color="red">*</font></span></label>
                    <input type="password"  class="form-control" id="cmdp" name="password_confirmation"  required="required">
                </div><br><br>

                 <input type="submit" name="submit" class="btn btn-success">
        </div>



        <div>
            <style>
               footer{
                   margin-top : 20vh
               }
            </style>
      </div>


@endsection
