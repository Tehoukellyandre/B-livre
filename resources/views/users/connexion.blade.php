
@extends('base')

@section('title', 'Connexion à B-livre')



@section('content')
 <br>
        <div class="container" >
            <form action="" method= "post">
                @csrf

                <div class="form-group">
                    <label for="mail"  class="form-label"> Email: <span><font  color="red">*</font></span></label>
                    <input type="email"  class="form-control" id="mail" name="email"  required="required">
                </div><br><br>
                <div class="form-group">
                    <label for="mdp"  class="form-label">Mot de passe: <span><font  color="red">*</font></span></label>
                    <input type="password"  class="form-control" id="mdp" name="password" required="required">
                </div><br><br>

                 <input type="submit" name="submit" class="btn btn-success">
        </div>



        <div>
            <style>
               footer{
                   margin-top : 47vh
               }
            </style>
      </div>

@endsection
