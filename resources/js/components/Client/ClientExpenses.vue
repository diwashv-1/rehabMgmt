<template>


    <!---------------     I COULD NOT UNDERSTAND YOUR COMPONENT FOR LOOP       --------------------->

    <!--<div class="conatiner">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Client Expenses</div>
                    <div class="card-body">&lt;!&ndash;
                        <form action="">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <text-box-component labelName="Date"
                                                        v-model="date"
                                                        type="date"
                                                        required="true"
                                                        ref="date"/>
                                </div>
                                <div class="form-group col-md-3">
                                    <select-option-component label-name="Client"
                                                             v-model="client_id"
                                                             :options="clients"
                                                             ref="client_id"
                                    />
                                </div>
                                <div class="form-group col-md-3">
                                    <select-option-component label-name="Expenses On"
                                                             v-model="expense_detail_id"
                                                             :options="options"
                                                             ref="expense_detail_id"
                                    />
                                </div>
                                <div class="form-group col-md-3">
                                    <text-box-component labelName="Amount"
                                                        v-model="paid_amount"
                                                        placeholder="Enter Paid Amount"
                                                        type="number"
                                                        required="true"
                                                        ref="paid_amount"/>
                                </div>
                            </div>

                        </form>&ndash;&gt;
                    </div>
                    <div class="form-group d-flex justify-content-end ">
                        <button class="btn btn-success mr-3" @click="submitBtn">Submit</button>
                    </div>
                    <p v-if="formSubmitted">
                        Date: {{ date }}
                        Amount: {{ paid_amount }}

                    </p>
                </div>
            </div>
        </div>-->

    <!-------------------    ALERT BOX LAI MILAU HAI          ------------------>


    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12" v-if="serverValidationError">
                <div class="alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        <li class="text-danger" v-for="error in serverValidationError "> {{error}}</li>
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Add Client expenses
                </div>
                <div class="card-body">

                    <form action="">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="date">Date</label>
                                <input type="date" v-model="date" class="form-control" id="date">
                                <p></p>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="">Client</label>
                                <select name="client_id" v-model="client_id" class="form-control">
                                    <option disabled value="">Select Client</option>
                                    <option :value="clients.id" v-for="clients in clients">{{clients.client_name}}
                                    </option>
                                </select>
                                <p></p>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="expensesDetails">Expenses Detail</label>
                                <select name="expenses_details" id="expensesDetails" v-model="expense_detail_id"
                                        class="form-control">
                                    <option disabled value="">Select Expenses</option>
                                    <option :value="expenseDetails.id" v-for="expenseDetails in expenseDetails">
                                        {{expenseDetails.type}}
                                    </option>
                                </select>
                                <p></p>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="paid_amount">Paid Amount</label>
                                <input type="number" class="form-control" v-model="paid_amount" id="paid_amount">
                                <p></p>
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-end">
                            <button type="button" @click="submitClientExpenses" class="btn btn-success">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import TextBoxComponent from "../Components/TextBoxComponent";
    import SelectOptionComponent from "../Components/SelectOptionComponent";

    export default {
        name: "ClientExpenses",
        components: {
            TextBoxComponent,
            SelectOptionComponent
        },

        mounted() {

            axios.get('/api/fetchClientNExpenseDetail', {}).then(response => {
                this.clients = response.data.clients;
                this.expenseDetails = response.data.expense_details;
            });
        },

        data() {
            return {
                date: '',
                paid_amount: '',
//                options: '',
                client_id: '',
                clients: [],
                expenseDetails: [],
                expense_detail_id: '',
                formSubmitted: false,
                serverValidationError: [],


            }
        },
        methods: {
            /*
            submitBtn() {
                this.formSubmitted = false;
                this.$refs.date.validateForm();
                if (this.$refs.date.errorMessage) {
                    return;
                }
                this.$refs.paid_amount.validateForm();
                if (this.$refs.paid_amount.errorMessage) {
                    return;
                }
                this.$refs.client_id.validateForm();
                if (this.$refs.client_id.errorMessage) {
                    return;
                }
                this.$refs.expense_detail_id.validateForm();
                if (this.$refs.expense_detail_id.errorMessage) {
                    return;
                }
                this.formSubmitted = true
            }*/
            submitClientExpenses: function () {
                this.serverValidationError = [];
                axios.post('/api/clientexpense', {
                    client_id: this.client_id,
                    expense_detail_id: this.expense_detail_id,
                    paid_amount: this.paid_amount,
                    date: this.date,
                }).then(response => {
                    if (response.data.errors) {
                        console.log(response.data.errors);
                        this.serverValidationError = response.data.errors;
                    }

                    alert(response.data.msg);
                });

            },


        }
    }
</script>

<style scoped>

</style>
