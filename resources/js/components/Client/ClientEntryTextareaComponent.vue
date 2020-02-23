<template>
    <div>
        <label>{{ labelName }}</label>
        <textarea
            class="form-control"
            :class="{'invalid-input': errorMessage}"
            :placeholder="placeholder"
            :value="value"
            @input="handleChange($event.target.value)"
            :rows="rows"
            :columns="columns"
            ref="childRef" />
        <p class="error-message text-danger">
            {{ errorMessage }}
        </p>

    </div>
</template>

<script>
    export default {
        name: "ClientEntryTextareaComponent",
        props: ['value', 'placeholder', 'required', 'disabled',
            'labelName','rows', 'columns'],
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

</style>
