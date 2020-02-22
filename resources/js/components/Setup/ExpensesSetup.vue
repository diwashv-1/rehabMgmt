<template>
    <div id="container">
        <div class="row">
            <div class="col-md-12 breadcrumb">
                Add Expenses Type
            </div>
        </div>
        <div class="row">
            <!-- 1st Column----------->
            <div class="col-md-5">
                <div class="card ">
                    <div class="card-header">
                        Setup Your Expenses
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="packageName">Expense Type</label>
                                            <input type="text" class="form-control" id="packageName"
                                                   name="package_name">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex justify-content-end">
                                        <button class="btn btn-success">Add</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!---2nd Column-->
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        Package Details
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-sm">
                            <thead class="bg-info text-dark">
                            <tr>
                                <th scope="col" width="15%">S.N.</th>
                                <th scope="col" width="45%">Expenses Type</th>
                                <th scope="col" width="40%">#</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>3</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editExpensesType">Edit</button>
                                    <button class="btn btn-danger btn-sm">Remove</button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>7</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editExpensesType">Edit</button>
                                    <button class="btn btn-danger btn-sm">Remove</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <!--Modal PopUp-->
        <!-- Modal -->
        <div class="modal fade" id="editExpensesType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Expenses Type</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-sm w-75 just">
                            <thead class="bg-info text-dark">
                            <tr>
                                <th scope="col" width=""> Expenses Type </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="text" class="form-control" /></td>
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
        name: "ExpensesSetup"
    }
</script>

<style scoped>

</style>
