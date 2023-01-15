require("dotenv").config();
const axios = require('axios')
const express = require('express');
const app = express();
const bodyParser = require('body-parser');
const BlockIo = require('block_io');

const api = process.env.API;
const pin = process.env.PIN;
const block_io = new BlockIo(api);

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({
      extended: false
  }));


app.post('/address', async function (req, res) {

    //let address = await block_io.get_new_address();
    let address = await block_io.get_my_addresses(1);
    console.log(address);
    return res.send({address});

});

app.post('/balance', async function (req, res) {

    let balance = await block_io.get_balance();
    console.log(balance);
    return res.send({balance});

});

app.post('/transaction', async function (req, res) {

    let amount = req.body.amount;
    let toaddress = req.body.toaddress;

    let transaction = await block_io.prepare_transaction({ amounts: amount, to_addresses: toaddress });
    let sign = await block_io.create_and_sign_transaction(transaction,pin);
    let send = await block_io.submit_transaction(sign);
    console.log(transaction);
    // block_io.summarize_prepared_transaction({ data: PREPARE_TRANSACTION_API_RESPONSE });
    return res.send({transaction});

});

app.listen(8080, function () {
  console.log('Node app is running on port 8080');
});

module.exports = app;
