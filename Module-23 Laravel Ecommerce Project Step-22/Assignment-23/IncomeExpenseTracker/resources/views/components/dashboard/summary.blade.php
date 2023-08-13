<div class="container-fluid">
    <div class="row">

        <!-- Total Income -->
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 animated fadeIn p-2">
            <div class="card card-plain h-100 bg-white">
                <div class="p-3">
                    <div class="row">
                        <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                            <div>
                                <h3 class="mb-0 text-capitalize font-weight-bold" id="totalIncome">Loading...</h3>
                                <p class="mb-0 text-sm">Total Income</p>
                            </div>
                        </div>
                        <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow float-end border-radius-md">
                                <img class="w-100 " src="{{asset('images/icon.svg')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Expense -->
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 animated fadeIn p-2">
            <div class="card card-plain h-100 bg-white">
                <div class="p-3">
                    <div class="row">
                        <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                            <div>
                                <h3 class="mb-0 text-capitalize font-weight-bold" id="totalExpense">Loading...</h3>
                                <p class="mb-0 text-sm">Total Expense</p>
                            </div>
                        </div>
                        <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow float-end border-radius-md">
                                <img class="w-100 " src="{{asset('images/icon.svg')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Net Income -->
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 animated fadeIn p-2">
            <div class="card card-plain h-100 bg-white">
                <div class="p-3">
                    <div class="row">
                        <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                            <div>
                                <h3 class="mb-0 text-capitalize font-weight-bold" id="netIncome">Loading...</h3>
                                <p class="mb-0 text-sm">Net Income</p>
                            </div>
                        </div>
                        <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow float-end border-radius-md">
                                <img class="w-100 " src="{{asset('images/icon.svg')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    async function updateFinancialCalculations() {
        try {
            // Make AJAX requests to fetch financial calculations
            let totalIncomeResponse = await axios.get("/total-income");
            let totalExpenseResponse = await axios.get("/total-expense");
            let netIncomeResponse = await axios.get("/net-income");

            // Update the HTML elements with the retrieved data
            document.getElementById('totalIncome').textContent = totalIncomeResponse.data.total_income;
            document.getElementById('totalExpense').textContent = totalExpenseResponse.data.total_expenses;
            document.getElementById('netIncome').textContent = netIncomeResponse.data.net_income;
        } catch (error) {
            console.error(error);
        }
    }

    // Call the function to update financial calculations on page load
    window.onload = function() {
        updateFinancialCalculations();
    };
</script>
