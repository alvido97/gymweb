@extends('layouts.app')
@section('content')
    <section class="chooseus-section">
        <div class="account-sec">
            <div class="row no-gutters">

                <div class="col-md-3 col-lg-3">
                    @if (auth()->user()->gender == 1)
                        {
                        <img class="account-img" src="{{ asset('images/men.webp') }}">
                        }
                    @else{
                        <img class="account-img" src="{{ asset('images/women.webp') }}">
                        }
                    @endif
                </div>


                <div class="col-md-9 col-lg-9">

                    <div class="d-flex flex-column mt-4">

                        <div class="d-flex flex-row justify-content-between align-items-center p-4 bg-dark text-white">

                            <h3 class="display-5">{{ Str::upper(auth()->user()->name) }}
                                <a href="javascript:void" onclick="$('#logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                            </h3>
                            <p>{{ auth()->user()->created_at }}</p>
                        </div>

                        <div class="d-flex flex-row text-white">
                            <div class="p-4 bg-primary text-center skill-blockz">
                                <h4>90%</h4>
                                <h6>sample</h6>
                            </div>
                            <div class="p-3 bg-success text-center skill-blockz">
                                <h4>70%</h4>
                                <h6>sample</h6>
                            </div>
                            <div class="p-3 bg-warning text-center skill-blockz">
                                <h4>80%</h4>
                                <h6>sample</h6>
                            </div>
                            <button onclick="openForm()">
                                <div class="p-3 bg-danger text-center skill-blockz">
                                    <h4>+</h4>
                                    <h6>Add Workout</h6>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="form-popup" id="myForm">
            <form action="{{ route('account.workout.store') }}" class="form-container" method="POST">
                @csrf
                <h1>New Workout</h1>
                <input type="hidden" value="{{ auth()->user()->id }}" name="userid">

                <input type="text" placeholder="Enter Workout Name" class="@error('name') is-invalid @enderror" name="name"
                    required>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="text" placeholder="Enter Workout Type(ex- abs,chest,cardio)" name="type" required>
                <input type="text" placeholder="Enter Workout Counting type(ex-time,count)" name="counttype" required>
                <button type="submit" class="btn">Submit</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
    </section>

    <!-- Add worlout form -->
    <section>
        <div class="form-popup" id="AddRouteForm">
            <form action="{{ route('account.workout.store') }}" class="form-container" method="POST">
                @csrf
                <h1>New Workout</h1>
                <input type="hidden" value="{{ auth()->user()->id }}" name="userid">
                <input type="text" placeholder="Enter Workout Name" name="name" required>
                <input type="text" placeholder="Enter Workout Type(ex- abs,chest,cardio)" name="type" required>
                <input type="text" placeholder="Enter Workout Counting type(ex-time,count)" name="counttype" required>
                <button type="submit" class="btn">Submit</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
    </section>

    <!-- Choseus Section Begin -->
    <section class="chooseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Workout List </h2>
                        <p>Our sport experts and latest sports equipment are the winning combination.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <ol class="list-group list-group-numbered">
                    @if ($workouts->isEmpty())
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold"> Empty </div>
                                Empty
                            </div>
                        </li>
                    @endif

                    @foreach ($workouts as $workout)
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">{!! $workout->name !!} </div>
                                {!! $workout->type !!}
                            </div>

                            <span class="mt-3">
                                <button class="iconbtn" onclick="openForm()"><i class="fa fa-plus"></i></button>

                                <a class="iconbtn ml-5" href="{{ route('account.workout.show', $workout->id) }}"><i
                                        class="fa fa-home"></i></a>

                                {{-- <form action=" {{ route('account.workout.show') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $workout->id }}">
                                        <button class="iconbtn ml-5"></button>
                                    </form> --}}

                            </span>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>
    <!-- Choseus Section End -->

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }

        function openForm() {
            document.getElementById("AddRouteForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("AddRouteForm").style.display = "none";
        }
    </script>
@endsection
