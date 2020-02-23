 <template>
    <div id="clientForm">
        <div class="card">
            <div class="card-body">

                <section v-if="step == 1">
                    <h2>Step 1</h2>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <client-entry-validate labelName="Date of Joining"
                                                   v-model="joined_date"
                                                   type="date"
                                                   placeholder=""
                                                   required="true"
                                                   ref="joined_date"/>
                        </div>
                        <div class="form-group col-md-4">
                            <client-entry-validate labelName="Client Id"
                                                   v-model="client_id"
                                                   placeholder="Enter Client Id"
                                                   type="number"
                                                   required="true"
                                                   ref="client_id"/>
                        </div>
                        <div class="form-group col-md-4">
                            <client-entry-validate labelName="Client Full Name"
                                                   v-model="client_name"
                                                   placeholder="Enter Client Full Name"
                                                   type="text"
                                                   min-length="6"
                                                   required="true"
                                                   ref="client_name"/>
                        </div>
                        <!--Gender Remaining-->
                        <div class="form-group col-md-4">
                            <label>Gender</label>
                            <div id="gender">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                           name="inlineRadioOptions" id="inlineRadio1" value="male"
                                           v-model="client_gender">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                           name="inlineRadioOptions" id="inlineRadio2" value="female"
                                           v-model="client_gender">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="form-group col-md-4">
                            <client-entry-validate labelName="Client Age"
                                                   v-model="client_age"
                                                   placeholder="Enter Client Age"
                                                   type="number"
                                                   minAge=16
                                                   required="true"
                                                   ref="client_age"/>
                        </div>
                        <div class="form-group col-md-12">
                            <client-entry-validate labelName="Client Address"
                                                   v-model="address"
                                                   placeholder="Enter Client Address"
                                                   type="text"
                                                   required="true"
                                                   ref="address"/>
                        </div>
                    </div>
                    <h4><u>Medical Reports</u></h4>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <client-entry-validate labelName="Client Weight"
                                                   v-model="weight"
                                                   placeholder="Enter Client Weight"
                                                   type="number"
                                                   max-length="3"
                                                   required="true"
                                                   ref="weight"/>
                        </div>
                        <div class="form-group col-md-4">
                            <client-entry-validate labelName="Client Body Temperature (In Deg. F)"
                                                   v-model="temperature"
                                                   placeholder="Enter Client Temperature"
                                                   type="number"
                                                   max-length="3"
                                                   required="true"
                                                   ref="temperature"/>
                        </div>
                        <div class="form-group col-md-4">
                            <client-entry-validate labelName="Client Blood Pressure"
                                                   v-model="blood_pressure"
                                                   placeholder="Enter Client Blood Pressure"
                                                   type="number"
                                                   max-length="6"
                                                   required="true"
                                                   ref="blood_pressure"/>
                        </div>
                        <div class="form-group col-md-4">
                            <client-entry-validate labelName="Client Blood Group"
                                                   v-model="blood_group"
                                                   placeholder="Enter Client Blood Group"
                                                   type="text"
                                                   required="true"
                                                   ref="blood_group"/>
                        </div>
                    </div>
                </section>

                <section v-if="step == 2">
                    <h2>Step 2</h2>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <client-entry-validate label-name="Guarantor Name"
                                                   v-model="guarantor_name1"
                                                   placeholder="Enter Guarantor Name"
                                                   required="true"
                                                   type="text"
                                                   ref="guarantor_name1"/>
                        </div>
                        <div class="form-group col-md-4">
                            <client-entry-validate label-name="Guarantor Name (optional)"
                                                   v-model="guarantor_name2"
                                                   placeholder="Enter Guarantor Name (optional)"
                                                   type="text"
                                                   ref="guarantor_name2"/>
                        </div>
                        <div class="form-group col-md-4">
                            <client-entry-validate label-name="Guarantor Relation to Client"
                                                   v-model="guarantor_relation"
                                                   placeholder="Enter Guarantor Relation"
                                                   required="true"
                                                   type="text"
                                                   ref="guarantor_relation"/>
                        </div>
                        <div class="form-group col-md-4">
                            <client-entry-validate label-name="Guarantor Address"
                                                   v-model="optional_address1"
                                                   placeholder="Enter Guarantor Address"
                                                   required="true"
                                                   type="text"
                                                   ref="optional_address1"/>
                        </div>
                        <div class="form-group col-md-4">
                            <client-entry-validate label-name="Guarantor Address (optional)"
                                                   v-model="optional_address2"
                                                   placeholder="Enter Guarantor Address (optional)"
                                                   type="text"
                                                   ref="optional_address2"/>
                        </div>
                        <div class="form-group col-md-4">
                            <client-entry-validate label-name="Father Name"
                                                   v-model="father_name"
                                                   placeholder="Enter Father Name"
                                                   required="true"
                                                   type="text"
                                                   ref="father_name"/>
                        </div>
                        <div class="form-group col-md-4">
                            <client-entry-validate label-name="Mother Name"
                                                   v-model="mother_name"
                                                   placeholder="Enter Mother Name"
                                                   required="true"
                                                   type="text"
                                                   ref="mother_name"/>
                        </div>
                        <div class="form-group col-md-4">
                            <client-entry-validate label-name="Contact Name"
                                                   v-model="contact_number"
                                                   placeholder="Enter Contact Number"
                                                   required="true"
                                                   min-length="10"
                                                   type="number"
                                                   ref="contact_number"/>
                        </div>
                    </div>
                </section>

                <section v-if="step == 3">
                    <h2>step3</h2>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <client-entry-textarea-component
                                label-name="कति समय सेवन गरेको ?"
                                v-model="question1"
                                required="true"
                                ref="question1" />
                        </div>
                        <div class="form-group col-md-12">
                            <client-entry-textarea-component
                                label-name="कुन-कुन चिज सेवन गरेको ?"
                                v-model="question2"
                                required="true"
                                ref="question2" />
                        </div>
                        <div class="form-group col-md-12">
                            <client-entry-textarea-component
                                label-name="कुन ठाउँबाट ल्याउने गरेको ?"
                                v-model="question3"
                                required="true"
                                ref="question3" />
                        </div>
                        <div class="form-group col-md-12">
                            <client-entry-textarea-component
                                label-name="कुन ठाउँमा (स्थान) गएर प्रयोग गर्ने गरेको ?"
                                v-model="question4"
                                required="true"
                                ref="question4" />
                        </div>
                        <div class="form-group col-md-12">
                            <client-entry-textarea-component
                                label-name="दिनमा कति मात्रामा प्रयोग गर्ने गरेको ?"
                                v-model="question5"
                                required="true"
                                ref="question5" />
                        </div>
                        <div class="form-group col-md-12">
                            <client-entry-textarea-component
                                label-name="पारिवारिक सम्बन्ध कस्तो छ ?"
                                v-model="question6"
                                required="true"
                                ref="question6" />
                        </div>
                        <div class="form-group col-md-12">
                            <client-entry-textarea-component
                                label-name="हालसम्म Police Case भए नभएको ? भए कुन Case मा ?"
                                v-model="question7"
                                required="true"
                                ref="question7" />
                        </div>
                        <div class="form-group col-md-12">
                            <client-entry-textarea-component
                                label-name="उपचारमा आउनु पर्ने कारण ?"
                                v-model="question8"
                                required="true"
                                ref="question8" />
                        </div>
                        <div class="form-group col-md-12">
                            <client-entry-textarea-component
                                label-name="हालसम्म उपचार गरेको छ/छैन ? छ भने कति पटक र कहाँ ?"
                                v-model="question9"
                                required="true"
                                ref="question9" />
                        </div>
                    </div>
                </section>

                <section v-if="step == 4">
                    <h2>Step 2</h2>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <client-entry-textarea-component
                                label-name="Case History"
                                v-model="case_history"
                                required="true"
                                rows="6"
                                ref="case_history" />
                        </div>
                        <div class="form-group col-md-12">
                            <client-entry-textarea-component
                                label-name="Advice"
                                v-model="advice"
                                required="true"
                                rows="6"
                                ref="advice" />
                        </div>
                    </div>
                </section>
                <section v-if="this.step == 5">
                    <h2>Step 5</h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="packageId">Select Packages</label>
                            <select name="package_id" id="packageId" class="form-control" required>
                                <option value="" selected disabled>Select Packages</option>
                                <option value="1">-1</option>
                                <option value="2">-2</option>
                                <option value="3">-3</option>
                            </select>
                        </div>
                    </div>
                </section>

                <!--<button @click="handleSubmit">Submit</button>-->
                <!--<p v-if="formSubmitted">
                    Client id: {{ client_id }} <br/>
                    Client Name: {{ client_name }}
                </p>-->
                <!--Button-->
                <button v-if="step>1" type="button" class="btn btn-secondary" @click="prevStep">Previous</button>
                <button v-if="step< totalSteps" type="button" class="btn btn-info" @click="nextStep">Next</button>
                <button v-if="step == totalSteps" type="button" class="btn btn-success" @click="handleSubmit">Submit</button>
                <!------->
            </div>
        </div>
    </div>
</template>

<script>
    import ClientEntryValidate from "./ClientEntryValidate";
    import ClientEntryTextareaComponent from "./ClientEntryTextareaComponent";

    export default {
        name: "ClientEntryComponent",
        components: {
            ClientEntryValidate,
            ClientEntryTextareaComponent
        },
        data() {
            return {
                formSubmitted: false,
                client_id1: '',
                password: '',
                /*Form Components*/
                /*Step 1 Componenta*/
                joined_date: '',
                client_id: '',
                client_name: '',
                client_gender:'',
                client_age: '',
                address: '',
                weight: '',
                temperature: '',
                blood_pressure: '',
                blood_group: '',
                /*Step 2 Components*/
                guarantor_name1: '',
                guarantor_name2: '',
                guarantor_relation: '',
                optional_address1: '',
                optional_address2: '',
                father_name: '',
                mother_name: '',
                contact_number: '',
                /*Step 3 Components*/
                question1: '',
                question2: '',
                question3: '',
                question4: '',
                question5: '',
                question6: '',
                question7: '',
                question8: '',
                question9: '',
                /*Step 4 Component*/
                case_history: '',
                advice: '',
                /*Step 5 Component*/
                package_id: '',

                /*Steps Components*/
                totalSteps: 5,
                step: 1

            }
        },
        methods: {
            nextStep() {
                /*this.formSubmitted = false;*/
                /*Step 1*/
                if (this.step == 1) {

                    this.$refs.joined_date.validateForm();
                    if (this.$refs.joined_date.errorMessage) {
                        this.$refs.joined_date.focus();
                        return;
                    }
                    this.$refs.client_id.validateForm();
                    if (this.$refs.client_id.errorMessage) {
                        this.$refs.client_id.focus();
                        return;
                    }
                    this.$refs.client_name.validateForm();
                    if (this.$refs.client_name.errorMessage) {
                        this.$refs.client_name.focus();
                        return;
                    }
                    this.$refs.client_age.validateForm();
                    if (this.$refs.client_age.errorMessage) {
                        this.$refs.client_age.focus();
                        return;
                    }
                    this.$refs.address.validateForm();
                    if (this.$refs.address.errorMessage) {
                        this.$refs.address.focus();
                        return;
                    }
                    this.$refs.weight.validateForm();
                    if (this.$refs.weight.errorMessage) {
                        this.$refs.weight.focus();
                        return;
                    }
                    this.$refs.temperature.validateForm();
                    if (this.$refs.temperature.errorMessage) {
                        this.$refs.temperature.focus();
                        return;
                    }
                    this.$refs.blood_pressure.validateForm();
                    if (this.$refs.blood_pressure.errorMessage) {
                        this.$refs.blood_pressure.focus();
                        return;
                    }
                    this.$refs.blood_group.validateForm();
                    if (this.$refs.blood_group.errorMessage) {
                        this.$refs.blood_group.focus();
                        return;
                    }
                }

                /*Step 2*/
                if (this.step == 2) {

                    this.$refs.guarantor_name1.validateForm();
                    if (this.$refs.guarantor_name1.errorMessage) {
                        this.$refs.guarantor_name1.focus();
                        return;
                    }
                    this.$refs.guarantor_relation.validateForm();
                    if (this.$refs.guarantor_relation.errorMessage) {
                        this.$refs.guarantor_relation.focus();
                        return;
                    }
                    this.$refs.optional_address1.validateForm();
                    if (this.$refs.optional_address1.errorMessage) {
                        this.$refs.optional_address1.focus();
                        return;
                    }
                    this.$refs.father_name.validateForm();
                    if (this.$refs.father_name.errorMessage) {
                        this.$refs.father_name.focus();
                        return;
                    }
                    this.$refs.mother_name.validateForm();
                    if (this.$refs.mother_name.errorMessage) {
                        this.$refs.mother_name.focus();
                        return;
                    }
                    this.$refs.contact_number.validateForm();
                    if (this.$refs.contact_number.errorMessage) {
                        this.$refs.contact_number.focus();
                        return;
                    }
                }

                if(this.step == 3) {

                    this.$refs.question1.validateForm();
                    if (this.$refs.question1.errorMessage) {
                        this.$refs.question1.focus();
                        return;
                    }
                    this.$refs.question2.validateForm();
                    if (this.$refs.question2.errorMessage) {
                        this.$refs.question2.focus();
                        return;
                    }
                    this.$refs.question3.validateForm();
                    if (this.$refs.question3.errorMessage) {
                        this.$refs.question3.focus();
                        return;
                    }
                    this.$refs.question4.validateForm();
                    if (this.$refs.question4.errorMessage) {
                        this.$refs.question4.focus();
                        return;
                    }
                    this.$refs.question5.validateForm();
                    if (this.$refs.question5.errorMessage) {
                        this.$refs.question5.focus();
                        return;
                    }
                    this.$refs.question6.validateForm();
                    if (this.$refs.question6.errorMessage) {
                        this.$refs.question6.focus();
                        return;
                    }
                    this.$refs.question7.validateForm();
                    if (this.$refs.question7.errorMessage) {
                        this.$refs.question7.focus();
                        return;
                    }
                    this.$refs.question8.validateForm();
                    if (this.$refs.question8.errorMessage) {
                        this.$refs.question8.focus();
                        return;
                    }
                    this.$refs.question9.validateForm();
                    if (this.$refs.question9.errorMessage) {
                        this.$refs.question9.focus();
                        return;
                    }
                }

                if (this.step == 4)
                {
                    this.$refs.case_history.validateForm();
                    if (this.$refs.case_history.errorMessage) {
                        this.$refs.case_history.focus();
                        return;
                    }
                    this.$refs.advice.validateForm();
                    if (this.$refs.advice.errorMessage) {
                        this.$refs.advice.focus();
                        return;
                    }
                }

                /*this.formSubmitted = true;*/
                this.step++;

            },
            prevStep() {
                this.step--
            },

            handleSubmit() {
                if (this.step == 5){
                    alert('Form ready to submit')
                }
            }

            /*handleSubmit() {
                this.formSubmitted = false;
                this.$refs.client_id1.validateForm();
                if (this.$refs.client_id1.errorMessage) {
                    this.$refs.client_id1.focus();
                    return;
                }
                this.$refs.password.validateForm();
                if (this.$refs.password.errorMessage) {
                    this.$refs.password.focus();
                    return;
                }
                this.$refs.client_name.validateForm();
                if (this.$refs.client_name.errorMessage) {
                    this.$refs.client_name.focus();
                    return;
                }
                this.formSubmitted = true;
            },*/
        }
    }
</script>

<style scoped>
    #clientForm{
        margin-top: 20px;
    }
    h2{
        text-align: center;
        color: #0B8C8F;
        padding-bottom: 10px;
    }
</style>
