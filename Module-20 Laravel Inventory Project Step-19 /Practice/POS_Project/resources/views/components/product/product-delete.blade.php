<div class="modal" id="delete-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h3 class=" mt-3 text-warning">Delete !</h3>
                <p class="mb-3">Once delete, you can't get it back.</p>
                <input class="d-none" id="deleteID" />
                <input class="d-none" id="deleteFilePath" />

            </div>
            <div class="modal-footer justify-content-end">
                <div>
                    <button type="button" id="delete-modal-close" class="btn shadow-sm btn-secondary"
                        data-bs-dismiss="modal">Cancel</button>
                    <button onclick="itemDelete()" type="button" id="confirmDelete"
                        class="btn shadow-sm btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    async function itemDelete() {
        // Get the product id and file path:
        let id = document.getElementById('deleteID').value;
        let deleteFilePath = document.getElementById('deleteFilePath').value;
        // Close Button:
        document.getElementById('delete-modal-close').click();
        // Ajax Request
        showLoader();
        let res = await axios.post("/delete-product", {
            id: id,
            file_path: deleteFilePath
        })
        hideLoader();
        if (res.data === 1) {
            successToast("Product Deleted Successfully!");
            await getList();
        } else {
            errorToast("Something Went Wrong!")
        }
    }
</script>
