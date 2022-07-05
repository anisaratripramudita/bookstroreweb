<footer>
    <div class="container">
        <div class="row">
            <h1 class="text-center" style="font-size: 1cm; font-family:Georgia, 'Times New Roman', Times, serif">
                Get 15% off your next order. <br>By becoming our member of our official website.
              </h1>
        </div>
        <div class="row">
            <div class="hstack gap-3">
                <input class="form-control me-auto" type="text" placeholder="Add your code..." aria-label="Add your item here...">
                <button type="button" class="btn btn-secondary">Submit</button>
                <div class="vr"></div>
                <button type="button" class="btn btn-outline-danger">Reset</button>
              </div>
        </div>
        <hr >
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
        <div class="row">
            <div class="col">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('Sunflower Book Store', 'Sunflower Book Store') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="col" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                <ol class="navbar-brand" style="list-style: none">
                    <b>Contact</b>
                    <li><a class="navbar-brand" href="https://www.instagram.com/anisaratripramudita/">Instargram</a></li>
                    <li><a class="navbar-brand" href="">Twitter</a></li>
                    <li><a class="navbar-brand" href="">Quora</a></li>
                </ol>
            </div>
            <div class="col" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                <ol class="navbar-brand" style="list-style: none">
                    <b>About</b>
                    <li><a class="navbar-brand" href="">Our Story</a></li>
                    <li><a class="navbar-brand" href="">Carier</a></li>
                    <li><a class="navbar-brand" href="">Quora</a></li>
                </ol>
            </div>
        </div>
        </nav>
    </div>
</footer>