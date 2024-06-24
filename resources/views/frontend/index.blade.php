<x-app-web-layout>
    <x-slot name='title'>
        My Laravel App
    </x-slot>
    <div class="py-5">
        <div class="container">
            @php
                $successMessage = "成功しました!!"
            @endphp
            <x-alert-message :message="$successMessage"/>
            <h4>Welcome to Index Page</h4>
        </div>
    </div>
    <x-slot name="scripts">
        <script>
            // alert('this is my alert');
        </script>
    </x-slot>
</x-app-web-layout>
