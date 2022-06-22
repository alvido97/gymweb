@extends('layouts.app')
@section('content')
    <!-- Choseus Section Begin -->
    <section class="chooseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title  mt-5">
                        <h2>{!! $workout->name !!}</h2>
                        <p>{!! $workout->type !!}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="{{ asset('images/icons/chose-icon-1.png') }}" alt="">
                        <h5>Support 24/24</h5>
                        <p>One of the best ways to make a great vacation quickly horrible is to choose the wrong
                            accommodations for your trip. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="{{ asset('images/icons/chose-icon-2.png') }}" alt="">
                        <h5>Our trainer</h5>
                        <p>If you are an infrequent traveler you may need some tips to keep the wife happy while you are
                            jet setting around the globe.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="{{ asset('images/icons/chose-icon-3.png') }}" alt="">
                        <h5>Personalized sessions</h5>
                        <p>To succeed at any endeavor, you must stay the course…no matter what the cost! Here are some
                            surefire tips to help you on your journey.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="{{ asset('images/icons/chose-icon-4.png') }}" alt="">
                        <h5>Our equipment</h5>
                        <p>Rugby and Stratford-upon-Avon. Additionally, there are many things to see and do in and
                            around Coventry itself.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="{{ asset('images/icons/chose-icon-5.png') }}" alt="">
                        <h5>Classes daily</h5>
                        <p>We would just not have the will in us to go about our daily lives. Its motivation that helps
                            us get through the most mundane.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="{{ asset('images/icons/chose-icon-6.png') }}" alt="">
                        <h5>Focus on your health</h5>
                        <p>But there is only so far we can go within the constraints of a family budget in building the
                            perfect telescopic operation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Choseus Section End -->

    <!-- Cta Section Begin -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-text">
                        <h3>Delete Warnning</h3>
                        <p>When you delete the excersize the whole workouts are will be deleted</p>
                    </div>
                    <form class="patientDeleteForm" action="{{ route('account.workout.destroy', $workout->id) }}"
                        method="POST">
                        @csrf
                        @method('delete')
                        {{-- <input type="hidden" value="{{ $workout->id }}"> --}}
                        <button type="submit" class="btn-danger primary-btn cta-btn">Delete</button>
                        <input type="hidden" id="workoutId" value="{{ $workout->id }}">

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Cta Section End -->
@endsection
@section('script')
    <script>
        $(".patientDeleteForm").submit(function(e) {
            e.preventDefault();
            var workoutId = $('#workoutId').val();
            var action = $(this).attr('action');

            if (confirm('Are you sure? You want to delete this record?')) {
                if (confirm('Last Warning! This will delete this record permently')) {
                    axios.delete(action, {
                            data: workoutId
                        })
                        .then(() => {
                            timeout();
                            alert('Successfully Deleted!')
                        }).catch(() => {
                            alert('Something went wrong!')
                        });
                }
            }
        });
    </script>
@endsection
