<template>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div class="form-group row">
                        <label>Select Client</label>
                        <select v-model="clientSelect" name="client_id" class="form-control"
                                @change="checkError('client')">
                            <option value="" disabled>Select Client</option>
                            <option v-for="clients in client" :value="clients.id">{{clients.client_name}}</option>
                        </select>
                        <span v-if="clientError" class="text-danger ml-3">Client field is required *</span>
                    </div>
                    <div class="form-group row">
                        <label for="packageId">Select Packages</label>
                        <select v-model="packageSelect" name="package_id" id="packageId" @change="checkError('package')"
                                class="form-control">
                            <option value="" disabled>Select Packages</option>
                            <option v-for="packages in package" value="">{{packages.package_name}}</option>
                        </select>
                        <span v-if="packageError" class="text-danger ml-3">Package field is required *</span>
                    </div>
                    <button type="submit" class="btn btn-success" @click="register">Register</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "RegisterClient",

        data: function () {
            return {
                client: [],
                package: [],
                clientSelect: '',
                packageSelect: '',
                packageError: true,
                clientError: true,

            }
        },

        methods: {
            register: function () {
                alert();
            },

            /*
                        CLEAR SELECT INPUT ERROR FIELD
            */
            checkError: function (param) {
                if (param === 'client') {
                    this.clientError = false;
                } else if (param === 'package') {
                    this.packageError = false;

                }
            },
        },

        mounted() {
            /*
                                FETCH DATA FOR INPUT BOX
            */

            axios.get('api/fetchClient', {}
            ).then(response => {
                if (response.data.msg) {
                    this.client = response.data.client;
                    this.package = response.data.package;
                }
            }).catch(error => {

            });

        }
    }
</script>

<style scoped>
</style>
