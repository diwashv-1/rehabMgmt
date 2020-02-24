<template>
    <div class="container">
        <div class="">
            <div class="">
                <div class="card">
                    <div class="card-header">Add Client Expenses</div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-row justify-content-center">
                                <div class="form-group col-md-10">
                                    <label for="client_id">Client</label>
                                    <select name="client_id" id="client_id" class="form-control">
                                        <option value="">Client 1</option>
                                        <option value="">Client 2</option>
                                        <option value="">Client 3</option>
                                    </select>
                                    <p></p>
                                </div>
                                <div class="form-group col-md-10">
                                    <text-box-component labelName="Date"
                                                        v-model="date"
                                                        type="date"
                                                        required="true"
                                                        ref="date" />
                                </div>
                                <div class="form-group col-md-10">
                                    <label for="expense_detail_id">Client</label>
                                    <select name="expense_detail_id" id="expense_detail_id" class="form-control">
                                        <option value="">Client 1</option>
                                        <option value="">Client 2</option>
                                        <option value="">Client 3</option>
                                    </select>
                                    <p></p>
                                </div>
                                <div class="form-group col-md-10">
                                    <text-box-component labelName="Amount"
                                                        v-model="paid_amount"
                                                        placeholder="Enter Paid Amount"
                                                        type="number"
                                                        required="true"
                                                        ref="paid_amount" />
                                </div>
                            </div>

                        </form>
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
        </div>
<!--        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Add Client expenses
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="date">Date</label>
                                    <input type="date" name="date" class="form-control" id="date">
                                    <p></p>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="client_id">Client</label>
                                    <select name="client_id" id="client_id" class="form-control">
                                        <option value="">Client 1</option>
                                        <option value="">Client 2</option>
                                        <option value="">Client 3</option>
                                    </select>
                                    <p></p>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="expensesDetails">Expenses On</label>
                                    <select name="expenses_details" id="expensesDetails" class="form-control">
                                        <option value="">Expenses 1</option>
                                        <option value="">Expenses 2</option>
                                        <option value="">Expenses 3</option>
                                    </select>
                                    <p></p>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="paid_amount">Amount</label>
                                    <input type="number" class="form-control" name="paid_amount" id="paid_amount">
                                    <p></p>
                                </div>
                            </div>

                                <div class="form-group d-flex justify-content-end">
                                    <button class="btn btn-success">Submit</button>
                                </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>-->

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
        data(){
            return{
                date: '',
                paid_amount: '',
                options:'',
                client_id:'',
                expense_detail_id: '',
                formSubmitted: false
            }
        },
        methods: {
            submitBtn(){
                this.formSubmitted = false;
                this.$refs.date.validateForm();
                if(this.$refs.date.errorMessage) {
                    return;
                }
                this.$refs.paid_amount.validateForm();
                if(this.$refs.paid_amount.errorMessage) {
                    return;
                }
                this.$refs.client_id.validateForm();
                if(this.$refs.client_id.errorMessage) {
                    return;
                }
                this.$refs.expense_detail_id.validateForm();
                if(this.$refs.expense_detail_id.errorMessage) {
                    return;
                }
                this.formSubmitted = true
            }
        }
    }
</script>

<style scoped>

</style>
