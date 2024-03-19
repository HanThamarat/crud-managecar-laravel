<button id="dropdownMenuIconHorizontalButton" onclick="moreOption()" data-dropdown-toggle="dropdownDotsHorizontal" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 rounded-lg " type="button"> 
    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
      <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
    </svg>
  </button>
  
  <!-- Dropdown menu -->
  <div id="dropdownDotsHorizontal" class="z-10 bg-white hidden divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
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