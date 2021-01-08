<template>
    <div class="todoListContainer">
        
        <div class="heading">
            <h2 id="title">TodoList</h2> 
                <add-item-form v-on:reloadlist="getList()" />
        </div>
        <listview :items="items" v-on:reloadlist="getList() " />
 
    </div>
</template>

<script>
import addItemForm from './addItemForm.vue'
import Listview from './listview.vue'

export default {
    components:{
        addItemForm,
        Listview,
    },
    data:function(){
        return{
            items:[]
        }
    },
    methods:{
        getList(){
            axios.get('api/items')
            .then(response=> {
                this.items = response.data
            })
            .catch(error=> {
                console.log(error);
            })
        }
    },
    created(){
        this.getList();
    }
}
</script>

<style scoped>
.todoListContainer{
    width:350px;
    margin:auto;
}
.heading{
    background: #e6e6e6;
    padding: 10px;
}
#title{
    text-align:center;
}
</style>
