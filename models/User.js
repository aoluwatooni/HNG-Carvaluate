const mongoose = require("mongoose");

const User = new mongoose.Schema({
    name: {
        type: String,
        required: true
    },
    email: {
        type: String,
        required: true
    },
    password: {
        type: String,
        required: true,
    },
    createdOn:{
        type: Date
    }
})

module.exports = mongoose.model('users', User);
