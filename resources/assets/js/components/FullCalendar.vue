<template>
    <div id="calendar"></div>
</template>

<script>
require('fullcalendar');

export default {
    props: [], //alll the props
    data() {
        return {
            //all the data
        }
    },
    mounted() {
        var self = this;
        Vue.nextTick(function() {
            $('#calendar').fullCalendar({
                defaultView: 'agendaWeek',
                editable: true,
                events: [
                    {
                        start: '2017-03-27T10:00:00',
                        end: '2017-03-27T16:00:00',
                        rendering: 'background'
                    }
                ]
            });
        });
    }
}
</script>

<style src="fullcalendar/dist/fullcalendar.css"></style>