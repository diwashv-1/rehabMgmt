<template>
    <div>
            <label>{{ labelName }}</label>
            <input class="form-control"
                   :type="type || 'text'"
                   :class="{'invalid-input': errorMessage}"
                   :placeholder="placeholder"
                   :autocomplete="autocomplete || 'off'"
                   :value="value"
                   :disabled="disabled"
                   @input="handleChange($event.target.value)"
                   ref="childRef" >
        <!--@input="handleChange($event.target.value)"-->
            <!--<textarea
                class="form-control"
                :class="{'invalid-input': errorMessage}"
                :placeholder="placeholder"
                :value="value"
                :rows="rows || 4"
                :columns="columns || 40">
            </textarea>-->
            <p class="error-message text-danger">
                {{ errorMessage }}
            </p>

    </div>
</template>

<script>
    export default {
        name: "ClientValidate",
        props: ['value', 'placeholder', 'type', 'minLength','maxLength','minAge', 'required', 'disabled',
            'labelName', 'autocomplete'],
        data() {
            return{
                validated: false
            }
        },
        computed:{
            errorMessage(){
                if(!this.validated){
                    return '';
                }
                if (this.required && !this.value){
                    return 'This field is required';
                }
                if (this.minLength && this.value.length < this.minLength){
                    return 'This field be ${this.minLength} characters long';
                }
                if (this.maxLength && this.value.length > this.maxLength){
                    return 'This field be ${this.maxLength} characters long';
                }
                /*if (this.minAge && this.value < this.minAge){

                    return 'This age must be min 16';
                }*/
                return '';
            }
        },
        methods:{
            handleChange(ev){
                this.$emit('input', ev);
                this.validated = true;
            },
            validateForm(){
                this.validated = true;
            },
            focus(){
                this.$refs.childRef.focus();
            }
        },
    }
</script>

<style scoped>
    .invalid-input {
        border: 1px solid red !important;
    }
</style>
