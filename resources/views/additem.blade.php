@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="row mb-3">
                        <form action="{{url('/admin/item/add')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
                            </div>
                            <label for="img" class="col-md-4 col-form-label text-md-end">{{ __('img') }}</label>
                            <div class="col-md-6">
                                <input id="img" type="file" class="form-control" name="img" value="{{ old('img') }}" required autocomplete="img" autofocus >
                            </div>
                            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('price') }}</label>
                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus >
                            </div>
                            <label for="count" class="col-md-4 col-form-label text-md-end">{{ __('Count') }}</label>
                            <div class="col-md-6">
                                <input id="count" type="text" class="form-control" name="count" value="{{ old('Count') }}" required autocomplete="count" autofocus >
                            </div>
                            <label for="year" class="col-md-4 col-form-label text-md-end">{{ __('year') }}</label>
                            <div class="col-md-6">
                                <input id="year" type="text" class="form-control" name="year" value="{{ old('year') }}" required autocomplete="year" autofocus >
                            </div>
                            <label for="country" class="col-md-4 col-form-label text-md-end">{{ __('country') }}</label>
                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus >
                            </div>
                            <label for="model" class="col-md-4 col-form-label text-md-end">{{ __('model') }}</label>
                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control" name="model" value="{{ old('model') }}" required autocomplete="model" autofocus >
                            </div>
                            <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('category') }}</label>
                            <div class="col-md-6">
                                <input id="category" type="text" class="form-control" name="category" value="{{ old('category') }}" required autocomplete="category" autofocus >
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Создать') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
