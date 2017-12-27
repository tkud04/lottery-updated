 @if ($paginator->hasPages())
<nav aria-label="Clients">
  <ul class="pagination">
  	<?php
          #Previous Page Link
          $prevClass = "";
          if($paginator->onFirstPage()) $prevClass = "page-item disabled";
          else $prevClass = "page-item";
     ?>
    <li class="{{$prevClass}}">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
      {{-- Pagination Elements --}}
          <?php 
                           for($i = 1; $i < $totalPages; $i++):
                            $currentClass = "";
                           $p = $paginator->currentPage();
                           if($p == $i) $currentClass = "page-item active";
                          else $currentClass = "page-item";
                          
                          $url = $paginator->url($i); 
                         ?>
                   <li class="{{$currentClass}}"><a class="page-link" href="{{$url}}">{{$i}}</a></li>

      	<?php
           endfor;
          #Previous Page Link
          $nextClass = "";
          if($paginator->hasMorePages()) $nextClass = "page-item disabled";
          else $nextClass = "page-item";
     ?>
    <li class="{{$nextClass}}">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
@endif