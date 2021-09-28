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
                    <h2>Edit New User</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('users.index') }}"> retour</a>
                </div>
            </div>
        </div>


        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
               @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
               @endforeach
            </ul>
          </div>
        @endif


        {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}

<div class="row">
    <div class="grid grid-cols-2 gap-1">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>prenom:</strong>
{!! Form::text('prenom', null, array('placeholder' => 'prenom','class' => 'form-control')) !!}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">
<strong>Name:</strong>
{!! Form::text('nom', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
</div>
</div>
    </div>
    <div class="grid grid-cols-2 gap-1">
<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>nationalite</strong>
        {!! Form::text('nationalite', null, array('placeholder' => 'nationalite','class' => 'form-control')) !!}
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">
                    <strong>adresse</strong>
                    {!! Form::text('adresse', null, array('placeholder' => 'adresse','class' => 'form-control')) !!}
                    </div>
                    </div>
        </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">

                <strong>telephone:</strong>
                {!! Form::text('telephone', null, array('placeholder' => 'telephone','class' => 'form-control')) !!}
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
<strong>Email:</strong>
{!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Password:</strong>
{!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Confirm Password:</strong>
{!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">

</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
{!! Form::close() !!}

        <p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>


       </div>
    </div>
</x-app-layout>
