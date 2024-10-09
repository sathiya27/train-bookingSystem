
@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="top-text header-text">
            <h2 style="margin-bottom: 20px;">Train Ticket Reservation</h2>
            <h6 style="margin-bottom: 45px;">Book your ticket now, Explore Malaysia</h6>
          </div>
        </div>
        <div class="col-lg-12">
          <form id="search-form" name="gs" action="{{route('trains.index')}}" method="GET" role="search">
            <div class="row">
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                      <select name="origin" aria-label="Area" id="" onchange="this.form.click()" required>
                        <option value="" disabled selected>Select Origin</option>
                        <option value="Johor">Johor</option>
                        <option value="Kelantan">Kelantan</option>
                        <option value="Kuala Lumpur">Kuala Lumpur</option>
                        <option value="Melaka">Melaka</option>
                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                        <option value="Pahang">Pahang</option>
                        <option value="Penang">Penang</option>
                        <option value="Perak">Perak</option>
                        <option value="Putrajaya">Putrajaya</option>
                        <option value="Selangor">Selangor</option>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                      <select name="destination" aria-label="Area" id="chooseDestination" onchange="this.form.click()" required>
                        <option value="" disabled selected>Select Destination</option>
                        <option value="Johor">Johor</option>
                        <option value="Kelantan">Kelantan</option>
                        <option value="Kuala Lumpur">Kuala Lumpur</option>
                        <option value="Melaka">Melaka</option>
                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                        <option value="Pahang">Pahang</option>
                        <option value="Penang">Penang</option>
                        <option value="Perak">Perak</option>
                        <option value="Putrajaya">Putrajaya</option>
                        <option value="Selangor">Selangor</option>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-4 align-self-center">
                <fieldset class="row align-items-center">
                  <div class="col-auto">
                      <label for="depatureDate" class="col-form-label">Departure Date</label>
                  </div>
                  <div class="col-auto">
                      <input type="date" name="depatureDate" class="form-control" id="depatureDate" autocomplete="on" required>
                  </div>
                </fieldset>
              </div>
              <div class="col-lg-2">                        
                  <fieldset>
                      <button class="main-button"><i class="fa fa-search"></i></button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  <script>

  const today = new Date().toISOString().split('T')[0];
      document.getElementById('depatureDate').setAttribute('min', today);
  </script>
@endsection
