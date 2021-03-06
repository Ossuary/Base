@extends('admin.layout')

@section('content')



    <div id="admin-newsletter-content">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Membros</h3>
                        </div>
                        <div class="panel-body">

                            <table id="members-table" class="table table-striped table-bordered table-responsive table-hover" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allUsers as $member)
                                        <tr>
                                            <td>{{ $member->name }}</td>
                                            <td>{{ $member->email }}</td>
                                            <td style="text-align: center;">
                                                {!! Form::open(['class'=>'delete-member','method' => 'DELETE', 'route' => ['admin.newsletter.destroy', $member['id']]]) !!}
                                                    {!! Form::submit('x', ['class' => 'btn btn-danger btn-xs']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        window.translations = {
            areYouSure: '{{ trans('language.a') }}'
        };
    </script>

@stop