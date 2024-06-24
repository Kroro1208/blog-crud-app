<x-app-web-layout>
    <x-slot name='title'>
        Products Create
    </x-slot>
    
    <div class="container mt-5">
        {{-- @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif --}}
        <div class="card">
            <div class="card-header">
                <h3>Products Create</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('products/create') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">商品名</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">商品説明</label>
                        <textarea name="description" class="form-control" rows="3" id="description">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">在庫</label>
                        <input type="text" name="stock" value="{{ old('stock') }}" class="form-control" id="stock">
                        @error('stock')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="is_active" class="form-label">アクティブ</label>
                        <div class="form-check">
                            <input type="checkbox" name="is_active" class="form-check-input" id="is_active" {{ old('is_active') ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">有効</label>
                            @error('is_active')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">保存</button>
                </form>
            </div>
        </div>
    </div>
</x-app-web-layout>
