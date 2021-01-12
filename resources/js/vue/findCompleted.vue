<template>
<div class="todo">
    <leftdiv></leftdiv>
        <span class="top">．</span>
            <div class="rightview">
                <div class="todoListContainer">
                    <div class="heading">
                        <h2 id="title">TodoList</h2> 
                  
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
</style>
