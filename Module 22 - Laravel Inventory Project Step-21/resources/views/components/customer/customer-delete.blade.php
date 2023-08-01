<!-- <button id="delete-btn"
    class="float-right focus:outline-none mx-auto transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-4 sm:px-8 py-2 text-xs sm:text-sm"
    onclick="deleteModalHandler(true)"
>
    Create
</button> -->

<section>
    <div
        class="py-12 dark:bg-black bg-gray-700 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0 hidden"
        id="deleteModal"
    >
        <div
            role="alert"
            class="container mx-auto w-11/12 md:w-2/3 max-w-lg flex justify-center px-2"
        >
            <div
                class="relative w-96 bg-white dark:bg-gray-800 shadow px-3 md:px-6 pt-4 pb-6 rounded"
            >
                <div>
                    <p
                        class="text-base md:text-lg font-bold md:leading-none text-gray-800 dark:text-gray-100"
                    >
                        Delete Customer
                    </p>
                    <p class="mb-3 text-gray-500">
                        Once delete, you can't get it back.
                    </p>
                    <input class="hidden" id="deleteID" />
                </div>

                <div
                    class="flex space-x-6 items-center justify-end w-full mt-5"
                >
                    <button
                        onclick="deleteModalHandler(false)"
                        class="w-1/2 focus:outline-none py-3 bg-green-600 hover:bg-green-800 rounded"
                    >
                        <p class="text-xs font-medium leading-3 text-white">
                            Cancel
                        </p>
                    </button>
                    <button
                        id="delete-btn"
                        class="w-1/2 focus:outline-none py-3 bg-red-500 hover:bg-red-800 rounded"
                        onclick="customerDelete()"
                    >
                        <p class="text-xs font-medium leading-3 text-gray-100">
                            Delete
                        </p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Form Modal -->
<script>
    let deleteBtn = document.getElementById("delete-btn");
    let deleteModal = document.getElementById("deleteModal");

    function deleteModalHandler(val) {
        if (val) {
            fadeIn(deleteModal);
        } else {
            fadeOut(deleteModal);
        }
    }

    function fadeOut(el) {
        el.style.opacity = 1;
        (function fade() {
            if ((el.style.opacity -= 0.1) < 0) {
                el.style.display = "none";
            } else {
                requestAnimationFrame(fade);
            }
        })();
    }
    function fadeIn(el, display) {
        el.style.opacity = 0;
        el.style.display = display || "block";
        (function fade() {
            let val = parseFloat(el.style.opacity);
            if (!((val += 0.2) > 1)) {
                el.style.opacity = val;
                requestAnimationFrame(fade);
            }
        })();
    }
</script>

<!-- Delete -->
<script>
    async function customerDelete() {
        let id = document.getElementById("deleteID").value;
        deleteModalHandler(true);
        showLoader();
        let res = await axios.post("/CustomerDelete", { id: id });
        hideLoader();
        if (res.data === 1) {
            successToast("Customer is deleted!");
            deleteModalHandler(false);
            await getCustomersData();
        } else {
            errorToast("Request failed!");
        }
    }
</script>
