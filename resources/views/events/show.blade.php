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


    <div class="container py-12  ">




          <div class="card mb-4  text-dark bg-warning shadow"  >

            <div id="carouselExampleIndicators" class="carousel slide "  data-bs-ride="carousel">
                <div class="carousel-indicators" >
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner ratio" style="--bs-aspect-ratio: 34%;border-radius:150px;">

                  <div class="carousel-item active">
                    <img src="{{asset('public/images/'.$event->image)}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('public/images/'.$event->image)}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('public/images/'.$event->image)}}" class="d-block w-100" alt="...">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

              </div>
            </div>
            <div class="card-body  text-white h-10000 bg-white" style="border-radius:50px;" >
                <hr>
                <div class="card-header bg-warning text-white shadow"  style="border-radius:30px;">

              <h1 class="card-title " style="text-align: center;">{{$event->libelle}}</h1>
            </div>
              <hr>

               <div class="card-body1 bg-white text-dark shadow">
              <p class="card-text ">{{$event->description}}</p>
            </div>
              <hr>
              <h5 class="card-text text-success"> Date :{{$event->date_activite}}</h5>
              <hr>
              <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('events.index') }}" style="z-index: 99"> Back</a>

            </div>
            </div>

        </div>

       </div>

    </div>
</x-app-layout>
