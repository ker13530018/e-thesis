@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Room
    </h1>
</section>

<div class="content">
    @include('adminlte-templates::common.errors')

    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                {!! Form::model($room, ['id' => 'room-manual-form' , 'route' => ['rooms.saveManual', $room->id],
                'method' => 'put']) !!}

                @include('rooms.fields_manual')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection