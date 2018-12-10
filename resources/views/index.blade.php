@extends('layouts.app')

@section('content')

    @isset($error)
        @component('components.alert', ['message' => $error])

        @endcomponent
    @endisset

    @isset($warning)
        @component('components.warning', ['message' => $warning])

        @endcomponent
    @endisset
    
    @isset($result)
        @component('components.result', ['result' => $result])

        @endcomponent
    @endisset



    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-12">
            <div class="tab-content">

                @include('main')

                @include('about')

            </div>
        </div>
    </div>

@endsection
