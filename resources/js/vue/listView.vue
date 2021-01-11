<template>
    <div>
        <div class="item">
        
        <td class="Itemlist" >
            <input type="checkbox" class="hidden" />
            <span class=" itemText">ITEM</span>
        </td>
        <td class="Itemlist">
        <span>UserName</span>
        </td>
        </div>

        <div v-for="(item,index) in items" :key="index">
            
        <list-item :item="item" class="item" v-on:itemchanged="$emit('reloadlist') "/>
            
        </div>
    </div>
</template>

<script>


import ListItem from './listItem.vue'


export default {
    props:['items'],
    components:{
        ListItem
    }
}
</script>

<style scoped>
.item{
    background: #e6e6e6;
    padding: 5px;
    margin-top: 5px;
    display: flex;
    justify-content: center;
    align-items:center;
}

.Itemlist{
  width: 70%;
}

.itemText{
    width: 100%;
    margin-left: 20px;
}

.hidden{
    visibility:hidden;
}
</style>
