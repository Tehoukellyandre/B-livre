<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <h3 class="float-md-start mb-0">B-Livre</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0 @ifactive" aria-current="page" href="{{route('livre.acceuil')}}">Accueil</a>
          @guest()
            <a class="nav-link fw-bold py-1 px-0" href="{{ route('Auth.inscription') }}">Inscription</a>
            <a class="nav-link fw-bold py-1 px-0" href="{{ route('Auth.connexion') }}">Connexion</a>
          @endguest

          @auth()
              <form action="{{route('Auth.deconnexion') }}" method="post">
                  @method('delete')
                    @csrf
                    <button class="nav-link fw-bold py-1 px-0" > Deconnexion</button>
              </form>
          @endauth

        </nav>
      </div>
    </header>
</div>
