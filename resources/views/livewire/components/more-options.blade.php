  
  <!-- Dropdown menu -->
  <div id="dropdownDotsHorizontal" class="mt-5 z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton">
        <li>
          <a href="#" onclick="formPop()" wire:click="edit({{ $lists->id }})" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
        </li>
        <li>
          <a href="#" onclick="showDialog()" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
        </li>
      </ul>
  </div>

  <script>
    function moreOption() {
        let more = document.getElementById('dropdownDotsHorizontal');
        more.classList.remove('hidden');
    }
  </script>