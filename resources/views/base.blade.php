@include('partial._header')

    <div class="container">
          @include('partial._flash')
          @include('partial._errors')
    </div>
    @yield('content')



     <div  class="text-center">
         @include('partial._footer')
     </div>

</body>
</html>
