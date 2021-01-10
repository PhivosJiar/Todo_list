<template>
<div class="signup">
 <div class="imgcontainer">
    <img src="https://i.ibb.co/wzB7vmK/notes.png" >
    <br>
    <span>Todolist</span>
  </div>
  <div class="container">
    
    <label for="uname"><b>Username</b></label>
    <span class="err">
    {{this.Verification.err}}
    </span>
    <input type="text" placeholder="Enter Username" name="uname" required
    v-model="member.username" />

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required
    v-model="member.pwd" />
    <input type="password" placeholder="Confirm Password" name="psw" required
    v-model="member.pwdchk" />
    <button type="submit" @click="ToSignup()" >Login</button>

    
 

  </div>
</div>
</template>
<script>
export default {
     data:function(){
        return {
            member:{
                username:"",
                pwd:"",
                pwdchk:""
            },
            Verification:{
                pass:"",
                pass2:"",
                err:""
            }
        }
      },
      methods:{
        ToSignup(){
            if(this.member.username == '' || this.member.pwd == ''){
                return;
            }else if(this.member.pwd != this.member.pwdchk){
              return this.Verification.err="Password Inconsistent";
            }
        
        axios.post('api/signup',{
            item:this.member
        })
        .then(response=>{
        this.Verification.pass=response.data
        this.$router.push('/')
        })
        .catch(error =>{
            console.log(error);
            return this.Verification.err="Username Already exists";
        })   
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

.signup{
  background:#ffffff;
  height:100%;
  padding-top: 16%;
}

.err{
  float:right;
  color:#ff0000;
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
