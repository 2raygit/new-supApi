<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ Auth::user()->prenom }} {{ Auth::user()->nom }}
        </h2>
    </x-slot>

<style>
    .n{
        color: red;
        font: bold;
    }
    .photo{
      margin-left:-40px;
    }

</style>

    <div class="container py-12">



        <div class="row align-items-start">

            @if (Auth::user()->hasRole('ADMIN'))
            <div class="col">
                <a href="{{route('evaluations.create')}}" class="btn btn-primary shadow">Nouvelle eveluation</a>
                <br><br>
            </div>
            <div class="col">
                <a href="{{route('notes.create')}}" class="btn btn-primary shadow">Nouvelle note</a>
                <br><br>
            </div>
            <div class="col">
                <a href="{{route('matieres.create')}}" class="btn btn-primary shadow">Nouvelle matiere</a>
                <br><br>
            </div>
            <div class="col">
                <a href="{{route('users.index')}}" class="btn btn-primary shadow">Nouvel utilisateur</a>
                <br><br>
            </div>
            @endif
          </div>




          <div class="card text-center shadow">
            <div class="card-header">
              <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                  <a class="nav-link " href="{{route('profil')}}">Notes</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link  shadow active" href="{{route('profildetail')}}">Mon Profil</a>
                </li>


              </ul>
            </div>
            <div class="card-body shadow">
              <h5 class="card-title">Infos utilisateur</h5>
              <div class="card border-primary mb-3" >
                <div class="photo">
                    <img src="/public/images/icon.png" alt=""  style="height: 60px; margin-left:560px;">

                </div>
                <div class="card-body text-primary shadow">
                    <ul class="list-group shadow">

                        <li class="list-group-item"><h3>Prenom:{{ Auth::user()->prenom }}</h3></li>
                        <li class="list-group-item"><h3>Nom:{{ Auth::user()->nom }}</h3></li>
                        <li class="list-group-item"><h3>Email:{{ Auth::user()->email }}</h3></li>
                        <li class="list-group-item"><h3>Telephone: {{ Auth::user()->telephone }}</h3></li>
                        <li class="list-group-item"><h3>Adresse: {{ Auth::user()->adresse }}</h3></li>
                        <li class="list-group-item"><h3>Nationnalite:{{ Auth::user()->nationalite }}</h3></li>


                      </ul>

                </div>



            </div>
          </div>

    </div>
</x-app-layout>

