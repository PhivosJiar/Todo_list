<template>
<div class="todo">
    <leftdiv></leftdiv>
        <span class="top">．</span>
            <div class="rightview">
                <div class="todoListContainer">
                    <div class="heading">
                        <h2 id="title">TodoList</h2> 
                            <add-item-form v-on:reloadlist="getList()" />
                    </div>
                        <div  class="listitem">
                            <listview :items="items" v-on:reloadlist="getList() " />
                        </div>
                </div>
            </div>
</div>
</template>

<script>
import Leftdiv from './leftdiv.vue'
import addItemForm from './addItemForm.vue'
import Listview from './listview.vue'

export default {
    components:{
        addItemForm,
        Listview,
        Leftdiv,
    },
    data:function(){
        return{
            items:[],
            member:{
                username:"aaa"
            },
        }
    },
    methods:{
        getList(){
            axios.post('api/item/completed',{
                item:this.member
            })
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
.todo{
    width: 100%;
    height: 100%;
 
}
.listitem{

}
.todoListContainer{
    width:80%;
    height:60%;
    margin:10% auto auto auto;
    background:#ffffff;
    padding:15% 30% 15% 30%;
}
.heading{
    background: #e6e6e6;
    padding: 10px;
    
}
#title{
    text-align:center;
}
h1{
    color:#dcdcdc;
}
.top{
    color:#f8fafc;
}
.rightview{
  width:85%;
  margin-left:15%;
  margin-top:0;
  height:60%;
  background:#f8fafc;
    }
</style>
