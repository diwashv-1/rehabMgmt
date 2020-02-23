<template>
    <div>
        <div class="form-group col-md-4">
            <label for="">{{ labelName }}</label>
            <input type="text" class="form-control"
                   :type="type || 'text'"
                   :class="{'invalid-input': errorMessage}"
                   :placeholder="placeholder"
                   :value="value"
                   :disabled="disabled"
                    @input="handleChange($event.target.value)"
                    ref="childRef" >
            <p class="error-message text-danger">
                {{ errorMessage }}
            </p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ClientFormValidate",
        props: ['value', 'placeholder', 'type', 'minLength', 'required', 'disabled', 'labelName'],
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
        }
    }
</script>

<style scoped>
    .invalid-input {
        border: 1px solid red !important;
    }
</style>
