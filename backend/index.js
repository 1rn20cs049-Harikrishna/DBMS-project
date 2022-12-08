const express=require('express')
const app=express();
 
// const db=require('./source/databaseConfig/database.config');
 
 
// db.authenticate().then(()=>console.log("Database is connected"))
// .catch(err=>console.log("Error: "+err))
 
app.use(express.json())
app.use(express.urlencoded({extended:false}))
// const userRoutes=require('./src/routes/user.routes')
// app.use('/api',userRoutes)
 
let data = []
app.post('/api',(req,res) =>{
//     res.write("IM not okay");
   data.push(req.body);
//    res.send('hello im back');
res.status(200);
// data = req.body;
// data = res.status;
res.send(data)
// res.write('hiiiiiiiiiiiiiiiiiiiiiiiiiiiii')
   res.end('OK'); 
})

const PORT=8000;
app.listen(PORT,()=>{
    console.log(`Server is running on port ${PORT}`)
})