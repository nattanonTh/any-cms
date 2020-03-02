<div class="row">
    <div class="col-xs-12">
        @if($view)
            <div class="btn-group" role="group">
                <a type="button" href="{!! $view !!}" target="_blank" class="btn btn-secondary">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
            </div>
        @endif
        @if($edit)
            <div class="btn-group" role="group">
                <a type="button" href="{!! $edit !!}" class="btn btn-secondary">
                    <i class="fa fa-edit" aria-hidden="true"></i>
                </a>
            </div>
        @endif
        @if($delete)
            <div class="btn-group" role="group">
                <form action="{{ $delete }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" href="#" class="btn btn-secondary delete-btn">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        @endif
    </div>
</div>
