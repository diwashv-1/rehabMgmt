<template>
    <div class="container">
        <table class="table table-hover content-table">
            <thead>
            <tr>
                <th>S.N.</th>
                <th>Date</th>
                <th>Expenses On</th>
                <th>Amount</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <!--class="active-row"-->
            <tr>
                <td>1</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>
                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editOrganizationExpenses">Edit</button>
                    <button class="btn btn-danger btn-sm">Remove</button>
                </td>
            </tr>
            <tr class="active-row">
                <td>2</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>
                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editOrganizationExpenses">Edit</button>
                    <button class="btn btn-danger btn-sm">Remove</button>
                </td>
            </tr>
            </tbody>
        </table>

        <!--Modal PopUp-->
        <!-- Modal -->
        <div class="modal fade" id="editOrganizationExpenses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Organization Expenses </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-sm">
                            <thead class="bg-info text-dark">
                            <tr>
                                <th scope="col" width="" style="width:100px!important;">Date</th>
                                <th scope="col" width="35%">Expenses On</th>
                                <th scope="col" width="35%">Amount</th>
                                <th scope="col" width="" style="width:150px!important;">Narration</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="date" class="form-control" style="width:100px!important;" /></td>
                                <td>
                                    <select name="expenses_on" class="form-control">
                                        <option value="">Expenses 1</option>
                                        <option value="">Expenses 2</option>
                                        <option value="">Expenses 3</option>
                                    </select>
                                </td>
                                <td><input type="number" class="form-control"/></td>
                                <td> <textarea style="width:150px!important;"></textarea> </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
        </div>



    </div>
</template>

<script>
    export default {
        name: "OrganizationExpensesView"
    }
</script>

<style scoped>

    * {
        font-family: sans-serif; /* Change your font family */
    }

    .content-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        min-width: 400px;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .content-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
        font-weight: bold;
    }

    .content-table th,
    .content-table td {
        padding: 12px 15px;
    }

    .content-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .content-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .content-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .content-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }

</style>
