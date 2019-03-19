@extends('layout.main')

@section('content')
        @include('components.errors')
        <section class="section">
            <div class="container">
                <h1 class="title">Add a new person</h1>
                <hr>
                <h2 class="subtitle">
                    Common information
                </h2>
                  <form action="{{ route('people.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @component('components.form.inputtext')
                        @slot('label_text') First Name @endslot
                        @slot('placeholder') First Name @endslot
                        @slot('name') first_name @endslot
                        @slot('value') {{ old('first_name') }} @endslot
                        @slot('fa_icon') fas fa-user @endslot
                    @endcomponent

                    @component('components.form.inputtext')
                        @slot('label_text') Last Name @endslot
                        @slot('placeholder') Last Name @endslot
                        @slot('name') last_name @endslot
                        @slot('value') {{ old('last_name') }} @endslot
                        @slot('fa_icon') fas fa-user @endslot
                    @endcomponent

                    @component('components.form.inputtext')
                        @slot('label_text') Year of birth @endslot
                        @slot('placeholder') Year of birth @endslot
                        @slot('name') birth_year @endslot
                        @slot('value') {{ old('birth_year') }} @endslot
                        @slot('fa_icon') far fa-calendar-check @endslot
                    @endcomponent

                    @component('components.form.file')
                        @slot('name') user_photo @endslot
                        @slot('label') Choose a photo @endslot
                    @endcomponent
            </div>
        </section>
        <hr>
        <section class="section">
            <div class="container">
                <h2 class="subtitle">
                    Address information
                </h2>

                @component('components.form.inputtext')
                    @slot('label_text') Country @endslot
                    @slot('placeholder') Country @endslot
                    @slot('name') country @endslot
                    @slot('value') {{ old('country') }} @endslot
                    @slot('fa_icon') fas fa-globe-europe @endslot
                @endcomponent

                @component('components.form.inputtext')
                    @slot('label_text') City @endslot
                    @slot('placeholder') City @endslot
                    @slot('name') city @endslot
                    @slot('value') {{ old('city') }} @endslot
                    @slot('fa_icon') fas fa-city @endslot
                @endcomponent

                @component('components.form.inputtext')
                    @slot('label_text') Street @endslot
                    @slot('placeholder') Street @endslot
                    @slot('name') street @endslot
                    @slot('value') {{ old('street') }} @endslot
                    @slot('fa_icon') fas fa-map-marked-alt @endslot
                @endcomponent

                @component('components.form.inputtext')
                    @slot('label_text') House/Building No @endslot
                    @slot('placeholder') House/Building No @endslot
                    @slot('name') house @endslot
                    @slot('value') {{ old('house') }} @endslot
                    @slot('fa_icon') fas fa-warehouse @endslot
                @endcomponent

            </div>
        </section>

        <hr>
        <section class="section">
            <div class="container">
                <h2 class="subtitle">
                    Addition information
                </h2>
                @component('components.form.textarea')
                    @slot('label_text') Other information @endslot
                    @slot('placeholder') If you have something to add please add here @endslot
                    @slot('name') info @endslot
                    @slot('value') {{ old('info') }} @endslot
                @endcomponent
            </div>
        </section>
        <hr>
        <!-- end fo the form -->
        <section class="section">
            <div class="container">
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-primary is-rounded">Add person</button>
                        </div>
                    </div>
            </div>
        </section>
        </form>

        @include('components.alert')
@endsection
