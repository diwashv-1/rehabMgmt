<template>
    <div>
        <label>{{ labelName }}</label>
        <input type="text" class="form-control"
               :class="{'invalid-input': errorMessage}"
               :type="type || 'text'"
               :placeholder="placeholder"
               :autocomplete="autocomplete || 'off'"
               :value="value"
               :disabled="disabled"
                ref="childRef"
               @input="handleChange($event.target.value)"
               >

        <p class="error-message text-danger">
            {{ errorMessage }}
        </p>
    </div>
</template>

<script>
    export default {
        name: "TextBoxComponent",
        props: ['value', 'type', 'placeholder', 'required', 'minLength', 'disabled', 'autocomplete', 'labelName'],
        data() {
            return{
                validated: false
            }
        },
        computed: {
            errorMessage(){
                if(!this.validated){
                    return '';
                }
                if (this.required && !this.value){
                    return 'This field is required';
                }
                return '';
            }
        },
        methods: {
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
