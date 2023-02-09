@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('User List') }}</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr class="table-success">
                                <th scope="col">uuid</th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">dateReg</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->uuid}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at->format('d/m/Y H:i:s')}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection

