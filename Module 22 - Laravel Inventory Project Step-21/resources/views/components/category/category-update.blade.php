<section>
    <div
        class="py-12 dark:bg-black bg-gray-700 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0 hidden"
        id="update-modal"
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
                        Update Category
                    </p>
                </div>
                <form id="update-form">
                    <div class="mt-5">
                        <div
                            class="bg-gray-50 dark:bg-gray-700 border rounded dark:border-gray-700 border-gray-200"
                        >
                            <input
                                id="categoryNameUpdate"
                                class="py-3 pl-4 bg-transparent text-sm font-medium leading-none text-gray-600 placeholder-gray-600 dark:placeholder-gray-300 dark:text-gray-300 w-full focus:outline-none"
                                type="text"
                                placeholder="Enter Category Name"
                            />
                            <input class="hidden" id="updateID" />
                        </div>
                    </div>
                </form>
                <div
                    class="flex space-x-6 items-center justify-end w-full mt-5"
                >
                    <button
                        id="update-modal-close"
                        onclick="updateModalHandler(false)"
                        class="w-1/2 focus:outline-none py-3 bg-indigo-100 hover:bg-indigo-200 rounded"
                    >
                        <p
                            class="text-xs font-medium leading-3 text-indigo-700"
                        >
                            Back
                        </p>
                    </button>
                    <button
                        id="update-btn"
                        class="w-1/2 focus:outline-none py-3 bg-indigo-700 hover:bg-opacity-80 dark:bg-indigo-600 rounded"
                    >
                        <p class="text-xs font-medium leading-3 text-gray-100">
                            Update
                        </p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>



<script>
    let updateModal = document.getElementById("update-modal");

    function updateModalHandler(val) {
        if (val) {
            fadeIn(updateModal);
        } else {
            fadeOut(updateModal);
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

<script>
    async function FillUpUpdateForm(id) {
        document.getElementById("updateID").value = id;
        showLoader();
        let res = await axios.post("/CategoryById", { id: id });
        console.log(res.data.data);
        hideLoader();
        document.getElementById("categoryNameUpdate").value = res.data["name"];
    }
</script>

<!-- Update -->
<script>
    let updateBtn = document.getElementById("update-btn");
    updateBtn.addEventListener("click", update);

    async function update() {
        event.preventDefault();
        let categoryName = document.getElementById("categoryNameUpdate").value;
        let updateID = document.getElementById("updateID").value;

        if (categoryName.length === 0) {
            errorToast("Category Required !");
        } else {
            updateModalHandler(true);
            let data = {
                name: categoryName,
                id: updateID,
            };
            showLoader();
            let res = await axios.post("/CategoryUpdate", data);
            hideLoader();

            if (res.status === 200 && res.data === 1) {
                updateModalHandler(false);
                document.getElementById("update-form").reset();
                successToast("Category Updated Successfully");
                await getCategoriesData();
            } else {
                errorToast("Something went wrong");
            }
        }
    }
</script>
