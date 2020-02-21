<template>
    <div class="container">

        <div class="">
            <h1>Show Test</h1>
            <client-component-validate labelName="Client Id"
                                        v-model="client_id1"
                                       placeholder="Enter Client Id"
                                        min-length="3"
                                       required="true"
                                        ref="client_id1"/>
            <client-component-validate labelName="Password"
                                        v-model="password"
                                       type="password"
                                       placeholder="Enter Password"
                                        min-length="8"
                                       required="true"
                                        ref="password"/>
            <button @click="handleSubmit">Submit</button>
            <hr>
            <p v-if="formSubmitted">
                Client id: {{ client_id1 }} <br/>
                Password: {{ password }}
            </p>
        </div>
        <!--Steps-->
        <div class="row">
            <div class="progressbar col-md-12">
                <ul>
                    <li class="active" v-if="step<= totalSteps"> Step 1</li>
                    <li v-if="step>1"> Step 2</li>
                    <li v-if="step>2"> Step 3</li>
                    <li v-if="step>3"> Step 4</li>
                </ul>
            </div>
        </div>
        <!------->
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form>
                    <p class="text-danger"><span v-for="e in errors">{{ e }}</span></p>


                    <div class="card" v-if="step == 1">
                        <div class="card-body">
                            <section>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="photo">Photo</label>
                                        <i class="fas fa-camera"></i>

                                        <input type="file" class="form-control-file" id="photo">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="joined_date">मिति</label>
                                        <input type="date" class="form-control" v-model="form.joined_date"
                                               name="joined_date">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="client_id">सदश्य नं.</label>
                                        <input type="number" class="form-control" v-model="form.client_id"
                                               name="client_id"
                                               placeholder=""
                                               autocomplete="off">
                                    </div>

                                    <div class="form-group col-md-4">

                                        <label for="client_name">बिरामीको नाम</label>
                                        <input type="text" class="form-control"
                                               placeholder="" v-model="form.client_name" name="client_name"
                                               autocomplete="off">
                                        <span v-if="errors.nameError"
                                              class="text-danger"> {{ errors.nameError }} </span>

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="client_gender">लिङ्ग</label>
                                        <div id="gender">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                       name="inlineRadioOptions" id="inlineRadio1" value="male"
                                                       v-model="form.client_gender">
                                                <label class="form-check-label" for="inlineRadio1">पुरुष</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                       name="inlineRadioOptions" id="inlineRadio2" value="female"
                                                       v-model="form.client_gender">
                                                <label class="form-check-label" for="inlineRadio2">महिला</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="client_age">उमेर</label>
                                        <input type="number" class="form-control" placeholder=""
                                               v-model='form.client_age'
                                               name="client_age"
                                               autocomplete="off">
                                        <span v-if="errors.ageError" class="text-danger"> {{ errors.ageError }}</span>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="address">ठेगाना</label>
                                        <textarea class="form-control" placeholder="" v-model="form.address"
                                                  name="address"
                                                  autocomplete="off"></textarea>
                                    </div>
                                </div>

                                <h4><u>Medical Reports</u></h4>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="weight">Weight</label>
                                        <input class="form-control" placeholder="" name="weight" v-model="form.weight"
                                               autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="temperature">Temperature</label>
                                        <input class="form-control" placeholder="" v-model="form.temperature"
                                               name="temperature"
                                               autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="blood_pressure">Blood Pressure</label>
                                        <input class="form-control" placeholder="" v-model="form.blood_pressure"
                                               name="blood_pressure"
                                               autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="blood_group">Blood Group</label>
                                        <input class="form-control" placeholder="" v-model="form.blood_group"
                                               name="blood_group"
                                               autocomplete="off">
                                    </div>

                                </div>

                            </section>
                        </div>
                    </div>

                    <div class="card" v-if="step == 2">
                        <div class="card-body">
                            <section>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="guarantor_name1">अभिभावकको नाम</label>
                                        <input type="text" class="form-control" placeholder=""
                                               name="guarantor_name1" v-model="form.guarantor_name1" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="guarantor_relation">अभिभावकको नाता</label>
                                        <input type="text" class="form-control" v-model="form.guarantor_relation"
                                               placeholder=""
                                               name="guarantor_relation" autocomplete="off">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="father_name">बाबुको नाम</label>
                                        <input type="text" class="form-control" placeholder=""
                                               v-model="form.father_name"
                                               name="father_name"
                                               autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="mother_name">आमाको नाम</label>
                                        <input type="text" class="form-control" placeholder=""
                                               v-model="form.mother_name"
                                               name="mother_name"
                                               autocomplete="off">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="contact_number">सम्पर्क फोन.</label>
                                        <input type="number" class="form-control" placeholder=""
                                               name="contact_numbber" v-model="form.contact_number" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="conatct_number2">सम्पर्क फोन.</label>
                                        <input type="number" class="form-control" placeholder=""
                                               name="contact_number2" v-model="form.contact_number2" autocomplete="off"
                                               value="">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="guarantor_address">ठेगाना</label>
                                        <textarea class="form-control" placeholder="" v-model="form.guarantor_address"
                                                  name="guarantor_address"
                                                  autocomplete="off"></textarea>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>


                    <div class="card" v-if="step ==3">
                        <div class="card-body">
                            <section>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="question1">कति समय सेवन गरेको ?</label>
                                        <textarea class="form-control" v-model="form.question1" name=""
                                                  autocomplete="off"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="question2">कुन-कुन चिज सेवन गरेको ?</label>
                                        <textarea class="form-control" v-model="form.question2" name=""
                                                  autocomplete="off"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="question3">कुन ठाउँबाट ल्याउने गरेको ?</label>
                                        <textarea class="form-control" v-model="form.question3" name=""
                                                  autocomplete="off"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="question4">कुन ठाउँमा (स्थान) गएर प्रयोग गर्ने गरेको ?</label>
                                        <textarea class="form-control" v-model="form.question4" name=""
                                                  autocomplete="off"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="question5">दिनमा कति मात्रामा प्रयोग गर्ने गरेको ?</label>
                                        <textarea class="form-control" v-model="form.question5" name=""
                                                  autocomplete="off"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="question6">पारिवारिक सम्बन्ध कस्तो छ ?</label>
                                        <textarea class="form-control" v-model="form.question6" name=""
                                                  autocomplete="off"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="question7">हालसम्म Police Case भए नभएको ? भए कुन Case मा ?</label>
                                        <textarea class="form-control" v-model="form.question7" name=""
                                                  autocomplete="off"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="question8">उपचारमा आउनु पर्ने कारण ?</label>
                                        <textarea class="form-control" v-model="form.question8" name=""
                                                  autocomplete="off"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="question9">हालसम्म उपचार गरेको छ/छैन ? छ भने कति पटक र कहाँ
                                            ?</label>
                                        <textarea class="form-control" v-model="form.question9" name=""
                                                  autocomplete="off"></textarea>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>


                    <div class="card" v-if="step ==4">
                        <div class="card-body">
                            <section>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="case_history">Case History</label>
                                        <textarea class="form-control" rows="6" v-model="form.case_history"
                                                  name="case_history"
                                                  autocomplete="off"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="advice">Advice</label>
                                        <textarea class="form-control" rows="6" v-model="form.advice" name="advice"
                                                  autocomplete="off"></textarea>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>


                    <!--Button-->
                    <button v-if="step>1" type="button" @click="prevStep">Previous</button>
                    <button v-if="step< totalSteps" type="button" @click="nextStep">Next</button>
                    <button v-if="step == totalSteps" type="button" @click="submitForm">Submit</button>
                    <!------->
                </form>


            </div>
        </div>
    </div>
</template>

<script>
    import ClientFormValidate from "./ClientFormValidate";
    export default {
        name: 'app',
        components: {
          ClientFormValidate
        },
        data: function () {
            return {
                client_id1: '',
                password: '',
                formSubmitted: false,
                form: {
                    /*Step 1*/
                    joined_date: null,
                    client_id: null,
                    client_name: null,
                    client_gender: null,
                    client_age: null,
                    address: null,
                    weight: null,
                    temperature: null,
                    blood_pressure: null,
                    blood_group: null,
                    /*--Step 2-*/
                    guarantor_name1: null,
                    guarantor_relation: null,
                    father_name: null,
                    mother_name: null,
                    contact_number: null,
                    contact_number2: null,
                    guarantor_address: null,
                    /*Step 3*/
                    question1: null,
                    question2: null,
                    question3: null,
                    question4: null,
                    question5: null,
                    question6: null,
                    question7: null,
                    question8: null,
                    question9: null,
                    /*Step 4*/
                    case_history: null,
                    advice: null
                },
                totalSteps: 4,
                step: 1,
                errors: {
                    nameError: null,
                    ageError: null,
                },
            }
        },

        methods: {
            handleSubmit() {
                this.formSubmitted = false;
                this.$refs.client_id1.validateForm();
                if(this.$refs.client_id1.errorMessage){
                    this.$refs.client_id1.focus();
                    return;
                }
                this.$refs.password.validateForm();
                if(this.$refs.password.errorMessage){
                    this.$refs.password.focus();
                    return;
                }
                this.formSubmitted = true;
            },
            nextStep: function () {
                if (this.step == 1) {

                    if (!this.form.joined_date) {
                        this.errors = "Joined Date is Required.";
                        return false;
                    }
                    if (!this.form.client_id) {
                        this.errors = "Client Id is Required.";
                        return false;
                    }
                    if (!this.form.client_name) {
                        this.errors.nameError = "Client Name is Required.";
                        return false;
                    }
                    if (!this.form.client_gender) {
                        this.errors = "Client Gender is Required.";
                        return false;
                    }
                    if (!this.form.client_age) {
                        this.errors.ageError = "Client Age is Required.";
                        return false;
                    }
                    if (!this.form.address) {
                        this.errors = "Address is Required.";
                        return false;
                    }
                    if (!this.form.weight) {
                        this.errors = "Client Weight is Required.";
                        return false;
                    }
                    if (!this.form.temperature) {
                        this.errors = "Client Temperature is Required.";
                        return false;
                    }
                    if (!this.form.blood_pressure) {
                        this.errors = "Client Blood Pressure is Required.";
                        return false;
                    }
                    if (!this.form.blood_group) {
                        this.errors = "Client Blood Group is Required.";
                        return false;
                    }
                }
                if (this.step == 2) {
                    if (!this.form.guarantor_name1) {
                        this.errors = "Guarantor Name is Required.";
                        return false;
                    }
                    if (!this.form.guarantor_relation) {
                        this.errors = "Guarantor relation is Required.";
                        return false;
                    }
                    if (!this.form.father_name) {
                        this.errors = "Father Name is Required.";
                        return false;
                    }
                    if (!this.form.mother_name) {
                        this.errors = "Mother Name is Required.";
                        return false;
                    }
                    if (!this.form.contact_number) {
                        this.errors = "Contact Number is Required.";
                        return false;
                    }
                    if (!this.form.guarantor_address) {
                        this.errors = "Guarantor Address is Required.";
                        return false;
                    }
                }
                if (this.step == 3) {
                    if (!this.form.question1) {
                        this.errors = "All questions are Required to be answered";
                        return false;
                    }
                    if (!this.form.question2) {
                        this.errors = "All questions are Required to be answered";
                        return false;
                    }
                    if (!this.form.question3) {
                        this.errors = "All questions are Required to be answered";
                        return false;
                    }
                    if (!this.form.question4) {
                        this.errors = "All questions are Required to be answered";
                        return false;
                    }
                    if (!this.form.question5) {
                        this.errors = "All questions are Required to be answered";
                        return false;
                    }
                    if (!this.form.question6) {
                        this.errors = "All questions are Required to be answered";
                        return false;
                    }
                    if (!this.form.question7) {
                        this.errors = "All questions are Required to be answered";
                        return false;
                    }
                    if (!this.form.question8) {
                        this.errors = "All questions are Required to be answered";
                        return false;
                    }
                    if (!this.form.question9) {
                        this.errors = "All questions are Required to be answered";
                        return false;
                    }
                }

                this.step++;
                this.errors = null;
            },
            prevStep: function () {
                this.step--
            },

            submitForm: function () {
                if (this.step == 4) {
                    if (!this.form.case_history) {
                        this.errors = "Case history is required";
                        return false;
                    }
                    if (!this.form.advice) {
                        this.errors = "Advice is required";
                        return false;
                    }
                }
                this.errors = null;
                alert('Form ready to submit')
            }


        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>
    /*.card-body {
        padding: 25px 25px 20px 20px;
        !*border-left: solid 50px #2e968f;*!
        border-left: solid 50px #172526;

    }*/

    ul {
        text-align: center;
        counter-reset: step;
    }

    ul li {
        display: inline-block;
        list-style-type: none;
        float: left;
        width: 25%;
        position: relative;
        text-align: center;
    }

    ul li:before {
        content: counter(step);
        counter-increment: step;
        width: 30px;
        height: 30px;
        line-height: 30px;
        border: solid 1px black;
        display: block;
        text-align: center;
        margin: 0 auto 10px auto;
        border-radius: 50%;
        background-color: white;
        /*z-index: 1;*/
    }

    ul li:after {
        content: '';
        position: absolute;
        width: 100%;
        height: 1px;
        background-color: black;
        top: 15px;
        right: 115px;
        /*z-index: -1;*/
    }

    ul li:first-child:after {
        content: none;
    }

    ul li.active {
        color: green;
    }

    ul li.active:before {
        border-color: green !important;
    }

    /*.progressbar li.active + li:after {
        background-color: green;
    }*/

</style>
