<template>
    <body>
    <div class="container">


    <h2> Welcome Here </h2>
    <h3 v-bind:title="titlesub" >{{title}}</h3>
        <h4> Count : {{logItemsCount}}</h4>




    <table class="table table-{1:striped|sm|bordered|hover|inverse} table-inverse">
        <thead class="thead-inverse|thead-default">
        <tr>
            <th v-for="head in heads">{{head.topic}}</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        <tr>

            <td>{{name}}</td>
            <td>{{city}}</td>
            <td>{{zipcode}}</td>
            <td>{{company}}</td>
            <td>{{currency}}</td>
            <td>{{transaction}}</td>
            <td>{{job}}</td>
            <td></td>
        </tr>
        <tr>
            <td scope="row">
                <input v-model="name" type="text"
                >
            </td>
            <td><input v-model="city" type="text" placeholder="New entry"></td>
            <td><input v-model="zipcode"></td>
            <td><input v-model="company"></td>
            <td><input v-model="currency"></td>
            <td><input v-model="transaction"></td>
            <td><input v-model="job"></td>
            <td><button v-on:click=" " class="btn btn-primary" >Add</button></td>
        </tr>

        </tbody>
    </table>
    </div>
    </body>

</template>


<script>
import Axios from 'axios'

    export default {
        name: 'App',
        data(){
            return{
                title: 'Orders',
                titlesub: "Updated at " + new Date(),
                heads: [

                    {topic : 'Name'},
                    {topic : 'City'},
                    {topic : 'Zip'},
                    {topic : 'Company'},
                    {topic : 'Currency'},
                    {topic : 'Transaction'},
                    {topic : 'Job'}
                ],

                name: '',
                city: '',
                zipcode: '',
                company: '',
                currency: '',
                transaction: '',
                job: '',
                logItems: {},
            }
        },

        computed:{
            logItemsCount (){
                return Object.keys(this.logItems).length
            }
        },
        mounted() {
            axios.get('http://localhost:3001/orders/')
                .then(response =>{
                    this.logItems = response.data
                    this.responseData = response

                }).catch(error => console.log(error))
        },
        created() {
            this.loadQuotes();
        },
        methods: {
            loadQuotes: function () {
                this.name = 'loading...';
                var vm = this;
                for (let i = 0; i < 20; i++) {
                    axios.get('http://localhost:3001/orders/'+ i)
                        .then(function (response) {
                            vm.name= response.data.name;
                            vm.city= response.data.city;
                            vm.zipcode= response.data.zipcode;
                            vm.company= response.data.company;
                            vm.currency= response.data.currency;
                            vm.transaction= response.data.tranaction;
                            vm.job= response.data.job;

                        })
                }
                }


        },


    }

</script>

<style scoped>

</style>