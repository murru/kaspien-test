<x-layout>
    {{-- Wrapper --}}
    <div class="relative flex flex-col gap-4 items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        
        {{-- CSV File Form --}}
        <form
            action="{{ route('csv-import') }}"
            method="POST"
            enctype="multipart/form-data"
            class="flex flex-col gap-4"
        >
            @csrf
            <label
                class="w-64 flex flex-col items-center px-4 py-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-white hover:text-gray-800 text-white ease-linear transition-all duration-150"
            >
                <i class="fas fa-cloud-upload-alt fa-3x"></i>
                <span id="fileName" class="mt-2 text-base leading-normal text-center">Select a file</span>
                <input id="csvFile" name="csvFile[]" type="file" class="hidden" />
            </label>

            {{-- Submit Button --}}
            <button type="submit" class="uppercase border border-blue bg-blue-800 rounded-lg p-3 text-white">SEND</button>    
        </form>

        {{-- Return to main view --}}
        <a class="text-gray-500 underline" href="{{ url('/') }}">Return to main</a>

        {{-- Render Validation Errors --}}
        @if($errors->any())
            <label
                class="w-64 flex flex-col items-center px-4 py-6 bg-red-800 shadow sm:rounded-lg shadow-md tracking-wide uppercase border border-blue cursor-pointer text-white ease-linear transition-all duration-150"
            >
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </label>
        @endif
    </div>

    {{-- JS --}}
    <script>
        // File name span
        const fileName = document.querySelector("#fileName");

        // File input
        const csvFileInput = document.querySelector("#csvFile");
        
        // Clear file value on click (reset value)
        csvFileInput.onclick = (event) => {
            event.target.value = '';
        }

        // Set file and change file name on spam
        csvFileInput.onchange = (event) => {
            const selectedFile = event.target.files[0];
            fileName.textContent = selectedFile.name;
            console.log(selectedFile);
        }
    </script>
</x-layout>