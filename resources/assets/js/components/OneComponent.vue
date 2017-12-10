<template>
    <div>
        <button v-on:click="plus">{{ counter }}</button>

        <span class="a"><span class="b">ooooooooooooooooooooooo</span></span>
        <ThreeComponent></ThreeComponent>
        <button v-on:click="doalert">alert</button>
        <button v-on:click="dulieudong">du lieu dong - methods</button>
        <button>{{dulieutinh}}</button>


        <!--using global components registered-->
        <two-component></two-component>
        <input type="text" v-on:keyup.13="submit">
    </div>
</template>

<script>

    //private components
    import ThreeComponent from './ThreeComponent.vue'


    function submitne(){
        alert('súp cmn mít')
    }


    function get_ajax(){
        axios.get('/get_ajax')
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
    }

    $(document).ready(function () {
        get_ajax()
    })

    

    export default {
        data () {
            return {
                counter : 2,
                ppp : 'bien tu thang cha',
                biencomputed:'ggg'
            }
        },
        components:{
            ThreeComponent
        },
        methods:{
            plus: function () {
                this.counter++
            },
            doalert: function () {
                alert('do_alert')
            },
            submit:submitne,
            dulieudong:function(){
                console.log(Date.now())
            },

            ddddddd:function () {
                return 'dddddddddd'
            }
        },
        computed:{
            dulieutinh:function(){
                return this.ddddddd()
            }
        }
    }




</script>

<style scoped>
    .a > .b {
        color: red;
    }
</style>

<ssssssssssss>
    Note ở đây nè
</ssssssssssss>
