@extends('layouts.layout')

@section('content')
<div class="wrapper ca">
    <div class="container-fluid" id="main-container">

        @include('layouts.nav')

        <div class="row" id="hero">
            <div class="col-xs-offset-1 col-sm-offset-2 col-sm-8  col-xs-10 main-title">
                @if (session('rsvp-message'))
                    <div class="alert alert-success message">
                        {{ session('rsvp-message') }}
                    </div>
                @endif
                <h1>Camilla &amp; André</h1>
                <h2>19. august 2017</h2>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row" id="vielse">
        <div class="col-md-8 col-md-offset-2">
            <h1>Vielse &amp; Reception</h1>
            <h3 class="sub-title gold">Vi skal giftes!</h3>
            <h4>
                <strong>Vielse</strong>
            </h4>
            <p>
                Vielsen skal forestå i Øster Egede Kirke i Faxe.
            </p>
            <address>
                <span>Kl. 14.00</span><br>
                <span>Kirkevej 3</span><br>
                <span>4640 Faxe</span><br>
            </address>
            <h4>
                <strong>Reception</strong>
            </h4>
            <p>
                Efter vielsen vil der være reception på Jomfruens Egede.
            </p>
            <address>
                <span>Kl. 15.00</span><br>
                <span>Kirkevej 7</span><br>
                <span>4640 Faxe</span><br>
            </address>
        </div>
    </div>
    <div class="row" id="map">
    </div>
    <div class="row" id="festen">
        <div class="col-md-8 col-md-offset-2">
            <h1>Festen</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab blanditiis iure incidunt error aperiam, asperiores consequuntur quibusdam labore accusamus possimus quo repellendus libero. Dolorum praesentium eaque eum, porro minus?
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab blanditiis iure incidunt error aperiam, asperiores consequuntur quibusdam labore accusamus possimus quo repellendus libero. Dolorum praesentium eaque eum, porro minus?
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab blanditiis iure incidunt error aperiam, asperiores consequuntur quibusdam labore accusamus possimus quo repellendus libero. Dolorum praesentium eaque eum, porro minus?
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab blanditiis iure incidunt error aperiam, asperiores consequuntur quibusdam labore accusamus possimus quo repellendus libero. Dolorum praesentium eaque eum, porro minus?
            </p>
            <hr>
            <h3>Ønsk en sang til festen</h3>
            @if (session('song-message'))
                <div class="alert alert-success message">
                    {{ session('song-message') }}
                </div>
            @endif
            <form action="/songs/store" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control" name="artist" placeholder="Kunstner" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="name"  placeholder="Sangtitel" required>
                </div>
                <button type="submit" class="btn btn-success">Ønsk Sangen</button>
            </form>
        </div>
    </div>
    <div class="row" id="overnatning">
        <div class="col-md-8 col-md-offset-2">
            <h1>Overnatning</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab blanditiis iure incidunt error aperiam, asperiores consequuntur quibusdam labore accusamus possimus quo repellendus libero. Dolorum praesentium eaque eum, porro minus?
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab blanditiis iure incidunt error aperiam, asperiores consequuntur quibusdam labore accusamus possimus quo repellendus libero. Dolorum praesentium eaque eum, porro minus?
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab blanditiis iure incidunt error aperiam, asperiores consequuntur quibusdam labore accusamus possimus quo repellendus libero. Dolorum praesentium eaque eum, porro minus?
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab blanditiis iure incidunt error aperiam, asperiores consequuntur quibusdam labore accusamus possimus quo repellendus libero. Dolorum praesentium eaque eum, porro minus?
            </p>
        </div>
    </div>
    <div class="row" id="brunch">
        <div class="col-md-8 col-md-offset-2">
            <h1>Brunch</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab blanditiis iure incidunt error aperiam, asperiores consequuntur quibusdam labore accusamus possimus quo repellendus libero. Dolorum praesentium eaque eum, porro minus?
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab blanditiis iure incidunt error aperiam, asperiores consequuntur quibusdam labore accusamus possimus quo repellendus libero. Dolorum praesentium eaque eum, porro minus?
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab blanditiis iure incidunt error aperiam, asperiores consequuntur quibusdam labore accusamus possimus quo repellendus libero. Dolorum praesentium eaque eum, porro minus?
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab blanditiis iure incidunt error aperiam, asperiores consequuntur quibusdam labore accusamus possimus quo repellendus libero. Dolorum praesentium eaque eum, porro minus?
            </p>
        </div>
    </div>
    <div class="row colored-row" id="ønsker">
        <div class="col-md-10 col-md-offset-2">
            <h1>Ønsker</h1>
            <ul>
            @if(isset($wishes))
                @foreach($wishes as $wish)
                    <div class="col-xs-12 col-md-3">
                        <h4 class="wish-name">{{ $wish->name }}</h4>
                        @if(strlen($wish->link) > 0)
                            <span> - </span><a href="{{ $wish->link }}" target="_blank">Link</a>
                        @endif
                        <p class="wish-description">{{ $wish->description }}</p>
                    </div>
                @endforeach
            @endif
            </ul>
        </div>
    </div>
    <div class="row" id="toastmaster">
        <div class="col-md-8 col-md-offset-2">
            <h1>Toastmaster</h1>
            <div class="col-sm-4">
                <img class="img-responsive img-thumbnail" id="toastmaster-image" src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/p/4/000/187/125/179c5ac.jpg" alt="toastmaster">
            </div>
            <div class="col-sm-4">
                <address id="the-toastmaster">
                    <strong>Simon Skram-Jensen</strong><br>
                    <a href="tlf:+4599557135">+45 99 55 71 35</a><br>
                    <a href="mailto:siskj@dongenergy.dk">siskj@dongenergy.dk</a>
                </address>
            </div>
        </div>
    </div>
    <div class="row colored-row" id="indslag">
        <div class="col-md-8 col-md-offset-2">
            <h1>Indslag</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab blanditiis iure incidunt error aperiam, asperiores consequuntur quibusdam labore accusamus possimus quo repellendus libero. Dolorum praesentium eaque eum, porro minus?
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab blanditiis iure incidunt error aperiam, asperiores consequuntur quibusdam labore accusamus possimus quo repellendus libero. Dolorum praesentium eaque eum, porro minus?
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab blanditiis iure incidunt error aperiam, asperiores consequuntur quibusdam labore accusamus possimus quo repellendus libero. Dolorum praesentium eaque eum, porro minus?
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ab blanditiis iure incidunt error aperiam, asperiores consequuntur quibusdam labore accusamus possimus quo repellendus libero. Dolorum praesentium eaque eum, porro minus?
            </p>
        </div>
    </div>
    <div class="row" id="rsvp">
        <div class="col-md-8 col-md-offset-2">
            <h1>RSVP</h1>

            @include('errors')

            <form action="/rsvp/store" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="" name="email" required>
            </div>
            <div class="form-group">
                <label for="navn">Navn</label>
                <input type="text" class="form-control" id="navn" placeholder="" name="name" required>
            </div>
            <div class="form-group">
              <label for="">Kan i komme?</label>
              <div class="checkbox">
                  <label>
                    <input type="radio" name="is_comming" id="yes" value="1" required>
                    Ja
                </label>
            </div>
            <div class="checkbox">
              <label>  
                <input type="radio" name="is_comming" id="no" value="0">
                Nej
            </label>
        </div>
    </div>
    <div class="form-group">
        <label for="besked">Besked</label>
        <textarea class="form-control" id="besked" rows="5" name="message" placeholder=""></textarea>
    </div>
    <button type="submit" class="btn btn-default">Send</button>
</form>
</div>
</div>
<div class="row" id="footer">
    <div>
        #piltlomholdt2017
    </div>
</div>
</div>
@endsection
