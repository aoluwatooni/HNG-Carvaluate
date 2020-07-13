const Router = require("express").Router();
const login = require("../controllers/users/login.controller");
const register = require("../controllers/users/register.controller");

Router.get("/login", login.index);
Router.post("/login", login.action);
Router.get("/register", register.index);
Router.post("/register", register.action);

module.exports = Router;

