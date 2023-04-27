<nav class="h-16 flex items-center lg:items-stretch justify-end lg:justify-between bg-white shadow relative z-0">
  <div class="hidden lg:flex w-full px-6">
      <div class="w-full hidden lg:flex items-center">
          <div class="w-full flex items-center pl-8 justify-end">
              <div class="flex items-center relative cursor-pointer" onclick="dropdownHandler(this)">
                  <div class="rounded-full">
                      <ul class="p-2 w-full border-r bg-white absolute rounded left-0 shadow mt-12 sm:mt-16 hidden">
                          <li class="flex w-full justify-between text-gray-600 hover:text-indigo-700 cursor-pointer items-center">
                              <div class="flex items-center">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" />
                                      <circle cx="12" cy="7" r="4" />
                                      <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                  </svg>
                                  <a href="havascript:"void(0) class="text-sm ml-2">My Profile</a>
                              </div>
                          </li>
                          <li class="flex w-full justify-between text-gray-600 hover:text-indigo-700 cursor-pointer items-center mt-2">
                              <div class="flex items-center">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" />
                                      <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                      <path d="M7 12h14l-3 -3m0 6l3 -3" />
                                  </svg>
                                  <a href="havascript:"void(0) class="text-sm ml-2">Sign out</a>
                              </div>
                          </li>
                      </ul>
                      <div class="relative">
                          <img class="rounded-full h-10 w-10 object-cover" src="https://tuk-cdn.s3.amazonaws.com/assets/components/sidebar_layout/sl_1.png" alt="display avatar" role="img" />
                          <div class="w-2 h-2 rounded-full bg-green-400 border border-white absolute inset-0 mb-0 mr-0 m-auto"></div>
                      </div>
                  </div>
                  <p class="text-gray-800 text-sm mx-3">Jane Doe</p>
                  <button aria-label="toggle profile options" class="cursor-pointer text-gray-600 focus:outline-none focus:ring-2 rounded focus:ring-gray-600" onclick="dropdownHandler(this)">
                      <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_indicator-svg6.svg" alt="">
                  </button>
              </div>
          </div>
      </div>
  </div>
  <button aria-label="open sidebar Menu" class="text-gray-600 mr-8 visible lg:hidden relative focus:outline-none focus:ring-2 rounded focus:ring-gray-600" onclick="sidebarHandler(true)" id="menu">
      <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_indicator-svg7.svg" alt="toggler">
  </button>
</nav>

<script>
  let sideBar = document.getElementById("mobile-nav");
  let menu = document.getElementById("menu");
  let cross = document.getElementById("cross");
  const sidebarHandler = (check) => {
      if (check) {
          sideBar.style.transform = "translateX(0px)";
          menu.classList.add("hidden");
          cross.classList.remove("hidden");
      } else {
          sideBar.style.transform = "translateX(-100%)";
          menu.classList.remove("hidden");
          cross.classList.add("hidden");
      }
  };
  function dropdownHandler(element) {
      let single = element.getElementsByTagName("ul")[0];
      single.classList.toggle("hidden");
  }
</script>