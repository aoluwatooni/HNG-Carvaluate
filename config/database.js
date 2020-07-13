const mongoose = require("mongoose");

mongoose.connect(process.env.MONGO_URI, { useNewUrlParser: true, useUnifiedTopology: true }) .then(() => {
        console.log(`mongodb connection established`);
    })
    .catch((err) => {
        console.log(`Cannot establish mongodb connection: ${err.stack}`);
    })
