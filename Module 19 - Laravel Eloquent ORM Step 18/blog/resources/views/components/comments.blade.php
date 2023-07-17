<section
    class="relative flex items-center justify-center antialiased bg-white bg-gray-100 min-w-screen"
>
    <div id="comment-list" class="container px-0 mx-auto sm:px-5">
        <!-- Comments -->
    </div>
    <input id="postId" name="postId" type="hidden" value="{{ $postId }}" />
</section>

<script>
    commentList();
    async function commentList() {
        try {
            const postId = document.getElementById("postId").value;
            let URL = `/post/${postId}/comments`;

            let response = await axios.get(URL);

            console.log(response.data);

            const comments = response.data;

            comments.forEach((comment) => {
                document.getElementById("comment-list").innerHTML += `
                <div
            class="flex-col w-full py-5 mx-auto my-5 bg-white border-b-2 border-r-2 border-gray-200 sm:px-4 sm:py-4 md:px-4 sm:rounded-lg sm:shadow-sm md:w-2/3"
        >
            <div class="flex flex-row md-10">
                <img
                    class="w-12 h-12 border-2 border-gray-300 rounded-full"
                    alt="Anonymous avatar"
                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&faces=1&faceindex=1&facepad=2.5&w=500&h=500&q=80"
                />
                <div class="flex-col mt-1">
                    <div
                        class="flex items-center flex-1 px-4 font-bold leading-tight"
                    >
                        ${comment["user_name"]}
                        <span class="ml-2 text-xs font-normal text-gray-500"
                            >${comment["comment_created_at"].slice(0, 10)}</span
                        >
                    </div>
                    <div
                        class="flex-1 px-2 ml-2 text-sm font-medium leading-loose text-gray-600"
                    >
                    ${comment["comment_content"]}
                    </div>
                </div>
            </div>
        </div>`;
            });
        } catch (e) {
            alert(e);
        }
    }
</script>
