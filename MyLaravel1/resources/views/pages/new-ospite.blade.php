@extends('layouts.main-layout')
@section('pageTitle')
    Aggiungi Ospite
@endsection
@section('content')

    <main>
        <h1>
            aggiungi un ospite
        </h1>
        
        <form method="POST" action="{{route('store')}}">

            @csrf
            @method('POST')
            <div>
                <div class="container-label">
                    <label for="name">
                        Nome
                    </label>
                </div>
                <input type="text" name="name">
            </div>
            <div>
                <div class="container-label">
                    <label for="lastname">
                        Cognome
                    </label>
                </div>
                <input type="text" name="lastname">
            </div>
            <div>
                <div class="container-label">
                     <label for="date-birth">
                        Data di nascita
                    </label>
                </div>
                <input type="date" name="date_of_birth">
            </div>
            <div>
                <div class="container-label">
                    <label for="document-type">
                        Tipo di documento
                    </label>
                </div>
                <input type="text" name="document_type">
            </div>
            <div>
                <div class="container-label">
                    <label for="document-number">
                        Numero di documento
                    </label>
                </div>
                <input type="text" name="document_number">
            </div>
            <div id="submit">
                <input type="submit">
            </div>
        </form>
    </main>
    
@endsection