

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->prenom }} {{ Auth::user()->nom }}
        </h2>
    </x-slot>
    <style>
    
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
                <h1>liste  des utilisateurs</h1>
            </div>
        </div>


       <div class="center_div">
           <div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">

</div>
<div class="pull-right">
<a class="btn btn-warning" href="{{ route('users.create') }}"> Creer nouvel utilisateur</a>
</div>
<br>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-light">
<thead class="table-dark" >
<th>Prenom</th>
<th>Nom</th>
<th>adresse</th>
<th>nationalite</th>
<th>telephone</th>
<th>Email</th>

<th width="280px">Action</th>
</thead>
@foreach ($users as $user)
<tr>

<td>{{ $user->prenom }}</td>
<td>{{ $user->nom }}</td>
<td>{{ $user->adresse }}</td>
<td>{{ $user->nationalite}}</td>
<td>{{ $user->telephone}}</td>
<td>{{ $user->email }}</td>

<td>


<a class="btn btn-warning" href="{{ route('users.show',$user->id) }}">voir</a>
<a class="btn btn-warning" href="{{ route('users.edit',$user->id) }}">editer</a>
{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
</td>
</tr>
@endforeach
</table>


       </div>
    </div>
</x-app-layout>
