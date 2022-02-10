
<!-- Pagination -->
@if ($paginator->hasPages())
  <nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">

    @if ($paginator->onFirstPage())
      <li class="page-item disabled">
        <span class="page-link" aria-label="Prev">
          <i class="ti-angle-left"></i>
        </span>
      </li>
    @else
      <li class="page-item">
        <a href="{{ $paginator->previousPageUrl() }}" class="page-link" aria-label="Prev">
          <i class="ti-angle-left"></i>
        </a>
      </li>
    @endif
    
    <li class="page-item active">
      <p class="page-info">{{ "Page " .$paginator->currentPage(). " of " .$paginator->lastPage() }}</p>
    </li>
    
    @if ($paginator->hasMorePages())
      <li class="page-item">
        <a href="{{ $paginator->nextPageUrl() }}" class="page-link" aria-label="Next">
          <i class="ti-angle-right"></i>
        </a>
      </li>
    @else
      <li class="page-item disabled">
        <span class="page-link" aria-label="Next">
          <i class="ti-angle-right"></i>
        </span>
      </li>
    @endif

    </ul>
  </nav>
@endif