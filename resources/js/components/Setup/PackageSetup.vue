<template>
    <div id="container">
        <div class="row">
            <div class="col-md-12 breadcrumb">
                Add Packages
            </div>
        </div>
        <div class="row">
            <!-- 1st Column----------->
            <div class="col-md-5">
                <div class="card ">
                    <div class="card-header">
                        Setup Your Package
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="packageName">Package Name</label>
                                            <input type="text" class="form-control" id="packageName"
                                                   name="package_name">
                                            <p></p>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="packageAmount">Package Price</label>
                                            <input type="text" class="form-control" id="packageAmount"
                                                   name="package_amount">
                                            <p></p>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="selectPackageTime">Select Package Time Period</label>
                                            <select name="package_time" id="selectPackageTime" class="form-control">
                                                <option value="">15 days</option>
                                                <option value="">1 month</option>
                                                <option value="">2 month</option>
                                                <option value="">3 month</option>
                                                <option value="">4 month</option>
                                                <option value="">5 month</option>
                                                <option value="">6 month</option>
                                                <option value="">7 month</option>
                                                <option value="">8 month</option>
                                                <option value="">9 month</option>
                                                <option value="">10 month</option>
                                                <option value="">11 month</option>
                                                <option value="">1 year</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-success">Add</button>
                                        </div>
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
                                <th scope="col" width="10%">S.N.</th>
                                <th scope="col" width="20%">Package Name</th>
                                <th scope="col" width="20%">Package Amount</th>
                                <th scope="col" width="20%">Package Time Period</th>
                                <th scope="col" width="30%">#</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>3</td>
                                <td>2</td>
                                <td>4</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editPackages">
                                        Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm">Remove</button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editPackages">Edit</button>
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
        <div class="modal fade" id="editPackages" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Packages</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-sm">
                            <thead class="bg-info text-dark">
                            <tr>
                                <th scope="col" width="30%">Package Name</th>
                                <th scope="col" width="30%">Package Amount</th>
                                <th scope="col" width="30%">Package Time Period</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="text" class="form-control"/></td>
                                <td><input type="number" class="form-control"/></td>
                                <td>
                                    <select name="package_time" class="form-control">
                                        <option value="">15 days</option>
                                        <option value="">1 month</option>
                                        <option value="">2 month</option>
                                        <option value="">3 month</option>
                                        <option value="">4 month</option>
                                        <option value="">5 month</option>
                                        <option value="">6 month</option>
                                        <option value="">7 month</option>
                                        <option value="">8 month</option>
                                        <option value="">9 month</option>
                                        <option value="">10 month</option>
                                        <option value="">11 month</option>
                                        <option value="">1 year</option>
                                    </select>
                                </td>
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
        name: "PackageSetup"
    }
</script>

<style scoped>

</style>
