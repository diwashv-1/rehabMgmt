<template>
    <div>
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <h3 class="page-title">Client Details</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Details -->
        <div class="row">
            <div class="col-md-4">
                <div class="card card-small mb-4 pt-3">
                    <div class="card-header bg-white border-bottom text-center">
                        <div class="mb-3 mx-auto">
                            <img class="rounded-circle" src="" alt="" width="120" height="120">
                        </div>
                        <h4 class="mb-0">Client Name</h4>
                        <span class="text-muted mb-1" style="font-size: 22px;">Address</span>
                        <p class="text-muted">Joined Date</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-4">
                            <div class="progress-wrapper">
                                <strong class="text-muted d-block mb-2">Time Remaining</strong>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="84"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 84%;">
                                        <span class="progress-value">84%</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item p-4">
                            <strong class="text-muted d-block mb-2">Case History</strong>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="">Client Information</h6>
                    </div>
                    <div class="card-body">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-item nav-link active" href="#personalDetails" id="nav-personal-tab"
                                   data-toggle="tab">Personal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-item nav-link" href="#parentalDetails" id="nav-official-tab"
                                   data-toggle="tab">Parental</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-item nav-link" href="#expensesDetails" id="nav-contact-tab"
                                   data-toggle="tab">Expenses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-item nav-link" href="#paymentDetails" id="nav-address-tab"
                                   data-toggle="tab">Payments</a>
                            </li>
                        </ul>
                        <!-- Nav tabs Body -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active pt-2 pb-2" id="personalDetails" role="tabpanel"
                                 aria-labelledby="nav-personal-tab">
                                <div class="row mb-1">
                                    <div class="col w-50">
                                        <span>Client Id:</span>
                                        <span>{{ client_id </span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col w-50">
                                        <span>Client Name:</span>
                                        <span>{{ client_name </span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col w-50">
                                        <span>Gender:</span>
                                        <span>{{ client_gender </span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col w-50">
                                        <span>Age</span>
                                        <span>{{ client_age </span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col w-50">
                                        <span>Address:</span>
                                        <span>{{ address </span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col w-50">
                                        <span>Blood Group:</span>
                                        <span>{{ blood_group </span>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade pb-2 pt-2" id="parentalDetails" role="tabpanel"
                                 aria-labelledby="nav-official-tab">
                                <div class="row mb-1">
                                    <div class="col w-50">
                                        <span>Guarantor Name:</span>
                                        <span>{{ guarantor_name1 </span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col w-100">
                                        <span>Guarantor Name2:</span>
                                        <span>{{ guarantor_name2 </span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col w-50">
                                        <span>Guarantor Relation to Client:</span>
                                        <span>{{ guarantor_relation </span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col w-50">
                                        <span>Guarantor Address:</span>
                                        <span>{{ optional_address1 </span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col w-50">
                                        <span>Guarantor Address2:</span>
                                        <span>{{ optional_address2 </span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col w-50">
                                        <span>Father Name:</span>
                                        <span>{{ father_name </span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col w-100">
                                        <span>Mother Name</span>
                                        <span>{{ mother_name </span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col w-100">
                                        <span>Contact Number</span>
                                        <span>{{ contact_number </span>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade pb-2 pt-2" id="expensesDetails" role="tabpanel"
                                 aria-labelledby="nav-contact-tab">
                                <table class="table table-hover" id="expensesTable">
                                    <thead class="bg-light">
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Date</th>
                                        <th>Total Amount</th>
                                        <th>Narration</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade pb-2 pt-2" id="paymentDetails" role="tabpanel"
                                 aria-labelledby="nav-address-tab">
                                <table class="table table-hover" id="paymentTable">
                                    <thead class="bg-light">
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Date</th>
                                        <th>Payment Amount</th>
                                        <th>Narration</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!--class="active-row"-->
                                    <tr>
                                        <td>1</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>...</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Nav Tabs Ends-->
                    </div>
                    <!-- Card Body Ends -->
                    <!--<div class="card-footer">
                        <div class="progress-wrapper">
                            <strong class="text-muted d-block mb-2">Progress</strong>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="92"
                                     aria-valuemin="0"
                                     aria-valuemax="100" style="width: 92%;">
                                    <span class="progress-value">92%</span>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!-- Card Footer Ends -->
                </div>
                <!-- Card Ends -->
            </div>
        </div>
        <!-- Detail Ends -->
    </div>
</template>

<script>
    export default {
        name: "ClientDetails"
    }
</script>

<style scoped>
    #expensesTable, #paymentTable {
        border-collapse: collapse;
        margin: 10px 0 0 0;
        font-size: 0.9em;
        min-width: 400px;
        border-radius: 5px 5px 5px 5px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

</style>
