@extends('layouts.app')

@section('content')
<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
            @foreach($details as $user)
                {{$user->title}} <br> <br>
                {{$user->content}}
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection