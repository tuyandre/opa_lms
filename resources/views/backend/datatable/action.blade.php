@can($label.'_view')
    <a href="{{ route('admin.questions.show',[$value]) }}"
       class="btn btn-xs btn-primary"><i class="icon-eye"></i></a>
@endcan
@can($label.'_edit')
    <a href="{{ route('admin.questions.edit',[$value]) }}"
       class="btn btn-xs btn-info"><i class="icon-pencil"></i></a>
@endcan
@can($label.'_delete')
    <a data-method="delete" data-trans-button-cancel="Cancel"
       data-trans-button-confirm="Delete" data-trans-title="Are you sure?"
       class="btn btn-xs btn-danger" style="cursor:pointer;"
       onclick="$(this).find('form').submit();">
        <i class="fa fa-trash"
           data-toggle="tooltip"
           data-placement="top" title=""
           data-original-title="Delete"></i>
        <form action="{{route('admin.questions.destroy',[$label=>$value])}}"
              method="POST" name="delete_item" style="display:none">
            @csrf
            {{method_field('DELETE')}}
        </form>
    </a>
@endcan
{!! $view_data !!}