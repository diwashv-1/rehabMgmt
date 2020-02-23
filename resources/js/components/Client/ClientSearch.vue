
<template>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div>

                    <form class="">
                        <label for="clientSearch">Search for Client</label>
                        <input type="text" class="form-control" v-model="client_search" id="clientSearch"
                               name="client_search" placeholder="Search Clients" @keyup="searchComponent">
                    </form>
                </div>
                <!--<div>
                    <ul>
                        <li v-for="client in filteredClients" class="list-group-item">
                            <p>{{ client.clients_name }}</p>
                        </li>
                    </ul>
                </div>-->

            </div>
        </div>
        <div class="row">
            <table class="table table-sm table-hover table-stripped table-bordered">
                <thead>
                <tr>
                    <th>Client Code</th>
                    <th>Client Name</th>
                    <th>Guarantor Name</th>
                    <th>Guarantor Contact Number</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="client in clients" @click="fetchClientDetail(client.id)">
                    <td>{{ client.id }}</td>
                    <td>{{ client.client_name }}</td>
                    <td>{{ client.guarantor_name1 }}</td>
                    <td>{{ client.contact_number }}</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ClientSearch",
        mounted() {
            console.log("Component mounted.");
            /*this.fetchClients()*/
        },
        data() {
            return {
                client_search: '',
                clients: [],
                //name of clients
                /*{clients_name:"SpyAj"},
                {clients_name:"Akash"},
                {clients_name:"Dewos"},
                {clients_name:"Abishkar"}*/




            }
        },
        methods: {
            searchComponent: function () {
                return axios.get('api/fetchClientDetail', {}).then(response => {
                    if (this.client_search) {
                        this.clients = response.data.clients.filter(client => client.client_name.toLowerCase().match(this.client_search.toLowerCase()));
                        /*this.clients = response.data.clients.filter(client => client.guarantor_name1.toLowerCase().match(this.client_search.toLowerCase()));*/
                        console.log(response.data.clients);
                    } else {
                        this.clients = response.data.clients;
                    }
                });
            },

            /*********************     FETCH CLIENT DETAILS AFTER CLICK ON TABLE      ***************/
            fetchClientDetail: function (id) {
                axios.post('api/fetchClientInfo', {
                    id: id,
                }).then(response => {
                    alert(response.data.msg);
                });
            }

        },

        created() {
            this.searchComponent();
        },
        /*computed: {
            filteredClients: function () {
                return this.clients.filter((client) => {
                    return client.client_name.match(this.client_search)
                });
            }
        }*/

    }
</script>

<style scoped>

</style>

