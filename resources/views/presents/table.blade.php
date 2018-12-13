<table class="table table-responsive" id="presents-table">
    <thead>
        <tr>
            <th>Date</th>
        <th>Sequence Id</th>
        <th>Sequence Description</th>
        <th>Room Id</th>
        <th>Room Name</th>
        <th>Thesis Id</th>
            <th >Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($presents as $present)
        <tr>
            <td>{!! $present->date !!}</td>
            <td>{!! $present->sequence_id !!}</td>
            <td>{!! $present->sequence->description !!}</td>
            <td>{!! $present->room_id !!}</td>
            <td>{!! $present->room->name !!}</td>
            <td>{!! $present->thesis_id !!}</td>
            <td>
                {!! Form::open(['route' => ['presents.destroy', $present->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('presents.show', [$present->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('presents.edit', [$present->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


@section('scripts')
<script>
$(document).ready( function () {
    $('#presents-table').DataTable();
} );

</script>
@endsection