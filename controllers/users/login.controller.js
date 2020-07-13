const { isEmail, isEmpty, isLength, escape, normalizeEmail, trim } = require("validator");
const bcrypt = require("bcrypt");
const User = require("../../models/User");

module.exports = {
   index : () => {
       res.json('login');
   },
   action : (req, res) => {
       var { password, email } = req.body;
       
       if(isEmpty(password) || isEmpty(email)) {
           res.status(400);
           // req.flash('error', 'All fields are required');
           // res.redirect('/register');
           res.json("All fields are required");
           return;
       }
       if(!isEmail(email)) {
           res.status(400);
           // req.flash('error', 'Please, Enter a valid email');
           // res.redirect('/login');
           res.json("Please, Enter a valid email");
           return;
       }
       if(!isLength(password, { min: 6 })) {
           res.status(400);
           // req.flash('error', 'Password must be more than 5 characters');
           // res.redirect('/login');
           res.json("Password must be more than 5 characters");
           return;
       }
       email = escape(trim(normalizeEmail(email)));
       password = escape(trim(password));

       User.findOne({ email: email})
       .then(user => {
           if(user) {
               bcrypt.compare(password, user.password)
               .then((result) => {
                   if(result) {
                      req.session.auth = true;
                      req.session.email = user.email;
                      res.status(200);
                      // req.flash('success', 'User logged successfully');
                      // res.redirect('/login');
                      res.json(req.session);
                      return;
                   }
                   res.status(400);
                   // req.flash('error', 'Invalid email and password combination');
                   // res.redirect('/login');
                   res.json("Invalid email and password combination");
                   return;
               })
           }else {
               res.status(404);
               // req.flash('error', 'Email has already been registered');
               // res.redirect('/login');
               res.json("User does not exist");
               return;
           }
       })
       .catch(err => {
           res.status(500);
           // req.flash('error', 'A technical error occured');
           // res.redirect('/register');
           res.json("A technical error occured");
       });
   }
}
