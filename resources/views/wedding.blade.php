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
                <span>Kl. 14.45</span><br>
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
                Kl. 17.30: Velkomst på plænen foran Smedjen
            </p>

            <p>Kl. 18.00: Middag i Smedjen</p>

            <h3>Brudevals</h3>

            <p>Efter brudevalsen spiller DJ’en op til dans. Der vil blive serveret cocktails i baren og kaffebuffet i Hallen.</p>

            <p>Ud på natten vil der blive serveret natmad.</p>
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
            <p>Vi håber meget I vil overnatte og afslutte weekenden sammen med os til en brunch.</p>

            <p>På Jomfruens Egede findes enkeltværelser, dobbeltværelser og suiter med i alt 44 sengepladser.</p>

            <p>Jomfruens Egede har et tæt samarbejde med et nærliggende hotel, såfremt dette bliver nødvendigt. Ind- og udtjekning foregår på Jomfruens Egede, og der er sørget for transport til og fra hotellet.</p>

            <p><i>Dobbeltværelse inkl. morgenbuffet pr. døgn. kr. 850,-</i></p>

            <p><i>Ekstra opredning inkl. morgenbuffet pr. pers. kr. 250,-</i></p>
            <p><strong>I bedes oplyse til os hvorvidt i ønsker overnatning efter festen. Gerne i forbindelse med tilbagemelding her på siden.<strong></p>
        </div>
    </div>
    <div class="row" id="brunch">
        <div class="col-md-8 col-md-offset-2">
            <h1>Brunch</h1>
            <p>Der vil blive serveret brunch fra kl 10.00 i Den Store Stue.</p>
        </div>
    </div>
    <div class="row colored-row" id="ønsker">
        <div class="col-md-10 col-md-offset-2">
            <h1>Ønsker</h1>
            @if(isset($wishes))
                @foreach($wishes->chunk(3) as $chunk)
                    <div class="row wish-row">
                        @foreach($chunk as $wish)
                            <div class="col-xs-12 col-lg-3 wish">
                                <h4 class="wish-name">{{ $wish->name }}</h4>
                                @if(strlen($wish->link) > 0)
                                <span> - </span><a href="{{ $wish->link }}" target="_blank">Link</a>
                                @endif
                                <p class="wish-description">{{ $wish->description }}</p>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            @endif
        </div>
        <div class="col-md-10 col-md-offset-2">
            <p>Gavekoordinator: 
                Stine Pilt Olsen
            </p>
            <p>+ 45 40 35 78 60</p> 
            <a href="mailto:spo@alfredlaurits.dk">spo@alfredlaurits.dk</a>
        </div>
    </div>
    <div class="row" id="toastmaster">
        <div class="col-md-8 col-md-offset-2">
            <h1>Toastmaster</h1>
            <div class="col-sm-4">
                <img class="img-responsive img-thumbnail" id="toastmaster-image" src="/images/toastmaster.JPG" alt="toastmaster">
            </div>
            <div class="col-sm-4">
                <address id="the-toastmaster">
                    <strong>Simon Skram-Jensen</strong><br>
                    <a href="tlf:+4599557135">+45 99 55 71 35</a><br>
                    <a href="mailto:s_skram@hotmail.com">s_skram@hotmail.com</a>
                </address>
            </div>
        </div>
    </div>
    <div class="row colored-row" id="indslag">
        <div class="col-md-8 col-md-offset-2">
            <h1>Indslag</h1>
            <p>Alle indslag er velkomne og bedes forinden koordineres med Toastmasteren.</p>
        </div>
    </div>



    <div class="row" id="rsvp">
        <div class="col-md-8 col-md-offset-2">
            <h1>S.u. 1. Maj 2017</h1>

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
                      <label for="">Vil i overnatte?</label>
                      <div class="checkbox">
                          <label>
                            <input type="radio" name="is_sleeping" id="yes" value="1" required>
                            Ja
                        </label>
                    </div>
                    <div class="checkbox">
                      <label>  
                        <input type="radio" name="is_sleeping" id="no" value="0">
                        Nej
                    </label>
                    </div>
                </div>
        <div class="form-group">
            <label for="besked">Besked (særlige ønsker til mad?)</label>
            <textarea class="form-control" id="besked" rows="5" name="message" placeholder=""></textarea>
        </div>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
</div>
</div>
</form>
<div class="row" id="footer">
    <div>
        #piltlomholdt2017
    </div>
</div>
</div>
@endsection
