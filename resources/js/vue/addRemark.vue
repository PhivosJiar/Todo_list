<template>
    <span class="addRemark">   
        <input type="text" v-model="remark.remarks"  @keyup.enter="addItem()"/>
        <font-awesome-icon icon="pencil-alt" 
        @click="addItem()" 
        class="pencil"
        />
    </span>
    
</template>
<script>



export default {

    props:['item'],
    data:function(){
        return {
            remark:{
                remarks:"",
            }
        }
    },
    methods:{
        addItem(){
            if(this.item.name == ''){
                return;
            }

            axios.post('api/item/remarks',{
                item: {remarks:this.remark.remarks , itemid:this.item.id}          
            })
            .then( response => {
                if(response.status==200){
                    this.item.name="";  
                    this.$emit('itemchanged');
                }
            })
            .catch(error =>{
                console.log(error);
            })
        }
    }
}
</script>
<style scoped>
.addRemark{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 80%;
    float: left;
}

input{
    background: #f8fafc;
    border: 0px;
    outline: none;
    padding: 5px;
    margin-right: 10px;
    width: 100% ;
    border-bottom: 1px solid;
    border-color: #07294a;
}

.plus{
    font-size: 20px;
}
.pencil{
    float: right;
    background: #f8fafc;
    border: none;
    color: 	#00DD00;
}
</style>