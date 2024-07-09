@extends('index-new')

@section('title',"Visualiser le document")
    

@section('content')
<section class="contact-section p_relative pt_25 pb_20">
    <div class="auto-container">
        <iframe src="{{ asset("storage/pdfs_documents/".request("document")) }}" class="w-100 " style="height: 700px;" frameborder="0">Votre navigateur ne supporte la visualisation de pdf</iframe>
    </div>
</section>
@endsection