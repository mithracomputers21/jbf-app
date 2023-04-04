<div class="w-screen flex item-center justify-center">
    <div class="max-w-lg mx-auto p-10 border border-gray-200 rounded-lg">
        <h1 class="text-blue">புதிய படிப்பகம் கட்ட அல்லது இயங்கும் படிப்பகத்தை இணைக்க விண்ணப்பம்</h1>
    <form wire:submit.prevent="sponsors">
        {{ $this->form }}
    
        <button type="submit" class="w-full bg-blue-500 text-white rounded-md mt-3 py-2.5">
            Submit
        </button>
    </form>
    </div>
</div>
