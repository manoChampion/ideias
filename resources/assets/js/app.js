require('./bootstrap');

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    created() {
        Echo.channel('channelDemoEvent').listen('eventTrigger', (e) => {
            alert('The event has been triggered');
        });
    }
});