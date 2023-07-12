@extends('layouts.kadai')

@section('pageTitle', 'kadai09_1')
@section('title', 'EloquentORM参照')

@section('content')
    <section>
        <form action="{{route("kadai06_1.update",$article->id)}}" method="POST">
            @csrf
            @method("PUT")
            <div class="bg-white hover:bg-white p-5 mb-10 rounded-md shadow-md">
                <div class="my-5 px-5 py-2 border-b">
                    <label class="block text-gray-500 text-sm uppercase" for="title">title</label>
                    <input type="text" name="title" id="title" class="w-full font-bold leading-10" value="{{$article->title}}">
                    @error('title')
                            <p class="text-xs text-pink-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="my-5 px-5 py-2 border-b ">
                    <div class="grow">
                        <label class="block text-gray-500 text-sm uppercase" for="body">body</label>
                        <textarea name="body" class="w-full h-80 px-3 py-2 resize-none" style="height: 200px;">{{$article->body}}</textarea>
                        @error('body')
                            <p class="text-xs text-pink-600">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <a href="{{ route('kadai06_1.index') }}"
                    class="block w-16 text-white text-center bg-gray-500 hover:bg-gray-400 mr-5 px-3 py-2 rounded-md">戻る</a>
                <button type="submit"
                    class="block w-16 text-white text-center bg-gray-500 hover:bg-gray-400 mr-5 px-3 py-2 rounded-md">更新</button>
            </div>
        </form>
    </section>
@endsection
