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
        <h1>Ajouter Matiere</h1>
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


        <form action="{{ route('matieres.store') }}" method="POST">
            @csrf
<br>

<div class="form-group">
    <label for="">Nom de la matiere</label><br><br>

    <input type="text"  class="form-control" name="libelle" placeholder="nouvelle matiere">
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
