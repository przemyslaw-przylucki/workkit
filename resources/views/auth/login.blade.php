@extends('layouts.template')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="flex items-center w-full justify-center">
            <div class="flex-shrink w-full max-w-2xl ml-64">
                <div class="bg-indigo-100 px-8 py-12 rounded relative block sm:flex">

                    <svg class="absolute h-16 w-16 text-main" fill="currentColor" style="top: -30px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 108.21 91.562">
                        <path d="M37.457 41.62H22.89a6.217 6.217 0 01-6.243-6.243v-2.08a16.039 16.039 0 014.878-11.772A16.043 16.043 0 0133.3 16.649h4.162a4.219 4.219 0 004.162-4.162V4.162A4.219 4.219 0 0037.462 0H33.3a32.446 32.446 0 00-12.908 2.634A32.98 32.98 0 002.634 20.387 32.431 32.431 0 000 33.296v45.78a12.041 12.041 0 003.641 8.845 12.044 12.044 0 008.845 3.641h24.973a12.432 12.432 0 0012.485-12.486v-24.97A12.435 12.435 0 0037.457 41.62zM104.57 45.261a12.041 12.041 0 00-8.844-3.641H81.159a6.217 6.217 0 01-6.242-6.243v-2.08a16.65 16.65 0 0116.648-16.648h4.161a4.221 4.221 0 004.163-4.162V4.162A4.221 4.221 0 0095.726 0h-4.161a32.454 32.454 0 00-12.911 2.634 32.989 32.989 0 00-17.752 17.753 32.44 32.44 0 00-2.635 12.909v45.78a12.432 12.432 0 0012.486 12.486h24.971a12.431 12.431 0 0012.485-12.486v-24.97a12.041 12.041 0 00-3.639-8.845z"/>
                    </svg>
                    <div class="flex-shrink-0">
                        <div class="rounded h-24 w-24">
                            <img class="rounded-lg" src="https://images.unsplash.com/photo-1534308143481-c55f00be8bd7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&w=256&h=256&q=80&facepad=4">
                        </div>
                    </div>
                    <div>
                        <div class="sm:pl-4 mt-2 block sm:flex sm:mt-0 justify-between items-center">
                            <div><h5 class="text-xl font-semibold">Dawid Rubin</h5>
                                <p class="text-xs text-gray-700">CMO at CodeTisans</p></div>
                            <div class="mt-2 sm:mt-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="205.755" height="52.824"
                                     viewBox="0 0 205.755 52.824">
                                    <g transform="translate(-8099.298 7420.435)">
                                        <path d="M8304.053-7368.611H8100.3v-50.824h203.755v33.883" fill="none"
                                              stroke="#000" stroke-width="2"></path>
                                        <path
                                            d="M-28.878.278A6.587,6.587,0,0,1-33.651-1.61a6.577,6.577,0,0,1-1.943-4.94,6.566,6.566,0,0,1,1.97-4.94,6.536,6.536,0,0,1,4.708-1.906,6.094,6.094,0,0,1,4.042,1.277A5.737,5.737,0,0,1-22.9-9.047l-2.405.759a3.58,3.58,0,0,0-1.166-1.878,3.611,3.611,0,0,0-2.442-.768,3.976,3.976,0,0,0-2.821,1.147,4.244,4.244,0,0,0-1.212,3.238,4.219,4.219,0,0,0,1.193,3.164A3.968,3.968,0,0,0-28.878-2.22a3.607,3.607,0,0,0,2.451-.8A3.9,3.9,0,0,0-25.2-4.9l2.387.721a5.85,5.85,0,0,1-.657,1.554A6.442,6.442,0,0,1-24.642-1.2,5.421,5.421,0,0,1-26.464-.13,6.912,6.912,0,0,1-28.878.278ZM-11.211-9.8a4.2,4.2,0,0,0-1.221,3.228,4.2,4.2,0,0,0,1.221,3.228A4.07,4.07,0,0,0-8.343-2.2,4.092,4.092,0,0,0-5.457-3.339,4.2,4.2,0,0,0-4.236-6.568,4.2,4.2,0,0,0-5.457-9.8a4.092,4.092,0,0,0-2.886-1.138A4.07,4.07,0,0,0-11.211-9.8Zm-3.866,3.247A6.535,6.535,0,0,1-13.1-11.507a6.646,6.646,0,0,1,4.755-1.887A6.669,6.669,0,0,1-3.57-11.507,6.535,6.535,0,0,1-1.591-6.549,6.512,6.512,0,0,1-3.57-1.61,6.669,6.669,0,0,1-8.343.278,6.646,6.646,0,0,1-13.1-1.61,6.512,6.512,0,0,1-15.077-6.549ZM9.694-2.368h2.035A3.905,3.905,0,0,0,14.56-3.441a4.126,4.126,0,0,0,1.11-3.108,4.157,4.157,0,0,0-1.11-3.117,3.863,3.863,0,0,0-2.812-1.082H9.694ZM11.822,0H7.141V-13.117h4.7a6.412,6.412,0,0,1,4.671,1.758,6.405,6.405,0,0,1,1.8,4.81A6.363,6.363,0,0,1,16.5-1.758,6.444,6.444,0,0,1,11.822,0ZM35.261,0H27.047V-13.117h8.214v2.4H29.6v3h5.125v2.276H29.6v3.034h5.661Z"
                                            transform="translate(8148 -7387)" fill="#434190"></path>
                                        <path
                                            d="M-38.462-10.693h-4.144V0h-2.572V-10.693h-4.144v-2.424h10.859ZM-27.565,0h-2.59V-13.117h2.59ZM-9.231-9.99l-2.294.7a2.406,2.406,0,0,0-.7-1.276,2.282,2.282,0,0,0-1.684-.574,2.2,2.2,0,0,0-1.48.49,1.5,1.5,0,0,0-.573,1.175q0,1.2,1.424,1.48l1.832.351a4.734,4.734,0,0,1,2.7,1.387,3.559,3.559,0,0,1,.962,2.479,3.784,3.784,0,0,1-1.286,2.84A4.826,4.826,0,0,1-13.783.278a6.408,6.408,0,0,1-2.238-.37,4.329,4.329,0,0,1-1.61-.99A5.08,5.08,0,0,1-18.583-2.4,4.153,4.153,0,0,1-19-3.83l2.368-.629A2.681,2.681,0,0,0-15.808-2.7a2.828,2.828,0,0,0,2.044.7A2.468,2.468,0,0,0-12.2-2.442a1.412,1.412,0,0,0,.564-1.166,1.352,1.352,0,0,0-.416-.99,2.215,2.215,0,0,0-1.175-.564l-1.831-.37a4.664,4.664,0,0,1-2.516-1.313A3.421,3.421,0,0,1-18.5-9.287a3.746,3.746,0,0,1,1.341-2.923,4.711,4.711,0,0,1,3.228-1.184,6.019,6.019,0,0,1,2.017.315,3.814,3.814,0,0,1,1.424.842,4.508,4.508,0,0,1,.832,1.082A4.409,4.409,0,0,1-9.231-9.99ZM8.27,0,7.178-3H1.85L.759,0h-2.7L3.09-13.117H6.05L11.045,0ZM4.514-10.286,2.7-5.328H6.327ZM30.433,0H27.75L21.793-9.306V0H19.24V-13.117h3.182L27.88-4.44v-8.677h2.553ZM48.766-9.99l-2.294.7a2.406,2.406,0,0,0-.7-1.276,2.282,2.282,0,0,0-1.684-.574,2.2,2.2,0,0,0-1.48.49,1.5,1.5,0,0,0-.574,1.175q0,1.2,1.424,1.48l1.832.351a4.734,4.734,0,0,1,2.7,1.387,3.559,3.559,0,0,1,.962,2.479,3.784,3.784,0,0,1-1.286,2.84A4.826,4.826,0,0,1,44.215.278a6.408,6.408,0,0,1-2.238-.37,4.329,4.329,0,0,1-1.61-.99A5.08,5.08,0,0,1,39.414-2.4,4.153,4.153,0,0,1,39-3.83l2.368-.629A2.681,2.681,0,0,0,42.189-2.7a2.828,2.828,0,0,0,2.044.7A2.468,2.468,0,0,0,45.8-2.442a1.412,1.412,0,0,0,.564-1.166,1.352,1.352,0,0,0-.416-.99,2.215,2.215,0,0,0-1.175-.564l-1.832-.37a4.664,4.664,0,0,1-2.516-1.313A3.421,3.421,0,0,1,39.5-9.287a3.746,3.746,0,0,1,1.341-2.923,4.711,4.711,0,0,1,3.228-1.184,6.019,6.019,0,0,1,2.016.315,3.814,3.814,0,0,1,1.424.842,4.508,4.508,0,0,1,.833,1.082A4.409,4.409,0,0,1,48.766-9.99Z"
                                            transform="translate(8241 -7387)" fill="#1a202c"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <p class="mt-4 sm:pl-4">
                            I can't tell you how much time I've saved using Workkit, the best tool out there for online collaboration. Now my team is always on sync, not even location or timezones can stop our development team from achieving next goals.
                        </p></div>
                </div>
            </div>
            <div class="max-w-md flex-1 w-full bg-white rounded-lg py-8 px-8 shadow-md flex-shrink-0 ml-16">
                <div>
                    <img class="mx-auto h-12 w-auto" src="{{ asset('img/logo.svg') }}" alt="Workkit"/>
                    <p class="mt-6 text-sm leading-5 text-center text-gray-900">Log in to your account</p>
                </div>
                <form class="mt-8" action="{{ route('login') }}" method="POST">
                    @csrf
                    <input type="hidden" name="remember" value="true"/>
                    <div class="rounded-md shadow-sm">
                        <div>
                            <input value="{{ old('email') }}" autofocus aria-label="Email address" name="email"
                                   type="email"
                                   required
                                   class="@if($errors->any()) border-red-600 @else border-gray-300 @endif outline-none focus:outline-none appearance-none rounded-none relative block w-full px-3 py-2 border placeholder-gray-500 text-gray-900 rounded-t-md sm:text-sm sm:leading-5"
                                   placeholder="Email address"/>
                        </div>
                        <div class="-mt-px">
                            <input aria-label="Password" name="password" type="password" required
                                   class="@if($errors->any()) border-red-600 @else border-gray-300 @endif appearance-none rounded-none relative block w-full px-3 py-2 border placeholder-gray-500 text-gray-900 rounded-b-md focus:z-10 sm:text-sm sm:leading-5"
                                   placeholder="Password"/>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" type="checkbox"
                                   class="form-checkbox h-4 w-4 text-indigo-600 transition duration-500 ease-in-out"/>
                            <label for="remember_me"
                                   class="ml-2 block text-sm leading-5 text-gray-900" {{ old('remember') ? 'checked' : '' }}>
                                Keep me signed in
                            </label>
                        </div>

                        <div class="text-sm leading-5">
                            <a href="#"
                               class="font-medium text-main hover:text-indigo-900 focus:outline-none focus:underline transition ease-in-out duration-500">
                                Lost password?
                            </a>
                        </div>
                    </div>

                    @if($errors->any())
                        <p class="mt-4 text-sm leading-5 text-red-600">
                            These credentials do not match our records.
                        </p>
                    @endif

                    <div class="mt-4">
                        <button type="submit"
                                class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-full text-white bg-main hover:bg-indigo-900 focus:outline-none focus:accent focus:shadow-outline-indigo active:accent transition duration-500 ease-in-out">
                      <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <svg
                            class="h-5 w-5 text-indigo-300 group-hover:text-indigo-400 transition ease-in-out duration-500"
                            fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd"
                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                clip-rule="evenodd"/>
                        </svg>
                      </span>
                            Let's get to work
                        </button>
                    </div>
                    <div class="mt-6">
                        <div class="flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                            <div class="relative justify-center text-sm leading-5 flex-shrink-0">
                                <span class="px-2 text-gray-500">Don't have an account?</span>
                            </div>
                            <div class="w-full border-t border-gray-300"></div>
                        </div>

                        <div class="mt-6">
                            <a href="{{ route('register') }}"
                               class="block w-full bg-gray-100 text-center rounded-full py-2 px-3 border border-gray-200 text-gray-900 font-medium hover:border-gray-400 focus:outline-none focus:border-gray-400 sm:text-sm sm:leading-5">
                                Register new account
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
