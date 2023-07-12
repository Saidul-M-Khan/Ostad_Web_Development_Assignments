<!-- Component Code -->
<div id="post-container">
    <!-- <div id="content-div" class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16 relative">
        <div class="mb-5 max-w-2xl mx-auto">
            <h1 href="#" class="text-gray-900 font-bold text-3xl mb-2">
                title
            </h1>
            <div class="text-gray-700 text-xs flex my-6 flex justify-between">
                <div class="flex items-center">
                    <div class="text-sm">
                        <a
                            href="#"
                            class="text-green-800 font-medium leading-none hover:text-indigo-600 transition duration-500 ease-in-out"
                            >[Username]</a
                        >
                        <p class="text-gray-600 text-xs">
                            Upload Date: [7/11/2023]
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="bg-cover h-64 text-center overflow-hidden"
            style="
                height: 450px;
                background-image: url('https://api.time.com/wp-content/uploads/2020/07/never-trumpers-2020-election-01.jpg?quality=85&w=1201&h=676&crop=1');
            "
            title="Woman holding a mug"
        ></div>

        <div class="max-w-2xl mx-auto">
            <div
                class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal"
            >
                <div class="">
                    <p class="text-base leading-8 my-5">
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a
                        type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining
                        essentially unchanged. It was popularised in the 1960s with
                        the release of Letraset sheets containing Lorem Ipsum
                        passages, and more recently with desktop publishing software
                        like Aldus PageMaker including versions of Lorem Ipsum
                    </p>

                    <a
                        href="#"
                        class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out"
                        >#Election </a
                    >,
                    <a
                        href="#"
                        class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out"
                        >#people </a
                    >,
                    <a
                        href="#"
                        class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out"
                        >#Election2020 </a
                    >,
                    <a
                        href="#"
                        class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out"
                        >#trump </a
                    >,<a
                        href="#"
                        class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out"
                        >#Joe
                    </a>
                </div>
            </div>
        </div>
    </div> -->
</div>

<script>
    post();
    async function post() {
        try {
            let URL = `/post/${postId}`;

            // Loader Show Content Hide
            document.getElementById("loading-div").classList.remove("hidden");
            document.getElementById("post-container").classList.add("hidden");

            let response = await axios.get(URL);

            // Loader Hide Content Show
            document.getElementById("loading-div").classList.add("hidden");
            document.getElementById("post-container").classList.remove("hidden");

            console.log(response.data);

            document.getElementById("post-container").innerHTML = `
            <div id="content-div" class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16 relative">
        <div class="mb-5 max-w-2xl mx-auto">
            <h1 href="#" class="text-gray-900 font-bold text-3xl mb-2">
                [Post Title]
            </h1>
            <div class="text-gray-700 text-xs flex my-6 flex justify-between">
                <div class="flex items-center">
                    <div class="text-sm">
                        <a
                            href="#"
                            class="text-green-800 font-medium leading-none hover:text-indigo-600 transition duration-500 ease-in-out"
                            >[Username]</a
                        >
                        <p class="text-gray-600 text-xs">
                            Upload Date: [7/11/2023]
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="bg-cover h-64 text-center overflow-hidden"
            style="
                height: 450px;
                background-image: url('https://api.time.com/wp-content/uploads/2020/07/never-trumpers-2020-election-01.jpg?quality=85&w=1201&h=676&crop=1');
            "
            title="Woman holding a mug"
        ></div>

        <div class="max-w-2xl mx-auto">
            <div
                class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal"
            >
                <div class="">
                    <p class="text-base leading-8 my-5">
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a
                        type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining
                        essentially unchanged. It was popularised in the 1960s with
                        the release of Letraset sheets containing Lorem Ipsum
                        passages, and more recently with desktop publishing software
                        like Aldus PageMaker including versions of Lorem Ipsum
                    </p>

                    <a
                        href="#"
                        class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out"
                        >#Election </a
                    >,
                    <a
                        href="#"
                        class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out"
                        >#people </a
                    >,
                    <a
                        href="#"
                        class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out"
                        >#Election2020 </a
                    >,
                    <a
                        href="#"
                        class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out"
                        >#trump </a
                    >,<a
                        href="#"
                        class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out"
                        >#Joe
                    </a>
                </div>
            </div>
        </div>
    </div>
            `;
        } catch (e) {
            alert(e);
        }
    }
</script>



