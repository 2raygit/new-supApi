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
        <div class="center_div">

            <br>
            <h1>Creer nouvelle evaluation</h1>
            @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


            <form action="{{ route('evaluations.store') }}" method="POST">
                @csrf
    <div class="form-group">
        <label for="">Date</label>
        <input type="date"   class="form-control" name="date_evaluation" placeholder="date de l'evaluation">
        @error('name')
        <small class="text-danger">{{$message}}</small>

        @enderror

    </div>
    <br>
    <div class="form-group">
        <label for="">libelle</label>
        <input type="text"  class="form-control" name="libelle" placeholder="libelle">
        @error('name')
        <small class="text-danger">{{$message}}</small>

        @enderror

    </div>
    <br>
    <div class="form-group">
        <label for="">Type</label>

        <input type="text"  class="form-control" name="type" placeholder="type de l'evaluation">
        @error('name')
        <small class="text-danger">{{$message}}</small>

        @enderror

    </div>
    <br>
    <div class="form-group">
        <label for="">Matiere</label>

        <select name="matiere_id" id="">
        @foreach($matieres as $matiere)
        <option value="{{$matiere->id}}">{{$matiere->libelle}}
        </option>
        @endforeach
    </select>
    @error('name')
    <small class="text-danger">{{$message}}</small>

    @enderror
    </div>
    <br>
    <div class="form-group">

        <label for="">Etudiant</label>
        <select name="user_id" id="">
        @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->prenom}}{{$user->nom}}
        </option>
        
        @endforeach
    </select>
    @error('name')
    <small class="text-danger">{{$message}}</small>

    @enderror
    </div>
    <br>





            <input type="submit" value="Ajouter" class="btn btn-success">
            <br>
            </form>
        </div>
    </div>
</x-app-layout>
