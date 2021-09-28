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
            <div class="col">
                <a href="" class="btn btn-warning shadow">Reclamations</a>
                <br><br>
            </div>
            @endif
          </div>




          <div class="card text-center shadow">
            <div class="card-header">
              <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                  <a class="nav-link active shadow" href="{{route('profil')}}">Notes</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link " href="{{route('profildetail')}}">Mon Profil</a>
                </li>


              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title">Mes notes</h5>
              <table class="table table-light shadow" >
                <thead class="table-dark white-text"   >
                  <tr>
                    <th scope="col">Evaluation</th>
                    <th scope="col">Date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Matiere</th>
                    @if (Auth::user()->hasRole('ETUDIANT'))
                        <th scope="col">Note</th>
                    @endif
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($notes as $note)
                 <tr>
                    <th class="c">{{$note->evaluation->libelle}}</th>
                    <td>{{$note->evaluation->date_evaluation}}</td>
                    <td>{{$note->evaluation->type}}</td>
                    <td>{{$note->evaluation->matiere->libelle}}</td>
                    @if (Auth::user()->hasRole('ETUDIANT'))
                        <td class="n">{{$note->valeur}}</td>
                    @endif
                    @if (Auth::user()->hasRole('ETUDIANT'))
                        <td>
                            <a href="{{route('reclamations.create')}}" type="button" class="btn btn-warning btn-sm shadow" > Réclamer</a>
                        </td>
                    @endif
                    @if (Auth::user()->hasRole('ADMIN'))
                    <td>
                        <a type="button" class="btn btn-warning btn-sm shadow">Suprimer</a>
                    </td>
                    @endif
                  </tr>
                @endforeach
                </tbody>
              </table>


            </div>
          </div>

    </div>
</x-app-layout>

