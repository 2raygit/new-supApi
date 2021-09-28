<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->prenom }} {{ Auth::user()->nom }}
        </h2>
    </x-slot>
    <style>
    

    }
    </style>

    <div class="container-fluid py-12">
        <div class="row align-items-start">
            <div class="col-4">

            </div>
            <div class="col-6">
                <h1>Creer un evenement</h1>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('users.index') }}"> retour</a>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>prenom:</strong>
                    {{ $user->prenom}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom:</strong>
                    {{ $user->nom}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $user->email }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adresse</strong>
                    {{ $user->adresse }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nationalite</strong>
                    {{ $user->nationalite }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>telephone:</strong>
                    {{ $user->telephone }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Roles:</strong>
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
