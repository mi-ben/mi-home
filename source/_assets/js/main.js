import 'sharer.js';
import './highlight';
import './fontawesome/all.min';

// Vue & Custom Components
import Vue from 'vue';
import TestComponent from './components/test';
import LineChart from './components/line-chart';

new Vue({
    components: {
        'test-component': TestComponent,
        'line-chart': LineChart

    },
    el: '#model'
})
