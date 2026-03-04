 <form action="{{ $href }}" method="post" class="d-inline">
     @csrf
     @method('DELETE')
     <button type="submit" class="btn btn-danger btn-sm" title="Delete"
         onclick="return confirm('{{ __('keywords.are_you_sure') }}')"><i class="fa fa-trash"></i></button>
 </form>
