@extends('layouts.main-layout')
@section('pageTitle')
    Dettagli Ospite
@endsection
@section('content')

    <main>
        <h1>
            dettagli ospite
        </h1>
        <table>
            <tr>
                <th>
                    id
                </th>
                <th>
                    name
                </th>
                <th>
                    lastname
                </th>
                <th>
                    date of birth
                </th>
                <th>
                    document type
                </th>
                <th>
                    document number
                </th>
            </tr>
            <tr>
                <td>
                    {{$ospite -> id}}
                </td>
                <td>
                    {{$ospite -> name}}
                </td>
                <td>
                    {{$ospite -> lastname}}
                </td>
                <td>
                    {{$ospite -> date_of_birth}}
                </td>
                <td>
                    {{$ospite -> document_type}}
                </td>
                <td>
                    {{$ospite -> document_number}}
                </td>
            </tr>
        </table>
        <a id="backHome" href="{{route('home')}}">
            back to home
        </a>
    </main>
    
@endsection