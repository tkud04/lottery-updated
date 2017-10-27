@include("html-header")
@include("nav")
@if($com == "1")
@include("apply-add")
@elseif($com == "2")
@include("apply-add-2")
@endif
@include("footer")
@include("html-footer")