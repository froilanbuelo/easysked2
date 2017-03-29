<template>
    <div id="calendar"></div>
</template>

<script>
require('fullcalendar');

export default {
    props: [], //alll the props
    data() {
        return {
            events: [],
            errors: []
        }
    },
    mounted() {
        // var self = this;
        // Vue.nextTick(function() {
        //     $('#calendar').fullCalendar({
        //         defaultView: 'agendaWeek',
        //         editable: true,
        //         events: self.events
        //     });
        // });
    },
    created() {
        var self = this;
        axios.get('http://easysked.dev/event_list')
        .then(response => {
            console.log(response.data.data);
            // JSON responses are automatically parsed.
            self.events = response.data.data
            Vue.nextTick(function() {
                $('#calendar').fullCalendar({
                    defaultView: 'agendaWeek',
                    editable: true,
                    events: self.events
                });
            });
        })
        .catch(e => {
          self.errors.push(e)
        })

        // async / await version (created() becomes async created())
        //
        // try {
        //   const response = await axios.get(`http://jsonplaceholder.typicode.com/posts`)
        //   this.posts = response.data
        // } catch (e) {
        //   this.errors.push(e)
        // }
    }
}
</script>

<style src="fullcalendar/dist/fullcalendar.css"></style>