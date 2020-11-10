@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header"><strong>Tambah Foto Barang</strong></div>
        <div class="card-body card-block">
        <form action="{{route('product_galleries.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="product_id" class="form-control-label">Nama Barang</label>
                <select name="product_id"
                        class="form-control @error('product_id') is-invalid @enderror">
                    @foreach ($products as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
                </select>
                @error('product_id')
                    <div class="text-muted">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="photo" class="form-control-label">Foto Barang</label>
                <input type="file"
                        name="photo"
                        value="{{ old('photo') }}"
                        accept="image/*"
                        required
                        class="form-control @error('photo') is-invalid @enderror">
                @error('photo')
                    <div class="text-muted">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="is_default" class="form-control-label">Jadikan Default</label>
                <br/>
                <label class="form-control-label">
                    <input type="radio"
                        name="is_default"
                        value="1"
                        class="form-control @error('is_default') is-invalid @enderror">
                        <small>Ya</small>
                </label> &nbsp;

                <label class="form-control-label">
                    <input type="radio"
                        name="is_default"
                        value="0"
                        class="form-control @error('is_default') is-invalid @enderror">
                        <small>Tidak</small>
                </label> &nbsp;

                @error('is_default')
                    <div class="text-muted">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" value="Tambah Foto Barang">
            </div>
        </form>
        </div>
    </div>
@endsection
