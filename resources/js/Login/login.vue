<template>
<div>
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
        <a v-bind:href="[item.username? 'https://ithelp.ithome.com.tw/articles/10204943' :'#']">a</a>
        <span>{{item.username}}</span>    
    </div>
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
                pass:""
            
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
   
  
        })
        .catch(error =>{
            console.log(error);
        })        

        }
        
    }
}
</script>

<style scoped>
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
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
