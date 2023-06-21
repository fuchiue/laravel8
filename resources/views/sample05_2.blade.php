@extends('layouts.kadai')

@section('pageTitle', 'sample05_1')
@section('title', 'ファイルのアップロード')

@section('content')
    <h3>アップロードされたファイル</h3>
    <p>{{ asset("storage/{$result['path']}") }}</p>

    <img src={{ asset("storage/{$result['path']}") }}>

    <p>{{ $result['name'] }}</p>
    <p>{{ $result['path'] }}</p>

    <a href="sample05_1">戻る</a>
    <a href="{{ route('sample05_1') }}">戻る</a>
@endsection
