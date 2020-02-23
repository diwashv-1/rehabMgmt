<template>
    <div class="container">
        <!--<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Client Paying Form
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
                                    <label for="paid_amount">Amount</label>
                                    <input type="number" class="form-control" name="paid_amount" id="paid_amount">
                                    <p></p>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="narration">Narration</label>
                                    <textarea name="narration" id="narration" class="form-control" cols="25" rows="2"></textarea>
                                    <p></p>
                                </div>
                                &lt;!&ndash;<div class="form-group col-md-3">
                                    <label for="narration">Expenses On</label>
                                    <select name="narration" id="narration" class="form-control">
                                        <option value="">Expenses 1</option>
                                        <option value="">Expenses 2</option>
                                        <option value="">Expenses 3</option>
                                    </select>
                                    <p></p>
                                </div>&ndash;&gt;
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <button class="btn btn-success">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 p-5 mt-5" style="background-color: #202020; color: white">
                <div class="">
                    <h3><u> Client payment Information </u></h3>
                    <img src="" class="img-fluid rounded float-left" />

                    <h4>ClientName</h4>
                    <p>ClientAddress</p>
                    <br/><br/>
                    <b>Expenditures On</b>
                    <ul>
                        <li>Electronics<span>2017 February 10, at 10:30 PM</span></li>
                        <li>---</li>
                    </ul>
                    <ul>
                        <li>Extra Food<span>2017 February 25, at 1:30 PM</span></li>
                        <li>---</li>
                    </ul>
                    <ul>
                        <li>Dashain Kharcha<span>2017 March 17, at 08:30 PM</span><span>2017 March 19, at 08:30 PM</span></li>
                        <li>---</li>
                    </ul>

                    <div class="">
                        <h3>Total Amount</h3>
                        <h4>Rupee: ------</h4>
                        <p>Paid Amount: ----</p>
                    </div>

                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 p-5 mt-5 mx-auto" style="background-color: #ffffff">
                <div class="">
                    <h2><u>Payment Method</u> </h2>
                    <div class="row">
                        <div class="col-6">
                            <i class="fas fa-cash-register fa-3x"></i>
                        </div>
                        <div class="col-6">
                            <i class="fas fa-piggy-bank fa-3x"></i>
                        </div>
                    </div>
                    <div>
                        <div class="form-row">
                            <div class="form-group col-md-10">
                                <label for="client_id">Client</label>
                                <select name="client_id" id="client_id" class="form-control">
                                    <option value="">Client 1</option>
                                    <option value="">Client 2</option>
                                    <option value="">Client 3</option>
                                </select>
                                <p></p>
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <client-entry-validate labelName="Date Of Payment"
                                                       v-model="date"
                                                       type="date"
                                                       placeholder=""
                                                       required="true"
                                                       ref="date"/>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <client-entry-validate labelName="Payer Name"
                                                       v-model="payer_name"
                                                       type="text"
                                                       placeholder=""
                                                       required=""
                                                       ref="payer_name"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="custom-control custom-checkbox mr-sm-2 ml-5">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing"
                                       v-model="cheque_payment" v-on:click="cash_payment = !cash_payment">
                                <label class="custom-control-label" for="customControlAutosizing">Tick for Cheque
                                    Payment</label>
                            </div>
                        </div>
                        <!--Cash payment-->
                        <div v-if="cash_payment">
                            <div class="form-group col-md-10">
                                <client-entry-validate labelName="Cash Amount"
                                                       v-model="amount"
                                                       type="number"
                                                       placeholder=""
                                                       required="true"
                                                       ref="amount"/>
                            </div>
                        </div>
                        <!--Cheque Payment-->
                        <div v-if="cheque_payment">
                            <div class="form-group col-md-10">
                                <client-entry-validate labelName="Cheque Number"
                                                       v-model="cheque_no"
                                                       type="number"
                                                       placeholder=""
                                                       required="true"
                                                       ref="amount"/>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <client-entry-validate labelName="Bank Name"
                                                           v-model="bank_name"
                                                           type="text"
                                                           placeholder=""
                                                           required="true"
                                                           ref="bank_name"/>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <client-entry-validate labelName="Cheque Amount"
                                                           v-model="cheque_amount"
                                                           type="number"
                                                           placeholder=""
                                                           required="true"
                                                           ref="cheque_amount"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-10">
                            <label for="narration">Narration</label>
                            <textarea name="narration" id="narration" class="form-control" cols="25"
                                      rows="2"></textarea>
                            <p></p>
                        </div>

                        <button type="button" class="btn btn-success" @click="handleSubmit">Submit</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</template>

<script>
    import ClientEntryValidate from "./ClientEntryValidate";

    export default {
        name: "ClientExpensesForm",
        components: {
            ClientEntryValidate,
        },
        data() {
            return {
                formSubmitted: false,
                client_id: '',
                date: '',
                payer_name: '',
                amount: '',
                cheque_no: '',
                bank_name: '',
                cheque_amount: '',
                cash_payment: true,
                cheque_payment: false

            }
        },
        methods: {
            handleSubmit() {
                this.formSubmitted = false;
                this.$refs.date.validateForm();
                if (this.$refs.date.errorMessage) {
                    this.$refs.date.focus();
                    return;
                }
                this.$refs.payer_name.validateForm();
                if (this.$refs.payer_name.errorMessage) {
                    this.$refs.payer_name.focus();
                    return;
                }
                this.$refs.amount.validateForm();
                if (this.$refs.amount.errorMessage) {
                    this.$refs.amount.focus();
                    return;
                }
                this.$refs.cheque_no.validateForm();
                if (this.$refs.cheque_no.errorMessage) {
                    this.$refs.cheque_no.focus();
                    return;
                }
                this.$refs.bank_name.validateForm();
                if (this.$refs.bank_name.errorMessage) {
                    this.$refs.bank_name.focus();
                    return;
                }
                this.$refs.cheque_amount.validateForm();
                if (this.$refs.cheque_amount.errorMessage) {
                    this.$refs.cheque_amount.focus();
                    return;
                }
                this.formSubmitted = true;
            }
        }
    }
</script>

<style scoped>

</style>
