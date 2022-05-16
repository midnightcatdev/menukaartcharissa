@extends('layouts.app')
@section('content')

    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th class="col-lg-2">Gebruikers naam</th>
            <th class="col-lg-2">Rol</th>
            <th class="col-lg-2">Rol naam</th>
            <th class="col-lg-2"> Beheerfuncties</th>
        </tr>
        </thead>
        <tbody>

        {{--        {{ $role }}--}}

        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>
                    {{ $user->role_id }}
                </td>
                <td>
                    {{ $user->role->role ?? 'geen rol'}}
                </td>
                <td class="me-1">
                    <a href="{{ route('user.edit',[request()->restaurant, $user]) }}" class="btn btn-success"
                       type="edit">Bewerken</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('user.create',[request()->restaurant, $user]) }}" class="btn btn-success mt-0 m-2"> Nieuwe
        gebruiker </a>
    {{--    <div> {{ $user->links() }} </div>--}}
@endsection
