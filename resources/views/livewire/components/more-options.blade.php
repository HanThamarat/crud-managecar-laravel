  
  <!-- Dropdown menu -->
  <div id="dropdownDotsHorizontal" class="mt-5 z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton">
        <li>
          <button href="#" onclick="formPop()" wire:click="edit({{ $lists->id }})" class="w-full block px-4 py-2 text-black hover:bg-gray-100 hover:bg-gray-600 hover:text-white">Edit</button>
        </li>
        <li>
          <button onclick="showDialog()" class="w-full block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 text-black dark:hover:text-white">Delete</button>
        </li>
      </ul>
  </div>

  <script>
    // function moreOption() {
    //     let more = document.getElementById('dropdownDotsHorizontal');
    //     more.classList.remove('hidden');
    // }
  </script>