@extends('layouts.auth')
@section('page', 'Register')
@section('form')
<form action="{{route('register')}}" method="POST">
  @csrf
  @if ($errors->any())
        <div class="bg-red-100 rounded-full py-3 px-6 mb-3 text-sm text-red-700 inline-flex items-center w-full" role="alert">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
            </svg>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
        </div>
  @endif
  <div class="form-group mb-6">
    <input type="text" name="staff_id" class="form-control
      block
      w-full
      px-5
      py-2.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding
      border border-solid border-gray-300
      rounded-full
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput123"
      aria-describedby="emailHelp123" placeholder="Staff ID" required>
  </div>
  <div class="form-group mb-6">
    <input type="text" name="email" class="form-control
      block
      w-full
      px-5
      py-2.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding
      border border-solid border-gray-300
      rounded-full
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput124"
      aria-describedby="emailHelp124" placeholder="Email Address" required>
  </div>
  <div class="form-group mb-6">
    <select name="role" class="form-select appearance-none
      block
      w-full
      px-5
      py-2.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded-full
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
        <option selected>--Select Role--</option>
        <option value="0">hrm</option>
        <option value="1">super</option>
    </select>
  </div>
  <div class="form-group mb-6">
    <input type="password" name="password" class="form-control block
      w-full
      px-5
      py-2.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding
      border border-solid border-gray-300
      rounded-full
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput126"
      placeholder="Password" required>
  </div>
  <div class="form-group mb-6">
    <input type="password" name="password_confirmation" class="form-control block
      w-full
      px-5
      py-2.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding
      border border-solid border-gray-300
      rounded-full
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput126"
      placeholder="Confirm Password" required>
  </div>
  <button type="submit" class="
    w-full
    px-5
    py-2.5
    bg-blue-600
    text-white
    font-medium
    text-xs
    leading-tight
    uppercase
    rounded-full
    shadow-md
    hover:bg-blue-700 hover:shadow-lg
    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
    active:bg-blue-800 active:shadow-lg
    transition
    duration-150
    ease-in-out">register</button>
    <p class="text-gray-800 mt-6 text-center"> OR <a href="{{route('login')}}"
      class="text-blue-600 hover:text-blue-700 focus:text-blue-700 transition duration-200 ease-in-out">Login</a>
  </p>
</form>
@endsection