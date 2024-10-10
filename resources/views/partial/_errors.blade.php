<ul>
      @foreach($errors->all() as $error )
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <li> {{ $error }} </li>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

      @endforeach
</ul>

