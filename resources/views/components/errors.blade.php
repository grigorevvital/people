@if ($errors->any())
    <section class="hero is-danger">
        <div class="hero-body">
          <div class="container">
            <h1 class="title">
               Hey, there are a few errors
            </h1>
            <h2 class="subtitle">
               Please fix errors below
            </h2>
            <div class="content">
                <ol>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ol>
            </div>
          </div>
        </div>
    </section>
@endif
