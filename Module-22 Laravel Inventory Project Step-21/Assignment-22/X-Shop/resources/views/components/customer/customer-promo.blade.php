<div class="modal" id="promote-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h3 class="mt-3 text-primary">Promote Customer</h3>
                <p class="mb-3">Are you sure you want to send a promotional email to this customer?</p>
                <input class="d-none" id="promoteEmail" />
            </div>
            <div class="modal-footer justify-content-end">
                <div>
                    <button type="button" id="promote-modal-close" class="btn shadow-sm btn-secondary"
                        data-bs-dismiss="modal">Cancel</button>
                    <button onclick="sendPromoEmail()" type="button" id="confirmPromote"
                        class="btn shadow-sm btn-primary">Promote</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    async function sendPromoEmail() {
        let email = document.getElementById('promoteEmail').value;
        document.getElementById('promote-modal-close').click();
        showLoader();
        let res = await axios.post("/send-promo", {
            email: email
        })
        hideLoader();
        if (res.data.status === "success") {
            successToast("Promotional Email Send Successfully")
        } else {
            errorToast("Something Went Wrong!")
        }
    }
</script>
