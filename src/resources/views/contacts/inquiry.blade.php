@extends('layouts.app')

@section('title', 'お問い合わせフォーム')

@section('content')
<form method="POST" action="{{ url('inquiry/store') }}">
    @csrf
    <div>
        <label for="department_id">お問い合わせ先部署</label>
        <select id="department_id" name="department_id">
            @foreach ($contacts as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="name">氏名</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <div class="css">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="email">メールアドレス</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')
            <div class="css">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="content">お問い合わせ内容</label>
        <textarea name="content" cols="40" rows="7">{{ old('content') }}</textarea>
        @error('content')
            <div class="css">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="age">年齢</label>
        <input type="number" name="age" value="{{ old('age') }}">
        @error('age')
            <div class="css">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="gender">性別</label>
        <select name="gender">
            <option value="">選択してください</option>
            <option value="1" {{ old('gender') === '1' ? 'selected' : '' }}>男性</option>
            <option value="2" {{ old('gender') === '2' ? 'selected' : '' }}>女性</option>
            <option value="3" {{ old('gender') === '3' ? 'selected' : '' }}>その他</option>
        </select>
        @error('gender')
            <div class="css">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">送信</button>
</form>
<div class="contact_link_wrap"><a href="{{ url('index') }}">お問い合わせ内容一覧へ</a></div>
@endsection

@section('footer')
@endsection
