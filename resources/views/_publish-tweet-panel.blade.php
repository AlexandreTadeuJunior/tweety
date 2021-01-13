<div class="border border-blue-400 rounded-lg p-8 mb-8">
    <form method="POST" action= "/tweets">
        @csrf
        <textarea name="body" class="w-full" placeholder="Whats Up?" required></textarea>
        <hr class="my-4">
        <footer class="flex justify-between">
            <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">tweety-a-roo</button>
        </footer>
    </form>
</div>