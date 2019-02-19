<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Teams</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Teams</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <!-- <ul class="nav flex-column">
              {{-- @foreach ($lastFive as $oneMovie)

              <li class="nav-item">
                <a class="nav-link active" href="{{ route('single-movie', ['id' => $oneMovie->id]) }}">
                  <span data-feather="home"></span>
                  {{$oneMovie->title}} <span class="sr-only">(current)</span>
                </a>
              </li>
              <!-- @endforeach --}} -->
            </ul> -->

          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <ul>
              @foreach ($teams as $team)

              <li>
                <a href="./teams/{{$team->id}}"><h1>{{$team->name}}</h1></a>
              </li>

              @endforeach
            </ul>
          </div>
        </main>
      </div>
    </div>


  </body>
</html>