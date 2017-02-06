<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="#">Camilla &amp; André</a> -->
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar">
                <li>
                    <a href="/rsvp/index">RSVP</a>
                </li>
                <li>
                    <a href="/songs/index">Sangønsker</a>
                </li>
                <li>
                    <a href="/wishes/index">Ønsker</a>
                </li>
            </ul>
            <form action="/logout" method="POST" class="navbar-form navbar-right">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-default">Log Ud</button>
                
            </form>
        </div>
    </div>
</nav>
