@include("html-header")
@include("nav")
@include("header")
<input type="hidden" id="ri" value="no">
<!--------- Input errors -------------->
                    @if (count($errors) > 0)
                          @include('input-errors', ["errors" => $errors])
                     @endif   
                     
@yield('content') 

@include("footer")
@include("html-footer")