<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form">
                    <div v-if="step == 1">
                        <h3> Step 1 </h3>
                        <div class="col-md-12">
                            <label for="Name">Name:</label>
                            <input type="text" v-model="form.name" class="form-control form-control-sm ">
                        </div>

                    </div>

                    <div v-if="step == 2">
                        <h3> Step 2 </h3>
                        <div class="col-md-12">
                            <label for="Name">Address:</label>
                            <input type="text" v-model="form.address" class="form-control form-control-sm ">

                        </div>

                        <div class="col-md-12">
                            <label for="Name">Contact:</label>
                            <input type="text" v-model="form.contact" class="form-control form-control-sm ">
                        </div>

                    </div>
                    <div v-if="step ==3">
                        <h3> Step 3 </h3>
                        <div class="col-md-12">
                            <label for="Name">Blood Pressure :</label>
                            <input type="text" v-model="form.bp" class="form-control form-control-sm ">
                        </div>

                        <div class="col-md-12">
                            <label for="Name">blood group:</label>
                            <input type="text" v-model="form.bloodGroup" class="form-control form-control-sm ">
                        </div>


                    </div>
                </div>

                <button v-if="step>1" type="button" @click="prevStep">Previous</button>
                <button v-if="step< totalSteps" type="button" @click="nextStep">Next</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data: function () {
            return {
                form: {
                    name: null,
                    contact: null,
                    address: null,
                    bloodGroup: null,
                    bp: null,
                },
                totalSteps: 3,
                step: 1,

            }
        },

        methods: {
            nextStep: function () {
                this.step++;
            },
            prevStep: function () {
                this.step--
            }

        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
