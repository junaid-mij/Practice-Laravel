<div class="modal" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Expense</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Amount *</label>
                                <input type="text" class="form-control" id="amountUpdate">
                                <label class="form-label">Description *</label>
                                <input type="text" class="form-control" id="descriptionUpdate">
                                <label class="form-label">Date *</label>
                                <input type="date" class="form-control" id="dateUpdate">
                                <label class="form-label">Category *</label>
                                <select type="text" class="form-control form-select" id="categoryUpdate">
                                    <option value="">Select Category</option>
                                    <option value="Part-Time">Part-Time</option>
                                    <option value="Salary">Salary</option>
                                    <option value="Freelance">Freelance</option>
                                    <option value="Invesment">Invesment</option>
                                    <option value="Bonus">Bonus</option>
                                    <option value="Other">Other</option>
                                </select>
                                <label class="form-label">Payment Method *</label>
                                <input type="text" class="form-control" id="payment_methodUpdate">
                                <input class="d-none" id="updateID">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="update-modal-close" class="btn btn-sm btn-danger" data-bs-dismiss="modal" aria-label="Close">Close</button>
                <button onclick="Update()" id="update-btn" class="btn btn-sm  btn-success" >Update</button>
            </div>
        </div>
    </div>
</div>

<script>

    async function FillUpUpdateForm(id){
        document.getElementById('updateID').value=id;
        showLoader();
        let res=await axios.post("/expense-by-id",{id:id})
        hideLoader();
        document.getElementById('amountUpdate').value=res.data['amount'];
        document.getElementById('descriptionUpdate').value=res.data['description'];
        document.getElementById('dateUpdate').value=res.data['date'];
        document.getElementById('categoryUpdate').value=res.data['category'];
        document.getElementById('payment_methodUpdate').value=res.data['payment_method'];
    }

    async function Update() {

        let amount = document.getElementById('amountUpdate').value;
        let description = document.getElementById('descriptionUpdate').value;
        let date = document.getElementById('dateUpdate').value;
        let category = document.getElementById('categoryUpdate').value;
        let payment_method = document.getElementById('payment_methodUpdate').value;
        let updateID = document.getElementById('updateID').value;

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
        else{
            document.getElementById('update-modal-close').click();
            showLoader();
            let res = await axios.post("/update-expense",{amount:amount, description:description, date:date, category:category, payment_method:payment_method, id:updateID})
            hideLoader();

            if(res.status===200 && res.data===1){
                document.getElementById("update-form").reset();
                successToast("Update Complete!")
                await getList();
            }
            else{
                errorToast("Update Fail!")
            }
        }
    }

</script>
