const { isEmail, isEmpty, isLength, escape, normalizeEmail, trim } = require("validator");
const bcrypt = require("bcrypt");
const User = require("../../models/User");

module.exports = {
   index : (req, res) => {
       res.render('login');
   },
   action : (req, res) => {
       var { password, email } = req.body;
       
       if(isEmpty(password) || isEmpty(email)) {
           res.status(400);
           req.flash('error', 'All fields are required');
           res.redirect('/login');
           return;
       }
       if(!isEmail(email)) {
           res.status(400);
           req.flash('error', 'Please, Enter a valid email');
           res.redirect('/login');
           return;
       }
       if(!isLength(password, { min: 6 })) {
           res.status(400);
           req.flash('error', 'Password must be more than 5 characters');
           res.redirect('/login');
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
                      req.flash('success', 'User logged successfully');
                      res.redirect('/login');
                      return;
                   }
                   res.status(400);
                   req.flash('error', 'Invalid email and password combination');
                   res.redirect('/login');
                   return;
               })
           }else {
               res.status(404);
               req.flash('error', 'Email has not been registered with us');
               res.redirect('/login');
               return;
           }
       })
       .catch(err => {
           res.status(500);
           req.flash('error', 'A technical error occured');
           res.redirect('/login');
       });
   }
}
