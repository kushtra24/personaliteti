@extends('layouts.app')

@section('content')

<div class="container">

This is the first page

    <?php $name = Cookie::get('final_Type', 'Unknown');
echo "Hello $name";
?>

@endsection