<div id="content-div" class="dark:bg-gray-800 dark:text-gray-100">
    <div id="post-list">
        <!-- Post List -->
    </div>
</div>

<script>
    postList();
    async function postList() {
        try {
            let URL = "/posts";

            // Loader Show Content Hide
            document.getElementById("loading-div").classList.remove("hidden");
            document.getElementById("content-div").classList.add("hidden");

            let response = await axios.get(URL);

            // Loader Hide Content Show
            document.getElementById("loading-div").classList.add("hidden");
            document.getElementById("content-div").classList.remove("hidden");

            console.log(response.data);
            response.data.forEach((item) => {
                document.getElementById("post-list").innerHTML += `
    <div
        class="container max-w-4xl px-10 py-6 mx-auto rounded-lg shadow-sm dark:bg-gray-900"
    >

        <div class="flex items-center justify-between">
            <span class="text-sm dark:text-gray-400"><strong>Upload Date:</strong> ${item[
                "created_at"
            ].slice(0, 10)}</span>
        </div>

        <div class="mt-3">
            <a
                rel="noopener noreferrer"
                href="#"
                class="text-2xl font-bold hover:underline"
                >${item["title"]}</a
            >
            <p class="mt-2">
                ${item["content"]}
            </p>
        </div>
        <div class="flex items-center justify-between mt-4">
            <a
                rel="noopener noreferrer"
                href="/blog/post/${item["id"]}"
                class="hover:underline dark:text-violet-400"
                >Read more</a
            >
            <div>
                <a rel="noopener noreferrer" href="#" class="flex items-center">
                    <span class="hover:underline dark:text-gray-400"
                        >Comment: ${item["comments"].length}</span
                    >
                </a>
            </div>
        </div>
    </div>`;
            });
        } catch (e) {
            alert(e);
        }
    }
</script>
