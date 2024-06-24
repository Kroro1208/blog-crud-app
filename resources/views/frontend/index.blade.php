<x-app-web-layout>
    <x-slot name='title'>
        My Laravel App
    </x-slot>
    <div class="py-5">
        <div class="container">
            @php
                $successMessage = "成功しました!!";
                $type = "success";
            @endphp
            <x-alert-message :type="$type" :message="$successMessage" />
            <hr>
            <h4>Welcome to Index Page</h4>
            <hr>
            <x-form.label value='My First Name'/>
            <x-form.label>
                My Slot Name
            </x-form.label>
        </div>
    </div>
    <x-slot name="scripts">
        <script>
            // alert('this is my alert');
        </script>
    </x-slot>
</x-app-web-layout>
