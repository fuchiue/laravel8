@extends('layouts.kadai')

@section('pageTitle', 'kadai06_1')
@section('title', 'EloquentORM参照')

@section('content')

    <section>
        <div class="p-5 rounded-md shadow-md">
            <h3 class="my-5 px-5 py-2">{{ $article->title }}</h3>
            <p class="px-3"><time datatime="{{ $article->created_at }}">{{ $article->created_at }}</time></p>
            <div class="flex justify-between py-3">
                <p class="px-3 py-5">{{ $article->body }}</p>
            </div>
        </div>
        <div class="flex justify-end">
            <a href="{{ route('kadai06_1.index') }}" class="mr-5 px-3 py-2 rounded-md">戻る</a>
            <form action="{{ route('kadai06_1.destroy', $article->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="mr-5 px-3 py-2 rounded-md">削除</button>
            </form>

            <a href="{{ route('kadai06_1.edit', $article->id) }}" class="px-3 py-2 rounded-md">編集</a>

        </div>
    </section>

@endsection
