const { isEmail, isEmpty, isLength, escape, normalizeEmail, trim } = require("validator");
const bcrypt = require("bcrypt");
const User = require("../../models/User");

module.exports = {
    index : (req, res) => {
        res.render('register');
    },
    action : (req, res) => {
        var { name, password, email } = req.body;

        if(isEmpty(name) || isEmpty(password) || isEmpty(email)) {
            res.status(400);
            req.flash('error', 'All fields are required');
            res.redirect('/register');
            return;
        }
        if(!isEmail(email)) {
            res.status(400);
            req.flash('error', 'Please, Enter a valid email');
            res.redirect('/register');
            return;
        }
        if(!isLength(password, { min: 6 })) {
            res.status(400);
            req.flash('error', 'Password must be more than 5 characters');
            res.redirect('/register');
            return;
        }
        name = escape(trim(name));
        email = escape(trim(normalizeEmail(email)));
        password = escape(trim(password));

        User.findOne({ email: email})
        .then(user => {
            if(user) {
                res.status(400);
                req.flash('error', 'Email has already been registered');
                res.redirect('/register');
                return;
            }else {
                bcrypt.hash(password, 10)
                .then(password => {
                    let newUser = new User({ name, email, password });

                    newUser.save()
                    .then(user => {
                        req.session.auth = true;
                        req.session.email = user.email;
                        res.status(200);
                        req.flash('success', 'User registered successfully');
                        res.redirect('/register');
                    })
                    .catch(err => {
                        res.status(500);
                        req.flash('error', 'A technical error occured');
                        res.redirect('/register');
                    })
                })
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
