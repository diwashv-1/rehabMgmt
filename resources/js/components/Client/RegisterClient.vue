<template>
    <div class="container">
        <div class="card">
        <div class="card-body">
            <form action="">
                <div class="form-group row">
                    <label for="clientId">Select Client</label>
                    <select name="client_id" id="clientId" class="form-control">
                        <option value="" selected disabled>Select Clients</option>
                        <option value="">-01</option>
                        <option value="">-02</option>
                        <option value="">-03</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="packageId">Select Packages</label>
                    <select name="package_id" id="packageId" class="form-control">
                        <option value="" selected disabled>Select Packages</option>
                        <option value="">-1</option>
                        <option value="">-2</option>
                        <option value="">-3</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Register</button>
            </form>
        </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "RegisterClient"
    }
</script>

<style scoped>
</style>
