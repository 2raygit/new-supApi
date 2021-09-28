<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->prenom }} {{ Auth::user()->nom }}
        </h2>
    </x-slot>
    <style>
    .center_div{

        margin: 0 auto;
        width:80% /* value of your choice which suits your alignment */

    }
    .container{
        height: 20px;
    }
    </style>

    <div class="container py-12">
        <div class="row align-items-start">
            <div class="col-4">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('events.index') }}"> Back</a>

                </div>
            </div>
            <div class="col-6">
                <h1>Creer un evenement</h1>
            </div>
        </div>


       <div class="center_div">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Role Management</h2>
                </div>
                <div class="pull-right">
                @can('role-create')
                    <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
                    @endcan
                </div>
            </div>
        </div>


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif


        <table class="table table-bordered">
          <tr>
             <th>No</th>
             <th>Name</th>
             <th width="280px">Action</th>
          </tr>
            @foreach ($roles as $key => $role)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                    @can('role-edit')
                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                    @endcan
                    @can('role-delete')
                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan
                </td>
            </tr>
            @endforeach
        </table>


        {!! $roles->render() !!}


        <p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>


       </div>
    </div>
</x-app-layout>
