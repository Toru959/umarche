<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            作成画面
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="post" action="{{route('owner.products.store')}}">
                        @csrf
                        <div class="m-2">
                            <div class="p-2 mx-auto">
                                <div class="relative">
                                    <select name="catgory">
                                        @foreach($categories as $category)
                                            <optgroup label="{{$category->name}}">
                                                @foreach($category->secondary as $secondary)
                                                    <option value="{{$secondary->id}}">
                                                        {{$secondary->name}}
                                                    </option>
                                                @endforeach
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 w-1/2 flex justify-around mt-10">
                            <button type="button" onclick="location.href='{{route('owner.products.index')}}'" class="text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">戻る</button>
                            <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">登録する</button>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</x-app-layout>
