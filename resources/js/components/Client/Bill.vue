<template>
    <div class="container">
        <!-- Print trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#billmodal">
            Print Bill
        </button>

        <!-- Modal -->
        <div class="modal fade" id="billmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="wrapper" style="border: 1px solid #282828; padding: 20px;">
                            <div class="heading-part text-center">
                                <h2>सुनौलो बिहानी</h2>
                                <h4>भरतपुर-११, चितवन नेपाल</h4>
                            </div>
                            <div class="body-part">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <p>दर्ता नं.: <span>.............</span></p>
                                    </div>
                                    <div class="col-md-12 text-right">मिति: <span>.............</span></div>
                                    <div class="col-md-12 mt-1">बिल नं.: <span>.............</span></div>
                                    <div class="col-md-12 mt-1">दिनेको नाम: <span>.............</span></div>
                                    <div class="col-md-12 mt-1">ठेगाना: <span>.............</span></div>
                                    <div class="col-md-12 mt-1">रकम: <span>.............</span></div>
                                    <div class="col-md-12 mt-1">बिरामीको नाम: <span>.............</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mt-5" style="border-top: 1px solid black">
                                        रकम लिनेको नाम <br/>
                                        ...........
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Print</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Bill"
    }
</script>

<style scoped>

</style>
