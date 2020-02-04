<template>
    <div>
        <!-- object value -->
        <model-select :options="options"
                      v-model="item"
                      placeholder="Search and select item">
        </model-select>

    </div>
</template>

<script>
    import { ModelSelect } from 'vue-search-select'

    export default {
        data () {
            return {
                options: [
                    { value: '1', text: 'Zack' + ' - ' + '1' },
                    { value: '2', text: 'John' + ' - ' + '2' },
                    { value: '3', text: 'Alex' + ' - ' + '3' },
                    { value: '4', text: 'Hezor' + ' - ' + '4' },
                    { value: '5', text: 'Rocky' + ' - ' + '5' }
                ],
                item: {
                    value: '',
                    text: ''
                },
            }
        },
        methods: {
            reset () {
                this.item = {}
            },
            selectFromParentComponent1 () {
                // select option from parent component
                this.item = this.options[0]
            },
        },
        components: {
            ModelSelect
        }
    }
</script>

<style scoped>

</style>

