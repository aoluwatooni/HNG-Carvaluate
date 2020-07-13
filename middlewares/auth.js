const auth = () => {
    return function(req, res, next) {
        if(!req.session.auth) {
            // req.flash('error', 'Please log in to continue');
            // res.redirect('/login');
            res.json("Please log in to continue");
        }else {
            return next()
        }
    }
}

module.exports = auth
