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
<br><br>

       <div class="center_div">



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


        <form action="{{ route('events.update',$event->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 gap-1">
<div class="form-group">
    <label for="">Date de l'activite</label>
    <input type="datetime-local"   class="form-control" name="date_activite" placeholder="date de l'activite">
    @error('name')
    <small class="text-danger">{{$message}}</small>

    @enderror

</div>

<div class="form-group">
    <label for="">libelle</label>
    <input type="text"  class="form-control" name="libelle" placeholder="libelle">
    @error('name')
    <small class="text-danger">{{$message}}</small>

    @enderror

</div>
            </div>
<br>
<div class="form-group">


    <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control"  name="description" rows="3"></textarea>
    @error('name')
    <small class="text-danger">{{$message}}</small>

    @enderror

</div>
<br>
<div class="grid grid-cols-2 gap-1">
<div class="form-group">
    <label for="">Categorie</label>

    <input type="number"   class="form-control" name="category_id"  placeholder="categorie_id" >
    @error('name')
    <small class="text-danger">{{$message}}</small>

    @enderror

</div>

<div class="form-group">

    <label for="">User_id</label>
    <input type="number"  class="form-control" name="user_id"  placeholder="user_id">
    @error('name')
    <small class="text-danger">{{$message}}</small>

    @enderror

</div>
</div>
<br>
<div class="form-group">
    <label for="">image</label>
    <Input   id = "uploader" class="form-control" name = "image" type = "file"  value="{{$event->image}}">
    @error('name')
    <small class="text-danger">{{$message}}</small>

    @enderror

<br>
</div>





        <input type="submit" value="Enregistrer" class="btn btn-success">
        </form>


    </div>
</x-app-layout>
