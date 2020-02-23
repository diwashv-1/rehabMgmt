<template>
    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table" id="table">
                            <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Date</th>
                                <th>Total Amount</th>
                                <th>Paid Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!--class="active-row"-->
                            <tr>
                                <td>1</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="" id="modal-footer">
                        <div class="row d-flex">
                            <div class="mr-auto w-25" id="fotter-close" data-dismiss="modal">
                                <p>Close</p>
                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                            </div>
                            <!--<div class="col-md-6"></div>-->
                            <div class="w-25" id="fotter-save">
                                <p>Save changes</p>
                                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ClientExpensesModal"
    }
</script>

<style scoped>

    /*.content-modal {
        margin: 0 !important;
        padding: 0 !important;
    }*/

    * {
        font-family: 'Courier New', Courier, monospace;
    }
    .modal-header {
        color: white;
        background-color: #7128b4;
        height: 50px !important;
    }

    .close {
        color: red;
    }

    #table {
        border-collapse: collapse;
        margin: 0 0 0 0;
        font-size: 0.9em;
        min-width: 400px;
        border-radius: 5px 5px 5px 5px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .modal-body {
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }

    thead {
        background-color: #f1f4f9;
    }

    #modal-footer {
        color: white;
        background-color: #7128b4;
        overflow: hidden;
        height: 50px !important;
        text-align: center;
    }

    #fotter-close, #fotter-save{
        background-color: #923ce7;
        height: 50px !important;
        cursor: pointer;
        border-radius: 5px 5px 5px 5px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    }

    #fotter-close:hover, #fotter-save:hover{
        background-color: #883bb4;
    }
    #fotter-close p, #fotter-save p{
        margin-top: 12.5px;
    }


</style>
