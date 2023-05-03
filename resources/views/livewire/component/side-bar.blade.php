<div>
  <div style="min-height: 700px" class="w-64 absolute lg:relative bg-white shadow {-- h-screen --} flex-col justify-between hidden lg:flex pb-12">
    <div class="px-8">
        <div class="h-16 w-full flex items-center">
            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_indicator-svg1.svg" alt="logo">
        </div>
        <ul class="mt-12">
            <li class="flex w-full justify-between text-indigo-700 cursor-pointer items-center mb-6">
                <a href="/create" class="flex items-center">
                    <span class="text-sm">Create</span>
                </a>
            </li>
            <li class="flex w-full justify-between text-indigo-700 cursor-pointer items-center mb-6">
                <a href="/notice" class="flex items-center">
                    <span class="text-sm">공고</span>
                </a>
                <div class="py-1 px-3 bg-indigo-700 rounded text-white flex items-center justify-center text-xs">5</div>
            </li>
            <li class="flex w-full justify-between text-gray-600 hover:text-indigo-700 cursor-pointer items-center mb-6">
                <a href="/news" class="flex items-center">
                    <span class="text-sm">소식</span>
                </a>
                <div class="py-1 px-3 bg-indigo-700 rounded text-white flex items-center justify-center text-xs">8</div>
            </li>
        </ul>
    </div>
  </div> 

  <!--Mobile responsive sidebar-->
  <div class="absolute w-full h-full transform -translate-x-full z-40 lg:hidden" id="mobile-nav">
      <div class="bg-gray-800 opacity-50 w-full h-full absolute" onclick="sidebarHandler(false)"></div>
      <div class="w-64 md:w-96 absolute z-40 bg-white shadow h-full flex-col justify-between lg:hidden pb-4 transition duration-150 ease-in-out">
          <div class="flex flex-col justify-between h-full">
              <div>
                  <div class="flex items-center justify-between px-8">
                      <div class="h-16 w-full flex items-center">
                          <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_indicator-svg1.svg" alt="logo">
                      </div>
                      <div id="closeSideBar" class="flex items-center justify-center h-10 w-10 " onclick="sidebarHandler(false)">
                          <button aria-label="close sidebar"  class="focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                          <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_indicator-svg2.svg" alt="cross">
                          </button>
                      </div>
                  </div>
                  <div class="px-8">
                      <ul class="mt-12">
                          <li class="flex w-full justify-between text-indigo-700 cursor-pointer items-center mb-6">
                              <a href="javascript:void(0)" class="flex items-center">
                                  <span class="xl:text-base md:text-2xl text-base ml-2">공고</span>
                              </a>
                              <div class="py-1 px-3 bg-indigo-700 rounded text-white flex items-center justify-center text-xs">5</div>
                          </li>
                          <li class="flex w-full justify-between text-gray-600 hover:text-indigo-700 cursor-pointer items-center mb-6">
                              <a href="javascript:void(0)" class="flex items-center">
                                  <span class="xl:text-base md:text-2xl text-base ml-2">소식</span>
                              </a>
                              <div class="py-1 px-3 bg-indigo-700 rounded text-white flex items-center justify-center text-xs">8</div>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="w-full">
                  <div class="w-full flex items-center justify-between px-6 pt-1">
                      <div class="flex items-center">
                          <img alt="display avatar" role="img" src="https://tuk-cdn.s3.amazonaws.com/assets/components/boxed_layout/bl_1.png" class="w-8 h-8 rounded-md" />
                          <p class="md:text-xl text-gray-800 text-base leading-4 ml-2">Jane Doe</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>