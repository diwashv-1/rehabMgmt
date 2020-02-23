<template>
    <div>
        <label>{{ labelName }}</label>
        <select class="form-control" @input="$emit('input', $event.target.value)">
            <option :value="null">– Select a ... –</option>
            <option
                class="{'invalid-input': errorMessage}"
                :disabled="disabled"
                ref="childRef"
                v-for="(text, value) in options"
                :value="value">
                {{ text }}
            </option>
        </select>

        <p class="error-message text-danger">
            {{ errorMessage }}
        </p>
    </div>
</template>

<script>
    export default {
        name: "SelectOptionComponent",
        props: ['value', 'labelName', 'disabled', 'required' ],
        data() {
            return{
                validated: false,
                options: {
                    '1': 'option1',
                    '2': 'option2',
                    '3': 'option3'
                },
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
                this.$emit('option', ev);
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

</style>
