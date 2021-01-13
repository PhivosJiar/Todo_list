<template>

<div class="todo">
    <leftdiv></leftdiv>
  <span class="top">．</span>
  <div class="rightview">

    <div class="todoListContainer">
        <div class="heading">
            <h2 id="title">TodoList</h2>
                
                <button CLASS="add" @click="IsShow()">
                    + ADD NEW
                </button><br>
               
                <span :class="[Show.IsShow ? 'show' : 'hidden'] ">
                    Enter Item Name
                    <add-item-form v-on:reloadlist="getList()" />
                </span>
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
                username:this.$route.query.userId
            },
            Show:{
                IsShow:false,
            }
        }
    },
    methods:{
        getList(){
            axios.post('api/items',{
                item:this.member
            })
            .then(response=> {
                this.items = response.data;
                this.Show.IsShow=false;
            })
            .catch(error=> {
                console.log(error);
            })
        },
        IsShow(){
        return [this.Show.IsShow ? '' : this.Show.IsShow=true];
    },   
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
    height:100%;
    margin:10% auto auto auto;
    background:#ffffff;
    padding:5% 20% 15% 20%;
}
.heading{
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
.show{

}
.hidden{
display:none;
}
.add{
    background:	 #07294a;
    width:150px;
    height: 40px;
    color:#ffffff;
    border: none;
}
</style>
