{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
<div class="container my-5">
    <h1>home</h1>
    <img src="{{ Vite::asset('resources/img/colibri.jpg') }}" alt="" class="img-fluid">
    <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit tempore, labore officiis obcaecati debitis mollitia. Esse harum velit rerum! Rem hic illo eaque mollitia, distinctio qui voluptas nesciunt aliquam voluptate!
        Eveniet veniam numquam error, explicabo enim laborum optio placeat suscipit dolorem at dicta sequi eos nam cupiditate consectetur ullam. Nisi non excepturi numquam. Unde voluptas libero laboriosam quibusdam autem adipisci.
        Placeat tenetur ipsa saepe temporibus. Eveniet, laboriosam atque aut, labore consectetur delectus porro officiis non sint necessitatibus voluptatum aspernatur culpa! Molestias saepe repellendus porro ut quasi doloremque quibusdam quod illo.
        Atque dicta facere fugit. Eius iure asperiores recusandae distinctio magni repudiandae aliquid ex delectus dolorum reprehenderit dignissimos, sed, facere id corrupti non tempora similique sunt dolore accusamus illo harum? Assumenda?
        Natus numquam quos impedit. Obcaecati totam repudiandae minima, expedita corrupti in, consequuntur rerum voluptatum autem explicabo, neque reprehenderit nesciunt. Vitae, iure porro atque esse temporibus possimus nulla iusto inventore aliquam.
    </p>
</div>

@endsection


@section('titlePage')
home
@endsection