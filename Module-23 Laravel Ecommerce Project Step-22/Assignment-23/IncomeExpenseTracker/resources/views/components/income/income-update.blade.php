<div class="modal" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Income</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Income Name *</label>
                                <input type="text" class="form-control" id="incomeNameUpdate">
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
        let res=await axios.post("/income-by-id",{id:id})
        hideLoader();
        document.getElementById('incomeNameUpdate').value=res.data['name'];
    }

    async function Update() {

        let incomeName = document.getElementById('incomeNameUpdate').value;
        let updateID = document.getElementById('updateID').value;

        if (incomeName.length === 0) {
            errorToast("Income Required !")
        }
        else{
            document.getElementById('update-modal-close').click();
            showLoader();
            let res = await axios.post("/update-income",{name:incomeName,id:updateID})
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
