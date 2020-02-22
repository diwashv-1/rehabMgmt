<template>
    <div id="">
        <div class="">
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
                                            <label for="">Package Name</label>
                                            <input type="text" class="form-control" v-model="package_name"
                                                   name="package_name">
                                            <p></p>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Package Price</label>
                                            <input type="number" class="form-control" v-model="package_amount"
                                                   name="package_amount">
                                            <p></p>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for=""> Package Time(month)</label>
                                            <input type="number" class="form-control" v-model="package_time"
                                                   name="package_time">
                                        </div>
                                        <div class="form-group">
                                            <button type="button" @click="submitPackageForm" class="btn btn-success">
                                                Add
                                            </button>
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
                                <th scope="col" width="30%">Package Name</th>
                                <th scope="col" width="20%">Package Amount</th>
                                <th scope="col" width="20%">Time Period(month)</th>
                                <th scope="col" width="20%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(packageDetail, index ) in packageDetail">
                                <td>{{++index}}</td>
                                <td class="text-center">{{packageDetail.package_name}}</td>
                                <td class="text-center">{{packageDetail.package_amount}}</td>
                                <td class="text-center">{{packageDetail.package_time}}</td>
                                <td>
                                    <button class="btn btn-info btn-sm" @click="editPackage(packageDetail.id)">Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm" @click="deletetPackage(packageDetail.id)">
                                        Remove
                                    </button>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "PackageSetup",
        mounted() {
            /************        GET PACKAGE DETAILS ***************/
            axios.get('/api/packageDetail', {}).then(response => {
                this.packageDetail = response.data.packageDetail;

                console.log(this.packageDetail);
            });
        },

        data: function () {
            return {
                packageDetail: [],
                editPackage: '',
                package_name: '',
                package_time: '',
                package_amount: '',
            }
        },

        methods: {
            submitPackageForm: function () {

                //validate();
                axios.post('api/PackageSetup   ', {
                    package_name: this.package_name,
                    package_time: this.package_time,
                    package_amount: this.package_amount,
                }).then(response => {
                    alert(response.data.msg);

                    if (response.data.msg) {
                        this.package_name = '';
                        this.package_amount = '';
                        this.package_time = '';
                        this.packageDetail.push(response.data.package);

                    }

                });


            }

        }


    }
</script>

<style scoped>

</style>
