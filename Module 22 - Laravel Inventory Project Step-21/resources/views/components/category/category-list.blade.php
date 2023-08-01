<h3 class="text-gray-700 text-3xl font-medium">Category Management</h3>

<div class="mt-8"></div>

<button
    id="create-btn"
    class="float-right focus:outline-none mx-auto transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-4 sm:px-8 py-2 text-xs sm:text-sm"

>
    Create
</button>


<h3 class="text-gray-700 text-xl font-semibold">Category Record</h3>
<div class="flex flex-col mt-8">
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div
            class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200 bg-white p-5"
        >
            <table class="min-w-full" id="tableData">
                <thead>
                    <tr>
                        <th
                            class="px-2 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                        ></th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                        >
                            Category Name
                        </th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                        ></th>

                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                        ></th>
                    </tr>
                </thead>

                <tbody class="bg-white" id="tableList"></tbody>
            </table>
        </div>
    </div>
</div>

<script>
    getCategoriesData();
    async function getCategoriesData() {
        showLoader();
        let response = await axios.get("/CategoryList");
        hideLoader();

        let categoriesData = response.data.data;

        let tableList = $("#tableList");
        let tableData = $("#tableData");

        tableData.DataTable().destroy();
        tableList.empty();

        categoriesData.forEach((data, index) => {
            let row = `
                    <tr>
                        <td
                                    class="px-6 py-4 whitespace-no-wrap border-b border-gray-200"
                                >
                                    <div class="text-sm leading-5 text-gray-900">
                                        ${index + 1}
                                    </div>
                                </td>

                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-left border-b border-gray-200 text-sm leading-5 font-medium"
                                >
                                    ${data["name"]}
                                </td>

                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium"
                                >
                                    <button data-id="${
                                        data["id"]
                                    }" class="editBtn bg-transparent float-left hover:bg-green-500 text-green-700 font-semibold hover:text-black p-2 border border-green-500 hover:border-transparent rounded" onclick="updateModalHandler(true)">
                                        Edit
                                    </button>
                                </td>

                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium"
                                >
                                    <button id="delete-btn" data-id="${
                                        data["id"]
                                    }" class="deleteBtn bg-transparent float-left hover:bg-red-500 text-red-700 font-semibold hover:text-white p-2 border border-red-500 hover:border-transparent rounded" onclick="deleteModalHandler(true)">
                                        Delete
                                    </button>
                                </td>
                            </tr>

                    `;

            tableList.append(row);
        });

        $(".editBtn").on("click", async function () {
            let id = $(this).data("id");
            await FillUpUpdateForm(id);
            await updateModalHandler(true);
            //    $("#updateID").val(id);
        });

        $(".deleteBtn").on("click", async function () {
            let id = $(this).data("id");
            await deleteModalHandler(true);
            $("#deleteID").val(id);
        });

        new DataTable("#tableData", {
            order: [[0, "desc"]],
            lengthMenu: [5, 10, 15, 20, 25],
        });
    }
</script>
