
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('bootstrap');
// require('jquery');

window.Vue = require('vue');
window.axios = require('axios');
window.moment = require('moment');


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


window.app = new Vue({
    el: '#app',
    data() {
        return {
            RequestPayload: {
                keys : [],
                payload : []
            },
            Response :[],
            BaseUrl : ""
        }
    },
    created() {
        console.log(this.RequestPayload)
        this.BaseUrl = "https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/1200px-Flag_of_Pakistan.svg.png";
    },
    mounted(){

    },
    methods: {
        load_data(){
            this.RequestPayload.keys.forEach((item)=>{
                this.RequestPayload.payload.ID = item;
                axios.post(baseurl+'flights/search',JSON.stringify(this.RequestPayload.payload),{
                    headers: {
                        'Content-Type': 'application/json',
                    }}).then((response) => {
                        if (response.data.status) {
                            this.Response = response.data.response
                        }
                    })
                    .catch((error) => {
                        console.log(error);
                    });

            });
        },
        /**
         * @return {string}
         */
        GetAirLineImage(code){
            return baseurl+"assets/img/flights/airlines/"+code+".png";
        },
        /**
         * @return {string}
         */
        GetDate(TimeStamp){
           return  moment.unix(TimeStamp).format("dddd DD MMM YYYY");
        },
        /**
         * @return {string}
         */
        GetTime(TimeStamp){
           return  moment.unix(TimeStamp).format("h:mm A");
        }

    }
});

