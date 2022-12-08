const pool = require("../../config/database.js");
const uuid = require('uuid');
const user_id =  uuid.v4();
module.exports  = {
  create:(data,callBack) =>{
    pool.query(`INSERT  INTO new_users (id,name,mobile,email,password) VALUES (?,?,?,?,?)`,

     [
      uuid.v4(),
       data.name,
       data.mobile,
       data.email,
       data.password
     ],(error,results,fields) =>{
        if(error){
         return callBack(error);
        }
        return callBack(null,results);
     }

    );
  },
  getUsers: (callBack) =>{
    pool.query(`SELECT * FROM new_users `,
    [],(error,results,fields) =>{
        if(error){
           return callBack(error);
        }
        return callBack(null,results);
    })
  },
  getUserByUserId :(id,callBack) =>{
        pool.query(
            `SELECT * FROM new_users WHERE id = ?`,
            [id],
            (error,results,fields) =>{
                if(error){
                return callBack(error);
                }
                return callBack(results);
            }
        )
  },
  updateUser :(data,callBack) =>{
    pool.query(
        `UPDATE new_users SET name=?,email=?,mobile=?,password=?`,
  [
           data.name,
           data.email,
           data.mobile,
           data.password 
        ],
        (error,results,fields) =>{
            if(error){
            return callBack(error);
            }
            return callBack(results[0]);
        }

    )
  },
 deleteUser :(id,callBack) =>{
    pool.query(
        `DELETE FROM new_users WHERE id = 1`,
        // [data.id],
        [],
        (error,results,fields) =>{
            if(error){
            return callBack(error);
            }
            return callBack(null,results[0]);
        }
    )
}

};

