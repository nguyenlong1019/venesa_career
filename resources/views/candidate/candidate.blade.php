@extends('candidate.layouts.app')

@section('content')
<style>
    .form-container {
      max-width: 500px;
      margin-top: 50px;
      margin-bottom: 50px;
      margin-left: 250px;
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 25px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 6px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group input[readonly] {
      background-color: #f0f0f0;
      color: #666;
    }

    .form-actions {
      text-align: right;
    }

    .form-actions button {
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-actions button:hover {
      background-color: #0056b3;
    }
</style>

<div class="form-container">
    <h2>Chỉnh sửa thông tin</h2>
    @if (session('success'))
  <div style="color: green; margin-bottom: 10px;">
    {{ session('success') }}
  </div>
@endif

@if ($errors->any())
  <div style="color: red; margin-bottom: 10px;">
    @foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
    @endforeach
  </div>
@endif
    <form action="/candidate/update" method="POST">
      @csrf

      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="name" value="{{$user -> name}}" readonly>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{$user -> email}}" readonly>
      </div>

      <div class="form-group">
        <label for="phone">Số điện thoại</label>
        <input type="text" id="phone" name="phone" value="{{$user -> phone}}">
      </div>

      <div class="form-actions">
        <button type="submit">Cập nhật</button>
      </div>
    </form>
  </div>

  

@endsection