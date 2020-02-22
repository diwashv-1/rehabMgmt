<template>
    <div class="conatiner-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Add Organization expenses
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
                                    <label for="">Expenses On</label>
                                    <select name="expenses_details" v-model="selected" class="form-control">
                                        <option selected disabled value="">Please Select Expense Type</option>
                                        <option v-bind:value="expenses.id" v-for="expenses in Expenses_on">
                                            {{expenses.type}}
                                        </option>

                                    </select>
                                    <p></p>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="paid_amount">Amount</label>
                                    <input type="number" class="form-control" v-model="paid_amount" name="paid_amount"
                                           id="paid_amount">
                                    <p></p>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="narration">Narration</label>
                                    <textarea name="narration" id="narration" v-model="narration" class="form-control"
                                              cols="25"
                                              rows="2"></textarea>
                                </div>

                            </div>

                            <div class="form-group d-flex justify-content-end">
                                <button type="button" @click="saveOrganaizationExpense" class="btn btn-success">Submit
                                </button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
</template>

<script>
    export default {
        name: "OrganizationExpenses",
        mounted() {

            axios.get('/api/fetchExpensesOnOrganaization', {}).then(response => {
                this.Expenses_on = response.data.expenseDetail;

            });


        },
        data: function () {
            return {
                date: '',
                paid_amount: '',
                narration: '',
                Expenses_on: [],
                selected: '',
            }

        },

        methods: {
            saveOrganaizationExpense: function () {

                axios.post('/api/organizationexpenses', {

                    amount: this.paid_amount,
                    expense_detail_id: this.selected,
                    narration: this.narration,
                    date: this.date
                }).then(response => {
                    alert(response.data.msg);

                    this.date = '';
                    this.selected = '';
                    this.narration = '';
                    this.paid_amount = '';

                });


            }
        }


    }
</script>

<style scoped>

</style>
