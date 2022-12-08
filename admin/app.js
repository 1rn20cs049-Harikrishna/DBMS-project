require("dotenv").config();
const express = require('express');
const app = express();

const cors = require('cors');
app.use(cors({
    origin: '*'
}));

const userRouter = require("./api/users/user.router");

app.use(express.json());
app.use(express.urlencoded({ extended: false }));


app.use("/api/users", userRouter);



// let body  =req.body;
app.post("/api",(req,res)=>{
    res.json({
        success :1,
        message:req.body
    });
});


//Handling page not found
app.use((req,res,next) =>{
 const error = new Error("NOT FOUND");
 error.status=404;
 next(error);
})

app.use((error,req,res,next) =>{
    res.status(error.status || 500);
    res.json({
        error:{
            message:error.message
        }
    })
})


app.listen(process.env.APP_PORT,()=>{
    console.log('Server started on port: ',process.env.APP_PORT);
});
