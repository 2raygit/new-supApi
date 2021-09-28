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
        </style>
    <div class="container py-12">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('profil') }}"> Back</a>
        </div>
        <br>
       <div class="center_div">


        <h1>Ajouter Note</h1>
        @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> il ya un probleme avec votre saisi.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


        <form action="{{ route('notes.store') }}" method="POST">
            @csrf

<div class="form-group">
    <label for="">Etudiant</label>

    <select name="user_id" id="">
        @foreach($etudiants as $etudiant)
        @if (!$etudiant->hasRole('ETUDIANT'))
        <option value="{{$etudiant->id}}">{{$etudiant->prenom}}{{$etudiant->nom}}
        </option>
        @endif
        @endforeach
    </select>
    @error('name')
    <small class="text-danger">{{$message}}</small>

    @enderror

</div>
<br>
<div class="form-group">

    <label for="">Evaluation</label>
    <select name="evaluation_id" id="">
        @foreach($evaluations as $evaluation)
        @if (!$etudiant->hasRole('ETUDIANT'))
        <option value="{{$evaluation->id}}">{{$evaluation->libelle}}
        </option>
        @endif
        @endforeach
    </select>
    @error('name')
    <small class="text-danger">{{$message}}</small>

    @enderror

</div>
<br>
<div class="form-group">
    <label for="">Note</label>

    <input type="number"  class="form-control" name="valeur" placeholder="entrer la note">
    @error('name')
    <small class="text-danger">{{$message}}</small>

    @enderror

</div>
<br>



        <br>
        <input type="submit" value="Ajouter" class="btn btn-success">
        </form>
       </div>
    </div>
</x-app-layout>
