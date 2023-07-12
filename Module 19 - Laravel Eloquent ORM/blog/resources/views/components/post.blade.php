<!-- Component Code -->
<div id="post-container">
    <!-- Post -->
    <input id="postId" name="postId" type="hidden" value="{{ $postId }}" />
</div>

<script>
    post();
    async function post() {
        try {
            const postId = document.getElementById("postId").value;
            let URL = `/post/${postId}`;

            // Loader Show Content Hide
            document.getElementById("loading-div").classList.remove("hidden");
            document.getElementById("post-container").classList.add("hidden");

            let response = await axios.get(URL);

            // Loader Hide Content Show
            document.getElementById("loading-div").classList.add("hidden");
            document
                .getElementById("post-container")
                .classList.remove("hidden");

            // console.log(response.data);
            const {
                title,
                content,
                user_id,
                image,
                created_at,
                tags,
                comments,
            } = response.data;

            document.getElementById("post-container").innerHTML = `
            <div id="content-div" class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16 relative">
        <div class="mb-5 max-w-2xl mx-auto">
            <h1 href="#" class="text-gray-900 font-bold text-3xl mb-2">
                ${title}
            </h1>
            <div class="text-gray-700 text-xs flex my-6 flex justify-between">
                <div class="flex items-center">
                    <div class="text-sm">
                        <a
                            href="#"
                            class="text-green-800 font-medium leading-none hover:text-indigo-600 transition duration-500 ease-in-out"
                            >User ID: ${user_id}</a
                        >
                        <p class="text-gray-600 text-xs">
                            Upload Date: ${created_at.slice(0, 10)}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="bg-cover lg:h-64 text-center overflow-hidden"
            style="
                height: 450px;
                background-image: url('${image}');
            "
            title="Woman holding a mug"
        ></div>

        <div class="max-w-2xl mx-auto">
            <div
                class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal"
            >
                <div class="">
                    <p class="text-base leading-8 my-5">
                        ${content}
                    </p>

                    <div class="flex flex-wrap">
                        ${tags.map(
                            (tag) => `<a
                        href="#"
                        class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out"
                        >#${tag["name"]} </a
                    >`
                        )}
                    </div>


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
