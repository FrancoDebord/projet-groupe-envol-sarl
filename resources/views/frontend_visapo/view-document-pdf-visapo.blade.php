@extends('index-visapo')

@section('title', 'Visualiser le document')


@section('content')

    <div class="country-area ">
        <div class="container">
            <h6 class="underline_title">Informations sommaires sur votre inscription</h6>

            <div class="row">
                <iframe src="{{ asset('storage/pdfs_documents/' . request('document')) }}" class="w-100 " style="height: 700px;"
                    frameborder="0">Votre navigateur ne supporte la visualisation de pdf</iframe>

            </div>
        </div>
    </div>
@endsection
