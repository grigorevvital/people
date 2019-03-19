<div class="card">
    <div class="card-image">
      <figure class="image is-512x512">
        <img src="{{ !is_null($person->getUserPhoto()) ?  asset($person->getUserPhoto()) : asset('site_images/no-photo-male.jpg') }}" alt="{{ $person->getFullName() }}">
      </figure>
    </div>
    <div class="card-content">
      <div class="media">
        <div class="media-left">
          <figure class="image is-48x48">
            <img src="{{ !is_null($person->getUserPhoto()) ? asset($person->getUserPhoto()) : asset('site_images/no-photo-male.jpg') }}" alt="{{ $person->getFullName() }}" alt="Placeholder image">
          </figure>
        </div>
        <div class="media-content">
          <p class="title is-4">{{ $person->getFullName() }}</p>
          <p class="subtitle is-6">{{'@'.$person->first_name }}</p>
        </div>
      </div>
         <div class="content">
          {{ $person->getPersonFullAddress() }}
        <br>
         <time datetime="{{ $person->bith_year }}">Year of birth: {{ $person->bith_year }}</time>
        <br>
        <a href="#">{{ isset($person->address()->first()->country) ? '#'.$person->address()->first()->country : '' }}</a>
        <a href="#">{{ isset($person->address()->first()->city) ? '#'.$person->address()->first()->city : '' }}</a>
      </div>
      <div>
          <div class="columns">
            <div class="column is-1">
              <a href="{{ route('people.edit', ['id' => $person->id]) }}" class="button is-success">EDIT</a>
            </div>
            <div class="column">  
              <form action="{{ route('people.delete', ['id' => $person->id]) }}" method="POST">
                @csrf
                {{ method_field('DELETE') }}
                <button type="submit" class="button is-danger">DELETE</button>
              </form>
            </div>  
          </div>  
      </div>
    </div>
</div>