<div class="form-contents">
    <div class="nameArea col-auto">
        <p class="label">
            <label for="name" class="form-label" style="color: black; font-weight:bold;font-size:1rem;">商品名</label>
        </p>
        <p>
            <input class="form-control rounded-md" type="text" name="name" id="name" placeholder="ここに商品を入力します">
        </p>
        @error('name')
        <div class="alert alert-danger">※商品名が入力されていません</div>
        @enderror
    </div>
    <div class="typeArea col-auto">
        <p class="label">
            <label for="type" class="form-label" style="color: black; font-weight:bold;font-size:1rem;">カテゴリ名</label>
        </p>
        <p>
            <select class="form-select rounded-md" aria-label="Default select example" name="type" id="type">
                <option selected>カテゴリを選択する</option>
                @foreach ( $choices as $choice)
                <option value= {{ $choice->type }}>{{ $choice->type }}:{{ $choice->category_name }}</option>
                @endforeach
            </select>
        </p>
        @error('type')
        <div class="alert alert-danger">※種別が入力されていません</div>
        @enderror
    </div>
    <div class="detailArea col-auto">
        <p class="label">
            <label for="detail" class="form-label" style="color:  black; font-weight:bold;font-size:1rem;">詳細</label>
        </p>
        <textarea class="form-control  leading-relaxed rounded-md" name="detail" id="detail" cols="30" rows="10"></textarea>
        @error('detail')
        <div class="alert alert-danger">※商品詳細文が入力されていません</div>
        @enderror
    </div>
        <x-primary-button style="margin-top: 1rem;padding:0.7rem 1.2rem 0.7rem 1.2rem;font-size:1rem;line-height: 1.5rem;">
            Submit
        </x-primary-button>
    {{-- この↑のx-～はresourceのviewsのcomponents内のパーツが挿入されます --}}
</div>
