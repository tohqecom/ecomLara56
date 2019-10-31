@extends('admin::layouts.master')
@section('content')
    <div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">{{__('Dashboard')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{__('User')}}</li>
                </ol>
            </nav>
            <div class="col-sm-12">
                <h2>{{__('User List')}}<a class="float-right" href="{{route('admin.get.create.category')}}"><i class="fa fa-plus-circle"></i></a> </h2>
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Avatar</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if (isset($users))
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->avatar}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ route('admin.post.edit.category', $user->id) }}">{{__('Edit')}}</a>
                                        <a class="btn btn-danger btn-sm" href="{{ route('admin.post.action.category', ['delete', $user->id]) }}">{{__('Delete')}}</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @stop
