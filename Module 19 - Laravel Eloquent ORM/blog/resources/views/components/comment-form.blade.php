<center>
    <div class="flex mx-auto items-center justify-center shadow-lg max-w-3xl my-8 mx-8 mb-4">
        <form id="commentForm" class="w-full max-w-3xl bg-white rounded-lg px-4 pt-2">
            <input type="hidden" id="user_id" name="user_id" value="1" />
            <input type="hidden" id="post_id" name="post_id" value="{{ $postId }}">
            <div class="flex flex-wrap -mx-3 mb-6">
                <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>
                <div class="w-full md:w-full px-3 mb-2 mt-2">
                <textarea id="comment-field" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="content" placeholder='Type Your Comment'></textarea>
            </div>

            <div class="w-full md:w-full flex items-start md:w-full px-3">

                <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
                    <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="text-xs md:text-sm pt-px">Some HTML is okay.</p>
                </div>

                <div class="-mr-1">
                    <button type="submit" name="submit" id="submit" class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100" value='Post Comment'>Post Comment</button>
                </div>

            </div>

        </form>
    </div>
</center>



<script>

    let commentForm=document.getElementById('commentForm');
    let submitBtn=document.getElementById('submit');

    commentForm.addEventListener('submit',async (event) => {
        // event.preventDefault();
        let userId = document.getElementById('user_id').value;
        let postId = document.getElementById('post_id').value;
        let content = document.getElementById('comment-field').value;

        console.log(userId)
        console.log(userId)

        let formData = {
                user_id: userId,
                post_id: postId,
                content: content
            }
            let URl = "/comment/create";

            let result=await axios.post(URl, formData);

            document.getElementById("loading-div").classList.add("hidden");
            document.getElementById("content-div").classList.remove("hidden");

            // if(result.status===200 && result.data===1){
            //       alert('Your request has been submitted successfully');
            //       commentForm.reset();
            // }

    })


</script>
