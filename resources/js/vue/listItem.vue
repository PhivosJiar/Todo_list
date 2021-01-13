<template>
    <div class="item">
        <td class="Itemlist">
        <input type="checkbox" @change="updateCheck()" v-model="item.completed" />
        <span :class="[item.completed ? 'completed' : '','itemText']">{{item.name}}</span>
        </td>
        
        <td class="Itemlist">
        <span :class="[item.completed ? 'completed' : '','itemText']">{{item.username}}</span>
        </td>
        
        <td class="Itemlist" @click="IsShow()">
        <span :class="[Show.IsShow ? 'hidden' : 'show']">
        <span :class="[item.completed ? 'completed' : '','itemText']">{{item.remarks}}</span>
        <!-- <input type="text" v-model="item.username" /> -->
        </span>
        <span :class="[Show.IsShow ? 'show' : 'hidden'] ">
        <add-remark  :item="item"  v-on:itemchanged="remarkUpdate()"></add-remark>
        </span>
   
        </td>
        <td class="trash">
        <button @click="removeItem()" class="trashcan">
            <font-awesome-icon icon="trash" /> 
        </button>
        </td>
  
    </div>
</template>

<script>
import addRemark from './addRemark.vue';


export default {
  components: { addRemark },
    props: ['item'],
    data:function(){
    return{
        Show:{
            IsShow:false,
            ShowItem:true
        }
        }
    },
    methods:{
        updateCheck(){
            axios.put('api/item/'+this.item.id,{
                item: this.item
            })
            .then(response=>{
                if(response.status == 200 ){
                    this.$emit('itemchanged');
                }
            })
            .catch( error =>{
                console.log( error );
            })       
        },
        removeItem(){
            axios.delete('api/item/'+this.item.id)
            .then(response=>{
                if(response.status == 200 ){
                    this.$emit('itemchanged');
                }
            })
            .catch( error =>{
                console.log( error );
            }) 
        },
        IsShow(){
            return [this.Show.IsShow ? '' : this.Show.IsShow=true] ;
        },        
        remarkUpdate(){
            this.Show.IsShow=false;
            this.$emit('itemchanged');
        }
    }
}
</script>

<style scoped>
.completed{
    text-decoration: line-through;
    color: #999999;
}
.itemText{
    width: 100%;
    margin-left: 20px;
}
.item{
    display: flex;
    justify-content: center;
    align-items:center;
}
.trashcan{
    background: #f8fafc;
    border: none;
    color: #ff0000;
    outline: none;
}
.Itemlist{
  width: 50%;

}
tr{
    width: 100%;
    height: 100%;
}
.show{

}
.hidden{
display:none;
}

</style>