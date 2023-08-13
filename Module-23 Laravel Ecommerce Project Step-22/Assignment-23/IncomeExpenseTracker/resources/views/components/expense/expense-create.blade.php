<div class="modal" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Expense</h5>
                </div>
                <div class="modal-body">
                    <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Amount *</label>
                                <input type="text" class="form-control" id="amount">
                                <label class="form-label">Description *</label>
                                <input type="text" class="form-control" id="description">
                                <label class="form-label">Date *</label>
                                <input type="date" class="form-control" id="date">
                                <label class="form-label">Category *</label>
                                <select type="text" class="form-control form-select" id="category">
                                    <option value="">Select Category</option>
                                    <option value="Part-Time">Part-Time</option>
                                    <option value="Salary">Salary</option>
                                    <option value="Freelance">Freelance</option>
                                    <option value="Invesment">Invesment</option>
                                    <option value="Bonus">Bonus</option>
                                    <option value="Other">Other</option>
                                </select>
                                <label class="form-label">Payment Method *</label>
                                <input type="text" class="form-control" id="payment_method">
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="modal-close" class="btn btn-sm btn-danger" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button onclick="Save()" id="save-btn" class="btn btn-sm  btn-success" >Save</button>
                </div>
            </div>
    </div>
</div>


<script>

    async function Save() {

        let amount = document.getElementById('amount').value;
        let description = document.getElementById('description').value;
        let date = document.getElementById('date').value;
        let category = document.getElementById('category').value;
        let payment_method = document.getElementById('payment_method').value;

        if (amount.length === 0) {
            errorToast("Amount Required !");
        }
        else if (description.length === 0){
            errorToast("Description Required !");
        }
        else if (category.length === 0) {
            errorToast("Category Required !");
        }
        else if (!date){
            errorToast("Date Required !");
        }
        else if (payment_method.length === 0){
            errorToast("Payment Method Required !");
        }
        else {
            document.getElementById('modal-close').click();

            showLoader();
            let res = await axios.post("/create-expense",{amount:amount, description:description, date:date, category:category, payment_method:payment_method})
            hideLoader();

            if(res.status===201){
                successToast('Expense Created Successfully');

                document.getElementById("save-form").reset();
                await getList();
            }
            else{
                errorToast("Failed!")
            }
        }
    }

</script>
