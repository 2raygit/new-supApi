<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <img src="" alt=""> {{ Auth::user()->prenom }} {{ Auth::user()->nom }}
        </h2>
    </x-slot>
    <style>
        .card-title{
            color: rgb(228, 239, 241);
        }
        .card-text{
            color: rgb(20, 13, 3);

        }
    </style>

    <div class="container-fluid py-12">
        @if (Auth::user()->hasRole('ADMIN'))
        <div class="row align-items-start">
        <div class="col">
            <a href="{{route('events.create')}}" class="btn btn-primary shadow">Nouvel evenement</a>
            <br><br>
          </div>

        <div class="col">
    <a href="{{route('categories.create')}}" class="btn btn-primary shadow">Nouvelle categorie d'evenement</a>
      <br><br>
        </div>
        @endif




        <div class="row row-cols-1 row-cols-md-5 pl-7 rounded g-1">
            @foreach ($events as $event)
            <div class="col ">

                <div class="card h-85 bg-primary text-white card-sm  " style="width: 17rem; border-radius:40px;box-shadow: 0 5px 20px 4px rgba(0, 0, 0, 0.3);">
                <img src="{{asset('public/images/'.$event->image)}}" class="card-img-top " style=" border-radius:40px;" alt="{{$event->libelle}}">
                <div class="card-body" >
                  <h3 class="card-title">{{$event->libelle}}</h3>
                  <h4>{{$event->category}}</h4>
                  <p class="card-text">{{$event->date_activite}}</p>
                  <a href="{{route('events.show',$event->id)}}" class="btn btn-warning btn-sm shadow">Voir detail</a>
                  @if (Auth::user()->hasRole('ADMIN'))
                  <a href="{{route('events.edit',$event->id)}}" class="btn btn-success btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                  </svg></a>
                    <form  method="POST" action="{{route('events.destroy',$event->id)}}">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger  btn-sm shadow" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg></button>
                </form>


                  @endif
                </div>

              </div>

            </div>
            @endforeach
            <div class="d-flex justify-content-center">
                {!! $events->links() !!}
            </div>
        </div>

    </div>
</x-app-layout>
