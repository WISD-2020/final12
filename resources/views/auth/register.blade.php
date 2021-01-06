<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('admin.member.store') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div>
                <x-jet-label for="room_id" value="{{ __('room_id') }}" />
                <x-jet-input id="room_id" class="block mt-1 w-full"  name="room_id" :value="old('room_id')" required/>
            </div>

            <div>
                <x-jet-label for="account" value="{{ __('account') }}" />
                <x-jet-input id="account" class="block mt-1 w-full" type="text" name="account" :value="old('account')" required/>
            </div>

            <div>
                <x-jet-label for="id_number" value="{{ __('id_number') }}" />
                <x-jet-input id="id_number" class="block mt-1 w-full" type="text" name="id_number" :value="old('id_number')" required/>
            </div>


            <div>
                <x-jet-label for="gender" value="{{ __('gender') }}" />
                <select id="gender" name="gender">
                    <option value="1">男</option>
                    <option value="0">女</option>

                </select>
{{--                <input type="radio" id="gender" name="gender" value="1">男--}}
{{--                <input type="radio" id="gender" name="gender" value="0"checked>女--}}


            </div>

            <div>
                <x-jet-label for="phone" value="{{ __('phone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required/>
            </div>

            <div>
                <x-jet-label for="address" value="{{ __('address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required/>
            </div>

            <div>
                <x-jet-label for="birthday" value="{{ __('birthday') }}" />
                <x-jet-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" :value="old('birthday')" />
            </div>

            <div>
                <x-jet-label for="StartTime" value="{{ __('StartTime') }}" />
                <x-jet-input id="StartTime" class="block mt-1 w-full" type="date" name="StartTime" :value="old('StartTime')" />
            </div>

            <div>
                <x-jet-label for="EndTime" value="{{ __('EndTime') }}" />
                <x-jet-input id="EndTime" class="block mt-1 w-full" type="date" name="EndTime" :value="old('EndTime')" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
