<x-header/>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 bg-sidebar">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      {{-- image here mu/logo--}}
      <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-textlight">Sign up</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{ route('register') }}" method="POST">
        @csrf

        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-500 text-sm/6">{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <div>
          <label for="firstname" class="block text-sm/6 font-medium text-textlight">First Name</label>
          <div class="mt-2">
            <input
            type="firstname" 
            name="firstname" 
            id="firstname"  
            required 
            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-textlight outline-1 -outline-offset-1 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">
              <div>
                <label for="lastname" class="block text-sm/6 font-medium text-textlight">Last Name</label>
                <div class="mt-2">
                  <input 
                  type="lastname" 
                  name="lastname" 
                  id="lastname"  
                  required 
                  class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-textlight outline-1 -outline-offset-1 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>

              <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="#" method="POST">
                  <div>
                    <label for="email" class="block text-sm/6 font-medium text-textlight">Email address</label>
                    <div class="mt-2">
                      <input 
                      type="email" 
                      name="email" 
                      id="email" 
                      autocomplete="email" 
                      required 
                      class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-textlight outline-1 -outline-offset-1 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                  </div>
  
        <div class="mt-2">
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm/6 font-medium text-textlight">Password</label>
            <div class="text-sm">
              <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
            </div>
          </div>

          <div class="mt-2">
            <input 
            type="password" 
            name="password" 
            id="password" 
            autocomplete="current-password" 
            required 
            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-textlight outline-1 -outline-offset-1 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>
  
        <div class="mt-2">
          <button 
          type="submit" 
          class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500  focus-visible:outline-indigo-600">Sign in</button>
        </div>
      </form>
  
      <p class="mt-10 text-center text-sm/6 text-gray-500">
        A member?
        <a href="{{ route('show.login') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Sign in</a>
      </p>
    </div>
  </div>
  