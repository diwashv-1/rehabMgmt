<template>
    <div class="container">
        <div class="row">
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
                                <!--<div class="form-group col-md-3">
                                    <label for="narration">Expenses On</label>
                                    <select name="narration" id="narration" class="form-control">
                                        <option value="">Expenses 1</option>
                                        <option value="">Expenses 2</option>
                                        <option value="">Expenses 3</option>
                                    </select>
                                    <p></p>
                                </div>-->
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

        </div>
    </div>
</template>

<script>
    export default {
        name: "ClientExpensesForm"
    }
</script>

<style scoped>

</style>
