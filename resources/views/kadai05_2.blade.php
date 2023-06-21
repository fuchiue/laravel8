@extends('layouts.kadai')

@section('pageTitle', 'kadai05_1')
@section('title', 'ファイルのアップロード')

@section('content')
    <h3>アップロードされたファイル</h3>

    <img src={{ asset("storage/{$result['path']}") }}>
    <p class="text-white text-center leading-10 bg-gray-500 px-10 hover:bg-white-400 rounded-md">{{ $result['name'] }}</p>
    <a class="text-white text-center leading-10 bg-gray-500 px-10 hover:bg-gray-400 rounded-md"
        href="{{ route('kadai05_1') }}">戻る</a>
@endsection
