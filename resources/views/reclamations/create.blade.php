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
        <h1>Faire une reclammation</h1>
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


        <form action="{{route('reclamations.store')}}" method="POST">
            @csrf
<br>

<div class="form-group">
    <label for="">evaluation</label><br><br>

    <select name="evaluation_id" id="">
        @foreach($evaluations as $evaluation)
        
        <option value="{{$evaluation->id}}">{{$evaluation->libelle}}
        </option>
        
        @endforeach
    </select>
    @error('name')
    <small class="text-danger">{{$message}}</small>

    @enderror

</div>
<br>
<div class="form-group">
    <label for="">matiere</label><br><br>

    <input type="hidden" value="{{ Auth::id() }}" name="user_id">

    </div>
    <br>
    <div class="form-group">
    <label for="">Motif</label>

    <input type="text"  class="form-control" name="motif" placeholder="Renseignez le motif">
    @error('name')
    <small class="text-danger">{{$message}}</small>

    @enderror

</div>

<br>


        <br>
        <input type="submit" value="Soumettre" class="btn btn-success">
        </form>
       </div>
    </div>
</x-app-layout>
