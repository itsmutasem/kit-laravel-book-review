 <x-auth-layout>
     <form method="" action="">
         @csrf
         <div class="space-y-8">
             <div class="grid grid-cols-1 gap-y-6">
                 <div>
                     <h1 class="block text-lg font-medium text-white">Create an Account</h1>
                 </div>
                 <div>
                     <label for="name" class="block text-sm/6 font-medium text-white">Name</label>
                     <div class="mt-2">
                         <input id="name" type="text" name="name" value="{{ old('name') }}"
                                class="{{ $errors->has('name') ? 'outline-red-600' : 'outline-white/10' }} block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-700 sm:text-sm/6"
                                autofocus>
                     </div>
                     @error('name')
                     <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                     @enderror
                 </div>
                 <div>
                     <label for="email" class="block text-sm/6 font-medium text-white">Email</label>
                     <div class="mt-2">
                         <input id="email" type="email" name="email" value="{{ old('email') }}"
                                class="{{ $errors->has('email') ? 'outline-red-600' : 'outline-white/10' }} block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-700 sm:text-sm/6">
                     </div>
                     @error('email')
                     <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                     @enderror
                 </div>
                 <div>
                     <label for="password" class="block text-sm/6 font-medium text-white">Password</label>
                     <div class="mt-2">
                         <div x-data="{ show: false }" class="relative">
                             <input
                                 id="password"
                                 :type="show ? 'text' : 'password'"
                                 name="password"
                                 class="{{ $errors->has('password') ? 'outline-red-600' : 'outline-white/10' }} block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-700 sm:text-sm/6"
                             >
                             <button type="button"
                                     @click="show = !show"
                                     class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-400"
                                     tabindex="-1"
                             >
                                 <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                      viewBox="0 0 24 24" stroke="currentColor">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                           d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                           d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z"/>
                                 </svg>
                                 <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                      viewBox="0 0 24 24" stroke="currentColor">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                           d="M13.875 18.825a9.56 9.56 0 01-1.875.175c-4.478 0-8.268-2.943-9.542-7 1.002-3.364 3.843-6 7.542-7.575M15 12a3 3 0 00-6 0 3 3 0 006 0z"/>
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                           d="M3 3l18 18"/>
                                 </svg>
                             </button>
                         </div>
                     </div>
                     @error('password')
                     <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                     @enderror
                 </div>
                 <div>
                     <label for="password_confirmation" class="block text-sm/6 font-medium text-white">Confirm
                         Password</label>
                     <div class="mt-2">
                         <div class="mt-2">
                             <div x-data="{ show: false }" class="relative">
                                 <input
                                     id="password"
                                     :type="show ? 'text' : 'password'"
                                     name="password"
                                     class="{{ $errors->has('password') ? 'outline-red-600' : 'outline-white/10' }} block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-700 sm:text-sm/6"
                                 >
                                 <button type="button"
                                         @click="show = !show"
                                         class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-400"
                                         tabindex="-1"
                                 >
                                     <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                          viewBox="0 0 24 24" stroke="currentColor">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                               d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                               d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z"/>
                                     </svg>
                                     <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                          viewBox="0 0 24 24" stroke="currentColor">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                               d="M13.875 18.825a9.56 9.56 0 01-1.875.175c-4.478 0-8.268-2.943-9.542-7 1.002-3.364 3.843-6 7.542-7.575M15 12a3 3 0 00-6 0 3 3 0 006 0z"/>
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                               d="M3 3l18 18"/>
                                     </svg>
                                 </button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div>
             <button type="submit" class="mt-6 flex w-full justify-center rounded-md bg-gradient-to-r from-rose-500 to-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Sign up</button>
         </div>
         <div>
             <p class="mt-2 text-center text-sm text-gray-500">
                 Already have an account?
                 <a href="{{ route('auth.login') }}" class="font-medium text-indigo-500 hover:text-indigo-400">Login</a>
             </p>
         </div>
     </form>
</x-auth-layout>
