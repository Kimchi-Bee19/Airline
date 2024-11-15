<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    @vite('resources/css/app.css')
</head>
<body>
  <footer class="w-screen bg-neutral-50 dark:bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-rows sm:grid-rows lg:grid-cols-3 gap-8 py-8 justify-center">
                <!-- Logo Column -->
                <div class="flex items-center justify-center lg:justify-start mb-4 mt-0">
                    <h1 class="text-2xl font-bold text-green-800">Airline</h1>
                </div>
                <!-- Customer Center Column -->
                <div class="text-left">
                    <h4 class="text-lg md:text-center sm:text-center lg:text-left text-gray-900 dark:text-gray-100 font-medium mb-7">Customer Center</h4>
                    <ul class="text-sm space-y-4">
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-2 text-gray-600 dark:text-gray-400">
                          <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100">Gedung Graha Ganesha</span>
                    </li>
                    <li class="flex items-center">
                        <a class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 ml-8">Lantai 1 Suite 120 & 130 Jl. Hayam Wuruk No.28, Kelurahan Kebon Klapa Kecamatan Gambir, Jakarta Pusat, DKI Jakarta</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-auto mr-2 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60" fill="currentColor">
                          <path d="M12.5762 56.8405L15.8608 44.6381C13.2118 39.8847 12.3702 34.3378 13.4904 29.0154C14.6106 23.693 17.6176 18.952 21.9594 15.6624C26.3012 12.3729 31.6867 10.7554 37.1276 11.1068C42.5685 11.4582 47.6999 13.755 51.5802 17.5756C55.4604 21.3962 57.8292 26.4844 58.2519 31.9065C58.6746 37.3286 57.1228 42.7208 53.8813 47.0938C50.6399 51.4668 45.9261 54.5271 40.605 55.7133C35.284 56.8994 29.7125 56.1318 24.9131 53.5513L12.5762 56.8405ZM25.508 48.985L26.2709 49.4365C29.7473 51.4918 33.8076 52.3423 37.8191 51.8555C41.8306 51.3687 45.5681 49.5719 48.4489 46.7452C51.3298 43.9185 53.1923 40.2206 53.7463 36.2279C54.3002 32.2351 53.5143 28.1717 51.5113 24.6709C49.5082 21.1701 46.4003 18.4285 42.6721 16.8734C38.9438 15.3184 34.8045 15.0372 30.8993 16.0736C26.994 17.11 23.5422 19.4059 21.0817 22.6035C18.6212 25.801 17.2903 29.7206 17.2963 33.7514C17.293 37.0937 18.2197 40.3712 19.9732 43.2192L20.4516 44.0061L18.6153 50.8167L25.508 48.985Z"/>
                          <path fill-rule="evenodd" clip-rule="evenodd"
                           d="M44.0259 36.8847C43.5787 36.5249 43.0549 36.2716 42.4947 36.1442C41.9344 36.0168 41.3524 36.0186 40.793 36.1495C39.9524 36.4977 39.4093 37.8134 38.8661 38.4713C38.7516 38.629 38.5833 38.7396 38.3928 38.7823C38.2024 38.8251 38.0028 38.797 37.8316 38.7034C34.7543 37.5012 32.1748 35.2965 30.5122 32.4475C30.3704 32.2697 30.3033 32.044 30.325 31.8178C30.3467 31.5916 30.4555 31.3827 30.6286 31.235C31.2344 30.6368 31.6791 29.8959 31.9218 29.0809C31.9756 28.1818 31.7691 27.2863 31.3269 26.5011C30.985 25.4002 30.3344 24.42 29.4518 23.6762C28.9966 23.472 28.4919 23.4036 27.9985 23.4791C27.5052 23.5546 27.0443 23.7709 26.6715 24.1019C26.0242 24.6589 25.5104 25.3537 25.168 26.135C24.8256 26.9163 24.6632 27.7643 24.6929 28.6165C24.6949 29.0951 24.7557 29.5716 24.8739 30.0354C25.1742 31.1497 25.636 32.2144 26.2447 33.1956C26.6839 33.9473 27.163 34.6749 27.6801 35.3755C29.3607 37.6767 31.4732 39.6305 33.9003 41.1284C35.1183 41.8897 36.42 42.5086 37.7799 42.973C39.1924 43.6117 40.752 43.8568 42.2931 43.6824C43.1711 43.5499 44.003 43.2041 44.7156 42.6755C45.4281 42.1469 45.9995 41.4518 46.3795 40.6512C46.6028 40.1672 46.6841 39.6057 46.5738 39.0601C46.2382 37.972 45.4934 36.8839 44.0259 36.8847Z"/>
                        </svg>
                     <span class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100">0812-1111-8456</span>
                    </li>
                    </ul>
                </div>
                <!-- Consumer Complaints Column -->
                <div class="text-left">
                    <h4 class="text-lg md:text-center sm:text-center lg:text-left text-gray-900 dark:text-gray-100 font-medium mb-7">Consumer Complaints Service Contact Information</h4>
                    <ul class="text-sm space-y-4">
                        <li><a class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100">Directorate General of Consumer Protection and Trade Compliance, Ministry of Trade of the Republic of Indonesia</a></li>
                        <li><a class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100">WhatsApp Ditjen PKTN: 0853-1111-1010</a></li>
                    </ul>
                </div>
            </div>
            <!--Footer Bottom-->
            <div class="py-7 flex flex-col items-center lg:flex-row lg:items-center lg:justify-between">
              <span class="text-sm text-gray-500 dark:text-gray-400 mb-4 lg:mb-0 lg:text-center">©2023 FORE COFFEE, All rights reserved</span>
                <!-- Icon Social Media -->
                <div class="flex space-x-4 mt-4 lg:mt-4 lg:ml-4">
                    <a class="w-9 h-9 rounded-full bg-gray-700 dark:bg-gray-600 flex justify-center items-center hover:bg-red-600" href="#">
                        <svg class="w-[1.25rem] h-[0.875rem] text-white" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9346 1.13529C14.5684 1.30645 15.0665 1.80588 15.2349 2.43896C15.5413 3.58788 15.5413 5.98654 15.5413 5.98654C15.5413 5.98654 15.5413 8.3852 15.2349 9.53412C15.0642 10.1695 14.5661 10.669 13.9346 10.8378C12.7886 11.1449 8.19058 11.1449 8.19058 11.1449C8.19058 11.1449 3.59491 11.1449 2.44657 10.8378C1.81277 10.6666 1.31461 10.1672 1.14622 9.53412C0.839844 8.3852 0.839844 5.98654 0.839844 5.98654C0.839844 5.98654 0.839844 3.58788 1.14622 2.43896C1.31695 1.80353 1.81511 1.30411 2.44657 1.13529C3.59491 0.828125 8.19058 0.828125 8.19058 0.828125C8.19058 0.828125 12.7886 0.828125 13.9346 1.13529ZM10.541 5.98654L6.72178 8.19762V3.77545L10.541 5.98654Z" fill="currentColor"/>
                        </svg> 
                    </a>
                    <a class="w-9 h-9 rounded-full bg-gray-700 dark:bg-gray-600 flex justify-center items-center hover:bg-blue-500" href="#">
                        <svg class="w-[1.25rem] h-[1.25rem] text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.953 4.57c-.885.39-1.83.654-2.825.774a4.904 4.904 0 0 0 2.14-2.72c-.946.56-1.99.968-3.1 1.184a4.905 4.905 0 0 0-8.36 4.48A13.923 13.923 0 0 1 1.67 3.149a4.893 4.893 0 0 0 1.523 6.552c-.832-.027-1.616-.255-2.309-.634v.063a4.907 4.907 0 0 0 3.945 4.814c-.683.186-1.388.286-2.117.286-.517 0-1.026-.05-1.516-.148a4.906 4.906 0 0 0 4.588 3.416A9.85 9.85 0 0 1 1.16 21.23a9.917 9.917 0 0 1-1.17-.068 13.868 13.868 0 0 0 7.548 2.212c9.052 0 14.007-7.502 14.007-14.007 0-.215-.004-.429-.014-.642A10.05 10.05 0 0 0 24 5.64a9.938 9.938 0 0 1-2.847.779z" fill="currentColor"/>
                        </svg>
                    </a>
                    <a class="w-9 h-9 rounded-full bg-gray-700 dark:bg-gray-600 flex justify-center items-center hover:bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500">
                        <svg class="w-[1.25rem] h-[1.25rem] text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd" fill="currentColor"></path>
                        </svg>
                    </a>
                    <a class="w-9 h-9 rounded-full bg-gray-700 dark:bg-gray-600 flex justify-center items-center hover:bg-indigo-600">
                        <svg class="w-[1.25rem] h-[1.25rem] text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.225 0H1.775C.794 0 0 .796 0 1.775v20.45C0 23.204.794 24 1.775 24h20.45c.981 0 1.775-.796 1.775-1.775V1.775C24 .796 23.206 0 22.225 0zm-14.195 20.452h-3.743v-10.8h3.743v10.8zm-1.872-12.389c-1.221 0-2.23-.998-2.23-2.235 0-1.241 1.012-2.239 2.235-2.239 1.225 0 2.235 1.005 2.235 2.239 0 1.237-1.01 2.235-2.235 2.235zm15.098 12.389h-3.741v-5.45c0-1.302-.026-2.982-1.819-2.982-1.82 0-2.101 1.426-2.101 2.896v5.536h-3.743v-10.8h3.596v1.48h.051c.497-.942 1.707-1.936 3.511-1.936 3.76 0 4.451 2.471 4.451 5.678v6.577z" fill="currentColor"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>