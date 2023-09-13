<div class="form-contents">
    <div class="nameArea col-auto">
        <p class="label">
            <label for="name" class="form-label" style="color: black; font-weight:bold;font-size:1.5rem;">商品名</label>
        </p>
        <p>
            <input class="form-control rounded-md" type="text" name="name" id="name" placeholder="ここに商品を入力します" value="{{ old('name') }}" style="opacity: 0.8;">
        </p>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="typeArea col-auto">
        <p class="label">
            <label for="type" class="form-label" style="color: black; font-weight:bold;font-size:1.5rem;">カテゴリ名</label>
        </p>
        <p>
            <select class="form-select rounded-md" aria-label="Default select example" name="type" id="type" value="{{ old('type') }}" style="opacity: 0.8;">
                <option selected>カテゴリを選択する</option>
                @foreach ( $choices as $choice)
                <option value= {{ $choice->type }}>{{ $choice->type }}:{{ $choice->category_name }}</option>
                @endforeach
            </select>
        </p>
        @error('type')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="detailArea col-auto">
        <p class="label">
            <label for="detail" class="form-label" style="color:  black; font-weight:bold;font-size:1.5rem;">詳細</label>
        </p>
        <textarea class="form-control  leading-relaxed rounded-md" name="detail" id="detail" cols="30" rows="10" value="{{ old('detail') }}" style="opacity: 0.8;"></textarea>
        @error('detail')
        <div class="alert alert-danger" style="margin-top: 0.5rem;">{{ $message }}</div>
        @enderror
    </div>
    {{-- エラーメッセージ表示 --}}
    {{-- @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
        <x-primary-button style="margin-top: 1rem;padding:0.7rem 1.2rem 0.7rem 1.2rem;font-size:1rem;line-height: 1.5rem;background-color: black;border-radius: 0.5rem;color:white;">
            Submit
        </x-primary-button>
    {{-- この↑のx-～はresourceのviewsのcomponents内のパーツが挿入されます --}}
</div>
