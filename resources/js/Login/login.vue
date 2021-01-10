<template>
<div class="loginbg">
  <div class="imgcontainer">
    <img src="https://i.ibb.co/wzB7vmK/notes.png" >
    <br>
    <span>Todolist</span>
  </div>


  <div class="container">
      
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required
    v-model="member.username" />

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required
    v-model="member.pwd" />
    
    <button type="submit" @click="ToLogin()" >Login</button>

    <div v-for="(item,index) in Verification.pass" :key="index">
           
    <div class="item">
        <a v-bind:href="[item.username? GOTO() :'#']">a</a>
        <span >{{item.username}}</span>    
    </div>
    </div>
    
 
      <div class="container" style="background-color:#f1f1f1">
    <span class="psw"><a href="#" @click="ToSignup()">Signup </a></span>
  </div>

  </div>
</div>
</template>

<script>
import Login2 from './login2.vue';




export default {
    components:{
        Login2
    },
    data:function(){
        return {
            member:{
                username:"",
                pwd:"",
            },
            Verification:{
                pass:"",
                pass2:""
            
            }
        }
    },
    methods:{
        ToLogin(){
            if(this.member.username == '' || this.member.pwd == ''){
                return;
            }
        
        axios.post('api/login',{
            item:this.member
        })
        .then(response=>{
        this.Verification.pass=response.data
        if(this.Verification.pass != ''){
            //this.$router.push('/todo')
            this.$router.push({ path: '/todo', query: { userId: this.member.username }})
        }
        })
        .catch(error =>{
            console.log(error);
        })        

        },
        GOTO(){
           axios.get('web/todo')
            .catch(error=> {
            console.log(error);
            })
        },
        ToSignup(){
            this.$router.push('/Signup')      
        }
    }
}
</script>

<style scoped>
form {
  border: 3px solid #f1f1f1;
 
}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}


button:hover {
  opacity: 0.8;
}


.imgcontainer {
  text-align: center;
  margin: 0;
}


img.avatar {
  width: 40%;
  border-radius: 50%;
}


.container {
  padding: 16px;
}


span.psw {
  float: right;
  padding-top: 16px;
}
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>
