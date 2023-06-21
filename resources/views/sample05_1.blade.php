@extends('layouts.kadai')

@section('pageTitle', 'sample05_1')
@section('title', 'ファイルのアップロード')

@section('content')
    <form action="sample05_1" method="POST" enctype="multipart/form-data">
        @csrf
        <p><input type="file" name="image_file" value=""></p>
        <p><button type="submit">アップロード</button></p>
    </form>
@endsection
