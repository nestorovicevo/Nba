<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Team</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">

  <body>
  <@include('layouts.nav-bar')

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">

            </ul>

          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1>{{ $team->name}}</h1>
            <h2>{{ $team->email}}</h2>
            <h3>{{ $team->adress}}</h3>
            <h4>{{ $team->city}}</h4>
            <ul>
              @if (!empty($team->players))
                @foreach ( $team->players as $player)
              <li>
                  <p><a href="\players/{{$player->id}}">{{ $player->first_name . ' ' . $player->last_name }}</a></p>
              </li>
                @endforeach
              @endif
            </ul>
          </div>
          <div>


              <hr>
              <ul class="unstyled">
                @foreach ($team->comments as $comment)
                    <li>
                        <p>
                            {{ $comment->content }} by {{ $comment->user->name }}
                        </p>
                    </li>
                @endforeach
              </ul>
               <hr>

               <h2>Leave a comment</h2>

              <form method="POST" action="{{ route('team-comments', ['team_id' => $team->id]) }}">

                  {{ csrf_field() }}

                  <div class="form-group">
                      <label for="content">Content</label>
                      <textarea type="email" class="form-control" id="content" name="content"></textarea>
                      @include('messages.error', ['fieldTitle' => 'comment'])
                  </div>

                  @if($message = session('message'))
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                  @endif

                  <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </div>

              </form>




          </div>
        </main>
      </div>
    </div>


  </body>
</html>